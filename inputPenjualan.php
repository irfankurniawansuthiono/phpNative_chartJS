<!doctype html>
<head>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>input Penjualan</title>
</head>
<body>
<h1>Daftar Barang</h1>
<table border="1">
    <tr>
        <th>id Barang</th>
        <th>nama barang</th>
    </tr>
    <?php
    include "connectDB/connection.php";
    $sql = "select * from irfan";
    $query = mysqli_query($connect, $sql);
    $no = 1;
    while($data = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>$data[id_barang]</td>";
        echo "<td>$data[barang]</td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>
<br/>
<br/>
<br/>
<form action="./services/proses.php" method="post">
    <table>
        <tr>
            <td>
                <label for="id_barang">Id Barang</label>
            </td>
            <td>
                <input type="text" name="id_barang">
            </td>
        </tr>
        <tr>
            <td>
                <label for="jumlah">Jumlah Barang</label>
            </td>
            <td>
                <input type="text" name="jumlah">
            </td>
        </tr>
        <tr>
            <td>
                <label for="tgl_penjualan">Tanggal Penjualan</label>
            </td>
            <td>
                <input type="date" name="tgl_penjualan">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="input Penjualan" name="inputPenjualan">
            </td>
        </tr>
    </table>
    <br/>
    <a href="./index.php">Back To Home</a>
    <br/>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>no</th>
            <th>ID barang</th>
            <th>jumlah</th>
            <th>tanggal penjualan</th>
            <th colspan="2">Aksi</th>

        </tr>
        <?php
            include "connectDB/connection.php";
            $sql = "select * from kurniawan";
            $query = mysqli_query($connect, $sql);
            $no = 1;
            while($data = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$data[id_barang]</td>";
                echo "<td>$data[jumlah]</td>";
                echo "<td>$data[tgl_penjualan]</td>";
                echo "<td><a href='editPenjualan.php?id=$data[id_penjualan]'>Edit</a></td>";
                echo "<td><a href='services/delete.php?id=$data[id_penjualan]&status=deletePenjualan'>Delete</a></td>";
                echo "</tr>";
                $no++;
            }
        ?>
    </table>
</form>
</body>
</html>