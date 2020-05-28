<?php
	include 'koneksi.php';
	$id = $_POST['id_buku'];
  	$judul = $_POST['judul'];
  	$jenis = $_POST['jenis'];
  	$penulis = $_POST['penulis'];
  	$stok = $_POST['stok'];

	$query = "UPDATE buku SET id_buku='$id', judul='$judul', jenis='$jenis' , penulis='$penulis', stok='$stok' WHERE id_buku='$id'";
	
	if (mysqli_query($conn, $query)) {
		echo'<script>alert("Data Berhasil Disimpan");window.location ="buku.php";</script>';
	}
	else {
		echo'Error: ' . $query . '<br>' . mysqli_error($conn);
	}
?>