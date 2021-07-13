<?php 
include('artikel.php');
$obj = new artikel();

$action = $_GET['action'];
if($action == "add") {

    $tanggal = date("l, d-M-Y");
    $gambar = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = '../img/upload/';

    move_uploaded_file($source, $folder.$gambar);

    $obj->insertData('', $tanggal,$_POST['judul'],$_POST['isi'],$gambar);
    echo '<script language="javascript">alert("Berhasil Ditambahkan"); document.location="../karyawan/index.php?page=data-artikel";</script>';

}

elseif($action=="update")
{
	$tanggal = date("l, d-M-Y");
    $gambar = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
	$folder = '../img/upload/';
	
		move_uploaded_file($source, $folder.$gambar); 
		$obj->updateData1($tanggal,$_POST['judul'],$_POST['isi'],$gambar,$_POST['id']);
		echo '<script language="javascript">alert("Berhasil Diupdate"); document.location="../karyawan/index.php?page=data-artikel";</script>';


}

elseif($action=="delete")
{
	$id_artikel = $_GET['id'];
	$obj->deleteData($id_artikel);
    header('location:../karyawan/index.php?page=data-artikel');
    
}
?>

<script type="text/javascript">
		$(document).ready(function(){
		    $("#iconText").click(function(){
		    	Swal.fire(
				  'BERHASIL',
				  'Data Berhasil Disimpan',
				  'success'
				)
		    });

		});
	</script>