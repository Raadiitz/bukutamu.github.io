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
		<h2>Data Tamu</h2>
		<div class="box">
			<a href="cetak-data.php" target="_blank" class="btn-cetak">Export</a> 
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Foto</th>
						<th>ID Tamu</th>
						<th>Nama</th>
						<th>Asal Instansi</th>
						<th>Perintah</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						$list_tamu = mysqli_query($conn, "SELECT * FROM tb_bukutamu");
						while($row = mysqli_fetch_array($list_tamu)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><center><img src="<?php echo 'uploads/'.$row['foto'] ?>" width="50px"></center></td>
						<td><center><?php echo $row['id_tamu'] ?></center></td>
						<td><center><?php echo $row['nama'] ?></center></td>
						<td><?php echo $row['asal_instansi'] ?></td>
						<td>
							<center>
							<a href="detail-tamu.php?id=<?php echo $row['id_tamu'] ?>">Detail</a> ||
							<a href="hapus-tamu.php?id=<?php echo $row['id_tamu'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
						</center>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</section>

</body>
</html>