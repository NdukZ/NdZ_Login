<?php 
$mysqli = new mysqli("localhost","root","....","labs");

// Cek Koneksi
if ($mysqli -> connect_errno) {
  echo "Koneksi database gagal : "  . $mysqli -> connect_error;
  exit();
}
?>