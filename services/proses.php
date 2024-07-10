<?php
include "../connectDB/connection.php";
if (isset($_POST['inputBarang'])){
    $name = $_POST['namaBarang'];
    $sql = "INSERT INTO `irfan` (`barang`) VALUES ('$name')";
    mysqli_query($connect, $sql);

    header("location:../inputBarang.php");
}
elseif (isset($_POST["inputPenjualan"])){
    $id_barang = $_POST['id_barang'];
    $qty = $_POST['jumlah'];
    $tgl = $_POST['tgl_penjualan'];

    $sql = "INSERT INTO `kurniawan` (`id_barang`, `jumlah`, `tgl_penjualan`) VALUES ('$id_barang', '$qty', '$tgl')";
    mysqli_query($connect, $sql);

    header("location:../inputPenjualan.php");
}