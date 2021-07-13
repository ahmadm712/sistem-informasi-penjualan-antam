<?php

class produk {
    private $id_produk,
            $kode_produksi,
            $nama_produk,
            $kategori,
            $harga_awal,
            $harga_jual,
            $berat_kg;
    
    public $connection;

    //constructor
    public function __construct()
    {
        $this->db_connect();
    }
   
    public function db_connect()
    {
        $this->connection = mysqli_connect('localhost','root','','antam');
        if(mysqli_connect_error())
        {
            die(" Connect Failed ");
        }
    }


    public function show0() {
        global $produk;
        $query = mysqli_query($this->connection, "SELECT * FROM produk WHERE stock='0'");
        return $query;
    }

    public function getEmas1gr() {
        global $produk;
        $query = mysqli_query($this->connection, "SELECT * FROM produk WHERE berat_kg='0,001'");
        return $query->fetch_array();
    }

    public function getPerak1gr() {
        global $produk;
        $query = mysqli_query($this->connection, "SELECT * FROM produk WHERE nama_produk='Perak Murni 99.95%'");
        return $query->fetch_array();
    }

    public function update($harga, $id_produk) {
        global $produk;
        $query = mysqli_query($this->connection,"UPDATE produk SET harga_jual='$harga' WHERE id_produk='$id_produk'");

    }
    
    
    //setter
    public function setId_produk( $id_produk ) {
        $this->id_produk = $id_produk;
    }

    public function setNama_produk( $nama_produk ) {
        $this->nama_produk = $nama_produk;
    }
    public function setKategori( $kategori ) {
        $this->kategori = $kategori;
    }
    public function setHarga_awal( $harga_awal ) {
        $this->harga_awal = $harga_awal;
    }
    public function setHarga_jual( $harga_jual ) {
        $this->harga_jual = $harga_jual;
    }
    public function setBerat_kg( $berat_kg ) {
        $this->berat_kg = $berat_kg;
    }



    //getter
    public function getId_produk() {
        return $this->id_produk;
    }

    public function getNama_produk() {
        return $this->nama_produk;
    }
    public function getKategori() {
        return $this->kategori;
    }
    public function getHarga_awal() {
        return $this->harga_awal;
    }
    public function getHarga_jual() {
        return $this->harga_jual;
    }
    public function getBerat_kg() {
        return $this->berat_kg;
    }
}

















?>