<?php
  $host = 'localhost'; // alamat host
  $username = 'root'; // username database
  $password = ''; // password database
  $dbname = 'db_crud'; // nama database
  
  // Membuat koneksi ke MySQL
  $conn = new mysqli($host, $username, $password, $dbname);
  
  // Mengecek koneksi
  if ($conn->connect_error) {
      die("Koneksi gagal: " . $conn->connect_error);
  }
?>