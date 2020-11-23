<?php
    if(isset($_GET['submit'])){
        if($_GET['submit']=='Kosong'){
            echo "<script>
                    alert('Data Gagal Dimasukkan');
                  </script>";
        }
    }
?>
<body>
    <section class="banner" id="home">
        <div class="register-card">
            <form action="prosesRegistrasi.php" method="POST">
                <input type="hidden" name="id" value="">
                <label for="username">Username</label>
                <div class="form-control">
                    <input type="text" id="username" name="username" placeholder="Username">
                </div>
                <label for="password">Password</label> 
                <div class="form-control">
                    <input type="password" id="password" name="password" placeholder="Password"> 
                </div>
                <label for="nama_lengkap">Nama Lengkap</label>
                <div class="form-control">
                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap"> 
                </div>
                <label for="no_hp">Nomor Handphone</label>
                <div class="form-control">
                    <input type="text" id="no_hp" name="no_hp" placeholder="Nomor Handphone"> 
                </div>                
                <label for="email">Alamat Email</label>
                <div class="form-control">
                    <input type="text" id="email" name="email" placeholder="Alamat Email">
                </div>
                <input type="hidden" name="level" value="User">
                <input type="submit" value="Register" name="register">                    
            </form>
            <p>Sudah punya akun? <a href="login.php"> Login sekarang</a> </p>
        </div>
    </section>
</body>