<?php

include('process/Logout.php');
$users = new Logout;

if(isset($_GET['status'])){
    $users->logouts();
}