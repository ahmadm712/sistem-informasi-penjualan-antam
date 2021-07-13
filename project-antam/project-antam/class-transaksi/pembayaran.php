<?php

require_once('transaksi.php');
$pembayaran = new transaksi();


class pembayaran extends transaksi {
    
    private $no_pembayaran,
            $no_reference,
            $id_konsumen,
            $ongkir,
            $ppn,
            $bayar,
            $bukti,
            $konfirmasi,
            $tanggal,
            $hitung;


    //constructor
    public function __construct()
    {

    }

    //method
    public function insertData($no_payment, $tanggal, $noref, $ongkir, $bayar, $bukti, $konfirmasi) {
        global $pembayaran;
        $value = "INSERT INTO pembayaran(no_payment, tanggal, no_reference, ongkir, bayar, bukti_pembayaran, konfirmasi) VALUES ('$no_payment', '$tanggal', '$noref', '$ongkir', '$bayar', '$bukti', '$konfirmasi' )";
        $query = mysqli_query($pembayaran->connection, $value);

        $query = mysqli_query($pembayaran->connection,"UPDATE pemesanan SET stat='Menunggu Persetujuan' WHERE reference_no='$noref' AND stat='Di Keranjang'");

    }


    public function konfir($no_faktur, $tanggal, $ID, $noref) {
        global $pembayaran;
        $value = mysqli_query($pembayaran->connection,"UPDATE pembayaran SET  konfirmasi='YES' WHERE no_payment='$ID' ");
        $query = mysqli_query($pembayaran->connection,"UPDATE pemesanan SET stat='Diproses' WHERE reference_no='$noref' AND stat='Menunggu Persetujuan'");

        $value2 = "INSERT INTO faktur(no_faktur, tanggal, nomor_payment, nomor_reference) VALUES ('$no_faktur', '$tanggal','$ID', '$noref')";
        $query2 = mysqli_query($pembayaran->connection, $value2);
    }

    public function showForKonfir($id) {
        global $pembayaran;
        $query = mysqli_query($pembayaran->connection, "SELECT * FROM pembayaran INNER JOIN pemesanan ON pembayaran.no_reference = pemesanan.reference_no WHERE no_payment='$id'");
        $data = mysqli_fetch_assoc($query);
        $hasil = $data['id_pembeli'];
        $this->setId_konsumen($hasil);

        if($hasil = '') {
            echo '<script language="javascript">alert("Anda Tidak memiliki pesanan!"); document.location="../konsumen/index.php?page=beranda";</script>';

        }
        else {
            $id = $this->getId_konsumen();
            $query2 = mysqli_query($pembayaran->connection, "SELECT * FROM konsumen WHERE id_konsumen='$id'");
            return $query2->fetch_array();
        }
    }

    public function showForpesanan($id) {
        global $pembayaran;
        $query = mysqli_query($pembayaran->connection, "SELECT * FROM faktur INNER JOIN pemesanan ON faktur.nomor_reference = pemesanan.reference_no WHERE no_faktur='$id'");
        $data = mysqli_fetch_assoc($query);
        $hasil = $data['id_pembeli'];
        $this->setId_konsumen($hasil);

        if($hasil = '') {
            echo '<script language="javascript">alert("Anda Tidak memiliki pesanan!"); document.location="../konsumen/index.php?page=beranda";</script>';

        }
        else {
            $id = $this->getId_konsumen();
            $query2 = mysqli_query($pembayaran->connection, "SELECT * FROM konsumen WHERE id_konsumen='$id'");
            return $query2->fetch_array();
        }
    }

    public function showData() {
        global $pembayaran;
        $query = "SELECT * FROM pembayaran WHERE konfirmasi='NO'";
		$result = mysqli_query($pembayaran->connection,$query);
		return $result;
    }

    public function showDataYes() {
        global $pembayaran;
        $query = "SELECT * FROM pembayaran WHERE konfirmasi='YES'";
		$result = mysqli_query($pembayaran->connection,$query);
		return $result;
    }

    public function getBy_id($no) {
        global $pembayaran;
        $query = mysqli_query($pembayaran->connection,"SELECT  * FROM pembayaran where no_payment='$no'");
		return $query->fetch_array();
    }


    public function deleteData($id) {
        global $db;
        $query = mysqli_query($db->connection,"DELETE FROM pembayaran WHERE id='$id'");
        return $query;
    }

    public function updateData($nama,$kontak,$alamat,$id_vendor) {
        global $db;
        $query = mysqli_query($db->connection,"update vendor set nama='$nama', kontak='$kontak', alamat='$alamat' where id_vendor='$id_vendor'");
    }

    public function jumlah() {
        global $pembayaran;
        $query = mysqli_query($pembayaran->connection,"SELECT no_payment FROM pembayaran WHERE konfirmasi = 'NO' ORDER BY no_payment");
        $GET = mysqli_num_rows($query);
        $this->setHitung($GET);
    }
 



    //setter
    public function setNoreference( $no_reference ) {
        $this->no_reference = $no_reference;
    }

    public function setNo_pembayaran( $no_pembayaran ) {
        $this->no_pembayaran = $no_pembayaran;
    }

    public function setOngkir( $ongkir ) {
        $this->ongkir = $ongkir;
    }

    public function setPPN( $ppn ) {
        $this->ppn = $ppn;
    }

    public function setBayar( $bayar ) {
        $this->bayar = $bayar;
    }

    public function setHitung( $hitung ) {
        $this->hitung = $hitung;
    }

    public function setId_konsumen( $id_konsumen ) {
        $this->id_konsumen = $id_konsumen;
    }




    //getter
    public function getNoreference() {
        return $this->no_reference;
    }

    public function getNo_pembayaran() {
        return $this->no_pembayaran;
    }

    public function getOngkir() {
        return $this->ongkir;
    }

    public function getPPN() {
        return $this->ppn;
    }

    public function getBayar() {
        return $this->bayar;
    }

    public function getHitung() {
        return $this->hitung;
    }

    public function getId_konsumen() {
        return $this->id_konsumen;
    }

}









?>