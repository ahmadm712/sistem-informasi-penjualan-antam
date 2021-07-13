<?php 	
include('../class-transaksi/pembayaran.php');
$obj2 = new pembayaran();
$no = $_GET['id'];
if(! is_null($no))
{
    $data2 = $obj2->getBy_id($no);
	$data3 = $obj2->showForKonfir($no);
    
}
else
{
	header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="../konsumen/css/payment.css" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <title>Pembayaran</title>
  </head>
  <body>

<div class="container">
<div class="wrapper wrapper-content animated fadeInRight">
<h4 style="text-align: center;"><b>KONFIRMASI PEMBAYARAN</b></h4>
<h5 style="text-align: center; color : red;"><b>PERIKSA DENGAN TELITI DAN BENAR</b></h5><br>

    <?php
                        
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    Rincian Pembayaran
                </div>
                <?php
                   
                ?>
                <div class="ibox-content">
                <div class="container">
                <?php 
                    
                ?>
                <h6> <i class="fas fa-map-marker-alt"></i> Alamat penerima</h6>
                <p> <?php echo $data3['nama_konsumen']?> | <?php echo  $data3['no_tlpn'] ?> | <?php echo $data3['rincian'] ?>, Desa <?php echo $data3['desa/nama_jl'] ?>, Kec. <?php echo $data3['kecamatan'] ?>, Kab/Kota. <?php echo $data3['kab/kota'] ?>, Provinsi <?php echo $data3['provinsi'] ?> </p>
                </div> <hr>
                <div class="container">
                <h6><i class="fas fa-money-check-alt"></i> Rincian pembayaran </h6>
                    <div class="row">
                        <div class="col-md-2">
                            <h6>No Reference</h6>
                        </div>
                        <div class="col-md-6">
                            <h6> <?php echo $data2['no_reference']; ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h6>Total </h6>
                        </div>
                        <div class="col-md-6">
                            <h6> RP. <?php echo  number_format($data2['bayar']); ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h6 for="gambar">Bukti Pembayaran</h6>
                        </div>
                        <div class="col-md-10">
                           <a href="../img/bukti pembayaran/<?php echo $data2["bukti_pembayaran"]; ?>" class="btn btn-primary"> Lihat</a>
                        </div>
                        <p><br></p>
                    </div>
                    
                    <form method= "post" action="../class-transaksi/operasi-pembayaran.php?action=konfir">
                    <input type="hidden" name="ID" value="<?php echo $data2['no_payment']; ?>"/>
                    <input type="hidden" name="noref" value="<?php echo $data2['no_reference']; ?>"/>

                        <a href="index.php?page=dashboard" type="submit" class="btn btn-secondary" style="width: 100px; font-family: Cambria Math;"  >CANCEL</a>
                        <button type="submit" class="btn btn-primary" style="width: 230px; font-family: Cambria Math;" >PEMBAYARAN DISETUJUI</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>