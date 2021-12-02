<?php
	include 'koneksi.php';

	if(isset($_GET['id'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_bukutamu WHERE id_tamu = '".$_GET['id']."' ");
		echo '<script>window.location="data-tamu.php"</script>';
	}
?>