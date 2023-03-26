<?php
include "db_koneksi.php";
$sql=mysqli_query($conn, "SELECT * FROM tb_barang_idle WHERE id='$_GET[kode]'");
$data= mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
  <form action="" method="POST">
    <div class="container ms-2 my-3" style="height: 600px;">
        <div class="card" style="width: 1070px;">
          <div class="card-header">
            <h4>EDIT BARANG</h4>
          </div>
          <div class="card-body">
            <form>
                <div class="row mb-3">
                  <label for="perangkat" class="col-sm-2 col-form-label">Nama Perangkat</label>
                  <div class="col-sm-4">
                    <input type="text" name="barang" class="form-control" id="perangkat"
                    value="<?php echo $data['nama_barang']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="sn" class="col-sm-2 col-form-label">Serial Number</label>
                    <div class="col-sm-4">
                      <input type="text" name="serial" class="form-control" id="sn"
                      value="<?php echo $data['serial_number']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="mac" class="col-sm-2 col-form-label">MAC Addres</label>
                  <div class="col-sm-4">
                    <input type="text" name="mac" class="form-control" id="mac"
                    value="<?php echo $data['mac']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-4">
                      <div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="status_mounting" value="Mounting">
                          <label class="form-check-label" for="status1">Mounting</label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="status_idle" value="Idle">
                          <label class="form-check-label" for="status2">Idle</label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="status_rusak" value="Rusak">
                          <label class="form-check-label" for="status3">Rusak</label>
                        </div>
                      </div>
                    </div>
                </div>
              </form>
          </div>
          <div class="card-footer text-muted">
            <button type="submit" name="proses" class="btn btn-primary btn-l mb-2 ms-1"> Simpan</i></button>
            <a href="dashboard.php" type="submit" class="btn btn-warning btn-l mb-2 ms-3"> Kembali</a></i>
          </div>
        </div>
    </div>
  </form>
<?php
include "db_koneksi.php";

if(isset($_POST['proses'])){

  mysqli_query($conn, "UPDATE tb_barang_idle SET
  nama_barang = '$_POST[barang]',
  serial_number = '$_POST[serial],'
  mac = '$_POST[mac]'
  WHERE id='$_GET[kode]'");
}
echo "<meta http-equiv=refresh content=30;URL='barang-idle.php'>";

if(isset($_POST['status_mounting'])){

    $barang = ($_POST['barang']);
    $serial = ($_POST['serial']);
    $mac = ($_POST['mac']);
    $status = ($_POST['status_mounting']);

  mysqli_query($conn, "INSERT INTO tb_barang(nama_barang, serial_number, mac, status_barang_mounting)
  VALUES ('$barang', '$serial', '$mac', '$status')");
}elseif(isset($_POST['status_rusak'])){

    $barang = ($_POST['barang']);
    $serial = ($_POST['serial']);
    $mac = ($_POST['mac']);
    $status = ($_POST['status_rusak']);
  mysqli_query($conn, "INSERT INTO tb_barang_rusak(nama_barang, serial_number, mac, status_barang_rusak)
  VALUES ('$barang', '$serial', '$mac', '$status')");
}


?>
  </body>
</html>