<?php include('conn.php');z?>
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
</style>
</head>
<body>

<h1 id="main_title">All Regions</h1>
<div class="container">

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM region WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed". mysqli_error());
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
}

?>

<?php

if(isset($_POST['update_new'])){

    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }

    $region_name = $_POST['region_name'];
    
    

    $query = "UPDATE region SET region_name = '$region_name' WHERE id = '$idnew'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed". mysqli_error());
    }
    else{
           echo '<script>alert("Data updated successfully");
            window.location.href="view_region.php";
         </script>';
        //  header("Location: view_page.php?update_msg=Data updated successfully");
        //  exit;
    }

}
?>
               <form action="update_region.php?id_new=<?php echo $id; ?>" method="post">
                <div class="form-group">
                    <label for="region_name">Region Name</label>
                    <input type="text" name="region_name" class="form-control" value="<?php echo $row['region_name']?>">
                </div>
                
                
                    <input type="submit" class="btn btn-success" name="update_new" value="UPDATE">

                </form>

