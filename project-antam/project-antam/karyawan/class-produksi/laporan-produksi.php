<?php
include "produksi.php";
$produksi = new produksi();

class laporan extends produksi {
    private $kode_produksi,
            $nama_produksi,
            $tanggal,
            $id_bahan,
            $satuan,
            $jumlah;

    //constructor
    public function __construct()
    {
    
    }

    //method
    public function insertData($kode_produksi, $nama, $tanggal) {
        global $produksi;
        $value = "INSERT INTO produksi (kode_produksi, nama_produksi, tanggal) VALUES  ('$kode_produksi', '$nama', '$tanggal')";
        $query = mysqli_query($produksi->connection, $value);
        session_start();
        $_SESSION['kd-produksi'] = $kode_produksi;
        $_SESSION['nama_produksi'] = $nama;
        $this->setKode_produksi($kode_produksi);
        $this->setNama_produksi($nama);
    }

    public function showData() {
        global $produksi;
        $query = mysqli_query($produksi->connection, "SELECT * FROM produksi");
        return $query;
    }

    public function showBahan() {
        global $produksi;
        $query = mysqli_query($produksi->connection, "SELECT * FROM bahan_produksi");
        return $query;
    }

    public function showBB() {
        global $produksi;
        $query = mysqli_query($produksi->connection, "SELECT * FROM bahan_baku");
        return $query;
    }

    public function deleteData($no) {
        global $produksi;
        $query = mysqli_query($produksi->connection,"DELETE FROM produksi WHERE kode_produksi='$no'");
        return $query;
    }

    public function updateData() {
        
    }

    public function getiD($id) {
        global $produksi;
        $query = mysqli_query($produksi->connection,"SELECT * FROM bahan_baku WHERE id_bahan='$id'");
		return $query->fetch_array();
    }

    public function getBy_id($id) {
        global $produksi;
        $query = mysqli_query($produksi->connection,"SELECT * FROM produksi WHERE kode_produksi='$id'");
		return $query->fetch_array();
    }
    
    public function kode() {
        global $produksi;
        $query = mysqli_query($produksi->connection, "SELECT max(kode_produksi) as kode_produksiTerbesar FROM produksi");
        $data = mysqli_fetch_array($query);
        $kode_produksi = $data['kode_produksiTerbesar'];
    
        $urutan = (int) substr($kode_produksi, 4, 4);
        $urutan++;
    
        $huruf = "PRODUKSI";
        $kode_produksi = $huruf . sprintf("%04s", $urutan);
        $this->setKode_produksi($kode_produksi);
        return $kode_produksi;
    }

//setter
public function setKode_produksi( $kode_produksi ) {
    $this->kode_produksi = $kode_produksi;
}

public function setNama_produksi( $nama_produksi ) {
    $this->nama_produksi = $nama_produksi;
}

//getter
public function getKode_produksi() {
    return $this->kode_produksi;
}

public function getNama_produksi() {
    return $this->nama_produksi;
}

}













?>