<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Penjualan</title>
</head>
<body>
<a href="index.php">Back to Home</a>
<form action="services/edit.php?status=editPenjualan" method="post">
    <table>
        <?php
        include "connectDB/connection.php";
            $id = $_GET['id'];
            $query = 'select * from kurniawan where id_penjualan = '.$id;
            $result = mysqli_query($connect, $query);
            while($data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>id</td>";
                echo "<td>:</td>";
                echo "<td><input type='text' name='id_penjualan' value='$data[id_penjualan]'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Barang</td>";
                echo "<td>:</td>";
                echo "<td><input type='text' name='id_barang' value='$data[id_barang]'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Jumlah</td>";
                echo "<td>:</td>";
                echo "<td><input type='text' name='jumlah_penjualan' value='$data[jumlah]'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Tgl Penjualan</td>";
                echo "<td>:</td>";
                echo "<td><input type='date' name='tgl_penjualan' value='$data[tgl_penjualan]'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><button type='submit' name='update'>Update</button/></td>";
                echo "</tr>";
            }
        ?>
    </table>
</form>
</form>
</body>
</html>