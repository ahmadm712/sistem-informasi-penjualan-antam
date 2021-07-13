<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['user']==""){
		echo '<script language="javascript">alert("Anda Belum Login! Silahkan Login Dahulu!"); document.location="../index.php";</script>';
	}
?>