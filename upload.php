<?php
include 'koneksi.php';
define('UPLOAD_DIR', 'uploads/');
$img = $_POST['base64image'];
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR . $_POST['id'] . '.png';
$success = file_put_contents($file, $data);
$update = mysqli_query($conn, "UPDATE tb_bukutamu SET foto = '".$_POST['id'].".png' WHERE id_tamu = '".$_POST['id']."'");
print $success ? $file : 'Unable to save the file.';
?>