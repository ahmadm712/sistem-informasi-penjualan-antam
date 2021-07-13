<?php
include "produksi.php";
$produksi = new produksi();

class bahan_baku extends produksi {
    private $nama,
            $satuan,
            $id_vendor,
            $stock;

    //constructor
    public function __construct()
    {
    
    }

    //method
    public function insertData($id_bahan, $nama, $stock, $satuan, $id_vendor) {
        global $produksi;
        $value = "INSERT INTO bahan_baku (id_bahan, nama_bahan, stock, satuan, id_vendor) VALUES  ('$id_bahan', '$nama', '$stock', '$satuan', '$id_vendor')";
        $query = mysqli_query($produksi->connection, $value);
    }

    public function showData() {
        global $produksi;
        $query = mysqli_query($produksi->connection, "SELECT * FROM bahan_baku");
        return $query;
    }

    public function show0() {
        global $produksi;
        $query = mysqli_query($produksi->connection, "SELECT * FROM bahan_baku WHERE stock='0'");
        return $query;
    }


    public function deleteData($id_bahan) {
        global $produksi;
        $query = mysqli_query($produksi->connection,"DELETE FROM bahan_baku WHERE id_bahan='$id_bahan'");
        return $query;
    }

    public function updateData($nama, $stock, $satuan ,$id_bahan) {
        global $produksi;
        $query = mysqli_query($produksi->connection,"UPDATE bahan_baku SET nama_bahan ='$nama', stock ='$stock', satuan ='$satuan' WHERE id_bahan= '$id_bahan' ");
        
    }

    public function updateVendor($id_vendor,$id_bahan) {
        global $produksi;
        $query = mysqli_query($produksi->connection,"UPDATE bahan_baku SET id_vendor ='$id_vendor' WHERE id_bahan= '$id_bahan' ");
        
    }
    
    public function getBy_id($id) {
        global $produksi;
        $query = mysqli_query($produksi->connection,"SELECT * FROM bahan_baku INNER JOIN vendor ON bahan_baku.id_vendor = vendor.id_vendor WHERE id_bahan='$id'");
        return $query;

    }
}















?>