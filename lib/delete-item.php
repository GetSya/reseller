
<?php
include '../koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM item WHERE id_item=$id");
    header("Location: ../v-item.php");
}
?>