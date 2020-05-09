<?php 
	$conn = mysqli_connect('localhost','root','','perpustakaan2');

	if(!$conn){
		die("Koneksi gagal: " . mysqli_connect_error());
	}
?>