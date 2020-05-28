<?php
	if (isset($_GET['pesan'])){
		if ($_GET['pesan'] == "logout") {
			echo '<script>alert("Anda berhasil logout");window.location ="home.php";</script>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perpustakaan Universitas Udayana</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<div id="batas">

        <div id="header">
            <ul>
                <li><p><a href="login.php">Login</a></p></li>
                <li><p><a href="home.php">Home</a></p></li>
            </ul>
        </div>
		<div id="sidebar">
			<img src="img/logo.png" alt="">
			<ul>
				<li><p style="font-size: 30px;">Perpustakaan Universitas Udayana</p></li>
			</ul>
		</div>
		<div id="atas">
			<img src="img/unud.jpg" style="height: 300px; width: 500px;">
		</div>
		<div id="daftar_content">
			<form action="cek_daftar.php" method="post">
				<fieldset>
					<legend>Pendaftaran</legend>
					<table>
						<tr>
							<td><legend>NIM</legend></td>
							<td><input type="text" placeholder="Masukkan NIM" name="nim"></td>
						</tr>
						<tr>
							<td>Nama </td> 
							<td><input type="text" placeholder="Masukkan Nama" name="nama"></td>
						</tr>
						<tr>
							<td>Username </td> 
							<td><input type="text" placeholder="Masukkan Username" name="username"></td>
						</tr>
						<tr>
							<td>Password</td> 
							<td><input type="password" placeholder="Masukkan Password" name="password"></td>
						</tr>
						<tr>
							<td>Email</td> 
							<td><input type="text" placeholder="Masukkan Email" name="email"></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td> 
							<td><input type="radio" name="jk" value="l">Laki-laki
								<input type="radio" name="jk" value="p">Perempuan
							</td>
						</tr>
						<tr>
							<td>Alamat</td> 
							<td><textarea name="alamat"></textarea>
						</tr>
						<tr>
							<td colspan="2"><input type="submit"></td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>

		<div class="content_bawah">
			<p>
				Selamat datang di Perpustakaan Universitas Udayana. Perpustakaan menyediakan berbagai buku-buku yang ada di setiap jurusan yang ada di Universitas Udayana, jurnal-jurnal, skripsi, thesis dan Desertasi.
			</p><br>
			<h4>CONTACT US</h2>
            <p>
                Nomor Telepon: (0361)701954<br>
                Nomor Fax:  (0361) 701907<br>
                E-mail: perpustakaan@unud.ac.id<br>
                Alamat : Kampus Bukit, Jl. Raya Kampus Unud Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361
            </p>
		</div>
		<div id="clear"></div>
		<div id="footer">
			<p>
	            &copy Copyright 2020<br>
	            Perpustakaan Universitas Udayana
	        </p>
	    </div>
	</div>
</body>
</html>