<?php include "tampilan/side.php"?>
<?php include "tampilan/topbar.php"?>
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori</h6>
                                </div>
                                <div class="card-body">
                                    <form action="lib/tambah-ktg.php" method="POST">
                                       <div class="mb-3">
                                            <label for="">Nama Kategori</label>
                                            <input type="text" name="nama_ktg" class="form-control" placeholder="Masukan Nama Kategori">
                                        </div>
                                       <div class="mb-3">
                                            <label for="">Singkat</label>
                                            <input type="text" class="form-control" name="singkat" placeholder="Singkat. Example : IG ( INSTAGRAM )">
                                        </div>
                                        <div class="mb-3">
                                            <br>
                                            <button type="submit" class="btn btn-success"><i class="fas fa-check-double"></i> Tambah</button>
                                        </div>
                                    </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.container-fluid -->
                                
                            </div>
            <!-- End of Main Content -->
<?php include "tampilan/footer.php"?>