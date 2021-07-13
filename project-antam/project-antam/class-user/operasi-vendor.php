<?php 
include('user_vendor.php');
$obj = new vendor();

$action = $_GET['action'];
if($action == "add") {
    global $db;
    $query = mysqli_query($db->connection, "SELECT max(id_vendor) as id_vendorTerbesar FROM vendor");
    $data = mysqli_fetch_array($query);
    $id_vendor = $data['id_vendorTerbesar'];

    $urutan = (int) substr($id_vendor, 4, 4);
    $urutan++;

    $huruf = "VEN";
    $id_vendor = $huruf . sprintf("%04s", $urutan);

    $obj->insertData($id_vendor, $_POST['nama'],$_POST['kontak'],$_POST['alamat']);
    echo '<script language="javascript">alert("Berhasil Ditambahkan"); document.location="../karyawan/index.php?page=data-vendor";</script>';
    // header('location:../karyawan/index.php?page=data-vendor');

}

elseif($action=="update")
{
	$obj->updateData($_POST['nama'],$_POST['kontak'],$_POST['alamat'],$_POST['id_vendor']);
    header('location:../karyawan/index.php?page=data-vendor');

}

elseif($action=="delete")
{
	$id_vendor = $_GET['id'];
	$obj->deleteData($id_vendor);
    header('location:../karyawan/index.php?page=data-vendor');
    
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