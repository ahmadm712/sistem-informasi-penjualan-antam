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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/template2.css" rel="stylesheet" type="text/css">

    <title>REGISTER KONSUMEN</title>

    
  </head>
  <body>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="../img/antam-logo.png" class="logo"> </div><br><br><br>
                    <div class="row px-3 justify-content-center mt-4 mb-5"> <img src="../img/emas1.jpg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
            <p><br><br></p>
            <h3 >REGISTER FORM</h3><br>
                <div class="container">
                        <form method="post" action="../class-user/operasi-konsumen.php?action=add">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" require>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" require>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password" require>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label for="tlpn">No Telephone</label>
                                <input type="number" class="form-control" id="tlpn" name="tlpn" require >
                                </div>
                                <div class="form-group col-md-4">
                                <label for="nik">No NIK</label>
                                <input type="number" class="form-control" id="nik" name="nik" require>
                                </div>
                                <div class="form-group col-md-4">
                                <label for="npwp">NPWP</label>
                                <input type="number" class="form-control" id="npwp" name="npwp" require> 
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label for="provinsi"><br> Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi" require >
                                </div>
                                <div class="form-group col-md-4">
                                <label for="kab/kot"><br>Kabupaten/Kota</label>
                                <input type="text" class="form-control" id="kab/kot" name="kab/kot" require>
                                </div>
                                <div class="form-group col-md-4">
                                <label for="kecamatan"><br>Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" require> 
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label for="d/jl">Desa/Nama Jl</label>
                                <input type="text" class="form-control" id="d/jl" name="d/jl" require >
                                </div>
                                <div class="form-group col-md-8">
                                <label for="no/rt">Keterangan</label>
                                <input type="text" class="form-control" id="no/rt" name="no/rt" require>
                                </div>
                                <!-- <div class="form-group col-md-4">
                                <label for="kd">Kode Pos</label>
                                <input type="text" class="form-control" id="kd" name="kd" require> 
                                </div> -->
                            </div><button type="submit" class="btn btn-primary text-center" style="width: 150px;">Register</button> <br> <br> <p>Sudah meliliki akun? <a style="color: red;" href="../index.php">Login sekarang.</a> </p>
                        </form>
                </div>
                        <p><br></p>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>