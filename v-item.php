<?php include "tampilan/side.php"?>
<?php include "tampilan/topbar.php"?>
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    
                                        <!-- tambah elemen -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Item</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
    include 'koneksi.php';
    $query = "SELECT * FROM item";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Perulangan untuk setiap baris data
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id_item']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_item']) . "</td>";
            echo "<td>Rp" . number_format(htmlspecialchars($row['harga_item']), 0, ',', '.') . "</td>";
            echo "<td>" . htmlspecialchars($row['kategori_item']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tanggal_dibuat']) . "</td>";
            echo "<td><a href='f-edit-item.php?id=" . $row['id_item'] . "'>Edit</a>";
            echo "<td><a href='lib/delete-item.php?id=" . $row['id_item'] . "'>Hapus</a>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
    }
    ?>
                                    </tbody>
                                </table>
                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.container-fluid -->
                                
                            </div>
            <!-- End of Main Content -->
<?php include "tampilan/footer.php"?>