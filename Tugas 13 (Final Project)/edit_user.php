<?php
    session_start();
    if ($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
?>

<?php
	include 'koneksi.php';
	$user = $_SESSION['username'];
	$sql = mysqli_query($conn, "SELECT * FROM user WHERE username='$user'");
	$row	= mysqli_fetch_array($sql);
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
			<form action="update_user.php" method="POST">
				<fieldset>
					<legend>Edit Profil</legend>
					<table>
						<tr>
							<td>Username </td> 
							<td><input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>"></td>
						</tr>
						<tr>
							<td>NIM</td>
							<td><input type="text" placeholder="Masukkan NIM" name="nim"></td>
						</tr>
						<tr>
							<td>Nama </td> 
							<td><input type="text" placeholder="Masukkan Nama" name="nama"></td>
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