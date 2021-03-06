<?php
    session_start();
    if ($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
    $user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perpustakaan Universitas Udayana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="<?= $user?>">
	<div id="batas">
        <div id="top">
            <ul>
                <li><p><a href="logout.php">Logout</a></p></li>
                <li><p><?php echo $_SESSION['username']; ?></p></li>
            </ul>
        </div>
		<div id="sidebar">
			<img src="img/logo.png" alt="">
			<ul>
				<li><p>Artikel Populer</p></li>
				<li><a href="index.php">HOME</a></li>
				<li><a href="tentang.php">TENTANG</a></li>
				<li><a href="galeri.php">GALERI</a></li>
				<li><a href="kontak.php">KONTAK</a></li>
			</ul>
		</div>

		<div id="atas">
			<img src="img/unud.jpg" style="height: 400px; width: 700px;">
			<p><b>PERPUSTAKAAN UNIVERSITAS UDAYANA</b></p>
		</div>

		<div id="menu">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="tentang.php">TENTANG</a></li>
				<li><a href="galeri.php">GALERI</a></li>
				<li><a href="kontak.php">KONTAK</a></li>
				<li><a href="">DAFTAR BUKU</a></li>
				<li><a href="">PENGUNJUNG</a></li>
			</ul>
		</div>
		<div id="tengah">
			<h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2>
			<p>
				Selamat datang di Perpustakaan Universitas Udayana. Perpustakaan menyediakan berbagai buku-buku yang ada di setiap jurusan yang ada di Universitas Udayana, jurnal-jurnal, skripsi, thesis dan Desertasi. Pengunjung dapat membaca langsung buku yang diinginkan di perpustakaan atapun meminjamnya untuk dibaca dirumah. Pengunjung dapat meminjam buku paling lama 2 minggu. Apabila buku tidak dikembalikan sesuai waktu yang ditentukan, maka peminjam akan dikenakan sanksi berupa pembayaran denda sebesar Rp 50.000 per buku. 
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