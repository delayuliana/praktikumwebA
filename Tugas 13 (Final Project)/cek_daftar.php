<?php
  include 'koneksi.php';
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $query = "INSERT INTO user (nim, nama, username, password, email, jk, alamat) VAlUES ('$nim', '$nama', '$username', '$password', '$email', '$jk', '$alamat')";
  $result = mysqli_query($conn, $query);

  $query2 = "INSERT INTO login (username, password) VAlUES ('$username', '$password')";
  $result2 = mysqli_query($conn, $query2);
  
  if($result){
    echo '<script>alert("Berhasil Daftar");window.location="login.php";</script>';
  } else {
    echo "Gagal Daftar";
  }

  mysqli_close($conn);
?>