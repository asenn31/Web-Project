<?php

include('Connection.php');

class Registers extends Connection {

    function register($data)
    {
        $sql = 'INSERT INTO users (username, password, nama_lengkap, no_hp, email, level) VALUES ("'.$data['username'].'" , "'.$data['password'].'" , "'.$data['nama_lengkap'].'" , "'.$data['no_hp'].'" , "'.$data['email'].'" , "'.$data['level'].'")';
        $query = mysqli_query($this->connect,$sql);
        return  $query;
    }

    function getData()
    {
        $sql = 'SELECT * FROM users';
        $query = mysqli_query($this->connect, $sql);
        $data_users = [];
        while($data = mysqli_fetch_array($query)){
            $data_users[] = $data;
        }
        return $data_users;    
    }

}