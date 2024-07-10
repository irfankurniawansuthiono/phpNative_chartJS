<!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Barang</title>
</head>
<body>
    <form action="services/proses.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="namaBarang">Nama Barang</label>
                </td>
                <td>:</td>
                <td>
                    <input type="text" name="namaBarang" id="namaBarang">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="input Barang" name="inputBarang" />
                </td>
            </tr>

        </table>
    </form>
    <br/>
    <br/>

    <a href="./index.php">Back To Home</a>
    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>no</th>
            <th>nama barang</th>
            <th colspan="2">Aksi</th>
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
                echo "<td><a href='editBarang.php?id=$data[id_barang]&status=editBarang'>Edit</a></td>";
                echo "<td><a href='services/delete.php?id=$data[id_barang]&status=deleteBarang'>Delete</a></td>";
                echo "</tr>";
                $no++;
            }
        ?>
    </table>
</body>
</html>