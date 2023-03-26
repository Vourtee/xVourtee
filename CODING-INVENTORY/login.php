<?php
session_start();
include "db_koneksi.php";

if (isset($_POST['id']) && isset($_POST['username'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);
    $username = validate($_POST['username']);
    $password = validate($_POST['pass']);

    if (empty($id)){
        header("Location: index.php?error=Mohon Masukkan ID");
        exit();
    }elseif (empty($username)){
        header("Location: index.php?error=Mohon Masukkan Username");
        exit();
    }elseif (empty($password)){
        header("Location: index.php?error=Mohon Masukkan Password");
        exit();
    }else{

        $password = md5($password);

        $sql = "SELECT * FROM tb_user WHERE id='$id' AND username='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['id'] === $id && $row['username'] === $username) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['pass'] = $row['pass'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=Salah ID, Username atau Password");
                exit();
            }

        }else{
            header("Location: index.php?error=Salah ID, Username atau Password");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}
?>