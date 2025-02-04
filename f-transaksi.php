<?php include "tampilan/side.php"?>
<?php include "tampilan/topbar.php"?>

<!-- Begin Page Content -->
<div class="container-fluid">
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Transaksi</h6>
        </div>
        <div class="card-body">
            <form action="lib/transaksi.php" method="POST">
                <div class="mb-3">
                    <label for="nama_pembeli">Nama Pelanggan</label>
                    <input type="text" name="nama_pembeli" class="form-control" placeholder="Masukkan Nama Pelanggan" required>
                </div>

                <div class="mb-3">
                    <label for="username_app">Username Aplikasi</label>
                    <input type="text" name="username_app" class="form-control" placeholder="Masukkan Username Aplikasi" required>
                </div>
                <div class="mb-3">
                    <label for="username_app">Link</label>
                    <input type="text" name="link" class="form-control" placeholder="Masukkan Link ( Opsional )">
                </div>

                <div class="mb-3">
                    <label for="item_dibeli">Pilih Item</label>
                    <select name="item_dibeli" class="form-control" required>
                        <option value="">-- Pilih Item --</option>
                        <?php
                        include "koneksi.php";
                        $query = "SELECT * FROM item";
                        $result = $conn->query($query);
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id_item'] . "'>" . $row['nama_item'] . " - "  . $row['kategori_item'] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" placeholder="Masukkan Jumlah" min="1" required>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success"><i class="fas fa-check-double"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php include "tampilan/footer.php"?>
