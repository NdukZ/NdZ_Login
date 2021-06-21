<?php 
	session_start();

	//Pengecekan apakah pengguna sudah login
	if($_SESSION['login'] == false){

		//Jika Session login == false maka pengguna akan di redirect ke halamam login

		header("location:index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - NdukZLabs</title>
</head>
<body>
	<h3>Dashboard</h3>
	
	<hr>

 
	<h2>Selamat datang, <?php echo $_SESSION['nama']; ?></h2>
 
 	<hr>

	<a href="logout.php">Logout</a>
 
 
</body>
</html>