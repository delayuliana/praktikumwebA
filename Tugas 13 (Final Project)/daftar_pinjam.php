<?php
    session_start();
    if ($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
?>
<?php
	include 'koneksi.php';
	$sql = "SELECT * FROM pinjam";
	$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin - Daftar Peminjam</title>
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

		<div id="content4">
			<form action="tambah_buku.php" method="get">
				<h2>Daftar Peminjam Buku</h2>
    			<table border="1" width="500px" height="auto" cellpadding="0" cellspacing="0">
			        <tr>
			            <th>No</th>
			            <th>Username</th>
			            <th>Judul Buku</th>
			            <th>Tgl Pinjam</th>
			            <th>Tgl Kembali</th>
			            <th>Action</th>
			        </tr>
			        <?php if(mysqli_num_rows($result)>0){ ?>
			        <?php
			        	$no = 1;
			            while($data = mysqli_fetch_array($result)){
			        ?>
			        <tr>
			        	<td><?php echo $no++?></td>;
			            <td><?php echo $data["id_user"]; ?></td>
			            <td><?php echo $data["id_buku"]; ?></td>
			            <td><?php echo $data["tgl_pinjam"]; ?></td>
			            <td><?php echo $data["tgl_kembali"]; ?></td>
			            <td>
			                <a href="cek_pinjam.php">Ya</a> |
			                <a href="#">Tidak</a>
			            </td>
			        </tr>
			        <?php } ?>
			        <?php } ?>
			    </table>
			</form>
		</div>

		<div id="clear"></div>
		<div id="footer" style="bottom: 0px;" >
			<p>
	            &copy Copyright 2020<br>
	            Perpustakaan Universitas Udayana
	        </p>
	    </div>
	</div>
</body>
</html>