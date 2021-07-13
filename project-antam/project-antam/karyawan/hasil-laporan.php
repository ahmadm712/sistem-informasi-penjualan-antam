<?php

    include('../class-transaksi/pemesanan.php');
    $obj = new pemesanan();
    $start = $_GET['start'];
    $end = $_GET['end'];
    $result=$obj->keuangan($start, $end);
    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;
    $e = 0;
    while($data = mysqli_fetch_assoc($result)) {
        $a += $data['harga_awal'];
        $b += $data['harga_jual_pertama'];
        $c += $data['ppn'];
        $d = $b - $a;
        $e = $d - $c;

    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laporan Keuangan</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
 

    
    <!-- css kontak kami -->
 

    <!-- Required meta tags -->

      <style>
        body {
            margin-top: 45px;
              font-family: Arial;
          }
          .footer-column .nav-item .nav-link {
          padding: 0.1rem 0;
          }
          hr { color: black;}
      </style>

  </head>
  <body>

    <div class="container-fluid">
    <div class="container"><br>
        <center><div class="judul">
            <h6 style="color: black; font-weight:bold;">PT ANEKA TAMBANG TBK</h6>
            <h6 style="color: black; font-weight:bold;">DAN ENTITAS ANAK/<i>AND SUBSIDIARIES</i></h6>
            <br>
            <h6 style="color: black; font-weight:bold;">Lampiran 1/1 <i>Schedule</i></h6>
        </div><br>
        </center>
        <div class="row">
            <div class="col-md-6">
            <h6 style="color: black; font-weight:bold;">LAPORAN LABA RUGI DAN PENGHASILAN</h6> 
            <h6 style="color: black; font-weight:bold;">KOMPREHENSIF LAIN KONSOLIDASIAN INTERIM</h6> 
            <h6 style="color: black; font-weight:bold;">UNTUK PERIODE YANG BERAKHIR</h6> 
            <h6 style="color: black; font-weight:bold;">PADA <?php  echo date('d F Y',strtotime($start))?> DAN <?php echo date('d F Y',strtotime($end))?> </h6> 
            <h6 style="color: black;">(Disajikan dalam ribuan Rupiah, kecuali dinyatakan lain)</h6> <br>
            </div>

            <div class="col-md-6">
            <h6 style="text-align: right; color: black; font-weight:bold;"><i>INTERIM COSOLIDATED STATEMENT OF</i></h6> 
            <h6 style="text-align: right; color: black; font-weight:bold;"><i>PROFIT OR LOSS AND OTHER COMPREHENSIVE</i></h6> 
            <h6 style="text-align: right; color: black; font-weight:bold;"><i>INCOME FOR PERIODS</i></h6> 
            <h6 style="text-align: right; color: black; font-weight:bold;"><i>ENDED <?php  echo date('d F Y',strtotime($start))?> AND <?php echo date('d F Y',strtotime($end))?></i></h6> 
            <h6 style="text-align: right; color: black; "><i>(Expressed in thousands of Rupiah, unless otherwise stated)</i></h6> 
            </div>
        </div>

        <div><center>
        <h6 style="color: black; font-weight:bold;">HASIL/<i>RESULT</i> <hr color="black" style="width: 80px; "></h6> 
        </center></div>

        <div class="row">
            <div class="col-md-4">
            <h6 style="color: black; font-weight:bold;">PENJUALAN</h6> 
            <h6 style="color: black; font-weight:bold;">BEBAN POKOK PENJUALAN</h6> 
            <h6 style="color: black; font-weight:bold;">LABA KOTOR</h6> 
            <h6 style="color: black; font-weight:bold;">PPH <?php    ?></h6> 
            <h6 style="color: black; font-weight:bold;">PENGHASILAN/(RUGI) KOMPREHENSIF SETELAH PAJAK</h6> 
            </div>

            <div class="col-md-4">
            <h6 style="text-align: center; color: black; font-weight:bold;"> <?php echo number_format($b)   ?></h6> 
            <h6 style="text-align: center; color: black; font-weight:bold;"> <?php  echo number_format($a)  ?> </h6> 
            <h6 style="text-align: center; color: black; font-weight:bold;"> <?php echo number_format($d)   ?></h6> 
            <h6 style="text-align: center; color: black; font-weight:bold;"> <?php  echo number_format($c)  ?></h6> 
            <h6 style="text-align: center; color: black; font-weight:bold;"><?php   echo number_format($e) ?></h6> 
            </div>

            <div class="col-md-4">
            <h6 style="text-align: right; color: black; font-weight:bold;"><i>SALES</i></h6> 
            <h6 style="text-align: right; color: black; font-weight:bold;"><i>COST OF GOOD SOLD</i></h6> 
            <h6 style="text-align: right; color: black; font-weight:bold;"><i>GROSS PROFIT</i></h6> 
            <h6 style="text-align: right; color: black; font-weight:bold;"><i>TAX <?php   ?></i></h6> 
            <h6 style="text-align: right; color: black; font-weight:bold;"><i>COMPREHENSIVE INCOME/(LOSS) NET OF TAX</i></h6> 
            </div>
        </div><br><br><br>
        
        <div class="row">
            <div class="col-md-6">
            <h6 style="color: black; ">*Disajikan kembali dan direklasifikasi</h6> 
            <h6 style="text-align: center; color: black;">Catatan atas laporan keuangan konsolidasi merupakan bagian yang tidak terpisahkan dari laporan keuangan konsolidasian</h6> <br>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-6">
            <h6 style="text-align: right; color: black; "><i>*As restated and reclassified</h6> 
            <h6 style="text-align: center; color: black;">The accompanying notes to the consolidated financial statements form an integral part of these consolidated financial statements</h6> <br></i>
            </div>
        </div>


        <div class="isi">
            
            <p style="text-align: justify; color:black;"></p>
        </div>
        </div>
    </div>
    <br>


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

<script>
		window.print();
</script>