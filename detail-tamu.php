<?php
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login']  != true){
		echo '<script>window.location="login.php"</script>';
	}

	$tamu = mysqli_query($conn, "SELECT * FROM tb_bukutamu WHERE id_tamu = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($tamu);
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

	<!-- bagian header -->
	<header>
		<h1>Admin Buku Tamu Online</h1>
		<ul>
			<li><a href="hal-admin.php">Beranda</a></li>
			<li><a href="data-tamu.php">Data Tamu</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	</header>

	<!-- bagian content -->
	<section class="content">
		<h2>Data Lengkap Tamu</h2>
		<div class="box">
			<table class="table-data" border="0">
				<tr>
					<td>No ID</td>
					<td>:</td>
					<td><?php echo $p->id_tamu ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $p->nama ?></td>
				</tr>
				<tr>
					<td>Kontak</td>
					<td>:</td>
					<td><?php echo $p->kontak ?></td>
				</tr>
				<tr>
					<td>Asal Instansi</td>
					<td>:</td>
					<td><?php echo $p->asal_instansi ?></td>
				</tr>
				<tr>
					<td>Keperluan</td>
					<td>:</td>
					<td><?php echo $p->keperluan ?></td>
				</tr>
			</table>
		</div>
	</section>
</body>
</html>