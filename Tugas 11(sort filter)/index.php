<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sorting Dan Filter</title>
	<style>
		h2{
			color: #005266;
			font-weight: bold;
			margin-top: 30px;
		}
		table{
			margin-top: 7px;
		}
		.tr{
			margin-top: 10px;
			border:solid #ccc;
			background:grey;
			padding:12px;
			text-align:center;
		}
		.texbox{
			background: #fff;
			border:1px solid #ccc;
			height:29px;
			margin-left: 281px;
		}
		.input{
			border:1px solid #ccc;
			height:25px;
		}
		.btn{
			width:85px;
			height:30px;
			color:#099;
			font-weight:bold;
			margin-left:30px;
		}
		.btn:hover{
			background:#333;
			color:#fff;
			font-weight:bold;
			cursor:pointer;
			border:2px solid #099;
		}
	</style>
</head>
<body>
	<h2 align="center">DAFTAR BUKU</h2><br>
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
	
	<table border='1px' align='center' cellpadding='8'>
		<thead>
			<tr class="tr">
				<td style="color: white;">No</td>
				<td><a href="?order=id_buku&&sort=<?php echo $newsort; ?>" style="text-decoration: none; color: white;">Id Buku </a></td>
				<td><a href="?order=judul&&sort=<?php echo $newsort; ?>" style="text-decoration: none; color: white">Judul</a></td>
				<td><a href="?order=jenis&&sort=<?php echo $newsort; ?>" style="text-decoration: none; color: white">Jenis Buku</a></td>
				<td><a href="?order=penulis&&sort=<?php echo $newsort; ?>" style="text-decoration: none; color: white"> Penulis </a></td>
			</tr>
		</thead>
		<tbody>
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
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $id_buku; ?></td>
					<td><?php echo $judul; ?></td>
					<td><?php echo $jenis; ?></td>	
					<td><?php echo $penulis; ?></td>
				</tr>
				<?php } } else { ?>
					<tr>
						<td colspan="5" align="center">Tidak ada data yang ditemukan</td>
					</tr>
				<?php } ?>
		</tbody>
	</table>
</body>
</html>
