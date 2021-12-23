<html>
	<head>
		<title>Welcome</title>
		<style>
		
			*{
				margin: 0;
				padding: 0;
			}

			.wlc{
				font-size: 40px;
				font-family: fantasy;
				color: rgb(245, 245, 245);
			}

			body{
				background-image: url("bg2.png");
				background-repeat: repeat;
				
			}

			.navbar {
				position: fixed;
				display: flex;
				justify-content: right;
				align-items: center;
				flex-direction: row;
				flex-wrap: wrap;
				background-color: #ffffff;
				width: 100%;
				height: 70px;
				z-index: 1;
				box-shadow: 0 0 20px rgba(0, 0, 0, 15);
			}

			.navgbr{
				flex: 1 1 auto;
				margin-left: 5%;
				text-transform: uppercase;
				letter-spacing: 1px;
				font-weight: bold;
				font-size: 25px;
				text-decoration: none;
				color: #121313;
				font-family: cursive;
			}

			.navgbr:hover{
				color: #261bc2;
			}

			.body-content{
				width: 100%;
				padding: 20px;
				text-align: justify;
				box-sizing: border-box;
				font-size: 18px;
				line-height: 40px;
			}

			.footer{
				width: 100%;
				background: rgb(16, 16, 17);
				display: block;
			}

			.inner-footer{
				width: 95%;
				margin: auto;
				padding: 30px 10px;
				flex-direction: row;
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				justify-content: left;
			}
			
			.footer-item{
				width: 95%;
				padding: 10px 10px;
				box-sizing: border-box;
				text-align: center;
			}

			.h1-footer{
				text-align: left;
				padding: 10px 0;
				font-size: 25px;
				color: #fff;
				text-transform: uppercase;
			}

			.footer-item p{
				color: gray;
				font-size: 16px;
				text-align: justify;
				line-height: 25px;
			}

			.footer-bottom{
				padding: 10px;
				background: rgb(25, 22, 196);
				color: #fff;
				font-size: 15px;
				text-align: center;
				font-family: cursive;
			}

			button[type=submit]{
				border: none;
				width: 190px;
				background: white;
				color: #000;
				font-size: 16px;
				line-height: 25px;
				padding: 10px 0px;
				border-radius: 15px;
				cursor: pointer;
				letter-spacing: 3px;
			}

			button[type=submit]:hover{
				color: #fff;
				background-color:#dd2d2d;
			}

	</style>
	</head>
<body>
	
		<div class="navbar">
				<a href="#" class="navgbr">Xii-Rpl 1</a>
			</div>

		<br><br><br><br><br><br><br><br>

		<center>
			<h2 class="wlc">Selamat datang di Website XII-Rpl 1, SMKN Kertosono.</h2>
		</center>

		<br><br><br>

		<center>
			<a href="register//login.php">
				<button type="submit">Login</button>
			</a>
			<a href="register//register.php">
				<button type="submit">Daftar</button>
			</a>
		</center>
		
		<br><br><br><br><br><br><br><br>
		
		<div class="footer">
			<div class="inner-footer">

				<div class="footer-item">
					<h1 class="h1-footer">Smkn 1 Kertosono</h1>
					<p>
						Smk Negeri 1 Kertosono adalah salah satu sekolah menegah kejuruaan yang berada di Provinsi Jawa Timur. 
						Tepatnya di JL. Langsep No.24, Desa Pelem, Kertosono, Kabupaten Ngajuk, Jawa Timur 64314.
						Smk Negeri 1 Kertosono memiliki 6 Kompetensi keahlian antara lain : Teknik Pemesinan, Teknik Instalasi Tenaga Listrik, Tata Boga, Tata Busana, dan Rekaasa Perangkat Lunak. <br><br>
					</p>
					<h1 class="h1-footer">Kontak Kami</h1>
					<p>
						Tata Usaha Smk Negeri 1 Kertosono (0358) 551466 Kode pos 64314, Email : TU@smkn11kts.sch.id, smkn_1_kertosono@yahoo.co.id Web : smkn1kts.sch.id Senin-Jumat, 07:00 WIB - 16:00 WIB Smk Negeri 1 Kertosono
					</p>
				</div>
			</div>

			<div class="footer-bottom">
				Copyright &copy; 2020 Achmad Baihaqi. XII Rpl 1
			</div>	

		</div>
	
</body>
</html>