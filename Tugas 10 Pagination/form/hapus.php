<?php
	include 'koneksi.php';

	$id 	= $_GET['nim'];
	$query	= "DELETE FROM mahasiswa WHERE nim='$id'";
	if (mysqli_query($conn, $query)) {
		echo'<script>alert("Data Berhasil Dihapus");window.location ="pagination.php";</script>';
	}
	else {
		echo'Error: ' . $query . '<br>' . mysql_error($conn);
	}