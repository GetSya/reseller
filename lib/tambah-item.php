<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_item = $_POST['id_item'];
    $nama_item = $_POST['nama_item'];
    $harga_item = $_POST['harga_item'];
    $kategori_item = $_POST['kategori_item'];
    $tanggal_dibuat = date('Y-m-d');
    $sql = "INSERT INTO item (id_item, nama_item, harga_item, tanggal_dibuat, kategori_item) VALUES ('$id_item', '$nama_item', '$harga_item', '$tanggal_dibuat', '$kategori_item')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../v-item.php");
    } else {
        echo "<script>alert('gagal menambahkan item : ')</script>" . $conn->error;
    }
}

?>?>