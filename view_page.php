<?php include('conn.php');?>
>
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
</style>
</head>
<body>

<h1 id="main_title">FRANCHISE SHOPS</h1>
<div class="container">





<div class="box1">
<h2>All Shops</h2>
<br>

<button class="btn btn-primary"data-bs-toggle="modal"data-bs-target="#exampleModal">Add New Shop</button>
<br>
<br>
<br>

</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Franchise Name</th>
            <th>Franchise code</th>
            <th>Location</th>
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Shop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
                <div class="form-group">
                    <label for="fr_name">Farnchise Name</label>
                    <input type="text" name="fr_name" class="form-control">
                </div>
               
                 <div class="form-group">
                    <label for="fr_code">Franchise Code</label> <br>
                     <th class="select-header">
                  <select id="rtomCodeSelect" class="filter-select" name="fr_code">
                    <option value="" selected>All RTOM Code</option>
                    <?php
                    // Fetch distinct RTOM codes from the database
                    $distinctRtomCodes = mysqli_query($conn, "SELECT DISTINCT rtom_code FROM tb_data");
                    foreach($distinctRtomCodes as $rtomCode) {
                    echo '<option value="' . $rtomCode["rtom_code"] . '">' . $rtomCode["rtom_code"] . '</option>';
                    }
                    ?>
                    </select>
                    </th>
                </div>
                <div class="form-group">
                    <label for="fr_location">Location</label> <br>
                    <th class="select-header">
                  <select id="provinceSelect" class="filter-select" name="fr_location">
                    <option value="" selected>All Province</option>
                    <?php
                    // Fetch distinct RTOM codes from the database
                    $distinctProvince = mysqli_query($conn, "SELECT DISTINCT province FROM tb_data");
                    foreach($distinctProvince as $province) {
                    echo '<option value="' . $province["province"] . '">' . $province["province"] . '</option>';
                    }
                    ?>
                    </select>
                    </th>
                    
                </div>

                 <div class="form-group">
                    <label for="regions">Regions</label> <br>
                    <th class="select-header">
                  <select id="regionsSelect" class="filter-select" name="regions">
                    <option value="" selected>All Regions</option>
                    <?php
                    // Fetch distinct RTOM codes from the database
                    $distinctRegions = mysqli_query($conn, "SELECT DISTINCT regions FROM tb_data");
                    foreach($distinctRegions as $regions) {
                    echo '<option value="' . $regions["regions"] . '">' . $regions["regions"] . '</option>';
                    }
                    ?>
                    </select>
                    </th>
                    
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" class="form-control">
                </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_new" value="ADD">
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




