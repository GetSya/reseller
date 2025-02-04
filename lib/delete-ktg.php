
<?php
include '../koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM kategori WHERE id=$id");
    header("Location: ../v-kategori.php");
}
?>