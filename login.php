<?php
    session_start();
    if(isset( $_SESSION['level'])){
        if($_SESSION['level'] == 'Admin'){
            header('Location: pageAdmin.php');
        }
        else{
            header('Location: pageUser.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Zasen Kost - Masuk atau Daftar </title>
    <link rel="icon" href="image/Home.png">
</head>
<body>
    <section class="banner" id="home">
        <div class="login-card">
            <form action="prosesLogin.php" method="POST">
                <input type="hidden" name="id" value="">
                <label for="username">Username</label>
                <div class="form-control">    
                    <input type="text" id="username" name="username" placeholder="Input Username.."> 
                </div>
                <label for="password">Password</label>
                <div class="form-control">
                    <input type="password" id="password" name="password" placeholder="Input Password..">
                </div>
                <input type="submit" value="Login">    
            </form>
            <p> Belum punya akun Zasen Kost? <a href="register.php"> Daftar Sekarang </a> </p>
        </div>
    </section>
</body>