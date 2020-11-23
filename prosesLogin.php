<?php
    session_start();
    include('process/Login.php');

    $login = new Login;

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

    $users = $login->logins($data);

    if(!empty($users)){
        $_SESSION['level'] = $users['level'];
        if($_SESSION['level'] == 'Admin'){
            header('Location: pageAdmin.php');
        }
        else{
            header('Location: pageUser.php');
        }
    }
    else{
        header('Location: login.php');  
    }