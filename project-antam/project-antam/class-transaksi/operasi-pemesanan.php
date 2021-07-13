<?php 
include('pemesanan.php');
$obj = new pemesanan();

$action = $_GET['action'];
if($action == "add") {
    global $obj;
    $harga = $obj->Harga_total($_POST['harga_jual'],$_POST["jumlah"] );
    $HTot = $obj->getHarga_total();
    $tanggal = date('Y-m-d');

    if ($_POST["jumlah"] > $_POST['stock']) {
    echo '<script language="javascript">alert("Pemesanan Melebihi Stock! Silahkan Pesan kembali."); document.location="../konsumen/index.php?page=beranda";</script>';
    }
    else {
    $obj->insertData('',$_POST['no_reference'], $tanggal, $_POST['id_konsumen'], $_POST['id_produk'],$_POST['jumlah'], $_POST['ppn'], $_POST['harga_jual'] , "Di Keranjang");
    echo '<script language="javascript">alert("Berhasil dimasukan ke keranjang!"); document.location="../konsumen/index.php?page=cart";</script>';
    }
}

elseif($action=="update")
{
	$obj->updateData($_POST['nama'],$_POST['stock'],$_POST['kg'],$_POST['harga_awal'],$_POST['harga_jual'],$_POST['id_produk']);
    header('location:../kon');

}

elseif($action=="updateQty")
{
	$obj->updateQty($_POST['id'],$_POST['qty']);
    header('location:../konsumen/index.php?page=cart');

}

elseif($action=="dikirim")
{
    $no = $_GET['id'];
    $obj->upstat($no);
    $obj->upstat2($no);
    header('location:../karyawan/index.php?page=dashboard');
}

elseif($action=="selesai")
{
    $id = $_GET['id'];
    $no = $_GET['no'];
    $obj->upstat3($id);
    $obj->upstat4($no);
    header('location:../konsumen/index.php?page=selesai');

}

elseif($action=="delete")
{
	$id = $_GET['id'];
	$obj->deleteData($id);
    header('location:../konsumen/index.php?page=cart');
    
}

elseif($action=="tanggal")
{
	$obj->keuangan($_POST['start'],$_POST['end']);
    // header('location:../kon');

}
?>
