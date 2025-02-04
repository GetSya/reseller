<?php include "tampilan/side.php"?>
<?php include "tampilan/topbar.php"?>
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Edit Item</h6>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $id = $_GET['id'];
                                    $result = $conn->query("SELECT * FROM item WHERE id_item=$id")->fetch_assoc();
                                    ?>
                                    <form method="POST" action="lib/edit-item.php?id=<?=$id?>">
                                        <div class="form-group">
                                        <div class="mb-3"><label for="exampleFormControlInput1">Nama Item</label>
                                        <input class="form-control" name="nama_item" id="exampleFormControlInput1" type="text" value="<?= $result['nama_item'] ?>" placeholder="Masukkan Nama Item"></div>
                                        <div class="mb-3"><label for="exampleFormControlInput1">Harga Item</label>
                                        <input class="form-control" name="harga_item" id="exampleFormControlInput1" type="number" value="<?= $result['harga_item'] ?>" placeholder="Masukkan Harganya"></div>
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
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-success"><i class="fas fa-pen"></i> Edit</button>
                                        <a href="v-item.php" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
                                        </div>
                                    </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.container-fluid -->
                                
                            </div>
            <!-- End of Main Content -->
<?php include "tampilan/footer.php"?>