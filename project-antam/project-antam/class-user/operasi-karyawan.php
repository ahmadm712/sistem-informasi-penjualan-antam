<?php 
include('user_karyawan.php');
$obj = new user_karyawan();

$action = $_GET['action'];
if($action == "add") {
    global $user;
    $query = mysqli_query($user->connection, "SELECT max(id_karyawan) as id_karyawanTerbesar FROM karyawan");
    $data = mysqli_fetch_array($query);
    $id_karyawan = $data['id_karyawanTerbesar'];

    $urutan = (int) substr($id_karyawan, 4, 4);
    $urutan++;

    $huruf = "KWN";
    $id_karyawan = $huruf . sprintf("%04s", $urutan);

    $obj->insertData($id_karyawan, $_POST['nama'],$_POST['no_tlpn'], $_POST['username'], md5($_POST['password']), $_POST['jabatan']);
    echo '<script language="javascript">alert("Berhasil Ditambahkan"); document.location="../karyawan/index.php?page=data-karyawan";</script>';
}

elseif($action=="update")
{
	$obj->updateData($_POST['nama'],$_POST['kontak'],$_POST['alamat'],$_POST['id_vendor']);
    header('location:../karyawan/index.php?page=data-vendor');

}

elseif($action=="delete")
{
    include '../karyawan/akses.php';
    if($_SESSION['jabatan']=="Admin"){
        $id_karyawan = $_GET['id'];
        $obj->deleteData($id_karyawan);
        header('location:../karyawan/index.php?page=data-karyawan');
    }
    else{
		echo '<script language="javascript">alert("Akses hanya untuk Admin"); document.location="../karyawan/index.php?page=data-karyawan";</script>';
    }

    
}

elseif($action = "login")
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $obj->login($username,$password);
    
}

elseif($action=="updatePass")
{
    // $obj->updateData2(md5($_POST['password']), $_POST['id']);
    echo md5($_POST['password']);
    echo $_POST['id'];
    // echo '<script language="javascript">alert("Password berhasil di update!"); document.location="../karyawan/index.php?page=profile";</script>';
}
?>
