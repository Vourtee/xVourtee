<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="style-home.css">
    <title>Data Inventori Barang</title>
</head>
<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4 justify-content-between">
            <h1 class="fs-4"><img src="https://github.com/HandyAlek/image/blob/main/juragannetdark.png?raw=true" style="width: 130px; height: 70px; margin-left: 40px;"><span class="text-white d-inline-block m-3">Juragan Inventori</span></h1>
        </div>
            <a class="text-decoration-none text-dark fw-bold px-3 py-2 d-block" style="background-color: white; border-radius: 10px; width: 200px; height: 40px; margin-left: 10px;"><i class="bi bi-person-fill btn-primary"></i> <?php echo $_SESSION['username']?></a>
            <hr class="h-color mx-2">
            <ul class="list-unstyled px-2">
                <li class="active"><a href="dash-home.php" target="konten" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-house-door-fill"></i> Home</a></li>
                <li class=""><a href="dashboard.php" target="konten" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li class=""><a href="tambah-user.php" target="konten" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person-fill-add"></i> Tambah User</a></li>
            </ul>
            <hr class="h-color mx-2">
            <a href="logout.php" class="text-decoration-none text-danger px-3 py-2 d-block"><i class="bi bi-box-arrow-left"></i> Sign Out</a>
        </div>
            <div class="content">
                <div class="konten">
                    <iframe src="dash-home.php" name="konten" style="height: 600px; width: 100%; background-color: white;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    }else{
        header("Location: index.php");
        exit();
    };
?>
<script>
    $(".sidebar ul li").on("click" , function(){
        $(".sidebar ul li.active").removeClass("active");
        $(this).addClass("active");
        });
</script>

</html>