<?php

class user {
    private $nama,
            $no_tlpn;
    
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
    public function setNama( $nama ) {
        $this->nama = $nama;
    }

    public function setNo_tlpn( $no_tlpn ) {
        $this->no_tlpn = $no_tlpn;
    }



    //getter
    public function getNama() {
        return $this->nama;
    }

    public function getNo_tlpn() {
        return $this->no_tlpn;
    }
}

















?>