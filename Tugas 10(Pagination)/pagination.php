<style>
	#anggota{
		background-image:url("aa.jpg");
		border:1px solid #ccc;
		margin:auto;
		width:800px;
		height:100%;
		padding:4px;
		border-radius:3px;
	}
	.latar{
		background-image: url("aaa.jpg");
		background-size: 100%;
	}
	.title{
		font-family: Clarendon;
		font-size: 150%;
		color: #005266;
		font-weight: bold;
	}
	.tabel{
		border:1px solid #ccc;
	}
	#tr{
		border:1px solid #ccc;
		background:#444;
		color:fff;
		padding:12px;
		text-align:center;
	}
	.btn{
		width:100px;
		height:50px;
		color:#099;
		font-weight:bold;
		padding: 7px;
	}
	.page{
		text-decoration: none;
		padding: 5px;
	}
</style>

<div class="latar">
<div id="anggota">
	<div class="title"> <p align="center">DAFTAR NAMA ANGGOTA</p> </div>
	<?php
		include "koneksi.php";
		$batas = 3;
		$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
		if ($page > 1) {
			$start = ($page * $batas) - $batas;
		}else{
			$start=0;
		}
		$sql = "SELECT * FROM mahasiswa";
		$sql2 = mysqli_query($conn, $sql);
		$total = mysqli_num_rows($sql2);
		$pages = ceil($total/$batas);
		$query = "SELECT * FROM mahasiswa LIMIT $start, $batas";
		$result = mysqli_query($conn, $query);

		echo"<table border='1px' align='center' cellpadding='8'>";
			echo"<tr id='tr'>";
				echo"<td>No</td>";
				echo"<td>NIM</td>";
				echo"<td>Nama</td>";
				echo"<td>Jenis Kelamin</td>";
				echo"<td>Tanggal Lahir</td>";
				echo"<td>Agama</td>";
				echo"<td>Alamat</td>";
			echo"</tr>";
			while ($row = mysqli_fetch_assoc($result))
			{
				echo"<tr>";
				echo"<td>".$row['id']."</td>";
				echo"<td>".$row['nim']."</td>";
				echo"<td>".$row['nama']."</td>";
				echo"<td>".$row['jk']."</td>";
				echo"<td>".$row['tgl_lahir']."</td>";
				echo"<td>".$row['agama']."</td>";
				echo"<td>".$row['alamat']."</td>";	 
				echo"</tr>";
			}
		echo"</table>";
	?>
	<br><br>
	<center>Page
		<?php for ($i=1; $i<=$pages; $i++){ ?>
			<a href="pagination.php?halaman=<?php echo $i;?>" class="page"><?php echo $i; ?></a>
		<?php } ?>
	</center>
</div>
</div>