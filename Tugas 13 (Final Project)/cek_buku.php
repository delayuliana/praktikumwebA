<?php
  include 'koneksi.php';
  $id = $_POST['id_buku'];
  $judul = $_POST['judul'];
  $jenis = $_POST['jenis'];
  $penulis = $_POST['penulis'];
  $stok = $_POST['stok'];

  $query = "INSERT INTO buku (id_buku, judul, jenis, penulis, stok) VAlUES ('$id', '$judul', '$jenis', '$penulis', '$stok')";
  $result = mysqli_query($conn, $query);

  if($result){
    echo '<script>alert("Berhasil Menambahkan Buku");window.location="buku.php";</script>';
  } else {
    echo "Gagal Menambahkan";
  }

  mysqli_close($conn);
?>