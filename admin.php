<?php
session_start();
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';

// Assume $totalShops contains the total number of shops fetched from the database
$totalShops = 30; // Example value, replace this with your actual count

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: #000; font-weight: bold;">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         <!-- Total Shops -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <a href="view_page.php" class="text-decoration-none">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Franchise Shops</h3>
                <p>All Shops</p>
            </div>
            <div class="icon">
                <i class="fas fa-store"></i> <!-- Font Awesome icon for shop -->
            </div>
        </div>
    </a>
</div>
<!-- /.col -->

<!-- Example 1 -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <a href="excelup.php" class="text-decoration-none">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Data Filter</h3> <!-- Change the value accordingly -->
                <p>total</p> <!-- Add a description for this statistic -->
            </div>
            <div class="icon">
                <i class="fas fa-chart-bar"></i> <!-- Font Awesome icon for example 1 -->
            </div>
        </div>
    </a>
</div>
<!-- /.col -->

<!-- Example 2 -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <a href="example2.php" class="text-decoration-none">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>Calculation</h3> <!-- Change the value accordingly -->
                <p>sales</p> <!-- Add a description for this statistic -->
            </div>
            <div class="icon">
                <i class="fas fa-users"></i> <!-- Font Awesome icon for example 2 -->
            </div>
        </div>
    </a>
</div>
<!-- /.col -->

<!-- Example 3 -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <a href="example3.php" class="text-decoration-none">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>Locations</h3> <!-- Change the value accordingly -->
                <p>View Branch Locations</p> <!-- Add a description for this statistic -->
            </div>
            <div class="icon">
                <i class="fas fa-briefcase"></i> <!-- Font Awesome icon for example 3 -->
            </div>
        </div>
    </a>
</div>
<!-- /.col -->

<!-- Example 4 -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <a href="example4.php" class="text-decoration-none">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>Inventory</h3> <!-- Change the value accordingly -->
                <p>Upload inventory file</p> <!-- Add a description for this statistic -->
            </div>
            <div class="icon">
                <i class="fas fa-money-bill-wave"></i> <!-- Font Awesome icon for example 4 -->
            </div>
        </div>
    </a>
</div>
<!-- /.col -->

<!-- Example 5 -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <a href="upload_agreement.php" class="text-decoration-none">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>Agreement</h3> <!-- Change the value accordingly -->
                <p>Upload agreement file</p> <!-- Add a description for this statistic -->
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt"></i> <!-- Font Awesome icon for example 5 -->
            </div>
        </div>
    </a>
</div>
<!-- /.col -->


              
              
              
              
              <div class="icon">
                <i class="fas fa-store"></i> <!-- Font Awesome icon for shop -->
              </div>
            </div>
          </div>
          <!-- /.col -->
          <!-- Add more small boxes for other statistics if needed -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom widgets -->
          </section>
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'includes/script.php';?>
<?php include 'includes/footer.php';?>
    
</body>
</html>
