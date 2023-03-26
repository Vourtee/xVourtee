<?php
session_start();
include "db_koneksi.php";

if (isset($_POST['barang']) && isset($_POST['serial']) && isset($_POST['mac']) && isset($_POST['status_mounting'])){

    $barang = ($_POST['barang']);
    $serial = ($_POST['serial']);
    $mac = ($_POST['mac']);
    $status = ($_POST['status_mounting']);

        $sql = "SELECT * FROM tb_barang WHERE mac='$mac'";
        $result = mysqli_query($conn, $sql);
        $sql2 = "INSERT INTO tb_barang(nama_barang, serial_number, mac, status_barang_mounting) VALUES('$barang', '$serial', '$mac', '$status')";
        $result2 = mysqli_query($conn, $sql2);
        }


if (isset($_POST['barang']) && isset($_POST['serial']) && isset($_POST['mac']) && isset($_POST['status_idle'])){

    $barang = ($_POST['barang']);
    $serial = ($_POST['serial']);
    $mac = ($_POST['mac']);
    $status = ($_POST['status_idle']);

        $sql = "SELECT * FROM tb_barang_idle WHERE mac='$mac'";
        $result = mysqli_query($conn, $sql);
        $sql2 = "INSERT INTO tb_barang_idle(nama_barang, serial_number, mac, status_barang_idle) VALUES('$barang', '$serial', '$mac', '$status')";
        $result2 = mysqli_query($conn, $sql2);
        }

if (isset($_POST['barang']) && isset($_POST['serial']) && isset($_POST['mac']) && isset($_POST['status_rusak'])){

    $barang = ($_POST['barang']);
    $serial = ($_POST['serial']);
    $mac = ($_POST['mac']);
    $status = ($_POST['status_rusak']);

        $sql = "SELECT * FROM tb_barang_rusak WHERE mac='$mac'";
        $result = mysqli_query($conn, $sql);
        $sql2 = "INSERT INTO tb_barang_rusak(nama_barang, serial_number, mac, status_barang_rusak) VALUES('$barang', '$serial', '$mac', '$status')";
        $result2 = mysqli_query($conn, $sql2);
        }
?>