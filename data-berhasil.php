<?php 
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Tamu Online</title>
<script type="text/javascript" src="webcam.js"></script>
<script language="javascript">
	function take_snapshot() {
		Webcam.snap(function(data_uri){
			document.getElementById('results').innerHTML = '<img id="base64image" src="'+data_uri+'"/>';
		});
	}

	function Showcam() {
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 100
		});
		Webcam.attach('#kamera');
	}

	function SaveSnap() {
		document.getElementById("loading").innerHTML="Menyimpan";
		var file =  document.getElementById("base64image").src;
		var formdata = new FormData();
		formdata.append("base64image", file);
		formdata.append("id", "<?php echo $_GET['id'];?>");
		var ajax = new XMLHttpRequest();
		ajax.addEventListener("load", function(event) { uploadcomplete(event);}, false);
		ajax.open("POST", "upload.php");
		ajax.send(formdata);
	}

	function uploadcomplete(event){
		document.getElementById("loading").innerHTML="";
		//var image_return=event.target.responseText;
		//var showup=document.getElementById("uploaded").src=image_return;
		window.location="index.php";
	}

	window.onload = Showcam;
	
</script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<!-- form tamu -->
	<center>
	<section class="box-formulir">
<marquee>
		<h2>Pengisian Buku Tamu Berhasil</h2>
</marquee>
		<div class="box">
			<h4>Kode Pengisian Tamu adalah <?php echo $_GET['id'] ?></h4>
		</div>

		<div id="kamera"></div>
		<input type="button" value="Capture" onClick="take_snapshot()" class="tombol-simpan" style="margin-top: 10px;padding-top: 10px;">

		<div class="container" id="Prev" style="margin-left: 5px; padding-top: 10px;">
			<h3 style="margin-right: 10px; padding-bottom: 10px;">Hasil Foto Anda</h3><div id="results"></div>
		</div>

		<button onclick="SaveSnap();" class="tombol-simpan" style="margin-top: 10px;">Simpan</button>

		<div class="bt" id="Saved" style="margin-top: 10px;">
			<h3>Menyimpan Foto</h3><span id="loading"></span>
		</div>

</section>
</center>
</body>
</html>