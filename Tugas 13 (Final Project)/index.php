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
	<link rel="stylesheet" type="text/css" href="css/style.css">
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

		<div id="atas">
			<img src="img/unud.jpg" style="height: 400px; width: 700px;">
			<p><b>PERPUSTAKAAN UNIVERSITAS UDAYANA</b></p>
		</div>
		<div>
			<div class="content_bawah">
			<h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2><br>
			<p>
				Selamat datang di Perpustakaan Universitas Udayana. Perpustakaan menyediakan berbagai buku-buku yang ada di setiap jurusan yang ada di Universitas Udayana, jurnal-jurnal, skripsi, thesis dan Desertasi.
			</p><br>
		</div>
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