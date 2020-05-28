<?php
	include 'koneksi.php';

	$username = $_POST['username'];
	$nim = $_POST['nim'];
  	$nama = $_POST['nama'];
  	$password = $_POST['password'];
  	$email = $_POST['email'];
  	$jk = $_POST['jk'];
  	$alamat = $_POST['alamat'];

  	$sql = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
	$data = mysqli_fetch_array($sql);
	$id = $data['username'];

	$query = mysqli_query($conn, "UPDATE user SET nim='$nim', nama='$nama', username='$username' , password='$password', email='$email', jk='$jk', alamat='$alamat' WHERE username='$id'") or die(mysqli_error($conn));
	
	if ($query) {
		echo'<script>alert("Data Berhasil Disimpan");window.location ="profil_user.php";</script>';
	}
	else {
		echo'<script>alert("Data Gagal Disimpan");window.location ="profil_user.php";</script>';
	}
?>