<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Login</title>
	<style type="text/css">
		* {
			padding: 0px;
			margin: 0px;
			font-family: sans-serif;
		}
		#latar{
			background-image: url("img/aa.jpg");
		}
		#content {
			background-image: url("img/a.jpg");
			background-size: 600px 500px;
			border: 3px solid #ccc;
			margin-left: 450px;
			margin-top: 120px;
			width: 400px;
			height: 300px;
			padding: 10px;
		}
		table{
			margin-left: 65px;
			margin-top: 20px;
		}
		h2{
			text-align: center;
			margin-top: 25px;
		}
		input[type=submit]{
			margin-left: 225px;
			margin-top: 20px;
			padding: 5px;
		}
		input[type=text]{
			padding: 4px;
			margin-top: 5px;
		}
		input[type=password]{
			padding: 4px;
			margin-top: 5px;
		}
	</style>
</head>
<body id="latar">
	<div id="content">
		<h2>Login</h2>
		<?php
			if (isset($_GET['pesan'])){
				if ($_GET['pesan'] == "gagal"){
					echo '<script>alert("Username dan Password salah");window.location ="login.php";</script>';
				}elseif ($_GET['pesan'] == "logout") {
					echo '<script>alert("Anda berhasil logout");window.location ="login.php";</script>';
				}elseif ($_GET['pesan'] == "belum_login") {
					echo  '<script>alert("Anda harus Login");window.location ="login.php";</script>';
				}
			}
		?>
		<form action="cek_login.php" method="post">
			<table>
				<tr>
					<td>Username</td> 
					<td><input type="text" placeholder="Masukkan Username" name="username"></td>
				</tr>
				<tr>
					<td>Password</td> 
					<td><input type="password" placeholder="Masukkan Password" name="password"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="LOGIN" onclick="warna(username)"></td>
				</tr>
			</table>

		</form>
	</div>

</body>
</html>