<?php
include ("conn/conn.php");
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Franchise Shops</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
   #main_title {
   text-align: center;
   background-color: #0056a2;
   color: #fff;
   padding: 20px;
   letter-spacing: 2px;
   font-weight: 500;
}

.box1 h2 {
   float: left;
}

.box1 button {
   float: right;
}

.container {
   margin-top: 50px;
}

h6 {
   text-align: center;
   color: red;
}
.modal-header {
    background-color: #007bff; /* Header background color */
    color: #fff; /* Header text color */
    border-bottom: none; /* Remove border at the bottom of the header */
}

.header-content {
    display: flex;
    align-items: center;
}

.modal-title {
    margin-right: auto; /* Push the close button to the right */
    font-size: 24px; /* Adjust title font size */
}

.close {
    font-size: 24px; /* Adjust close button font size */
    color: #fff; /* Close button color */
    opacity: 0.7; /* Adjust close button opacity */
    transition: opacity 0.3s ease; /* Add transition effect */
}

.close:hover {
    opacity: 1; /* Change opacity on hover */
}

/* Center the table */
.table-container {
    margin: 0 auto; /* Center horizontally */
    margin-left: 100px; /* Add top margin */
    width: 96%; /* Adjust width as needed */
}

</style>
</head>
<body>

<h1 id="main_title">FRANCHISE SHOPS</h1>
<div class="container">





<div class="box1">
<!-- <h2>All Shops</h2>
<br> -->

<button class="btn btn-primary"data-bs-toggle="modal"data-bs-target="#exampleModal">Add New Shop</button>
<br>
<br>
<br>

</div>

<div class="table-container"> <!-- Added container for the table -->
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Franchise Name</th>
            <th>Owner Name</th>
            <th>Franchise Location</th>
            <th>Rtom Code</th>
            <th>Province</th>
            <th>Regions</th>
            <th>Start Date</th>
            <th>Update</th>
            <th>Delete</th>
            <th>View</th>

        </tr>
    </thead>
     <tbody>
        <?php

            $query = "SELECT * FROM fr_shops";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query failed". mysqli_error());
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                     ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['fr_name']; ?></td>
            <td><?php echo $row['owner_name']; ?></td>
            <td><?php echo $row['franchise_location']; ?></td>
            <td><?php echo $row['fr_code']; ?></td>
            <td><?php echo $row['fr_location']; ?></td>
            <td><?php echo $row['regions']; ?></td>
            <td><?php echo $row['start_date']; ?></td>
            <td><a href="update_page.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
            <td><a href="delete_shop.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
            <td><a href="admin_view.php?fr_code=<?php echo $row['fr_code']; ?>" class="btn btn-primary">View</a></td>

        </tr>     
                
            <?php
        
                }
            }

?>
  
     </tbody>
            
</table>
</div>
<?php

if(isset($_GET['message'])){
    echo "<h6>".$_GET['message']."</h6>";
}

?>

<?php

// if(isset($_GET['insert_msg'])){
//     echo "<h6>".$_GET['insert_msg']."</h6>";
// }

?>

<?php

// if(isset($_GET['update_msg'])){
//     echo "<h6>".$_GET['update_msg']."</h6>";
// }

?>

<?php

if(isset($_GET['delete_msg'])){
    echo "<h6>".$_GET['delete_msg']."</h6>";
}

?>


<!-- Modal -->
<form action="insert_data.php" method="post">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Shop</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="fr_name">Franchise Name</label>
            <input type="text" name="fr_name" class="form-control" placeholder="Enter Franchise Name">
          </div>

          <div class="form-group">
            <label for="owner_name">Owner Name</label>
            <input type="text" name="owner_name" class="form-control" placeholder="Enter Owner Name">
          </div>
          <div class="form-group">
            <label for="franchise_location">Franchise Location</label>
            <input type="text" name="franchise_location" class="form-control" placeholder="Enter Franchise Location">
          </div>

          <div class="form-group">
            <label for="fr_code">Rtom Code</label>
            <select id="fr_code" class="form-control" name="fr_code">
              <option value="" selected disabled>Select Rtom Code</option>
              <?php
              // Fetch distinct RTOM codes from the database
              $distinctRtomCodes = mysqli_query($conn, "SELECT DISTINCT rtom_code FROM rtom");
              foreach($distinctRtomCodes as $rtomCode) {
                echo '<option value="' . $rtomCode["rtom_code"] . '">' . $rtomCode["rtom_code"] . '</option>';
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="fr_location">Province</label>
            <select id="fr_location" class="form-control" name="fr_location">
              <option value="" selected disabled>Select Province</option>
              <?php
              // Fetch distinct provinces from the database
              $distinctProvinceName = mysqli_query($conn, "SELECT DISTINCT province_name FROM provinces");
              foreach($distinctProvinceName as $provinceName) {
                echo '<option value="' . $provinceName["province_name"] . '">' . $provinceName["province_name"] . '</option>';
              }
              ?>
            </select>
          </div>
          
            <div class="form-group">
            <label for="regions">Region Code</label>
            <select id="regionsNameSelect" class="form-control" name="regions">
              <option value="" selected disabled>Region Name</option>
              <?php
              // Fetch distinct province name from the database
              $distinctRegionName = mysqli_query($conn, "SELECT DISTINCT region_name FROM region");
              foreach($distinctRegionName as $regionName) {
                echo '<option value="' . $regionName["region_name"] . '">' . $regionName["region_name"] . '</option>';
              }
              ?>
            </select>
        </div>

          <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success" name="add_new" value="Add">
        </div>
      </div>
    </div>
  </div>
</form>

</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>




