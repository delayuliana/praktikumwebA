<?php
    session_start();
    if ($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin - Tambah Buku</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
	<div id="batas">
        <div id="header">
            <ul>
                <li><p><a href="logout.php">Login</a></p></li>
            </ul>
        </div>
		<div id="sidebar">
			<img src="img/logo.png" alt="">
			<ul>
				<li><p>Menu</p></li>
				<li><a href="buku.php">Buku</a></li>
				<li><a href="daftar_pinjam.php">Daftar Peminjaman Buku</a></li>
			</ul>
		</div>

		<div id="content3">
			<form action="cek_buku.php" method="post">
				<fieldset>
					<legend>Tambah Buku</legend>
					<table>
						<tr>
							<td>ID</td>
							<td><input type="text" placeholder="Masukkan Id" name="id_buku"></td>
						</tr>
						<tr>
							<td>Judul </td> 
							<td><input type="text" placeholder="Masukkan Judul" name="judul"></td>
						</tr>
						<tr>
							<td>Jenis </td> 
							<td><input type="text" placeholder="Masukkan jenis" name="jenis"></td>
						</tr>
						<tr>
							<td>Penulis</td> 
							<td><input type="text" placeholder="Masukkan Penulis" name="penulis"></td>
						</tr>
						<tr>
							<td>Stok</td> 
							<td><input type="text" placeholder="Masukkan Stok" name="stok"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit"></td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>

		<div id="clear"></div>
		<div id="footer" style="bottom: 0px;">
			<p>
	            &copy Copyright 2020<br>
	            Perpustakaan Universitas Udayana
	        </p>
	    </div>
	</div>
</body>
</html>