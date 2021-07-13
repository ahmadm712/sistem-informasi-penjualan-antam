<?php

include('produk.php');
$obj = new produk();

$action = $_GET['action'];
if($action=="update")
{
    
    $obj->update($_POST['harga'],$_POST['id_produk']);
    echo '<script language="javascript">alert("Berhasil Diupdate"); document.location="../karyawan/index.php?page=dashboard";</script>';
    
}