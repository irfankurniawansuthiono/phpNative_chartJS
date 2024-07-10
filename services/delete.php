<?php
include "../connectDB/connection.php";
$status = $_GET['status'];
if($status == "deleteBarang"){
    $id = $_GET['id'];
    $sql = "delete from irfan where id_barang = $id";
    $query = mysqli_query($connect, $sql);
    header("location:../inputBarang.php");
}elseif($status == "deletePenjualan"){
    $id = $_GET['id'];
    $sql = "delete from kurniawan where id_penjualan = $id";
    $query = mysqli_query($connect, $sql);
    header("location:../inputPenjualan.php");
}
