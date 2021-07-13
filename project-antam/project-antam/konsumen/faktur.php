<?php
include('../class-transaksi/faktur.php');
$fak = new faktur();
$no = $_GET['id'];
$data2 = $fak->getBy_id($no);



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel="stylesheet" >
    <!-- <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'> -->
    <link href="css/faktur.css" rel="stylesheet" type="text/css">

    <title>FAKTUR</title>

    
  </head>
  <body>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-12">
                <div class="card1 pb-5">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="../img/antam-logo.png" class="logo">
                        </div>
                        <div class="col-md-7 text-center"><br>
                            <h3 style="font-style: italic">PT. ANTAM Tbk.</h3>
                            <h5 style="font-family: 'Times New Roman'; font-weight: bold;" >UNIT BISNIS PENGOLAHAN & PEMURNIAN LOGAM MULIA</h5>
                            <h6 style="font-family: 'Times New Roman'; font-weight: bold;">Jl. Raya Bekasi, Km, 18 Pulo Gadung, Jakarta 13010, Ph : (021) 4757108 Fax : (021) 4750665.</h6>
                            <center>
                                <div style="background-color: red; width :120px; height: 40px; display: flex;  justify-content: center; align-items: center ">
                                <h4 style="color: white; font-family: 'Times New Roman'; font-weight: bold;" >FAKTUR</h4>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-2">
                            <img style="width: 70px;" src="../img/lm-logo.jpg" class="logo">
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
<div class="container">
<div class="" style="border:1px solid black;">
        <table class="table table-bordered" >
        <?php $date = date('d M Y');
              $data = mysqli_fetch_assoc($result)
        ?>
        <tbody>
            <tr>
            <td colspan="5">Kepada :  <?php echo $data['nama_konsumen']?> | <?php echo  $data['no_tlpn'] ?> | <?php echo $data['rincian'] ?>, Desa <?php echo $data['desa/nama_jl'] ?>, Kec. <?php echo $data['kecamatan'] ?>, Kab/Kota. <?php echo $data['kab/kota'] ?>, Provinsi <?php echo $data['provinsi'] ?>  </td>
            <td style="width: 250px;">No : <?php echo $_SESSION['referensi'] ?> <br> Tanggal : <?php echo $date ?></td>
            </tr>

            <tr>
            <td style="width: 60px;">No. </td>
            <td style="width: 380px;">Uraian </td>
            <td style="width: 150px;">Jumlah</td>
            <td style="width: 150px;">Berat (kg) </td>
            <td style="width: 150px;">Harga </td>
            <td style="width: 150px;">Total </td>
            </tr>
                <?php
                $no = 0;
                $ppn = 0;
                $total2 = 0;
                while ($data3 = mysqli_fetch_assoc($data2)) {   
                    $no++;         
                $total = $data3['jumlah'] * $data3['harga_jual'];
                $ppn += $data3['ppn'];
                $total2 += $data3['jumlah'] * $data3['harga_jual'];
                    $_SESSION['getref'] = $data3['reference_no'];
                    $_SESSION['getpay'] = $data3['no_payment'];

                ?>
            <tr>
            <td style="width: 60px;"> <?php echo $no?></td>
            <td style="width: 380px;"><?php echo $data3['nama_produk'] ?> </td>
            <td style="width: 150px;"><?php echo $data3['jumlah']?></td>
            <td style="width: 150px;"><?php echo $data3['berat_kg']?> </td>
            <td style="width: 150px;"><?php echo number_format($data3['harga_jual'])?> </td>
            <td style="width: 150px;"><?php echo number_format($total) ?> </td>
            </tr>
            <?php  } ?>


            <tr>
            <td colspan="4"> </td>
            <td style="font-weight: bold;"> Total </td>
            <td style="font-weight: bold;"> Rp. <?php echo number_format($total2) ?></td>
            </tr>

            <tr>
            <td colspan="4"> </td>
            <td style="font-weight: bold;"> PPH </td>
            <td style="font-weight: bold;"> Rp. <?php echo number_format($ppn) ?></td>
            </tr>

                    <?php $GrandT = $total2 + $ppn + 50000 ?>
            
            <tr>
            <td colspan="4"> </td>
            <td style="font-weight: bold;"> Grand Total </td>
            <td style="font-weight: bold;"> Rp. <?php echo number_format($GrandT) ?></td>
            </tr>

            <tr>
            <td colspan="4">Terbilang   : <?php echo $fak->terbilang($GrandT); ?> </td>
            <td colspan="2" rowspan="3" style="text-align: center;" > <div class="container" style="border:1px solid black;" > <p style="text-align: justify;">The said goods are not for the purpose to be consumed for exports of jewelery under Assean-India FTA as Antam does not confirm its origin.</p> </div></td>
            </tr>

            <tr>
            <td colspan="4">Payment No  : <?php echo $_SESSION['getpay'] ?> </td>

            </tr>
                    
            <tr>
            <td colspan="4">Reference No : <?php echo $_SESSION['getref']  ?> </td>
            </tr>

            <tr>
            <td colspan="6">Lokasi : Bandung <br><br><br></td>
            </tr>

            <tr>
            <td colspan="2" style="text-align: center; ">Diserahkan <br> Kepala Kluis</td>
            <td colspan="2" style="text-align: center; ">Trading</td>
            <td colspan="2" style="text-align: center; ">Diterima <br> Pembeli</td>
            </tr>
            
            <tr>
            <td colspan="2" ><center><img src="../img/ttd2.png" style="width: 40%;" alt=""></center> </td>
            <td colspan="2" > <center><img src="../img/ttd1.jpg" style="width: 60%;" alt=""></center>  </td>
            <td colspan="2" > </td>
            </tr>

        </tbody>
        </table>

        </div>
        </div><p><br></p>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- <script>
		window.print();
</script> -->