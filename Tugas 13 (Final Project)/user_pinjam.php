<?php
	include 'koneksi.php';

	$username = $_POST['username'];
	$id_buku = $_POST['id_buku'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_kembali = $_POST['tgl_kembali'];

	$sql = "INSERT INTO pinjam (id_user, id_buku, tgl_pinjam, tgl_kembali) VALUES ('$username', '$id_buku' , '$tgl_pinjam', '$tgl_kembali')";

	$result = mysqli_query($conn, $sql);

	if($result){
    	echo '<script>alert("Berhasil Pinjam");window.location="katalog_buku.php";</script>';
  	} else {
    	echo '<script>alert("Gagal Pinjam");window.location="katalog_buku.php";</script>';
  	}

  mysqli_close($conn);
?>