<?php

include('Connection.php');

class Logout extends Connection{
    function logouts(){
        session_start(); // Start session nya 
        session_destroy();
        header('Location: login.php');
    }
}