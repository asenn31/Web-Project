<?php

include('process/Registers.php');
$registers = new Registers;

if(isset($_POST['register'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $level = $_POST['level'];

    $data = [
        'id' => $id,
        'username' => $username,
        'password' => $password,
        'nama_lengkap' => $nama_lengkap,
        'no_hp' => $no_hp,
        'email' => $email,
        'level' => $level
    ];
    
    if(!$id=='' || !$username=='' || !$password=='' || !$nama_lengkap=='' || !$no_hp=='' || !$email=='' || !$level==''){
        $data = [
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap,
            'no_hp' => $no_hp,
            'email' => $email,
            'level' => $level
        ];
        if($registers->register($data)){
            header('Location: login.php');
        }else{
            header('Location: registers.php');
        }
    }else{
        header('Location: register.php?submit=Kosong');
    }  
}
