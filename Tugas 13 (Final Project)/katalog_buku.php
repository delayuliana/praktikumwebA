<?php
    session_start();
    if ($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
?>

<?php 
	$s_jenis="";
    $s_keyword="";
    $sort= 'ASC';
    $newsort= 'ASC';
    if (isset($_GET['search'])) {
        $s_jenis = $_GET['s_jenis'];
        $s_keyword = $_GET['s_keyword'];
    }
    if (isset($_GET['order'])){
      	$order = $_GET['order'];
       	$sort = $_GET['sort'];
       	if ($sort == 'DESC') {
       		$newsort = 'ASC';
       	}
       	else{
       		$newsort = 'DESC';
       	}
    }else{
       	$order = 'id_buku';
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
                <li><p><a href="index2.php">Home</a></p></li>
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

		<div id="content2">
			<ul>
				<li><h2>Katalog Buku</h2></li>
			</ul><br><br><br>
			<form action="" method="GET">
				<select class="texbox" name="s_jenis" id="s_jenis">
					<option value="">Filter</option>
					<option value="Ilmu Komputer" <?php if ($s_jenis=="Ilmu Komputer"){ echo"selected";} ?>> Ilmu Komputer </option>
					<option value="Ekonomi" <?php if ($s_jenis=="Ekonomi"){ echo"selected";} ?>> Ekonomi </option>
					<option value="Hukum" <?php if ($s_jenis=="Hukum"){ echo"selected";} ?>> Hukum </option>
					<option value="Kedokteran" <?php if ($s_jenis=="Kedokteran"){ echo"selected";} ?>> Kedokteran </option>
					<option value="Pertanian" <?php if ($s_jenis=="Pertanian"){ echo"selected";} ?>> Pertanian </option>
					<option value="Pariwisata" <?php if ($s_jenis=="Pariwisata"){ echo"selected";} ?>> Pariwisata </option>
				</select>
				<input type="text" placeholder="Keyword" name="s_keyword" id="s_keyword" value="<?php echo $s_keyword; ?>" class="input">
				<button id="search" name="search" class="btn">Cari</button>
			</form>
			
			<form action="" method="get">				
    			<table border="1" width="800px" height="450px" cellpadding="0" cellspacing="0">
			        <tr>
			            <th>No</th>
			            <th><a href="?order=id_buku&&sort=<?php echo $newsort; ?>" style="text-decoration: none; color: black;">ID Buku</a></th>
			            <th><a href="?order=judul&&sort=<?php echo $newsort; ?>" style="text-decoration: none; color: black;">Judul</a></th>
			            <th><a href="?order=jenis&&sort=<?php echo $newsort; ?>" style="text-decoration: none; color: black;">Jenis</a></th>
			            <th><a href="?order=penulis&&sort=<?php echo $newsort; ?>" style="text-decoration: none; color: black;">Penulis</a></th>
			        </tr>

			        <?php
						include "koneksi.php";
						$search_jenis = '%'.$s_jenis.'%';
						$search_keyword = '%'.$s_keyword.'%';
						$no = 1;

						$query = "SELECT * FROM buku WHERE jenis LIKE ? AND (id_buku LIKE ? OR judul LIKE ? OR jenis LIKE ? OR penulis LIKE ?) ORDER BY $order $sort";
						$sql = mysqli_prepare($conn, $query) or die(mysqli_error($conn));
						mysqli_stmt_bind_param($sql, "sssss", $search_jenis, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
						mysqli_stmt_execute($sql);
						$result = mysqli_stmt_get_result($sql);

						if (mysqli_num_rows($result) > 0){
							while ($row = mysqli_fetch_assoc($result)){
								$id_buku = $row['id_buku'];
								$judul = $row['judul'];
								$jenis = $row['jenis'];
								$penulis = $row['penulis'];
					?>

			        <?php if(mysqli_num_rows($result)>0){ ?>
			        <?php
			            $no = 1;
			            while($data = mysqli_fetch_array($result)){
			        ?>
			        <tr>
			            <td><?php echo $no++ ?></td>
			            <td><?php echo $data["id_buku"];?></td>
			            <td><?php echo $data["judul"];?></td>
			            <td><?php echo $data["jenis"];?></td>
			            <td><?php echo $data["penulis"];?></td>
			        </tr>
			    	<?php } ?>
			    	<?php } ?>
			        <?php } ?>
			        <?php } ?>
			    </table>
			    
			</form>
			<br><br>
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