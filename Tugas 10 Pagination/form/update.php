<?php
	include 'koneksi.php';
	$nim 	= $_POST['nim'];
	$nama	= $_POST['nama'];
	$jk		= $_POST['jk'];
	$tgl_lahir	= $_POST['tgl_lahir'];
	$agama	= $_POST['agama'];
	$alamat	= $_POST['alamat'];

	$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jk='$jk' , tgl_lahir='$tgl_lahir', agama='$agama', alamat='$alamat' WHERE nim='$nim'";
	
	if (mysqli_query($conn, $query)) {
		echo'<script>alert("Data Berhasil Disimpan");window.location ="pagination.php";</script>';
	}
	else {
		echo'Error: ' . $query . '<br>' . mysql_error($conn);
	}
?>