<?php
include ("conn/conn.php");
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>

<div class="container mt-5">
<div class="row justify-content">
    <div class="col-md-8">
        
    <form actiom="" method="GET">
    <div class="input-group mb-3">
    <input type="text" class="form-control" value="<?php if(isset($GET['search'])) {
        echo $_GET['search'];}
    
    ?>" name="search" class="form-control" placeholder="Search">
    <button type="submit" class="btn btn-primary">Search</button>
</div>
</form>
        <div class="card">
            <div class="card-header"><h4>Search Data</h4>
        </div>

            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <b><th>ID</th></b>
                            <b><th>Franchise Code</th></b>
                            <b><th>Full Name</th></b>
                            <b><th>Address</th></b>
                            <b><th>Mobile Number</th></b>
                            <b><th>NIC</th></b>
                            
                           
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        if(isset($_GET['search'])) {

                            $conn = mysqli_connect("localhost","root","","franchise_manage_system");
                            $filtervalue = $_GET['search'];
                            $filterdata = "SELECT * FROM students WHERE CONCAT (id, fr_code, full_name, address, mob_no, nic) LIKE '%$filtervalue%'";
                            $filterdata_run = mysqli_query($conn, $filterdata);

                            if(mysqli_num_rows($filterdata_run) > 0) {
                               foreach($filterdata_run as $row) 
                               {
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['fr_code']; ?></td>
                                        <td><?php echo $row['full_name']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['mob_no']; ?></td>
                                        <td><?php echo $row['nic']; ?></td>

                                    
                                    </tr>
                                <?php
                               }
                          
                            }
                            else
                         {
                            ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                        <?php
                         }
                        }

                        
                        
                        ?>
                    </tbody>
                    
            </div>
        </div>
    </div>
    
</div>
</div>

