<?php
include "user.php";
require_once('../config/db.php');
$user = new user();


class user_konsumen extends user {
    
    private String 
            $id_kosumen,
            $nama_konsumen,
            $username,
            $password,
            $no_ktp,
            $no_npwp,
            $no_tlpn,
            $provinsi,
            $kabupaten,
            $kecamatan,
            $desa_namaJl,
            $norumah_rtrw;

    //constructor
    public function __construct()
    {
    
    }

    //method
    public function insertData($id_kosumen, $nama_konsumen, $username, $password, $no_ktp, $no_npwp, $no_tlpn, $provinsi, $kabupaten, $kecamatan, $desa_namaJl, $rincian) {
        global $user; 
        $value = "INSERT INTO konsumen (`id_konsumen`, `nama_konsumen`, `username`, `password`, `no_ktp`, `no_npwp`, `no_tlpn`, `provinsi`, `kab/kota`, `kecamatan`, `desa/nama_jl`, `rincian`) VALUES  ('$id_kosumen', '$nama_konsumen','$username', '$password', '$no_ktp','$no_npwp', '$no_tlpn', '$provinsi', '$kabupaten', '$kecamatan', '$desa_namaJl', '$rincian')";
        $query = mysqli_query($user->connection, $value);
    }

    public function showData() {
        global $user;
        $query = mysqli_query($user->connection, "SELECT * FROM konsumen");
        return $query;
    }

    public function showSection() {
        global $user;
        $get = $_SESSION['user'];
        $query = mysqli_query($user->connection, "SELECT * FROM konsumen WHERE username='$get'");
        return $query;
    }

    public function getBy_id($id_konsumen) {
        global $user;
        $query = mysqli_query($user->connection, "SELECT * FROM konsumen WHERE id_konsumen='$id_konsumen'");
        return $query;
    }

    public function deleteData($id_konsumen) {
        global $user;
        $query = mysqli_query($user->connection,"DELETE FROM konsumen WHERE id_konsumen='$id_konsumen'");
        return $query;
    }

    public function updateData1($nama_konsumen, $no_ktp, $no_npwp, $no_tlpn, $provinsi, $kabkot, $kecamatan, $djl, $rincian, $id) {
        global $user;
        $query = mysqli_query($user->connection,"UPDATE konsumen SET `nama_konsumen`='$nama_konsumen',`no_ktp`='$no_ktp',`no_npwp`='$no_npwp',`no_tlpn`='$no_tlpn',`provinsi`='$provinsi',`kab/kota`='$kabkot',`kecamatan`='$kecamatan',`desa/nama_jl`='$djl',`rincian`='$rincian' WHERE `id_konsumen`='$id'");

    }

    public function updateData2($pass, $id) {
        global $user;
        $query = mysqli_query($user->connection,"UPDATE konsumen SET password='$pass' WHERE id_konsumen='$id'");
    }

    public function login($username, $password) {
        global $user;
        session_start();
        $login = mysqli_query($user->connection,"SELECT * FROM konsumen WHERE username='$username' and password='$password'");
        $cek = mysqli_num_rows($login);

        if($cek > 0){

            $data = mysqli_fetch_assoc($login);
                    $_SESSION['user'] = $username;
                    $_SESSION['nama'] = $username;
                header("location:../konsumen/index.php?page=beranda");

        }else{ 
            echo '<script language="javascript">alert("Username atau Password Salah!"); document.location="../karyawan/index.php";</script>';
            header("location:../konsumen/index.php?pesan=gagal");
        }
    }


    //setter
    public function setId_kosumen( $id_kosumen ) {
        $this->id_kosumen = $id_kosumen;
    }

    public function setUsername( $username ) {
        $this->username = $username;
    }

    public function setPassword( $password ) {
        $this->password = $password;
    }

    public function setJabatan( $jabatan ) {
        $this->jabatan = $jabatan;
    }



    //getter
    public function getId_kosumen() {
        return $this->id_kosumen;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getJabatan() {
        return $this->jabatan;
    }

}









?>