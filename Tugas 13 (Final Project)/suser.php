<?php
    session_start();
    if ($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
?>
<?php
	include 'koneksi.php';
	$batas = 10;
	$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
	if ($page > 1) {
		$start = ($page * $batas) - $batas;
	}else{
		$start=0;
	}
	$sql = "SELECT * FROM user";
	$sql2 = mysqli_query($conn, $sql);
	$total = mysqli_num_rows($sql2);
	$pages = ceil($total/$batas);
	$query = "SELECT * FROM user LIMIT $start, $batas";
	$result = mysqli_query($conn, $query);
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

		<div id="content5">
			<ul>
				<li><h2>Daftar User</h2></li>
			</ul>
    		<table border="1" width= 800px" height="auto" cellpadding="0" cellspacing="0">
		        <tr>
		            <th>No</th>
		            <th>NIM</th>
			        <th>Nama</th>
			        <th>Username</th>
		            <th>Password</th>
		            <th>Email</th>
		            <th>Jenis Kelamin</th>
		            <th>Alamat</th>
		        </tr>
		        <?php if(mysqli_num_rows($result)>0){ ?>
		        <?php
		            $no = 1;
		            while($data = mysqli_fetch_array($result)){
		        ?>
		        <tr>
		            <td><?php echo $no ?></td>
		            <td><?php echo $data["nim"];?></td>
		            <td><?php echo $data["nama"];?></td>
		            <td><?php echo $data["username"];?></td>
		            <td><?php echo $data["password"];?></td>
		            <td><?php echo $data["email"];?></td>
		            <td><?php echo $data["jk"];?></td>
		            <td><?php echo $data["alamat"];?></td>
		        </tr>
		        <?php $no++; } ?>
		        <?php } ?>
		    </table>
			<br><br>
			<center>Page
				<?php for ($i=1; $i<=$pages; $i++){ ?>
					<a href="suser.php?halaman=<?php echo $i;?>" class="page"><?php echo $i; ?></a>
				<?php } ?>
			</center>
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