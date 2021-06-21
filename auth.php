<?php

// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi.php
include 'koneksi.php';

// menangkap inputan yang dikirim oleh form login
$username = $_POST['username'];
$password = $_POST['password'];


// Mencari data user sesuai dengan username dan password yang telah diinput
// $mysqli sama dengan variable yang sudah di definisikan pada file koneksi.php
$query  = $mysqli->query("select * from pengguna where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$result = mysqli_num_rows($query);

	
//jika data lebih dari 0, berarti user tersebut valid dan sesuai
if($result > 0){

	// mengambil data hasil query
	$row = $query->fetch_array(MYSQLI_ASSOC);
	print_r($row);
	//menyimpan data pada session
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $row["nama"];
	$_SESSION['login'] = true;

	//redirect ke halaman dashboard
	header("location:dashboard.php");
}else{

	//kembali ke halaman login dengan pesan error
	header("location:index.php?pesan=Usernama atau Password Salah");
}
?>