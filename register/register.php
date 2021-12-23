<html>
    <head>
        <title>Daftar Akun</title>
        <style>

            body{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: #fff;
                background: url('bg.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .login-btn{
                background: rgba(44, 62, 60, 0.7);
                padding: 40px;
                width: 250px;
                margin: auto;
                margin-top: 80px;
                height: 500px;
                margin-left: 180x;
            }

            form{
                width: 240px;
                text-align: center;
            }

            input[type=text], input[type=password]{
                width: 240px;
                text-align: center;
                background: transparent;
                border: none;
                border-bottom: 1px solid #fff;
                font-family: sans-serif;
                font-size: 18px;
                font-weight: 240px;
                padding: 10px 0;
                transition: border 0.5s;
                outline: none;
                color: #fff;
            }

            input[type=text]:hover , input[type=password]:hover{
                border-bottom: 1px solid red;
                color: rgb(31, 112, 235);
                font-size: 20px;
                font-weight: bold;
            }

            button[type=submit]{
                border: none;
                width: 190px;
                background: white;
                color: #000;
                font-size: 16px;
                line-height: 25px;
                padding: 10px 0;
                border-radius: 15px;
                cursor: pointer;
            }


            button[type=submit]:hover{
                color: #fff;
                background-color: rgb(245, 60, 60);
            }

            h2{
                color: white;
            }

            .alink{
                text-decoration: none;
                color: #fff;
            }

            .alink:hover{
                color: rgb(238, 255, 0);
            }

            .err{
                color: rgb(0, 14, 212);
                font-size: 20px;
                font-weight: bold;
            }

        </style>
    </head>
<body>
    
    <div class="login-btn">
        <form action="" method="post">
            <h2 style="color: white;">Daftar Akun</h2>
            <input type="text" name="namadepan" placeholder="Nama Depan" id="Nama Depan" autoco autocomplete="off" required><br><br>
            <input type="text" name="namabelakang" placeholder="Nama Belakang" id="Nama Belakang" autoco autocomplete="off" required><br><br>
            <input type="text" name="email" placeholder="Alamat Email" id="Alamat Email" autocomplete="off" required><br><br>
            <input type="password" name="password" placeholder="Password" id="password" autocomplete="off" required><br><br>
            <input type="password" name="conpass" placeholder="Konfirmasi Password" id="conpass" autocomplete="off"  required><br><br>
            <br>
            <button type="submit" name="daftar" >Daftar Sekarang</button>
            <br>
            <a class="alink" href="login.php"><p>Sudah punya akun?</p></a>

            <?php 
                if(isset($_POST['daftar'])) {

                    $email = $_POST["email"]; 
                    $pass = $_POST['password'];
                    $conn = $_POST['conpass']; 

                    if(strpos($email, "mail.com") === false) { 
                        echo  '<p style="font-size: 17px; color: #e72121;"> Email anda tidak valid!!</p>'; 
                    }else if($pass !== $conn) {
                        echo  '<p style="font-size: 15px; color: #e72121;"> Password dan Konfirmasi password tidak cocok</p>';  
                    }else{
                        header("Location: success.html");
                    }
                } 
            ?>
            
        </form>

    </div>

</body>
</html>