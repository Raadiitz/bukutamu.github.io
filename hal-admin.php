<?php
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Tamu Online</title>
	<link rel="stylesheet" type="text/css" href="css/gaya.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<!-- Header -->
	<header>
		<h1>Admin Buku Tamu Online</h1>
		<ul>
			<li><a href="hal-admin.php">Beranda</a></li>
			<li><a href="data-tamu.php">Data Tamu</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	</header>

	<!-- Content -->
	<section class="content">
		<h2>Beranda</h2>
		<div class="box">
			<h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di halaman Admin Buku Tamu Online.</h3>
		</div>
	</section>

	<center>
		<h2> Al Ma'tsurat</h2>
		<p><h4>Bacaan Al Ma'tsurat Pagi</h4></p>

		<video width="500" controls style="padding:10px">
			<source src="img/almasurat.mp4" type="video/mp4">
		</video>
	</center>

</body>
</html>