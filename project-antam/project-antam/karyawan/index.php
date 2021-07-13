<?php

 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo '<script language="javascript">alert("Username atau password tidak sesuai!"); document.location="../login-register/login-karyawan.php";</script>';
    }
  }
  include 'akses.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Karyawan</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                
                </div>
                <div class="sidebar-brand-text mx-3">PT ANTAM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="?page=dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Stock Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-cube"></i>
                    <span>Stock Penyimpanan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?page=data-emas">Emas</a>
                        <a class="collapse-item" href="?page=data-perak">Perak</a>
                        <a class="collapse-item" href="?page=data-BB">Bahan Baku</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - harga Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-edit"></i>
                    <span>Update Harga</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?page=emas-update ">Harga Emas</a>
                        <a class="collapse-item" href="?page=perak-update">Harga Perak</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - data Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Dokumentasi</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?page=pesanan-selesai">Data Pesanan Selesai</a>
                        <a class="collapse-item" href="?page=data-pengeluaran">Data Pengeluaran</a>
                        <a class="collapse-item" href="?page=data-vendor">Data Vendor</a>
                        <a class="collapse-item" href="?page=produksi">Laporan Produksi</a>
                        <a class="collapse-item" href="?page=laporan-keuangan">Laporan Keuangan</a>                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - berita -->
            <li class="nav-item">
                <a class="nav-link" href="?page=data-artikel">
                <i class="far fa-newspaper"></i>
                    <span>Artikel</span></a>
            </li>

            <!-- Nav Item - karyawan -->
            <li class="nav-item">
                <a class="nav-link" href="?page=data-karyawan">
                <i class="fas fa-users"></i>
                    <span>Data Karyawan</span></a>
            </li>

            <!-- Nav Item - konsumen -->
            <li class="nav-item">
                <a class="nav-link" href="?page=data-konsumen">
                <i class="fas fa-crown"></i>
                    <span>Data Konsumen</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <?php
                            include '../class-transaksi/pembayaran.php';
                            $pemb = new pembayaran();
                            $getp = $pemb->showData();
                            $getH = $pemb->jumlah();

                        ?>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"> <?php echo $pemb->getHitung(); ?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <?php
                                    while ($rows = mysqli_fetch_array($getp)) {  

                                ?>
                                <a class="dropdown-item d-flex align-items-center" href="konfir-pembayaran.php?id=<?php echo $rows['no_payment'] ?>">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-danger">
                                        <i class="fas fa-exclamation"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"> <?php echo $rows['tanggal']?> </div>
                                        <span class="font-weight-bold">Menunggu Konfirmasi <?php echo $rows['no_reference']?> </span>
                                    </div>
                                </a>
                                <?php } ?>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <?php
                            include '../class-contactus/contact.php';
                            $obj = new contact();
                            $get = $obj->getNama();
                            $obj->jumlah();
                        ?>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <?php
                                    $resultGet = $obj->showData();
                                ?>
                                <span class="badge badge-danger badge-counter"><?php echo $obj->getCount() ?></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <?php
                                    while ($row = mysqli_fetch_array($resultGet)) {  
                                ?>
                                <a class="dropdown-item d-flex align-items-center" href="../class-contactus/operasi.php?action=getid&id=<?php echo $row['id']?>">
                                    <div class="col-sm-2">
                                        <i class="fas fa-user"></i>
                                        
                                    </div>
                                    <div class=" col-sm-10 font-weight-bold">
                                        <div class="text-truncate"> <?php 
                                        $kalimat = $row["pesan"];
                                        $sub_kalimat = substr($kalimat,0,40);
                                        echo $sub_kalimat ?> </div>
                                        <div class="small text-gray-500"> <?php echo $row['nama'] ?> </div>
                                    </div>
                                </a>
                                <?php
                                    }
                                ?>
                                <a class="dropdown-item text-center small text-gray-500" href="?page=showAll-message">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];?></span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="?page=profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="confirmation dropdown-item" href="../login-register/logout-karyawan.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                <script type="text/javascript">
                                </script>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                
                    <?php
                    

                        if(@$_GET['page'] == 'dashboard'){
                            include "dashboard.php";
                        }
                        else if(@$_GET['page'] == 'data-emas'){
                            include "data-emas.php";
                        }
                        else if(@$_GET['page'] == 'data-karyawan'){
                            include "data-karyawan.php";
                        }
                        else if(@$_GET['page'] == 'penambahan_karyawan'){
                            include "penambahan_karyawan.php";
                        }
                        else if(@$_GET['page'] == 'data-vendor'){
                            include "data-vendor.php";
                        }
                        else if(@$_GET['page'] == 'penambahan_vendor'){
                            include "penambahan_vendor.php";
                        }
                        else if(@$_GET['page'] == 'update_vendor?id='){
                            include "update_vendor.php";
                        }
                        else if(@$_GET['page'] == 'data-pengeluaran'){
                            include "data-pengeluaran.php";
                        }
                        else if(@$_GET['page'] == 'data-BB'){
                            include "data-BB.php";
                        }
                        else if(@$_GET['page'] == 'penambahan_BB'){
                            include "penambahan_BB.php";
                        }
                        else if(@$_GET['page'] == 'data-artikel'){
                            include "data-artikel.php";
                        }
                        else if(@$_GET['page'] == 'penambahan_artikel'){
                            include "penambahan_artikel.php";
                        }
                        else if(@$_GET['page'] == 'update_artikel'){
                            include "update_artikel.php";
                        }
                        else if(@$_GET['page'] == 'data-konsumen'){
                            include "data-konsumen.php";
                        }
                        else if(@$_GET['page'] == 'produksi'){
                            include "data-LP.php";
                        }
                        else if(@$_GET['page'] == 'penambahan_produksi'){
                            include "penambahan_produksi.php";
                        }
                        else if(@$_GET['page'] == 'tambah-emas'){
                            include "penambahan_emas.php";
                        }
                        else if(@$_GET['page'] == 'data-perak'){
                            include "data-perak.php";
                        }
                        else if(@$_GET['page'] == 'tambah-perak'){
                            include "penambahan_perak.php";
                        }
                        else if(@$_GET['page'] == 'emas-update'){
                            include "update-emas.php";
                        }
                        else if(@$_GET['page'] == 'perak-update'){
                            include "update-perak.php";
                        }
                        else if(@$_GET['page'] == 'penambahan_pengeluaran'){
                            include "penambahan_pengeluaran.php";
                        }
                        else if(@$_GET['page'] == 'profile'){
                            include "profile-karyawan.php";
                        }
                        else if(@$_GET['page'] == 'pesan'){
                            include "keluhan-konsumen.php";
                        }
                        else if(@$_GET['page'] == 'pesanan-selesai'){
                            include "data-pesanan-selesai.php";
                        }
                        else if(@$_GET['page'] == 'showAll-message'){
                            include "data-pesan.php";
                        }
                        else if(@$_GET['page'] == 'laporan-keuangan'){
                            include "laporan-keuangan.php";
                        }

                    ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nada Ika Sari 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../login-register/logout-karyawan.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="../js/demo/datatables-demo.js"></script>
    
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>