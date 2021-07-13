<?php 
include('pengeluaran.php');
$obj = new pengeluaran();

$action = $_GET['action'];
if($action == "add") {
    global $pengeluaran;
    $obj->insertData('',$_POST['tanggal'],$_POST['Pembelian'], $_POST['jumlah'], $_POST['harga'],$_POST['id_vendor'], $_POST['keterangan']);
    echo '<script language="javascript">alert("Berhasil ditambahkan!"); document.location="../karyawan/index.php?page=data-pengeluaran";</script>';
    
}

elseif($action=="update")
{
	$obj->updateData($_POST['tanggal'],$_POST['Pembelian'], $_POST['jumlah'], $_POST['harga'], $_POST['keterangan'],$_POST['id']);
    header('location:../karyawan/index.php?page=data-pengeluaran');

}


elseif($action=="updateVen")
{
	$obj->updateVendor($_POST['vendor'],$_POST['id']);
    header('location:../karyawan/index.php?page=data-pengeluaran');

}

// elseif($action=="update")
// {
// 	$obj->updateData($_POST['nama'],$_POST['stock'],$_POST['kg'],$_POST['harga_awal'],$_POST['harga_jual'],$_POST['id_produk']);
//     header('location:../kon');

// }

// elseif($action=="updateQty")
// {
// 	$obj->updateQty($_POST['id'],$_POST['qty']);
//     header('location:../konsumen/index.php?page=cart');

// }

// elseif($action=="updateKode")
// {
// 	$obj->updateKode($_POST['kode'],$_POST['id_produk']);
//     header('location:../karyawan/index.php?page=data-emas');

// }

elseif($action=="delete")
{
	$id = $_GET['id'];
	$obj->deleteData($id);
    header('location:../karyawan/index.php?page=data-pengeluaran');
    
}

?>
