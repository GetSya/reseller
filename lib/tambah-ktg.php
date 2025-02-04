<?php
include '../koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_ktg = $_POST['nama_ktg'];
    $singkat = $_POST['singkat'];
    $sql = "INSERT INTO kategori (nama_ktg, singkat) VALUES ('$nama_ktg', '$singkat')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../v-kategori.php");
    } else {
        echo "<script>alert('gagal menambahkan item : ')</script>" . $conn->error;
    }
}

?>?>