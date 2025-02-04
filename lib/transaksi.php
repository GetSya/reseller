<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_transaksi = uniqid();
    $item_dibeli = $_POST['item_dibeli'];
    $jumlah = (int) $_POST['jumlah']; 
    $username_app = $_POST['username_app'];
    $link = $_POST['link'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $tanggal_transaksi = date('Y-m-d');

    $sql = "SELECT harga_item FROM item WHERE id_item = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $item_dibeli);
    $stmt->execute();
    $stmt->bind_result($harga_item);
    
    if (!$stmt->fetch()) {
        die("Item tidak ditemukan.");
    }
    $stmt->close();

    $total_harga = (float) $harga_item * $jumlah; 

    $sql = "INSERT INTO transaksi (id_transaksi, item_dibeli, jumlah, username_app, link, nama_pembeli, total_harga, tanggal_transaksi) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisssds", $id_transaksi, $item_dibeli, $jumlah, $username_app, $link, $nama_pembeli, $total_harga, $tanggal_transaksi);

    if ($stmt->execute()) {
        header("Location: ../v-transaksi.php");
        exit;
    } else {
        die("Gagal menambahkan transaksi: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
