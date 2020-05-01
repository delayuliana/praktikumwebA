<?php
	include "koneksi.php";
	$nim 	= $_POST['nim'];
	$nama	= $_POST['nama'];
	$jk		= $_POST['jk'];
	$tgl_lahir	= $_POST['tgl_lahir'];
	$agama	= $_POST['agama'];
	$alamat	= $_POST['alamat'];

	$query = "INSERT INTO mahasiswa (nim, nama, jk , tgl_lahir, agama, alamat) VALUES ('$nim', '$nama', '$jk', '$tgl_lahir', '$agama', '$alamat')";

	if (mysqli_query($conn, $query)) {
		echo'<script>alert("Data Berhasil Disimpan");window.location ="pagination.php";</script>';
	}
	else {
		echo'Error: ' . $query . '<br>' . mysql_error($conn);
	}

	mysqli_close($conn);
?>