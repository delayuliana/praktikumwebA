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
			<form action="edit_user.php" method="post">
				<fieldset>
					<legend>Profil</legend>
					<table>
						<tr>
							<td>NIM</td>
							<td><?php echo $row['nim'];?></td>
						</tr>
						<tr>
							<td>Nama </td> 
							<td><?php echo $row['nama'];?></td>
						</tr>
						<tr>
							<td>Username </td> 
							<td><?php echo $row['username'];?></td>
						</tr>
						<tr>
							<td>Password</td> 
							<td><?php echo $row['password'];?></td>
						</tr>
						<tr>
							<td>Email</td> 
							<td><?php echo $row['email'];?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td> 
							<td><?php echo $row['jk'];?></td>
						</tr>
						<tr>
							<td>Alamat</td> 
							<td><?php echo $row['alamat'];?></td>
						</tr>
					</table>
					<button>Edit Profil</a></button>
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