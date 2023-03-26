<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <form action="user-check.php" method="POST">
    <div class="container ms-2 my-3" style="height: 550px;">
        <div class="card" style="width: 1070px;">
          <div class="card-header">
            <h4>TAMBAH USER ADMIN</h4>
          </div>

          <?php if(isset($_GET['error'])) { ?>
            <p class="error" style="background: #F2DEDE; color: #A94442; text-align: center; padding: 10px; width: 48%; border-radius: 5px; margin: 15px; margin-top: 10px;"><?php echo $_GET['error']; ?></p>
          <?php } ?>


          <?php if(isset($_GET['success'])) { ?>
            <p class="success" style="background: #D4EDDA; color: #40754C; text-align: center; padding: 10px; width: 48%; border-radius: 5px; margin: 15px; margin-top: 10px;"><?php echo $_GET['success']; ?></p>
          <?php } ?>


          <div class="card-body">
                <div class="row mb-3">
                  <label for="id" class="col-sm-2 col-form-label">Id User</label>
                  <div class="col-sm-4">
                  <?php if(isset($_GET['id'])) { ?>
                    <input type="text" name="id" maxlength="4" onkeypress="return hanyaAngka(event)" class="form-control"value="<?php echo $_GET['id']; ?>">
                  <?php }else{ ?>
                    <input type="text" name="id" maxlength="4" onkeypress="return hanyaAngka(event)" class="form-control">
                  <?php }?>
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-4">
                    <?php if(isset($_GET['username'])) { ?>
                      <input type="text" name="username" class="form-control"value="<?php echo $_GET['username']; ?>">
                    <?php }else{ ?>
                      <input type="text" name="username" class="form-control">
                    <?php }?>
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-4">
                    <input type="password" name="pass" class="form-control" id="pass">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="password" class="col-sm-2 col-form-label">Re-Type Password</label>
                  <div class="col-sm-4">
                    <input type="password" name="repass" class="form-control" id="repass">
                  </div>
                </div>
          </div>
          <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary btn-l mb-2 ms-1"> Simpan</i></button>
          </div>
        </div>
    </div>
  </form>
</body>

<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>

</html>