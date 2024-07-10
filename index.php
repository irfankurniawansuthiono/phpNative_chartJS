<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
    <body>
    <a href="dynamicChart.php">Lihat Grafik</a>
    <br/>
    <br/>
    <br/>
        <a href="./inputBarang.php">Input Barang</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>no</th>
                <th>nama barang</th>
            </tr>
            <?php
            include "connectDB/connection.php";
            $sql = "select * from irfan";
            $query = mysqli_query($connect, $sql);
            $no = 1;
            while($data = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$data[barang]</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </table>
        <br>
        <br>
        <a href="./inputPenjualan.php">Input Penjualan</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>no</th>
                <th>nama barang</th>
                <th>tanggal penjualan</th>
            </tr>
            <?php
            include "connectDB/connection.php";
            $sql = "select * from kurniawan";
            $query = mysqli_query($connect, $sql);
            $no = 1;
            while($data = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$data[jumlah]</td>";
                echo "<td>$data[tgl_penjualan]</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </table>
        <br/>
    </body>
</html>
