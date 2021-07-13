<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['jabatan']==""){
		echo '<script language="javascript">alert("Anda Belum Login! Akses hanya untuk Karyawan"); document.location="../login-register/login-karyawan.php";</script>';
	}
?>