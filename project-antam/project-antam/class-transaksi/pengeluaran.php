<?php

require_once('transaksi.php');
$pengeluaran = new transaksi();


class pengeluaran extends transaksi {
    
    private String 
            $id_vendor,
            $alamat;

    //constructor
    public function __construct()
    {

    }

    //method
    public function insertData($id, $tanggal, $pembelian, $jumlah, $harga_total, $id_vendor, $keterangan) {
        global $pengeluaran;
        $value = "INSERT INTO pengeluaran(id, tanggal, pembelian, jumlah, harga_total, id_vendor, keterangan) VALUES ('$id', '$tanggal', '$pembelian', '$jumlah', '$harga_total', '$id_vendor','$keterangan')";
        $query = mysqli_query($pengeluaran->connection, $value);
    }

    public function showData() {
        global $pengeluaran;
        $query = "SELECT * FROM pengeluaran";
		$result = mysqli_query($pengeluaran->connection,$query);
		return $result;
    }

    public function getBy_id($id) {
        global $pengeluaran;
        $query = mysqli_query($pengeluaran->connection,"SELECT * FROM pengeluaran INNER JOIN vendor ON pengeluaran.id_vendor = vendor.id_vendor WHERE id='$id'");
		return $query;
    }


    public function deleteData($id) {
        global $pengeluaran;
        $query = mysqli_query($pengeluaran->connection,"DELETE FROM pengeluaran WHERE id='$id'");
        return $query;
    }

    public function updateData( $tanggal, $pembelian, $jumlah, $harga_total, $keterangan, $id) {
        global $pengeluaran;
        $query = mysqli_query($pengeluaran->connection,"UPDATE pengeluaran SET tanggal='$tanggal',pembelian='$pembelian',jumlah='$jumlah',harga_total='$harga_total',keterangan='$keterangan' WHERE id='$id'");
    }
 
    public function updateVendor($id_vendor,$id) {
        global $pengeluaran;
        $query = mysqli_query($pengeluaran->connection,"UPDATE pengeluaran SET id_vendor ='$id_vendor' WHERE id= '$id' ");
        
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