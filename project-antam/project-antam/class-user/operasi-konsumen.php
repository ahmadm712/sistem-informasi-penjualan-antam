<?php 
include('user_konsumen.php');
$obj = new user_konsumen();

$action = $_GET['action'];
if($action == "add") {
    global $user;
    $query = mysqli_query($user->connection, "SELECT max(id_konsumen) as id_konsumenTerbesar FROM konsumen");
    $data = mysqli_fetch_array($query);
    $id_konsumen = $data['id_konsumenTerbesar'];

    $urutan = (int) substr($id_konsumen, 4, 4);
    $urutan++;

    $huruf = "CS";
    $id_konsumen = $huruf . sprintf("%04s", $urutan);

    $obj->insertData($id_konsumen, $_POST['nama'], $_POST['username'], md5($_POST['password']), $_POST['nik'], $_POST['npwp'], $_POST['tlpn'], $_POST['provinsi'], $_POST['kab/kot'], $_POST['kecamatan'], $_POST['d/jl'], $_POST['no/rt']);
    echo '<script language="javascript">alert("Berhasil Silahkan Login"); document.location="../index.php";</script>';
    // header('location:../karyawan/index.php?page=data-karyawan');
}

elseif($action=="update1")
{
	$obj->updateData1($_POST['nama'],$_POST['no_ktp'],$_POST['no_npwp'],$_POST['no_tlpn'],$_POST['provinsi'],$_POST['kab/kota'],$_POST['kecamatan'],$_POST['desa/nama_jl'],$_POST['rincian'],$_POST['id_konsumen']);
    header('location:../konsumen/index.php?page=profile');

}

elseif($action=="delete")
{
	$id_konsumen = $_GET['id'];
	$obj->deleteData($id_konsumen);
    header('location:../karyawan/index.php?page=data-konsumen');
    
}

elseif($action=="updatePass")
{
    $obj->updateData2(md5($_POST['password']), $_POST['id']);
    echo '<script language="javascript">alert("Password berhasil di update!"); document.location="../konsumen/index.php?page=profile";</script>';
}

elseif($action = "login")
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $obj->login($username,$password);
    
}
?>
