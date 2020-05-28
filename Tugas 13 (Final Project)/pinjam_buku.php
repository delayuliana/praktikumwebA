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
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
	<div id="batas">
        <div id="header">
            <ul>
                <li><p><a href="logout.php">Logout</a></p></li>
                <li><p><?php echo $_SESSION['username']; ?></p></li>
            </ul>
        </div>
		<div id="sidebar">
			<img src="img/logo.png" alt="">
			<ul>
				<li><p>Menu</p></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="profil_user.php">Profil</a></li>
				<li><a href="katalog_buku.php">Katalog Buku</a></li>
				<li><a href="pinjam_buku.php">Pinjam Buku</a></li>
			</ul>
		</div>

		<div id="content3">
			<form action="user_pinjam.php" method="POST">
				<fieldset>
					<legend>Form Pinjam Buku</legend>
					<table>
						<tr>
							<td>Username </td> 
							<td><input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>"></td>
						</tr>
						<tr>
							<td>ID Buku </td> 
							<td><input type="text" placeholder="Masukkan Id" name="id_buku"></td>
						</tr>
						
						<tr>
							<td>Tgl Pinjam</td> 
							<td><input type="date" name="tgl_pinjam"></td>
						</tr>
						<tr>
							<td>Tgl Kembali</td> 
							<td><input type="date" name="tgl_kembali"></td>
						</tr>
					</table>
					<button>Pinjam</a></button>
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