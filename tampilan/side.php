<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Laporan - XiamoStore</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">XiamoStore</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider">
            
            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="./f-tambah-item.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Tambah Item</span></a>
                </li>
                
                <!-- Nav Item - Tables -->
                <li class="nav-item active">
                    <a class="nav-link" href="v-item.php">
                        <i class="fas fa-box"></i>
                        <span>Daftar Item</span></a>
                    </li>
                    <!-- Nav Item - Tables -->
                    <li class="nav-item active">
                        <a class="nav-link" href="./f-tambah-ktg.php">
                            <i class="fas fa-bookmark"></i>
                            <span>Tambah Kategori</span></a>
                        </li>
                        <!-- Nav Item - Tables -->
                        <li class="nav-item active">
                            <a class="nav-link" href="./v-kategori.php">
                                <i class="fas fa-chart-line"></i>
                                <span>List Kategori</span></a>
                            </li> <div class="sidebar-heading">
                                Transaksi
                            </div>
                            
                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item active">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                    <span>Penjualan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Penjualan Kasir</h6>
                        <a class="collapse-item" href="./v-transaksi.php">Daftar Transaksi</a>
                        <a class="collapse-item" href="./f-transaksi.php">Tambah Transaksi</a>
                    </div>
                </div>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            

        </ul>
        <!-- End of Sidebar -->