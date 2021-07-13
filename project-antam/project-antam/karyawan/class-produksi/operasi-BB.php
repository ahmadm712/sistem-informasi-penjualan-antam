<?php 
include('bahan-baku.php');
$obj = new bahan_baku();

$action = $_GET['action'];
if($action == "add") {
    global $produksi;
    $query = mysqli_query($produksi->connection, "SELECT max(id_bahan) as id_bahanTerbesar FROM bahan_baku");
    $data = mysqli_fetch_array($query);
    $id_bahan = $data['id_bahanTerbesar'];

    $urutan = (int) substr($id_bahan, 4, 4);
    $urutan++;

    $huruf = "BHN";
    $id_bahan = $huruf . sprintf("%04s", $urutan);

    $obj->insertData($id_bahan, $_POST['nama'],$_POST['stock'], $_POST['satuan'], $_POST['id_vendor']);
    echo '<script language="javascript">alert("Berhasil Ditambahkan"); document.location="../index.php?page=data-BB";</script>';
    // header('location:../karyawan/index.php?page=data-karyawan');
}

elseif($action=="update")
{
	$obj->updateData($_POST['nama'],$_POST['stock'], $_POST['satuan'],$_POST['id_bahan']);
    header('location:../index.php?page=data-BB');

}

elseif($action=="delete")
{
	$id_bahan = $_GET['id'];
	$obj->deleteData($id_bahan);
    header('location:../index.php?page=data-BB');
    
}

elseif($action=="updateVen")
{
	$obj->updateVendor($_POST['vendor'],$_POST['id_bahan']);
    header('location:../index.php?page=data-BB');

}

?>
