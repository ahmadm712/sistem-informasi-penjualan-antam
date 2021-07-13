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
    <link href="css/template.css" rel="stylesheet" type="text/css">

    <title>LOGIN KARYAWAN</title>

    
  </head>
  <body>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="../img/antam-logo.png" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="../img/emas.jpg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        
                        
                        
                    </div>
                        <div class="row px-6 mb-4">
                            <br><br>
                            <h3 style="text-align: center; color:#bf9b30;">Login Untuk Karyawan</h3><hr>
                        </div>
                        <form method="POST" action="../class-user/operasi-karyawan.php?action=login">
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Username</h6>
                            </label> <input class="mb-4" type="text" name="username" placeholder="Masukan Username" required> </div>
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Password</h6>
                            </label> <input type="password" name="password" placeholder="Masukan Password" required> </div>
                        <br>
                        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Login</button> </div></form>
                        <div class="row mb-4 px-3"> <small class="font-weight-bold">Belum memiliki akun? <a class="text-danger ">Daftar</a></small> </div>
                    </div>
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
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>