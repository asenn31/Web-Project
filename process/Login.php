<?php

include('Connection.php');

class Login extends Connection{
    function logins($data){
        $sql = 'SELECT * FROM users where username = "'.$data['username'].'" and password = "'.$data['password'].'"';
        $query = mysqli_query($this->connect, $sql);
        $data = mysqli_fetch_array($query);
        return $data;    
    }
}