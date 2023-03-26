<?php
session_start();
include "db_koneksi.php";

if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['repass'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);
    $username = validate($_POST['username']);

    $password = validate($_POST['pass']);
    $re_pass = validate($_POST['repass']);

    $user_data = 'username='. $username. '&id='. $id;

    if(empty($id)){
        header("Location: tambah-user.php?error=Mohon Masukkan ID&$user_data");
        exit();
    }elseif(empty($username)){
        header("Location: tambah-user.php?error=Mohon Masukkan Username&$user_data");
        exit();
    }elseif(empty($password)){
        header("Location: tambah-user.php?error=Mohon Masukkan Password&$user_data");
        exit();
    }elseif(empty($re_pass)){
        header("Location: tambah-user.php?error=Mohon Ketik Ulang Password&$user_data");
        exit();
    }elseif($password !== $re_pass){
        header("Location: tambah-user.php?error=Password Tidak Sesuai&$user_data");
        exit();
    }
    else{

        $password = md5($password);

        $sql = "SELECT * FROM tb_user WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            header("Location: tambah-user.php?error=Username Sudah Digunakan, Silahkan Coba Lagi&$user_data");
            exit();
        }else{
            $sql2 = "INSERT INTO tb_user(id, username, password) VALUES('$id', '$username', '$password')";
            $result2 = mysqli_query($conn, $sql2);
            if($result2){
                header("Location: tambah-user.php?success=Akun Sudah Berhasil Ditambahkan");
                exit();
            }else{
                header("Location: tambah-user.php?error=Terjadi Kesalahan Tak Terduga&$user_data");
                exit();
            }
        }
    }
}else{
    header("Location: tambah-user.php");
    exit();
}

?>