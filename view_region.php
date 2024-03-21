<?php include('conn.php');?>
<!DOCTYPE html>
<html>
<head>
<title>All Regions</title>
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

</style>
</head>
<body>

<h1 id="main_title">All Regions</h1>
<div class="container">





<div class="box1">
<h2>All Regions</h2>
<br>

<button class="btn btn-primary"data-bs-toggle="modal"data-bs-target="#exampleModal">Add New Region</button>


<br>
<br>
<br>

</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Region ID</th>
            <th>Region Name</th>
            <th>Update</th>
             <th>Delete</th> 
        </tr>
    </thead>
     <tbody>
        <?php

            $query = "SELECT * FROM region";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query failed". mysqli_error());
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                     ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['region_name']; ?></td>

            <td><a href="update_region.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
            <td><a href="delete_region.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
            
            
             
            

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
<form action="add_region.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Region</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>

      <div class="modal-body">
                <div class="form-group">
                    <label for="region_name">Region Name</label>
                    <input type="text" name="region_name" class="form-control">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>




