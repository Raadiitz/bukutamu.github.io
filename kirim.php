<?php
	include 'koneksi.php';
	$no= 1;
  	$data_tamu = mysqli_query($conn, "SELECT * FROM tb_bukutamu");
  	while($data = mysqli_fetch_array($data_tamu)){
  	?>
    <tr>
      <td><center><?=$no++; ?></center></td>
      <td><center><?= $data['id_tamu']; ?></center></td>
      <td><center><?= $data['nama']; ?></center></td>
      <td><center><?= $data['kontak']; ?></center></td>
      <td><center><?= $data['asal_instansi']; ?></center></td>
      <td><center><?= $data['keperluan']; ?></center></td>
    </tr>
  	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
    <h2>Data Tamu</h2>
  </center>

  <table class="" border="1">
      <tr>
        <td>No</td>
        <td>ID Tamu</td>
        <td>Nama</td>
        <td>Kontak</td>
        <td>Asal Instansi</td>
        <td>Keperluan</td>
      </tr>
  </table>

</body>
</html>