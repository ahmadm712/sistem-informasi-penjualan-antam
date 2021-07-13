<?php

require_once('transaksi.php');
$pesanan = new transaksi();


class pemesanan extends transaksi {
    
    private $no_reference,
            $id_produk,
            $id_konsumen,
            $harga_total,
            $jumlah,
            $ppn,
            $stock,
            $hitung;

    //constructor
    public function __construct()
    {

    }

    //method
    public function insertData($id, $no_reference, $tanggal, $id_pembeli, $id_produk, $jumlah, $ppn, $harga_total, $status) {
        global $pesanan;
        $value = "INSERT INTO pemesanan (id, reference_no, tanggal, id_pembeli, id_produk, jumlah, ppn, harga_jual_pertama, stat) VALUES ('','$no_reference', '$tanggal', '$id_pembeli', '$id_produk', '$jumlah', '$ppn', '$harga_total', '$status' )";
        $query = mysqli_query($pesanan->connection, $value);
    }

    public function showData() {
        global $pesanan;
        $user = $_SESSION['user'];
        $result = mysqli_query($pesanan->connection, "SELECT * FROM konsumen WHERE username = '$user'");
        $data = mysqli_fetch_assoc($result);
        $hasil = $data['id_konsumen'];
        $this->setIdKonsumen($hasil);

        if($hasil = '') {
            echo '<script language="javascript">alert("Anda Tidak memiliki pesanan!"); document.location="../konsumen/index.php?page=produk-semua";</script>';

        }
        else {
            $id = $this->getIdKonsumen();
            $query = mysqli_query($pesanan->connection, "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk WHERE id_pembeli='$id' AND stat = 'Di Keranjang'");
            return $query;
        }
    }

    public function showRiwayat() {
        global $pesanan;
        $user = $_SESSION['user'];
        $result = mysqli_query($pesanan->connection, "SELECT * FROM konsumen WHERE username = '$user'");
        $data = mysqli_fetch_assoc($result);
        $hasil = $data['id_konsumen'];
        $this->setIdKonsumen($hasil);

        if($hasil = '') {

        }
        else {
            $id = $this->getIdKonsumen();
            $query = mysqli_query($pesanan->connection, "SELECT * FROM pembayaran INNER JOIN pemesanan ON pembayaran.no_reference = pemesanan.reference_no WHERE id_pembeli='$id' AND stat = 'Menunggu Persetujuan'");
            return $query;
        }
    }

    public function Menunggu() {
        global $pesanan;
        $user = $_SESSION['user'];
        $result = mysqli_query($pesanan->connection, "SELECT * FROM konsumen WHERE username = '$user'");
        $data = mysqli_fetch_assoc($result);
        $hasil = $data['id_konsumen'];
        $this->setIdKonsumen($hasil);

        if($hasil = '') {

        }
        else {
            $id = $this->getIdKonsumen();
            $query = mysqli_query($pesanan->connection, "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk WHERE id_pembeli='$id' AND stat = 'Menunggu Persetujuan'");
            return $query;
        }
    }

    public function showDiproses() {
        global $pesanan;
        $user = $_SESSION['user'];
        $result = mysqli_query($pesanan->connection, "SELECT * FROM konsumen WHERE username = '$user'");
        $data = mysqli_fetch_assoc($result);
        $hasil = $data['id_konsumen'];
        $this->setIdKonsumen($hasil);

        if($hasil = '') {

        }
        else {
            $id = $this->getIdKonsumen();
            $query = mysqli_query($pesanan->connection, "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk WHERE id_pembeli='$id' AND stat = 'Diproses'");
            return $query;
        }
    }

    public function showDikirim() {
        global $pesanan;
        $user = $_SESSION['user'];
        $result = mysqli_query($pesanan->connection, "SELECT * FROM konsumen WHERE username = '$user'");
        $data = mysqli_fetch_assoc($result);
        $hasil = $data['id_konsumen'];
        $this->setIdKonsumen($hasil);

        if($hasil = '') {

        }
        else {
            $id = $this->getIdKonsumen();
            $query = mysqli_query($pesanan->connection, "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk WHERE id_pembeli='$id' AND stat = 'Dikirim'");
            return $query;
        }
    }

    public function showSelesai() {
        global $pesanan;
        $user = $_SESSION['user'];
        $result = mysqli_query($pesanan->connection, "SELECT * FROM konsumen WHERE username = '$user'");
        $data = mysqli_fetch_assoc($result);
        $hasil = $data['id_konsumen'];
        $this->setIdKonsumen($hasil);

        if($hasil = '') {

        }
        else {
            $id = $this->getIdKonsumen();
            $query = mysqli_query($pesanan->connection, "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk WHERE id_pembeli='$id' AND stat = 'Selesai'");
            return $query;
        }
    }

    public function showFaktur() {
        global $pesanan;
        $user = $_SESSION['user'];
        $result = mysqli_query($pesanan->connection, "SELECT * FROM konsumen WHERE username = '$user'");
        $data = mysqli_fetch_assoc($result);
        $hasil = $data['id_konsumen'];
        $this->setIdKonsumen($hasil);

        
        if($hasil = '') {

        }
        else {
            $id = $this->getIdKonsumen();
            $query = mysqli_query($pesanan->connection, "SELECT * FROM faktur INNER JOIN pemesanan ON faktur.nomor_reference = pemesanan.reference_no WHERE id_pembeli='$id' AND status=''");
            return $query;
        }
    }

    public function keuangan($start, $end) {
        global $pesanan;
        $query = mysqli_query($pesanan->connection, "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk WHERE tanggal between '$start' AND '$end' ORDER BY id DESC");
        return $query;

    }

    public function upstat($no) {
        global $pesanan;
        $query = mysqli_query($pesanan->connection, "UPDATE  pemesanan  SET  stat ='Dikirim' WHERE reference_no='$no'");
    }

    public function upstat2($no) {
        global $pesanan;
        $query2 = mysqli_query($pesanan->connection, "UPDATE  faktur  SET  status ='Dikirim' WHERE nomor_reference='$no'");

    }

    public function upstat3($no) {
        global $pesanan;
        $query = mysqli_query($pesanan->connection, "UPDATE  pemesanan  SET  stat ='Selesai' WHERE id='$no'");
    }

    public function upstat4($no) {
        global $pesanan;
        $query2 = mysqli_query($pesanan->connection, "UPDATE  faktur  SET  status ='Selesai' WHERE nomor_reference='$no'");

    }

    public function Stock($stock) {
        global $pesanan;
        $query = mysqli_query($pesanan->connection,"SELECT * FROM produk WHERE stock='$stock'");
        $data = mysqli_fetch_assoc($query);
        $hasil = $this->setStock($data);

    }

    public function deleteData($id) {
        global $pesanan;
        $query = mysqli_query($pesanan->connection,"DELETE FROM pemesanan WHERE id='$id'");
        return $query;
    }

    public function updateData($nama,$kontak,$alamat,$id_vendor) {
        global $db;
        $query = mysqli_query($db->connection,"update vendor set nama='$nama', kontak='$kontak', alamat='$alamat' where id_vendor='$id_vendor'");
    }
 
    public function idKonsumen($user) {
        global $pesanan;
        $result = mysqli_query($pesanan->connection, "SELECT * FROM konsumen WHERE username = '$user'");
        $data = mysqli_fetch_assoc($result);
        $id = $data['id_konsumen'];
        $this->setIdKonsumen($id);
        $no = date('dmy');
        $this->setNo_reference($no,$id);
    }

    
    public function Harga_total($harga, $jumlah) {
        $Harga_total = $harga * $jumlah;
        $this->setHarga_total($Harga_total);
        return $Harga_total;

    }

    public function updateQty($id, $Qty) {
        global $pesanan;
        $query = mysqli_query($pesanan->connection,"UPDATE pemesanan SET jumlah='$Qty' WHERE id='$id'");

    }

    public function getBy_id($id) {
        global $pesanan;
        $query = mysqli_query($pesanan->connection,"SELECT * FROM pemesanan WHERE id='$id'");
        return $query;
    }


    //hitung cart
    public function jumlah() {
        global $pesanan;
        $query = mysqli_query($pesanan->connection,"SELECT no_payment FROM pembayaran WHERE konfirmasi = 'NO' ORDER BY no_payment");
        $GET = mysqli_num_rows($query);
        $this->setHitung($GET);
    }



    //setter
    public function setIdKonsumen( $id_konsumen ) {
        $this->id_konsumen = $id_konsumen;
    }

    public function setNo_reference($no_reference)
    {
        $this->no_reference = $no_reference;
    }

    public function setHarga_total( $harga_total ) {
        $this->harga_total = $harga_total;
    }
    
    public function setStock( $stock ) {
        $this->stock = $stock;
    }

    public function setId_produk( $id_produk ) {
        $this->id_produk = $id_produk;
    }

    public function setHitung( $hitung ) {
        $this->hitung = $hitung;
    }


    //getter
    public function getIdKonsumen() {
        return $this->id_konsumen;
    }

    public function getNo_reference()
    {
        return $this->no_reference;
    }

    public function getHarga_total() {
        return $this->harga_total;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getId_produk() {
        return $this->id_produk;
    }

    public function getHitung() {
        return $this->hitung;
    }
}









?>