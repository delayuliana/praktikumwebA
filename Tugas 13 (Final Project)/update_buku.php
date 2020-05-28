<?php
    session_start();
    if ($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
?>

<?php
	include 'koneksi.php';
	$id_buku = $_GET['id_buku'];
	$sql = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$id_buku'");
	$row	= mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin - Edit Buku</title>
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
			<form action="edit_buku.php" method="post">
				<fieldset>
					<legend>Edit Buku</legend>
					<table>
						<tr>
							<td>ID</td>
							<td><input type="text" name="id_buku" value="<?php echo $row['id_buku'];?>"></td>
						</tr>
						<tr>
							<td>Judul </td> 
							<td><input type="text" name="judul" value="<?php echo $row['judul'];?>"></td>
						</tr>
						<tr>
							<td>Jenis </td> 
							<td><input type="text" name="jenis" value="<?php echo $row['jenis'];?>"></td>
						</tr>
						<tr>
							<td>Penulis</td> 
							<td><input type="text" name="penulis" value="<?php echo $row['penulis'];?>"></td>
						</tr>
						<tr>
							<td>Stok</td> 
							<td><input type="text" name="stok" value="<?php echo $row['stok'];?>"></td>
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