<?php
  include 'koneksi.php';
  $sql = "SELECT pinjam.id_pinjam AS id, buku.id AS id_buku, buku.stok AS stok FROM pinjam, buku WHERE pinjam.id_buku=buku.id";
  $jumlah = $row['stok'];
  $jumlah2 = $jumlah-1;
  $result = mysqli_query($conn, $sql);

  if($result){
    $sql2 = "UPDATE buku SET stok = '$jumlah2' WHERE pinjam.id_buku=buku.id";
    $result2 = mysqli_query($conn, $sql2);

    $id = $_GET['id'];
    $sql3 = "DELETE FROM pinjam WHERE id='$id'";
    $result3 = mysqli_query($conn, $sql3);
    echo '<script>alert("Berhasil Meminjamkan");window.location="daftar_pinjam.php";</script>';
  }
  mysqli_close($conn);
?>