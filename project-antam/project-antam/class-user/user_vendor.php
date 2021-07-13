<?php

require_once('user.php');
$db = new user();


class vendor extends user {
    
    private $nama,
            $kontak,
            $id_vendor,
            $alamat;

    //constructor
    public function __construct()
    {

    }

    //method
    public function insertData($id_vendor, $nama, $no_tlpn, $alamat) {
        global $db;
        $value = "INSERT INTO vendor (id_vendor, nama, kontak, alamat) VALUES  ('$id_vendor', '$nama', '$no_tlpn', '$alamat')";
        $query = mysqli_query($db->connection, $value);
    }

    public function showData() {
        global $db;
        $query = "SELECT * FROM vendor";
		$result = mysqli_query($db->connection,$query);
		return $result;
    }

    public function getID($id) {
        global $db;
        $query = mysqli_query($db->connection,"SELECT * FROM vendor WHERE id_vendor='$id'");
		return $query;
    }


    public function deleteData($id_vendor) {
        global $db;
        $query = mysqli_query($db->connection,"DELETE FROM vendor WHERE id_vendor='$id_vendor'");
        return $query;
    }

    public function updateData($nama,$kontak,$alamat,$id_vendor) {
        global $db;
        $query = mysqli_query($db->connection,"update vendor set nama='$nama', kontak='$kontak', alamat='$alamat' where id_vendor='$id_vendor'");
    }
 


    //setter
    public function setNama( $nama ) {
        $this->nama = $nama;
    }

    public function setKontak( $kontak ) {
        $this->kontak = $kontak;
    }

    public function setId_vendor( $id_vendor ) {
        $this->id_vendor = $id_vendor;
    }

    public function setAlamat( $alamat ) {
        $this->alamat = $alamat;
    }



    //getter
    public function getNama() {
        return $this->nama;
    }

    public function getKontak() {
        return $this->kontak;
    }

    public function getId_vendor() {
        return $this->id_vendor;
    }

    public function getAlamat() {
        return $this->alamat;
    }

}









?>