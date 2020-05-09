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
</script>
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
			<h2>Galeri</h2>
			<div class="galeri">
                <a href="galeri.php"><img src="img/buku1.jpg" alt=""></a>
            </div>
            <div class="galeri">
                <a href="galeri.php"><img src="img/buku2.jpg" alt=""></a>
            </div>
            <div class="galeri">
                <a href="galeri.php"><img src="img/buku3.jpg" alt=""></a>
            </div>
            <div class="galeri">
                <a href="galeri.php"><img src="img/buku4.jpg" alt=""></a>
            </div>
            <div class="galeri">
                <a href="galeri.php"><img src="img/buku5.jpg" alt=""></a>
            </div>
            <div class="galeri">
                <a href="galeri.php"><img src="img/buku6.jpg" alt=""></a>
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