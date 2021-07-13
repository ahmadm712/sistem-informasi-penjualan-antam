<?php 	
include('../class-artikel/artikel.php');
$obj2 = new artikel();
$id = $_GET['id'];
$data2 = $obj2->GetId($id);

?>
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

  <title>Update Artikel</title>

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

<body>
<!-- Content Row -->
<center>
<br><br>
<div class="contaier" style="width: 1200px;">
<div class="row">

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7" style="text-align: left;">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Update Artikel</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <form method="post" action=" ../class-artikel/operasi-artikel.php?action=update" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <h6 name="date" style="text-align: right;"> <?php echo date("l, d-M-Y"); ?></h6>
                <label for="judul"><b>Judul Artikel</b></label>
                <input type="hidden" id="id_artikel" name="id" class="form-control" value="<?php echo $data2['id_artikel'] ?>" placeholder="Masukan judul" ><br>
                <input type="text" id="judul" name="judul" class="form-control" value="<?php echo $data2['judul'] ?>" placeholder="Masukan judul" ><br>
                <label for="gambar"><b>Choose Picture</b></label><br>
                <input type="file" name="gambar"/>
                <br><br>
                <label for="artikel"><b>Text Artikel</b></label>
                <textarea class="form-control" name="isi" id="artikel" rows="25" placeholder="Masukan Text Artikel "><?php echo $data2['isi'] ?></textarea>
                <br>
            </div>
            <button type="Submit" class="btn btn-primary" name="input_artikel" style="width: 35%;" > Update</button><br><br>
            </div></div>
        </form>
        </div>
    </div>
</div>

<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Gambar</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <img style="width: 100%;" src="../img/upload/<?php echo $data2['gambar'] ?>" alt=""><p><br></p>
        </div>
    </div>
</div>
</div>
</div></center>
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