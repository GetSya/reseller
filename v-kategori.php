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
                                            <th>Nama Kategori</th>
                                            <th>Singkat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
    include 'koneksi.php';
    $query = "SELECT * FROM kategori";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Perulangan untuk setiap baris data
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_ktg']) . "</td>";
            echo "<td>" . htmlspecialchars($row['singkat']) . "</td>";
            echo "<td><a href='lib/delete-ktg.php?id=" . $row['id'] . "'>Hapus</a>";
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