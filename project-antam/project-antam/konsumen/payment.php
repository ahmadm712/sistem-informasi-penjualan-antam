<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/payment.css" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <title>Pembayaran</title>
  </head>
  <body>

<div class="container">
<div class="wrapper wrapper-content animated fadeInRight">
<h4 style="text-align: center;"><b>SILAHKAN MEMBAYAR KE SALAH SATU REKENING BERIKUT</b></h4><br>
    <div class="row">
        <div class="col-md-4">
            <div class="payment-card">
                <!-- <i class="fa fa-cc-visa payment-icon-big text-success"></i> -->
                <img src="../img/bca.jpg" alt="" style="height: 60px; width:100px;">
                <h2>
                    3760 6217 799 
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        <small>

                        </small>
                    </div>
                    <div class="col-sm-6 text-right">
                        <small>
                            <strong>Name:</strong> Antam BDG
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-card">
            <img src="../img/bri.jpg" alt="" style="height: 60px; width:100px;">
                <h2>
                    5433 3422 002
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        <small>
                            
                        </small>
                    </div>
                    <div class="col-sm-6 text-right">
                        <small>
                            <strong>Name:</strong> Antam BDG
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-card">
            <img src="../img/bni.jpg" alt="" style="height: 45px; width:95px;"> <p></p>
                <h2>
                    2432 4234 466
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        <small>
    
                        </small>
                    </div>
                    <div class="col-sm-6 text-right">
                        <small>
                            <strong>Name:</strong> Antam BDG
                        </small>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
        include "../class-user/user_konsumen.php";
        include "akses.php";
        $obj = new user_konsumen();
        $result=$obj->showSection();
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    Metode Pembayaran
                </div>
                <?php
                    $data = mysqli_fetch_assoc($result)
                ?>
                <div class="ibox-content">
                <div class="container">
                <?php 
                    
                ?>
                <h6> <i class="fas fa-map-marker-alt"></i> Alamat penerima</h6>
                <p> <?php echo $data['nama_konsumen']?> | <?php echo  $data['no_tlpn'] ?> | <?php echo $data['rincian'] ?>, Desa <?php echo $data['desa/nama_jl'] ?>, Kec. <?php echo $data['kecamatan'] ?>, Kab/Kota. <?php echo $data['kab/kota'] ?>, Provinsi <?php echo $data['provinsi'] ?> </p>
                </div> <hr>
                <div class="container">
                <h6><i class="fas fa-money-check-alt"></i> Rincian pembayaran </h6>
                    <div class="row">
                        <div class="col-md-2">
                            <h6>No Reference</h6>
                        </div>
                        <div class="col-md-6">
                            <h6> <?php echo $_SESSION['noref']; ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h6>Total </h6>
                        </div>
                        <div class="col-md-6">
                            <h6> RP. <?php echo  number_format($_SESSION['bayar']); ?></h6>
                        </div>
                    </div>
                    <form method= "post" action="../class-transaksi/operasi-pembayaran.php?action=add" enctype="multipart/form-data">
                    <input type="hidden" name="noref" value="<?php echo $_SESSION['noref']; ?>"/>
                    <input type="hidden" name="bayar" value="<?php echo $_SESSION['bayar']; ?>"/>
                    <div class="row">
                        <div class="col-md-2">
                            <h6 for="gambar">Bukti Pembayaran</h6>
                        </div>
                        <div class="col-md-6">
                            <input type="file" name="gambar"/>
                        </div>
                        <p><br></p>
                    </div>
                        <a href="index.php?page=cart" type="submit" class="btn btn-secondary" style="width: 100px;"  >CANCEL</a>
                        <!-- <button type="submit" class="btn btn-primary" style="width: 250px;" > KEMBALI</a> -->
                        <button type="submit" class="btn btn-primary" style="width: 150px;" >SUBMIT</a>
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