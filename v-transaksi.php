<?php include "tampilan/side.php"; ?>
<?php include "tampilan/topbar.php"; ?>
<?php include "koneksi.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Transaksi</th>
                            <th>Nama Pembeli</th>
                            <th>Username App</th>
                            <th>Link</th>
                            <th>Item Dibeli</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Tanggal Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "SELECT t.id_transaksi, t.nama_pembeli, t.username_app, t.link, i.nama_item, i.kategori_item, t.jumlah, t.total_harga, t.tanggal_transaksi 
                                FROM transaksi t 
                                JOIN item i ON t.item_dibeli = i.id_item 
                                ORDER BY t.tanggal_transaksi DESC";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['id_transaksi'] . "</td>";
                                echo "<td>" . $row['nama_pembeli'] . "</td>";
                                echo "<td>" . $row['username_app'] . "</td>";
                                echo "<td><a href='" . $row['link'] . "' target='_blank'>Click Here</a></td>";
                                echo "<td>" . $row['nama_item'] . " - " . $row['kategori_item'] . "</td>";
                                echo "<td>" . $row['jumlah'] . "</td>";
                                echo "<td>Rp " . number_format($row['total_harga'], 0, ',', '.') . "</td>";
                                echo "<td>" . $row['tanggal_transaksi'] . "</td>";
                               /* echo "<td>
                                        <a href='edit_transaksi.php?id=" . $row['id_transaksi'] . "' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
                                      </td>";
                                echo "</tr>";*/
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>Tidak ada transaksi</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php include "tampilan/footer.php"; ?>
