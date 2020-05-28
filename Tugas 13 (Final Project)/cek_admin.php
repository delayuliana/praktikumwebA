<?php
  include 'koneksi.php';
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $query = "INSERT INTO admin (nama, username, password) VAlUES ('$nama', '$username', '$password')";
  $result = mysqli_query($conn, $query);

  $query2 = "INSERT INTO login (username, password) VAlUES ('$username', '$password')";
  $result2 = mysqli_query($conn, $query2);
  
  if($result){
    echo '<script>alert("Berhasil Menambahkan Admin");window.location="sadmin.php";</script>';
  } else {
    echo '<script>alert("Gagal Menambahkan Admin");window.location="sadmin.php";</script>';
  }

  mysqli_close($conn);
?>