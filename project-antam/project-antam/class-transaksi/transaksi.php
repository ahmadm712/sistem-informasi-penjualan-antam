<?php

class transaksi {
    private $tanggal,
            $no_reference;
    
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


    //setter
    public function setTanggal( $tanggal ) {
        $this->tanggal = $tanggal;
    }

    public function setNo_reference( $no_reference ) {
        $this->no_reference = $no_reference;
    }



    //getter
    public function getTanggal() {
        return $this->tanggal;
    }

    public function getNo_reference() {
        return $this->no_reference;
    }
}

















?>