<?php
	session_start();

	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");
	$cek = mysqli_num_rows($query);
	if ($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";

		$row=mysqli_fetch_assoc($query);
		if($row["username"]=="superadmin"){
			$_SESSION["user"]="superadmin";
			header("location:index3.php");
		}
		else if ($row["username"]=="Admin"){
			$_SESSION["user"]="admin";
			header("location:index2.php");
		}else{
			$_SESSION["user"]=$username;
			header("location:index.php");
			
		}
		
	}else{
		header("location:login.php?pesan=gagal");
	}
?>