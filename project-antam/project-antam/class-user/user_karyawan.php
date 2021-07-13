<?php
include "user.php";
$user = new user();


class user_karyawan extends user {
    
    private String 
            $id_karyawan,
            $username,
            $password,
            $jabatan;

    //constructor
    public function __construct()
    {
    
    }

    //method
    public function insertData($id_karyawan, $nama, $no_tlpn, $username, $password, $jabatan) {
        global $user;
        $value = "INSERT INTO karyawan (id_karyawan, nama_karyawan, no_tlpn, username, password, jabatan) VALUES  ('$id_karyawan', '$nama', '$no_tlpn', '$username', '$password', '$jabatan')";
        $query = mysqli_query($user->connection, $value);
    }

    public function showData() {
        global $user;
        $query = mysqli_query($user->connection, "SELECT * FROM karyawan");
        return $query;
    }

    public function showSection() {
        global $user;
        $get = $_SESSION['username'];
        $query = mysqli_query($user->connection, "SELECT * FROM karyawan WHERE username='$get'");
        return $query;
    }

    public function deleteData($id_karyawan) {
        global $user;
        $query = mysqli_query($user->connection,"DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'");
        return $query;
    }

    public function updateData() {
        
    }

    public function login($username, $password) {
        global $user;
        session_start();
        $login = mysqli_query($user->connection,"SELECT * FROM karyawan WHERE username='$username' and password='$password'");
        $cek = mysqli_num_rows($login);

        if($cek > 0){

            $data = mysqli_fetch_assoc($login);
                if($data['jabatan']=="Manager"){
                    $_SESSION['username'] = $username;
                    $_SESSION['nama'] = $username;
		            $_SESSION['jabatan'] = "Manager";
                header("location:../karyawan/index.php?page=dashboard");
                }
                else if($data['jabatan']=="Gudang"){
                    $_SESSION['username'] = $username;
		            $_SESSION['jabatan'] = "Gudang";
                header("location:../karyawan/index.php?page=dashboard");
                }
                else if($data['jabatan']=="Admin"){
                    $_SESSION['username'] = $username;
		            $_SESSION['jabatan'] = "Admin";
                header("location:../karyawan/index.php?page=dashboard");
                }

        }else{ 
            echo '<script language="javascript">alert("Username atau Password Salah!"); document.location="../karyawan/index.php";</script>';
            header("location:../karyawan/index.php?pesan=gagal");
        }
    }

    public function getBy_id($id_karyawan) {
        global $user;
        $query = mysqli_query($user->connection, "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
        return $query;
    }

    public function updateData2($pass, $id) {
        global $user;
        $query = mysqli_query($user->connection,"UPDATE karyawan SET password='$pass' WHERE id_karyawan='$id'");
    }

    //setter
    public function setId_karyawan( $id_karyawan ) {
        $this->id_karyawan = $id_karyawan;
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
    public function getId_karyawan() {
        return $this->id_karyawan;
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