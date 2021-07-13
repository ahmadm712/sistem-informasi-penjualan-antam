<?php


class artikel {
    private $id_artikel,
            $judul,
            $isi,
            $tanggal,
            $gambar;
    
    public $connection;

    //constructor
    public function __construct()
    {
        $this->db_connect();
    }
   
    //method
    public function db_connect()
    {
        $this->connection = mysqli_connect('localhost','root','','antam');
        if(mysqli_connect_error())
        {
            die(" Connect Failed ");
        }
    }
    public function insertData($id_artikel, $tanggal, $judul, $isi, $gambar) {
        $value = "INSERT INTO artikel (id_artikel, tanggal, judul, isi, gambar) VALUES  ('', '$tanggal', '$judul', '$isi', '$gambar')";
        $query = mysqli_query($this->connection, $value);
    }

    public function showData() {
        $query = "SELECT * FROM artikel";
		$result = mysqli_query($this->connection,$query);
		return $result;
    }

    public function GetId($id) {
        $query = "SELECT * FROM artikel WHERE id_artikel='$id' ";
		$result = mysqli_query($this->connection,$query);
        return $result->fetch_array();
    }
    
    public function getBerita1() {
        $query = mysqli_query($this->connection, "SELECT * FROM artikel WHERE id_artikel='1'");
        return $query->fetch_array();
    }

    public function getBerita2() {
        $query = mysqli_query($this->connection, "SELECT * FROM artikel WHERE id_artikel='2'");
        return $query->fetch_array();
    }

    public function getBerita3() {
        $query = mysqli_query($this->connection, "SELECT * FROM artikel WHERE id_artikel='3'");
        return $query->fetch_array();
    }

    public function getBy_id($id) {
        $query = mysqli_query($this->connection,"SELECT * FROM artikel WHERE id_artikel=$id");
		return $query;
    }


    public function deleteData($id_artikel) {

        $query = mysqli_query($this->connection,"DELETE FROM artikel WHERE id_artikel='$id_artikel'");
        return $query;
    }

    public function updateData1($tanggal, $judul, $isi, $gambar, $id) {
        $query = mysqli_query($this->connection,"UPDATE artikel SET tanggal='$tanggal', judul='$judul', isi='$isi', gambar='$gambar' WHERE id_artikel='$id'");
    }

    public function updateData2($tanggal, $judul, $isi, $id) {
        $query = mysqli_query($this->connection,"UPDATE artikel SET tanggal='$tanggal', judul='$judul', isi='$isi', WHERE id_artikel='$id'");
    }


    //setter
    public function setId_artikel( $id_artikel ) {
        $this->id_artikel = $id_artikel;
    }

    public function setJudul( $judul ) {
        $this->judul = $judul;
    }

    public function setIsi( $isi ) {
        $this->isi = $isi;
    }

    public function setTanggal( $tanggal ) {
        $this->tanggal = $tanggal;
    }

    public function setGambar( $gambar ) {
        $this->gambar = $gambar;
    }



    //getter
    public function getId_artikel() {
        return $this->id_artikel;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getIsi() {
        return $this->isi;
    }

    public function getTanggal() {
        return $this->tanggal;
    }

    public function getGambar() {
        return $this->gambar;
    }
}

















?>