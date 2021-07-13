<?php
include "produk.php";
$produk = new produk();

class emas extends produk {
    private $ppn;


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
        $query = mysqli_query($produk->connection, "SELECT * FROM produk WHERE kategori='Emas'");
        return $query;
    }


    public function deleteData($id_produk) {
        global $produk;
        $query = mysqli_query($produk->connection,"DELETE FROM produk WHERE id_produk='$id_produk'");
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

    public function getId($id_produk) {
        global $produk;
        $query = mysqli_query($produk->connection, "SELECT * FROM produk WHERE id_produk='$id_produk'");
        return $query;
    }

    
    public function getBy_id($id) {
        global $produk;
        $query = mysqli_query($produk->connection,"SELECT * FROM produk INNER JOIN produksi ON produk.kode_produksi = produksi.kode_produksi WHERE id_produk='$id'");
        return $query;
    }

    public function ppn($ppn) {
        global $produk;
        $query = $_SESSION['user'];
        $result = mysqli_query($produk->connection, "SELECT * FROM konsumen WHERE username = '$query'");
        $data = mysqli_fetch_assoc($result);
        $hasil = $data['no_npwp'];
        $id = $data['no_npwp'];

        if ($hasil == '') {
            $jumlah = $ppn * 0.009;
            $this->setPPN($jumlah);
        }
        else {
            $jumlah = $ppn * 0.0045;
            $this->setPPN($jumlah);
        }
    }

    public function setPPN( $ppn ) {
        $this->ppn = $ppn;
    }


    //getter
    public function getPPN() {
        return $this->ppn;
    }
}















?>