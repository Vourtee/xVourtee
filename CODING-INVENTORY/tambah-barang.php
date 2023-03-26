<?php
include "barang-check.php";

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
  <form action="tambah-barang.php" method="POST">
    <div class="container ms-2 my-2" style="height: 600px;">
        <div class="card" style="width: 1070px;">
          <div class="card-header">
            <h4>TAMBAH BARANG</h4>
          </div>
          <div class="card-body">
            <form>
                <div class="row mb-3">
                  <label for="perangkat" class="col-sm-2 col-form-label">Nama Perangkat</label>
                  <div class="col-sm-4">
                    <input type="text" name="barang" class="form-control" id="perangkat">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="sn" class="col-sm-2 col-form-label">Serial Number</label>
                    <div class="col-sm-4">
                      <input type="text" name="serial" class="form-control" id="sn">
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="mac" class="col-sm-2 col-form-label">MAC Address</label>
                  <div class="col-sm-4">
                    <input type="text" name="mac" class="form-control" id="mac">
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
                          <input type="radio" name="status_rusak" value="Rusak" class="form-check-input">
                          <label class="form-check-label" for="status3">Rusak</label>
                        </div>
                      </div>
                    </div>
                </div>
              </form>
          </div>
          <div class="card-footer text-muted">
            <button type="submit" name="simpan" class="btn btn-primary btn-l mb-2 ms-1"> Simpan</i></button>
            <a href="dashboard.php" type="submit" class="btn btn-warning btn-l mb-2 ms-3"> Kembali</a></i>
          </div>
        </div>
    </div>
  </form>
  </body>

</html>