<?php 
	include 'koneksi.php';

	date_default_timezone_set("ASIA/JAKARTA");

	if(isset($_POST['submit'])){

		// ambil 1 id terbesar di kolom id_tamu, lalu ambil 5 karakter aja dari sebelah kanan

		/*$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_tamu, 5)) AS id FROM tb_bukutamu");
		$d = mysqli_fetch_object($getMaxId);
		$generatedId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
		echo $generatedId;*/

		$generatedId = time().rand(11111,99999);

		// proses insert data tamu

		$insert = mysqli_query($conn, "INSERT INTO tb_bukutamu VALUES (
			'".$generatedId."',
			'".date('Y-m-d H:i:s')."',
			'".$_POST['nm']."',
			'".$_POST['no_kontak']."',
			'".$_POST['asal']."',
			'".$_POST['perlu']."',
			''
		)");

		if($insert){
			echo '<script>window.location="data-berhasil.php?id='.$generatedId.' "</script> ';
		}else{
			echo 'Gagal'.mysqli_error($conn);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Tamu Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<!-- form tamu -->
	<section class="box-formulir">
		<center>
		<h1>Buku Tamu</h1>
		<h3>Silahkan Isi Buku Tamu di bawah</h3>

		<!-- bagian data tamu -->
		<form action="" method="post">
			
			<div class="kotak">
				<table border="0" class="tabel-data">
					<tr>
						<td>Tanggal</td>
						<td>:</td>
						<td>
							<input type="date" name="tanggal" class="input-data">
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>
							<input type="text" name="nm" class="input-data">
						</td>
					</tr>
					<tr>
						<td>Kontak</td>
						<td>:</td>
						<td>
							<input type="text" name="no_kontak" class="input-data">
						</td>
					</tr>
					<tr>
						<td>Asal Instansi</td>
						<td>:</td>
						<td>
							<input type="text" name="asal" class="input-data">
						</td>
					</tr>
					<tr>
						<td>Keperluan</td>
						<td>:</td>
						<td>
							<textarea class="input-data" name="perlu"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" class="tombol-simpan" value="SIMPAN">
							&nbsp;
							<input type="reset" name="reset" class="tombol-simpan" value="RESET">
							&nbsp;
						</td>
					</tr>
				</table>
			</div>

		</form>
		</center>
	</section>
</body>
</html>