<html>
    <head>
        <title>Login Smkn 1 Kertosono</title>
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
                height: 350px;
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
        <h2 style="color: white;">Login</h2>
            <input type="text" name="username" placeholder="Username" id="username" autocomplete="off"  required><br><br>
            <input type="password" name="password" placeholder="Password" id="password" required><br><br>
            <br>
            <button type="submit" name="login" >Login</button>
            <br><br><br>
            <a class="alink" href="register.php"><p>Belum punya akun?</p></a>
            
            <?php 
                if( isset($_POST['login'])) { 
                    header("Location: success.html");
                } 
            ?> 
        
        </form>
    </div>

</body>
</html>