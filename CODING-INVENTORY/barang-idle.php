<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style-home.css" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container ms-2 my-3" style="height: 600px;">
<div class="card" style="width: 1070px;">
  <div class="card-header">
    <h4>DATA BARANG IDLE</h4>
  </div>
  <div class="card-body">
    <a href="dashboard.php" class="text-decoration-none btn btn-primary btn-sm mb-2 ms-1"><i class="bi bi-chevron-double-left"> Kembali</i></a>
    <a href="tambah-barang.php" class="text-decoration-none float-end btn btn-primary btn-sm mb-2 ms-1"><i class="bi bi-plus-circle"> Tambah Barang</i></a>
    <table id="example" class="table table-striped" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>Nama Perangkat</th>
                <th>Serial Number</th>
                <th>MAC Address</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
         include 'barang-check.php';
         $ambil_data = mysqli_query($conn, 'SELECT * FROM tb_barang_idle');
         while ($tampil = mysqli_fetch_array($ambil_data)){
          echo "
          <tr>
              <td>$tampil[nama_barang]</td>
              <td>$tampil[serial_number]</td>
              <td>$tampil[mac]</td>
              <td>$tampil[status_barang_idle]</td>
              <td>
                    <a href='edit-barang-idle.php?kode=$tampil[id]'>
                    <input type='button' class='btn btn-warning btn-sm me-2' value='Edit'></a>
                    <a href='?hapus=$tampil[id]' onClick=\"return confirm('Konfirmasi Hapus Data?');\">
                    <input type='button' class='btn btn-danger btn-sm' value='Hapus'>
                    </a>
              </td>
          </tr>";
        }
        ?>
    </table>
    <?php
    if(isset($_GET['hapus'])){

        mysqli_query($conn, "DELETE FROM tb_barang_idle WHERE id='$_GET[hapus]'")
        or die (mysqli_error($conn));

        echo "<meta http-equiv=refresh content=0;URL='barang-idle.php'>";
    }
    ?>

    </div>
  <div class="card-footer text-muted">
  </div>
</div>
</div>
</div>
</body>

<script>
  $(document).ready(function () {
    $('#example').DataTable();
});

</script>


</html>