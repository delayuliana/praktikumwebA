<?php
	include "koneksi.php";
	$id_mhs	= $_GET['nim'];
	$mhs	= mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$id_mhs'");
	$row	= mysqli_fetch_array($mhs);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<style>
		#daftar{
			background-image: url("aa.jpg");
			background-size: 550px 650px;
			border:5px solid #ccc;
			margin:125px 400px;
			width:500px;
			height:400px;
			padding:10px;
			border-radius:0px;
		}
		.title{
			font-family: Clarendon;
			font-size: 150%;
			color: #005266;
			font-weight: bold;
		}
		.texbox{
			background: #fff;
			border:1px solid #ccc;
			height:25px;
		}
		.texarea{
			background: #fff;
			border:1px solid #ccc;
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
		body{
			background-image: url("aaa.jpg");
			background-size: 1500px 700px;
		}
	</style>
</head>
<body>
	<div class="body">
		<div id="daftar">
			<div class="title"> 
				<p align="center" >FORM EDIT DATA</p> 
			</div>
			<input type="hidden" value="<?php echo $row['id'];?>" name="id">
			<table border="0px">
				<form action="update.php" method="post">
					<tr>
						<td>NIM </td> 
						<td>:</td> 
						<td><input type="text" name="nim" size="11" class="texbox" value="<?php echo $row['nim'];?>"></td>
					</tr>

					<tr>
						<td>Nama </td> 
						<td>:</td> 
						<td><input name="nama" size="25" class="texbox" value="<?php echo $row['nama'];?>"></td>
					</tr>

					<tr>
						<td>Jenis Kelamin </td>
						<td>:</td>
						<td><select name="jk" class="texbox" value="<?php echo $row['jk'];?>">
							<option value="Pilih">--Pilih--</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select></td>
					</tr>

					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td><input type="date" name="tgl_lahir" size="25" class="texbox" value="<?php echo $row['tgl_lahir'];?>"></td>
					</tr>

					<tr>
						<td>Agama</td>
						<td>:</td>
						<td><select name="agama" class="texbox" value="<?php echo $row['agama'];?>">
							<option value="Pilih">--Pilih--</option>
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Hindu">Hindu</option>
							<option value="Buddha">Buddha</option>
						</select></td>
					</tr>

					<tr>
						<td>Alamat</td> 
						<td>:</td>
						<td><textarea name="alamat" cols="25" rows="3" class="texarea" value="<?php echo $row['alamat'];?>"></textarea></td>
					</tr>

					<tr>
						<td><input type="submit" name="submit" value="Simpan" class="btn"></td>
					</tr>
				</form>
			</table>
		</div>
	</div>
</body>
</html>