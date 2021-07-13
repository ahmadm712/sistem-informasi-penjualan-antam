<?php

class produksi {
    private $id_bahan;
    public $connection;

    public function __construct() {
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


    //setter
    public function setId_bahan( $id_bahan) {
        $this->id_bahan = $id_bahan;
    }

    //getter
    public function getId_bahan() {
        return $this->id_bahan;
    }
}

?>