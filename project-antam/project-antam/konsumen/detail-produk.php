<?php

 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo '<script language="javascript">alert("Username atau password tidak sesuai!"); document.location="../index.php";</script>';
    }
  }
  include 'akses.php';

    include('../class-produk/emas.php');
    $obj = new emas();
    $id_produk = $_GET['id'];
    if(! is_null($id_produk))
    {
        $data = $obj->getId($id_produk);
        $row =  mysqli_fetch_array($data);
        $harga = $row['harga_jual'];
        $pajak = $obj->ppn($harga);

    }
    else
    {
        header('location:index.php');
    }

    include('../class-transaksi/pemesanan.php');
    $pesan = new pemesanan();
    $user = $_SESSION['user'];
    $psn = $pesan->idKonsumen($user);
    

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Konsumen</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css-utama.css" >
  

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/detail-produk.css" rel="stylesheet">

    
    <!-- css kontak kami -->
 

    <!-- Required meta tags -->

    <title>HALAMAN KONSUMEN</title>
      <style>
        body {
              margin-top: 65px;
              font-family: Cambria Math;
          }
          .footer-column .nav-item .nav-link {
          padding: 0.1rem 0;
          }
      </style>

  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        <a class="navbar-brand font-weight-bold" style=" color : #DAA520;" href="?page=beranda">LOGAM MULIA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=beranda">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produk
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?page=produk-emas">Emas Murni</a>
                <a class="dropdown-item" href="index.php?page=produk-perak">Perak Murni</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?page=produk-semua">Tampilkan Semua</a>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="?page=beranda">Riwayat Pesanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=kontak-kami">Kontak Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=tentang">Tentang</a>
            </li>
            <div class="icon mt-2">
            <i class="fas fa-cart-plus mr-3"></i>
            </div>
            <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class=""><?php echo $_SESSION['user'];?></span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
            </li>
            
            </ul>
        </div>
        </nav>
    </div>
    
    <div class="container-fluid">
    <div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="../img/upload/<?php echo $row["gambar"]; ?>" /></div>
						</div>
						
                    </div>
                    
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $row["nama_produk"]; ?></h3>
						<p class="product-description">PPh 22, Pajak Penghasilan Pasal 22 atas emas batangan
                        Sesuai dengan PMK No 34/PMK.10/2017, pembelian emas batangan dikenakan PPh 22 sebesar 0,45% (untuk pemegang NPWP dan 0,9% untuk non NPWP). Setiap pembelian emas batangan disertai dengan bukti potong PPh 22.</p>
                        <div class="row">
                                <h5 class="price col-sm-5"><b>current price</b></h5>
                                <h5 class="price col-sm-7" style="text-align: left;"><span>RP. <?php echo number_format($row['harga_jual']) ?></span></h5>
                        </div>
                        
                        <?php 
                        $ppn = $obj->getPPN();
                         ?>
                        <div class="row">
                            <h5 class="price col-sm-5"><b>PPN </b></h5>
                            <h5 class="price col-sm-7" style="text-align: left;"><span>RP. <?php echo number_format($ppn); ?></span></h5>
                        </div>
                        <div class="row">
                            <h6 class="price col-sm-5"><b>Stock </b></h6>
                            <h6 class="price col-sm-7" style="text-align: left;"><?php echo $row["stock"]; ?> Pcs.</h6>
                        </div>
                        <form method="post" action="../class-transaksi/operasi-pemesanan.php?action=add">
                            <div class="form-group row">
                                <input type="hidden" name="id_produk" value="<?php echo $row["id_produk"]; ?>">
                                <input type="hidden" name="stock" value="<?php echo $row["stock"]; ?>">
                                <input type="hidden" name="id_konsumen" value="<?php echo $pesan->getIdKonsumen(); ?>">
                                <input type="hidden" name="no_reference" value="<?php echo $pesan->getNo_reference(); ?>REF<?php echo filter_var($pesan->getIdKonsumen(), FILTER_SANITIZE_NUMBER_INT); ?>">
                                <input type="hidden" name="harga_jual" value="<?php echo $row["harga_jual"]; ?>">
                                <input type="hidden" name="ppn" value="<?php echo $ppn; ?>">
                                <label for="inputPassword" class="col-sm-5 col-form-label"><b>JUMLAH</b></label>
                                <div class="col-sm-3">
                                <input type="number" class="form-control" name="jumlah" id="jumlah" value="1">
                                </div> <p><br></p>
                            </div>
                                <div class="action">
                                <button class="btn btn-primary" style="height: 60px; font-weight: bold;" type="button"  onclick="window.location.href='index.php?page=produk-emas'">CANCEL</button>
							                  <button type="submit" class="add-to-cart btn btn-default" >add to cart</button>
						                  
                            </div>
                        </form>

					</div>
				</div>
			</div>
		</div>
    </div>
    <br>
        <?php
            if(@$_GET['page'] == 'beranda') {
            header('beranda.php');
            }
            elseif(@$_GET['page'] == 'tentang') {
              include "tentang.php";
            }
           
        ?>
    </div>
    <!-- /.container-fluid -->
                    


<!-- Footer -->
<footer class="bg-dark text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->

      <div class="col-lg-3 col-md-4 footer-column">
        <h5 class="text-uppercase text-light">Produk dan Layanan</h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=produk-emas">Beli Emas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=produk-perak">Beli Perak</a>
          </li>
        </ul>
      </div>


      <div class="col-lg-3 col-md-4 footer-column">
        <h5 class="text-uppercase text-light">Informasi</h5>
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=profile">Akun Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=kontak-kami">Kontak Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=tentang">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=list-artikel">Berita dan Promo</a>
          </li>
        </ul>
      </div>


      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-4 footer-column">
        <h5 class="text-uppercase text-light">Kontak</h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-light" href="mailto:corsec@antam.com"><i class="fas fa-envelope-square"></i> corsec@antam.com</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="tel://08041888888"><i class="fas fa-phone"></i> 0804-1-888-888</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="tel://08217891224"><i class="fas fa-phone"></i> +(62-21) 789 1224</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 text-light">Ikuti Kami</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://web.facebook.com/OfficialAntam/?_rdc=1&_rdr" class="text-light"> <h3 class="text-uppercase mb-0"><i class="fab fa-facebook-square"></i></h3> </a>
          </li>
          <li>
            <a href="https://twitter.com/OfficialAntam?lang=en" class="text-light"> <h3 class="text-uppercase mb-0"><i class="fab fa-twitter-square"></i></h3> </a>
          </li>
          <li>
            <a href="https://www.instagram.com/official.antam/" class="text-light"> <h3 class="text-uppercase mb-0"><i class="fab fa-instagram-square"></i></h3> </a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UCJDcDrZZ8kRfusLXNf6cAYg" class="text-light"> <h3 class="text-uppercase mb-0"><i class="fab fa-youtube-square"></i></h3> </a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 text-light" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright:
    <a class="text-light" href="#">Nada Ika Sari</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

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
                    <a class="btn btn-primary" href="../login-register/logout-konsumen.php">Logout</a>
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
























