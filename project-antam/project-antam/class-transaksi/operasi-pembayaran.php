<?php 
include('pembayaran.php');
$obj = new pembayaran();

$action = $_GET['action'];
if($action == "add") {
    global $pembayaran;
    $query = mysqli_query($pembayaran->connection, "SELECT max(no_payment) as no_paymentTerbesar FROM pembayaran");
    $data = mysqli_fetch_array($query);
    $no_payment = $data['no_paymentTerbesar'];

    $urutan = (int) substr($no_payment, 4, 4);
    $urutan++;

    $huruf = "BMD";
    $no_payment = $huruf . sprintf("%04s", $urutan);

    $date = date('Y-m-d');
    $gambar = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = '../img/bukti pembayaran/';

    move_uploaded_file($source, $folder.$gambar);

    $obj->insertData($no_payment, $date, $_POST['noref'], '50000', $_POST['bayar'], $gambar, 'NO');
    echo '<script language="javascript">alert("Pembayaran Berhasil"); document.location="../konsumen/index.php?page=beranda";</script>';
    // header('location:../karyawan/index.php?page=data-karyawan');
}

elseif($action=="konfir")
{
    global $pembayaran;
    $query = mysqli_query($pembayaran->connection, "SELECT max(no_faktur) as no_fakturTerbesar FROM faktur");
    $data = mysqli_fetch_array($query);
    $no_faktur = $data['no_fakturTerbesar'];

    $urutan = (int) substr($no_faktur, 4, 4);
    $urutan++;

    $huruf = "FTR";
    $no_faktur = $huruf . sprintf("%04s", $urutan);
    $date = date('Y-m-d');

    $obj->konfir($no_faktur, $date, $_POST['ID'],$_POST['noref']);
    echo '<script language="javascript">alert("Konfirmasi Berhasil"); document.location="../karyawan/index.php?page=dashboard";</script>';

}

elseif($action=="set")
{
    header('location:../konsumen/payment.php');

}

elseif($action=="update")
{
	$obj->updateData($_POST['nama'],$_POST['kontak'],$_POST['alamat'],$_POST['id_vendor']);
    header('location:../karyawan/index.php?page=data-vendor');

}

elseif($action=="delete")
{
	$id_konsumen = $_GET['id'];
	$obj->deleteData($id_konsumen);
    header('location:../karyawan/index.php?page=data-konsumen');
    
}


?>
