<?php

include ("conn/conn.php");
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';

if (isset($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
    $query = "DELETE FROM customer WHERE customer_id='$customer_id' ";
    $query_run = mysqli_query($con,$query);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
</head>
<body>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--h1 class="m-0">Dashboard</h1-->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
              <li class="breadcrumb-item active">Histroy</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      
      
      <div class="container">
        <div class="row">
            <div class="col-md-12">
            <!--?php
                 include 'message.php';
               ?--> 
               <div class="card">
                 <div class="card-header" style="background-color: #3398dc;">
                  <h3 class="card-title" style="font-weight: bold; text-transform: uppercase; color: #fff;">Imported ExcelSheets History</h3>
                    <!--a href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#AddUserModal">Add User</a-->
               </div>
                 <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
                   <thead style="background-color: #3398dc; color: #fff;">
                   <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php
                     $query = "SELECT * FROM `tb_data`";
                     $query_run = mysqli_query($conn,$query);

                     while ($row = mysqli_fetch_assoc($query_run))
                     {
                        ?>

                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['imp_date']; ?></td>
                          <td><?php echo $row['imp_time']; ?></td>
                          <td>
                            <!-- <a href="#" class="btn btn-info btn-sm ">Edit</a> -->
                            <button type="button"  class="btn btn-danger btn-sm deletebtn">Delete</button> 
                          </td>
                        </tr>
                        <?php
                     }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
      </div>

<script>
$(document).ready(function(){
// Change event on select dropdowns for filtering
$('.filter-select').change(function(){
var columnIndex = $(this).closest('th').index() + 1;
var columnValue = $(this).val();

// Filter the table based on the selected value
filterTable(columnIndex, columnValue);
});

function filterTable(columnIndex, columnValue) {
// Show all rows
$('#data-table tbody tr').show();

// Hide rows that don't match the selected value in the specified column
if (columnValue !== '') {
$('#data-table tbody tr').not(':has(td:nth-child(' + columnIndex + '):contains("' + columnValue + '"))').hide();
}
}
});
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


                


<?php include 'includes/script.php';?>
<?php include 'includes/footer.php';?>
    
</body>
</html>


