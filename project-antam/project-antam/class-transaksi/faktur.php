<?php

require_once('transaksi.php');
$faktur = new transaksi();


class faktur extends transaksi {
    
    private $no_faktur,
            $no_payment,
            $no_reference,
            $tanggal;

    //constructor
    public function __construct()
    {

    }

    //method
    public function insertFaktur($no_faktur, $tanggal, $no_payment, $noref) {
        global $pembayaran;
        $value = "INSERT INTO faktur(no_faktur, tanggal, nomor_reference, nomor_payment) VALUES ('$no_faktur', '$tanggal','$no_payment', '$noref')";
        $query = mysqli_query($pembayaran->connection, $value);

    }

    public function showfaktur() {
        
    }

    public function showData() {
        global $faktur;
        $query = "SELECT * FROM faktur WHERE status =''";
		$result = mysqli_query($faktur->connection,$query);
		return $result;
    }
    
    public function showData2() {
        global $faktur;
        $query = "SELECT * FROM faktur WHERE status ='Dikirim'";
		$result = mysqli_query($faktur->connection,$query);
		return $result;
    }

    public function showData3() {
        global $faktur;
        $query = "SELECT * FROM faktur WHERE status ='Selesai'";
		$result = mysqli_query($faktur->connection,$query);
		return $result;
    }
    

    public function getBy_id($no) {
        global $faktur;
        $query = mysqli_query($faktur->connection,"SELECT  * FROM faktur WHERE no_faktur ='$no'");
        $data = mysqli_fetch_assoc($query);
        $hasil = $data['nomor_reference'];
        $this->setNo_reference($hasil);

        if($hasil = '') {
            echo '<script language="javascript">alert("Anda Tidak memiliki pesanan!"); document.location="../konsumen/index.php?page=produk-semua";</script>';

        }
        else {
            $id = $this->getNo_reference();
            $query2 = mysqli_query($faktur->connection, "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk INNER JOIN pembayaran ON pemesanan.reference_no = pembayaran.no_reference WHERE reference_no='$id' AND stat = 'Diproses'");
            return $query2;
            
        }
              
    }

    public function getBy_id2($no) {
        global $faktur;
        $query = mysqli_query($faktur->connection,"SELECT  * FROM faktur WHERE no_faktur ='$no'");
        return $query->fetch_array();
    }

    public function getBy_id3($no) {
        global $faktur;
        $query = mysqli_query($faktur->connection,"SELECT  * FROM faktur WHERE no_faktur ='$no'");
        $data = mysqli_fetch_assoc($query);
        $hasil = $data['nomor_reference'];
        $this->setNo_reference($hasil);

        if($hasil = '') {
            echo '<script language="javascript">alert("Anda Tidak memiliki pesanan!"); document.location="../konsumen/index.php?page=produk-semua";</script>';

        }
        else {
            $id = $this->getNo_reference();
            $query2 = mysqli_query($faktur->connection, "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk INNER JOIN pembayaran ON pemesanan.reference_no = pembayaran.no_reference WHERE reference_no='$id' AND stat = 'Dikirim'");
            return $query2;
            
        }
              
    }

    public function getBy_id4($no) {
        global $faktur;
        $query = mysqli_query($faktur->connection,"SELECT  * FROM faktur WHERE no_faktur ='$no'");
        $data = mysqli_fetch_assoc($query);
        $hasil = $data['nomor_reference'];
        $this->setNo_reference($hasil);

        if($hasil = '') {
            echo '<script language="javascript">alert("Anda Tidak memiliki pesanan!"); document.location="../konsumen/index.php?page=produk-semua";</script>';

        }
        else {
            $id = $this->getNo_reference();
            $query2 = mysqli_query($faktur->connection, "SELECT * FROM pemesanan INNER JOIN produk ON pemesanan.id_produk = produk.id_produk INNER JOIN pembayaran ON pemesanan.reference_no = pembayaran.no_reference WHERE reference_no='$id' AND stat = 'Selesai'");
            return $query2;
            
        }
              
    }

    public function penyebut($nilai) {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " ". $huruf[$nilai];
        } else if ($nilai <20) {
            $temp = $this->penyebut($nilai - 10). " belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai/10)." puluh". $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai/100) . " ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai/1000) . " ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai/1000000) . " juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai/1000000000) . " milyar" . $this->penyebut(fmod($nilai,1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai/1000000000000) . " trilyun" .$this-> penyebut(fmod($nilai,1000000000000));
        }     
        return $temp;
    }
    
    public function terbilang($nilai) {
        if($nilai<0) {
            $hasil = "minus ". trim($this->penyebut($nilai));
        } else {
            $hasil = trim($this->penyebut($nilai));
        }     		
        return $hasil;
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

    public function setNo_faktur( $no_faktur ) {
        $this->no_faktur = $no_faktur;
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

    public function getNo_faktur() {
        return $this->no_faktur;
    }

}









?>