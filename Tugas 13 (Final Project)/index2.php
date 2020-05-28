<?php
    session_start();
    if ($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
?>
<?php
	include 'koneksi.php';
	$sql = "SELECT pinjam.id_pinjam AS id, user.username AS user, buku.judul AS buku FROM pinjam, user, buku WHERE pinjam.id_user=user.id_user AND pinjam.id_buku=buku.id";
	$result = mysqli_query($conn, $sql);
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
                <li><p><a href="logout.php">Logout</a></p></li>
            </ul>
        </div>
		<div id="sidebar">
			<img src="img/logo.png" alt="">
			<ul>
				<li><p>Menu</p></li>
				<li><a href="index2.php">Home</a></li>
				<li><a href="buku.php">Buku</a></li>
				<li><a href="daftar_pinjam.php">Daftar Peminjaman Buku</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2>
			<p>
				Selamat datang di Perpustakaan Universitas Udayana. Perpustakaan menyediakan berbagai buku-buku yang ada di setiap jurusan yang ada di Universitas Udayana, jurnal-jurnal, skripsi, thesis dan Desertasi.
			</p>
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