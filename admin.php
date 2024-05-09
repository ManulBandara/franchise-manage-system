<?php
session_start();
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';

// Sample Data (Replace with your actual data)
$totalShops = 30;
$totalSales = 50000;
$totalRegions = 5;
$totalProvinces = 10;
$totalRoomCodes = 20;
$totalLocations = 50;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <style>
        /* Custom Styles */
        body {
            background-color: #f4f6f9;
        }

        .content-wrapper {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .small-box {
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .small-box:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #000; font-weight: bold;">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Total Shops -->
                <div class="col-lg-3 col-md-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $totalShops; ?></h3>
                            <p>Total Shops</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-store"></i>
                        </div>
                    </div>
                </div>

                <!-- Total Sales -->
                <div class="col-lg-3 col-md-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $totalSales; ?></h3>
                            <p>Total Sales</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>

                <!-- Total Regions -->
                <div class="col-lg-3 col-md-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $totalRegions; ?></h3>
                            <p>Total Regions</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-map"></i>
                        </div>
                    </div>
                </div>

                <!-- Total Provinces -->
                <div class="col-lg-3 col-md-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $totalProvinces; ?></h3>
                            <p>Total Provinces</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title text-white">Sales Overview</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="salesChart" style="height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title text-white">Shops Distribution</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="shopsChart" style="height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Include custom scripts -->
<script>
    // Sample data for charts (Replace with your actual data)
    var salesData = {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [{
            label: 'Sales',
            data: [2000, 3000, 5000, 4000, 6000, 7000],
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    var shopsData = {
        labels: ["North", "South", "East", "West"],
        datasets: [{
            label: 'Shops',
            data: [10, 15, 8, 12],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Sales Chart
    var salesCtx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(salesCtx, {
        type: 'line',
        data: salesData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Shops Chart
    var shopsCtx = document.getElementById('shopsChart').getContext('2d');
    var shopsChart = new Chart(shopsCtx, {
        type: 'doughnut',
        data: shopsData,
        options: {}
    });
</script>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include 'includes/script.php';?>
<?php include 'includes/footer.php';?>

</body>
</html>
