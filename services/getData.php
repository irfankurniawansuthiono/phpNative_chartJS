<?php
include "../connectDB/connection.php";
$status = $_GET['status'];
if($status == 'getDataBarang'){
    $id_barang = $_GET['id_barang'];
    $query = "SELECT MONTH(tgl_penjualan) AS month, SUM(jumlah) AS total_sales FROM kurniawan WHERE id_barang = ? GROUP BY MONTH(tgl_penjualan)";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("i", $id_barang);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
}elseif ($status == 'getDataPenjualan') {
    $bulan = $_GET['bulan'];

    $query = "SELECT id_barang, SUM(jumlah) AS total_sales 
              FROM kurniawan 
              WHERE MONTH(tgl_penjualan) = ? 
              GROUP BY id_barang";

    $stmt = $connect->prepare($query);
    $stmt->bind_param("i", $bulan);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
}



$stmt->close();
$connect->close();
?>
