<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Barang</title>
</head>
<body>
<a href="index.php">Back to Home</a>
    <form action="./services/edit.php?status=editBarang" method="post">
        <table>
            <?php
                include "connectDB/connection.php";
                $id = $_GET['id'];
                $sql = "select * from irfan where id_barang =".$id;
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>id</td>";
                    echo "<td>:</td>";
                    echo "<td><input type='text' name='id_barang' value='$data[id_barang]'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Barang</td>";
                    echo "<td>:</td>";
                    echo "<td><input type='text' name='barang' value='$data[barang]'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><input type='submit' value='Edit Barang' name='editBarang' /></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </form>
</body>
</html>