<?php include('user_karyawan.php');
$obj = new user_karyawan();

$action = $_GET['action'];if($action=="updatePass")
{
    $obj->updateData2(md5($_POST['password']), $_POST['id']);
    echo '<script language="javascript">alert("Password berhasil di update!"); document.location="../karyawan/index.php?page=profile";</script>';
}