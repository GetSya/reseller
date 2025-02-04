<?php include "tampilan/side.php"?>
<?php include "tampilan/topbar.php"?>
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Item</h6>
                                </div>
                                <div class="card-body">
                                    <form action="lib/tambah-item.php" method="POST">
                                        <div class="form-group">
                                        <div class="mb-3"><label for="exampleFormControlInput1">ID</label>
                                        <?php
                                        $random = rand(111111111, 999999999);
                                        echo "<input class='form-control' name='id_item' id='exampleFormControlInput1' readonly value='$random' type='text' placeholder='$random'></div>";
                                        ?>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1">Nama Item</label>
                                        <input class="form-control" name="nama_item" id="exampleFormControlInput1" type="text" placeholder="Masukkan Nama Item"></div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1">Kategori Item</label>
                                        <select name="kategori_item" class="form-control" id="">
                                            <option value="" disabled>PILIH</option>
                                            <?php 
                                            include 'koneksi.php';
                                            $query = "SELECT nama_ktg FROM kategori";
                                            $result = $conn->query($query);
                                            foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
                                                echo "<option value='" . htmlspecialchars($row['nama_ktg']) . "'>" . htmlspecialchars($row['nama_ktg']) . "</option>";
                                            }
                                            ?>

                                        </select>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1">Harga Item</label>
                                        <input class="form-control" name="harga_item" id="exampleFormControlInput1" type="number" placeholder="Masukkan Harganya"></div>
                                        <br>
                                        <button type="submit" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;Tambah</button>
                                        </div>
                                    </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.contener -->
                                
                            </div>
            <!-- ending konten -->
<?php include "tampilan/footer.php"?>