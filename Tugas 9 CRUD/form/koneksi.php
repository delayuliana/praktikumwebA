<?php 
	$conn = mysqli_connect('localhost','root','','pendaftaran');
	if(!$conn){
		die("Koneksi gagal: " . mysqli_connect_error());
	}
?>