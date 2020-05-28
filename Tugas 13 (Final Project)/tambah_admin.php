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
	<title>Super Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
	<div id="batas">
        <div id="header">
            <ul>
                <li><p><a href="logout.php">Logout</a></p></li>
            </ul>
        </div>
		<div id="sidebar">
			<img src="img/logo.png" alt="">
			<ul>
				<li><p>Menu</p></li>
				<li><a href="index3.php">Home</a></li>
				<li><a href="sadmin.php">Daftar Admin</a></li>
				<li><a href="suser.php">Daftar User</a></li>
				<li><a href="sbuku.php">Daftar Buku</a></li>
			</ul>
		</div>

		<div id="content3">
			<form action="cek_admin.php" method="post">
				<fieldset>
					<legend>Tambah Admin</legend>
					<table>
						<tr>
							<td>Nama</td>
							<td><input type="text" placeholder="Masukkan Nama" name="nama"></td>
						</tr>
						<tr>
							<td>Username </td> 
							<td><input type="text" placeholder="Masukkan Username" name="username"></td>
						</tr>
						<tr>
							<td>Password </td> 
							<td><input type="text" placeholder="Masukkan Password" name="password"></td>
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