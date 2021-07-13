<?php

class contact {
    private $id,
            $nama,
            $no_tlpn,
            $email,
            $pesan,
            $count;
    
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

    //method
    public function insertData($id, $nama, $email, $tlpn, $pesan, $count) {
        $value = "INSERT INTO contact_us (id, nama, email, tlpn, pesan, count) VALUES  ('', '$nama', '$email', '$tlpn', '$pesan','$count')";
        $query = mysqli_query($this->connection, $value);
    }

    public function showData() {
        $query = "SELECT * FROM contact_us WHERE count = '0'";
        $result = mysqli_query($this->connection,$query);
        return $result;
    }

    public function showAllData() {
        $query = "SELECT * FROM contact_us";
        $result = mysqli_query($this->connection,$query);
        return $result;
    }

    public function GetId($id) {
        $query = "SELECT * FROM contact_us WHERE id='$id' ";
        $result = mysqli_query($this->connection,$query);
        // $get = $result->fetch_array();
        $data = mysqli_fetch_assoc($result);
        
        $id = $data['id'];
        $nama = $data['nama'];
        $email = $data['email'];
        $tlpn = $data['tlpn'];
        $pesan = $data['pesan'];
        
        // $this->setNama($nama);
        // $this->setEmail($email);
        // $this->setNotlpn($tlpn);
        // $this->setPesan($pesan);

        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['na'] = $nama;
        $_SESSION['em'] = $email;
        $_SESSION['tl'] = $tlpn;
        $_SESSION['pe'] = $pesan;
        echo '<script language="javascript"> document.location="../karyawan/index.php?page=pesan";</script>';

    }

    public function jumlah() {
        $query = mysqli_query($this->connection,"SELECT id FROM contact_us WHERE count = '0' ORDER BY id");
        $GET = mysqli_num_rows($query);
        $this->setCount($GET);
    }

    public function update($id) {
        $query = mysqli_query($this->connection,"UPDATE contact_us SET  count ='1' WHERE id= '$id'");
    }


    //setter
    public function setCount( $count ) {
        $this->count = $count;
    }

    public function setNama( $nama ) {
        $this->nama = $nama;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function setNotlpn( $no_tlpn ) {
        $this->no_tlpn = $no_tlpn;
    }

    public function setPesan( $pesan ) {
        $this->pesan = $pesan;
    }



    //getter
    public function getCount() {
        return $this->count;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNOtlpn() {
        return $this->no_tlpn;
    }

    public function getPesan() {
        return $this->pesan;
    }
}

















?>