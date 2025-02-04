<?php
include '../koneksi.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM item WHERE id_item=$id")->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_item = $_POST['nama_item'];
    $harga_item = $_POST['harga_item'];
    $kategori_item = $_POST['kategori_item'];
    $conn->query("UPDATE item SET nama_item='$nama_item', harga_item='$harga_item', kategori_item='$kategori_item' WHERE id_item=$id");
    header("Location: ../v-item.php");
}
?>