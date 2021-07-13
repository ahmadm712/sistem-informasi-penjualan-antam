<?php
include "produk.php";
$produk = new produk();

class perak extends produk {

    
    //constructor
    public function __construct()
    {
    
    }

    //method
    public function insertData($id_bahan, $kode_produksi, $gambar, $nama, $stock, $berat, $harga_awal, $harga_jual, $kategori) {
        global $produk;
        $value = "INSERT INTO produk(id_produk, kode_produksi, gambar, nama_produk, stock, berat_kg, harga_awal, harga_jual, kategori) VALUES ('$id_bahan', '$kode_produksi', '$gambar', '$nama', '$stock', '$berat', '$harga_awal', '$harga_jual', '$kategori')";
        $query = mysqli_query($produk->connection, $value);
    }

    public function showData() {
        global $produk;
        $query = mysqli_query($produk->connection, "SELECT * FROM produk WHERE kategori='Perak'");
        return $query;
    }


    public function getPerak1gr() {
        global $produk;
        $query = mysqli_query($produk->connection, "SELECT * FROM produk WHERE nama_produk='perak 1 gr'");
        return $query->fetch_array();
    }

    public function getId($id_produk) {
        global $produk;
        $query = mysqli_query($produk->connection, "SELECT * FROM produk WHERE id_produk='$id_produk'");
        return $query;
    }

    public function ppn($ppn) {
        
            $jumlah = $ppn * 0.002;
            $this->setPPNperak($jumlah);
    }

    public function deleteData($id_bahan) {
        global $produksi;
        $query = mysqli_query($produksi->connection,"DELETE FROM bahan_baku WHERE id_bahan='$id_bahan'");
        return $query;
    }

    public function updateData($nama, $stock, $kg, $harga_awal, $harga_jual, $id_produk) {
        global $produk;
        $query = mysqli_query($produk->connection,"UPDATE produk SET nama_produk='$nama',stock='$stock',berat_kg='$kg',harga_awal='$harga_awal',harga_jual='$harga_jual' WHERE id_produk='$id_produk'");

    }

    public function updateKode($kode, $id_produk) {
        global $produk;
        $query = mysqli_query($produk->connection,"UPDATE produk SET kode_produksi='$kode' WHERE id_produk='$id_produk'");

    }

    public function getBy_id($id) {
        global $produk;
        $query = mysqli_query($produk->connection,"SELECT * FROM produk INNER JOIN produksi ON produk.kode_produksi = produksi.kode_produksi WHERE id_produk='$id'");
        return $query;
    }


    // setter
    public function setPPNperak( $ppn ) {
        $this->ppn = $ppn;
    }


    //getter
    public function getPPNperak() {
        return $this->ppn;
    }

}















?>