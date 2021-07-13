<?php 
include('laporan-produksi.php');
$obj = new laporan();

$action = $_GET['action'];
if($action == "add") {
    global $produksi;
    $query = mysqli_query($produksi->connection, "SELECT max(kode_produksi) as kode_produksiTerbesar FROM produksi");
    $data = mysqli_fetch_array($query);
    $kode_produksi = $data['kode_produksiTerbesar'];

    $urutan = (int) substr($kode_produksi, 4, 4);
    $urutan++;

    $huruf = "PRD";
    $kode_produksi = $huruf . sprintf("%04s", $urutan);
    $tanggal = date("Y-m-d");
    // $_SESSION['kode'] = $kode_produksi;
    $obj->insertData($kode_produksi, $_POST['nama'],$tanggal);
    echo '<script language="javascript">alert("Berhasil Ditambahkan"); document.location="../index.php?page=produksi";</script>';
    // header('location:../karyawan/index.php?page=data-karyawan');
}

elseif($action=="update")
{
	$obj->updateData($_POST['nama'],$_POST['kontak'],$_POST['alamat'],$_POST['id_vendor']);
    header('location:../karyawan/index.php?page=data-vendor');

}

elseif($action=="delete")
{
	$no = $_GET['id'];
	$obj->deleteData($no);
    header('location:../index.php?page=produksi');
    
}

?>
