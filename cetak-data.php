<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>Data Tamu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
</head>
<body>
  <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <td><center>No</center></td>
            <td><center>ID Tamu</center></td>
            <td><center>Nama</center></td>
            <td><center>Kontak</center></td>
            <td><center>Asal Instansi</center></td>
            <td><center>Keperluan</center></td>
          </tr>
        </thead>
  <tbody>
  <?php
  include 'koneksi.php';
  $no=1;
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
  <?php
  }
  ?>
  </tbody>
  </table>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
  $(document).ready(function() {
      var table = $('#example').DataTable( {
          lengthChange: false,
          buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
      } );
   
      table.buttons().container()
          .appendTo( '#example_wrapper .col-md-6:eq(0)' );
  } );
     </script>
</body>
</html>
