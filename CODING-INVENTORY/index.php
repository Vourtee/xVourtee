<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Juragan Inventori</title>
</head>
<body>
    <div class="title">
    <img src="https://github.com/HandyAlek/image/blob/main/jos-removebg.png?raw=true">
    </div>
    <div class="border">
    <h4>Login Inventori</h4>
    <form class="ms-2" action="login.php" method="POST">
        <?php if(isset($_GET['error'])) { ?>
            <p class="error" style="background: #F2DEDE; color: #A94442; text-align: center; padding: 10px; width: 75%; border-radius: 5px; margin: 20px auto; margin-top: 0;"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="mb-2">
            <div class="text-center">
            <i class="bi bi-fingerprint"></i>
            <label for="id" class="form-label">ID Account</label>
            <input type="username" class="form-control mb-3" id="id" name="id" maxlength="4" onkeypress="return hanyaAngka(event)" placeholder="ID Account">
        </div>
        <div class="mb-3">
            <div class="text-center">
            <i class="bi bi-person-circle"></i>
            <label for="email1" class="form-label">Username</label>
            <input type="username" class="form-control" id="email1" name="username" placeholder="Username">
        </div>
        </div>
        <div class="mb-3">
            <div class="text-center">
            <i class="bi bi-person-fill-lock"></i>
          <label for="pass" class="form-label">Password</label>
          <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
        </div>
        </div>
        <div class="text-center">
        <div class="d-grid gap-3 col-3 mx-auto">
        <input type="submit" value="Log In" class="btn btn-primary"></a>
        </div>
        </div>
      </form>
      </div>
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