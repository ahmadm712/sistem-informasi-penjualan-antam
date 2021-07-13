<?php 

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['jabatan']=="Admin"){

    }
    else{
		echo '<script language="javascript">alert("Akses hanya untuk Admin"); document.location="index.php?page=data-karyawan";</script>';
    }
?>
    <div class="col-xl-10 col-lg-7">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Penambahan Karyawan</h6>
            </div>
            <div class="container" id="isi" >
            <form method="post" action="../class-user/operasi-karyawan.php?action=add">
                <br>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNama" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNotlpn" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNo_tlpn" name="no_tlpn" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUsername" name="username" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="password" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="jabatan">
                <option selected>Choose...</option>
                <option value="Manager">Manager</option>
                <option value="Gudang">Gudang</option>
                <option value="Admin">Admin</option>
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100px;" name="submit">Submit</button>
            </form>
            
            <br><br>
            </div>
        </div>
    </div>


<?php
// include "../class-user/user_karyawan.php";
// require_once('../config/db.php');
// $koneksi = connect();

// $query = mysqli_query($koneksi, "SELECT max(id_karyawan) as id_karyawanTerbesar FROM karyawan");
// $data = mysqli_fetch_array($query);
// $id_karyawan = $data['id_karyawanTerbesar'];

// $urutan = (int) substr($id_karyawan, 4, 4);
// $urutan++;

// $huruf = "KWN";
// $id_karyawan = $huruf . sprintf("%04s", $urutan);


// if(isset($_POST['submit'])){

//         $nama = $_POST['nama'];
//         $no_tlpn = $_POST['no_tlpn'];
//         $username = $_POST['username'];
//         $password = md5($_POST['password']);
//         $jabatan = $_POST['jabatan'];
        
//     $obj = new user_karyawan();
//     $obj->insertData($id_karyawan, $nama, $no_tlpn, $username, $password, $jabatan);
// }


?>