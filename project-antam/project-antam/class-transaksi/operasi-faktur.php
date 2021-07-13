<?php 
include('faktur.php');
$obj = new faktur();

$action = $_GET['action'];
if($action == "add") {

    $date = date('Y-m-d');

    // $obj->insertData($no_faktur, $date, $_POST['noref'],$_POST['bayar'], $gambar, 'NO');
    echo '<script language="javascript">alert("Pembayaran Berhasil"); document.location="../konsumen/index.php?page=beranda";</script>';
    // header('location:../karyawan/index.php?page=data-karyawan');
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
