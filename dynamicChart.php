<?php
include "connectDB/connection.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grafik Penjualan</title>
</head>
<body>
<a href="index.php">Back To Home</a>
<h1>Grafik Penjualan Per Barang</h1>
<table>
    <tr>
        <td>Barang</td>
        <td>:</td>
        <td>
            <select name="barang" id="option_barang">
                <option value="23">Keyboard Rexus</option>
                <option value="24">Mouse Gamen</option>
                <option value="25">Laptop HP</option>
                <option value="26">Scanner Canon</option>
                <option value="27">HeadPhone FANTECH</option>
                <option value="28">Flashdisk - 64GB</option>
                <option value="29">PowerBank VIVAN</option>
                <option value="30">Jam Rolex</option>
                <option value="31">Iphone 14</option>
                <option value="32">Iphone 15</option>
            </select>
        </td>
    </tr>
</table>
<div style="width: 800px; margin: 0 auto;">
    <canvas id="chart_barang"></canvas>
</div>
<br/>
<h1>Grafik Penjualan Per Bulan</h1>
<table>
    <tr>
        <td>Bulan</td>
        <td>:</td>
        <td>
            <select name="bulan" id="option_bulan">
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
        </td>
    </tr>
</table>
<div style="width: 800px; margin: 0 auto;">
    <canvas id="chart_penjualan"></canvas>
</div>
<script src="package/chartjs/Chart.js"></script>
<script>
    const option_barang = document.getElementById('option_barang');
    const ctx = document.getElementById('chart_barang').getContext('2d');
    let myChart;

    async function fetchDataAndUpdateChart(value) {
        try {
            const response = await fetch('services/getData.php?status=getDataBarang&id_barang=' + encodeURIComponent(value));
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const data = await response.json();
            const monthlySales = Array(12).fill(0);
            data.forEach(item => {
                monthlySales[item.month - 1] = item.total_sales;
            });

            if (myChart) {
                myChart.destroy();
            }

            myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Penjualan Barang Per Bulan',
                        data: monthlySales,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        } catch (error) {
            console.error('Error fetching data: ', error);
        }
    }

    option_barang.addEventListener('change', function () {
        const value = option_barang.value;
        fetchDataAndUpdateChart(value);
    });

    // Trigger the change event to load the initial data
    option_barang.dispatchEvent(new Event('change'));
</script>

<script>
    const option_bulan = document.getElementById('option_bulan');
    const ctx2 = document.getElementById('chart_penjualan').getContext('2d');
    let myChart2;

    async function fetchDataAndUpdateChartBarang(value) {
        try {
            const response = await fetch('services/getData.php?status=getDataPenjualan&bulan=' + encodeURIComponent(value));
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const data = await response.json();

            const productSales = Array(12).fill(0);
            data.forEach((item, index) => {
                productSales[index] = item.total_sales;
            });

            if (myChart2) {
                myChart2.destroy();
            }

            myChart2 = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['Rexus KB', 'Gamen Mouse','HP Laptop','Canon Scanner','Fantech Headphone', 'FD-64GB','PB-VIVAN','Rolex','Iphone 14','Iphone 15'],
                    datasets: [{
                        label: 'Penjualan Bulanan Setiap Barang',
                        data: productSales,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        } catch (error) {
            console.error('Error fetching data: ', error);
        }
    }

    option_bulan.addEventListener('change', function () {
        const value = option_bulan.value;
        fetchDataAndUpdateChartBarang(value);
    });

    option_bulan.dispatchEvent(new Event('change'));
</script>

</body>
</html>
