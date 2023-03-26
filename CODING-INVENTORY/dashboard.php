<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>
<body style="background-color: white;">
<div class="container ms-2 my-3">
<div class="card" style="width: 1085px; height: 300px;">
  <h4 class="card-header">DASHBOARD</h4>
  <div class="card-body ms-4" style="margin-top: 30px">
    <div class="card bg-success ml-2" style="width: 18rem; ">
            <div class="card-body">
              <div class="card-body-icon">
              <i class="bi bi-check2-circle"></i>
              </div>
              <h5 class="card-title text-white">JUMLAH BARANG READY</h5>
              <?php
              include 'barang-check.php';
                $barang_idle_query = "SELECT * FROM tb_barang";
                $barang_idle_run = mysqli_query($conn, $barang_idle_query);

                if($barang_total = mysqli_num_rows($barang_idle_run)){
                  echo "<div class='display-4 fw-normal text-white'> $barang_total</div>";
                }else{
                  echo "<div class='display-4 fw-normal text-white'> 0</div>";
                }
              ?>
              <a href="barang-ready.php" class="text-decoration-none"><p class="card-text text-white">Lihat Detail<i class="bi bi-chevron-double-right ml-2"></i></p></a>
              </div>
          </div>
      </div>
        <div class="card bg-info ml-2" style="width: 18rem; transform: translate(385px, -170px);">
          <div class="card-body">
            <div class="card-body-icon">
            <i class="bi bi-hourglass-split mr-2"></i>
            </div>
            <h5 class="card-title text-white">JUMLAH BARANG IDLE</h5>
            <div class="display-4 fw-normal text-white">
              <?php
                $barang_idle_query = "SELECT * FROM tb_barang_idle";
                $barang_idle_run = mysqli_query($conn, $barang_idle_query);

                if($barang_total = mysqli_num_rows($barang_idle_run)){
                  echo "<div class='display-4 fw-normal text-white'> $barang_total</div>";
                }else{
                  echo "<div class='display-4 fw-normal text-white'> 0</div>";
                }
              ?>
            </div>
            <a href="barang-idle.php" class="text-decoration-none"><p class="card-text text-white">Lihat Detail <i class="bi bi-chevron-double-right ml-2"></i></p></a>
          </div>
        </div>
          <div class="card bg-danger ml-5" style="width: 18rem; transform: translate(730px, -324px)">
            <div class="card-body">
            <div class="card-body-icon">
            <i class="bi bi-exclamation-triangle mr-2"></i>
            </div>
              <h5 class="card-title text-white">JUMLAH BARANG RUSAK</h5>
              <?php
                $barang_idle_query = "SELECT * FROM tb_barang_rusak";
                $barang_idle_run = mysqli_query($conn, $barang_idle_query);

                if($barang_total = mysqli_num_rows($barang_idle_run)){
                  echo "<div class='display-4 fw-normal text-white'> $barang_total</div>";
                }else{
                  echo "<div class='display-4 fw-normal text-white'> 0</div>";
                }
              ?>
              <a href="barang-rusak.php" class="text-decoration-none"><p class="card-text text-white">Lihat Detail <i class="bi bi-chevron-double-right ml-2"></i></p></a>
            </div>
          </div>
    </div>
    </div>
  </div>
  </div>
</div>
</div>
</body>
</html>