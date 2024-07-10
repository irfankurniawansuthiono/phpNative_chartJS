<?php
 include "../connectDB/connection.php";
$status = $_GET['status'];

if($status == "editBarang"){
    $id = $_POST['id_barang'];
    $barang = $_POST['barang'];
    $sql = "update irfan set id_barang = '$id', barang = '$barang' where id_barang = '$id'";
    $query = mysqli_query($connect, $sql);
    header("location:../index.php");
}elseif($status == "editPenjualan"){
    $id= $_POST['id_penjualan'];
    $idBarang = $_POST['id_barang'];
    $jml = $_POST['jumlah_penjualan'];
    $tgl = $_POST['tgl_penjualan'];
    $sql = "update kurniawan set id_penjualan = '$id', jumlah = '$jml', tgl_penjualan = '$tgl' where id_penjualan = $id";
    $query = mysqli_query($connect, $sql);
    header("location:../index.php");
}