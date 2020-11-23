<?php

class Connection {

    public $connect;
    private $server = "localhost";
    private $username = "root";
    private $password = '';
    private $dbname = 'zasen_kost';

    public function __construct(){
        $this->connect = mysqli_connect($this->server,$this->username, $this->password, $this->dbname);
        if( !$this->connect ){
            die("Failed to connect to the database : ". mysqli_connect_error());
        }
    }
}