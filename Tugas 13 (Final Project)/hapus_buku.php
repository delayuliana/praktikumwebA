<?php
	include 'koneksi.php';

	$id_buku = $_GET['id_buku'];
	$query	= "DELETE FROM buku WHERE id_buku='$id_buku'";
	if (mysqli_query($conn, $query)) {
		echo'<script>alert("Data Berhasil Dihapus");window.location ="buku.php";</script>';
	}
	else {
		echo'Error: ' . $query . '<br>' . mysqli_error($conn);
	}
?>