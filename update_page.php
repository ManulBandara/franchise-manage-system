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
</style>
</head>
<body>

<h1 id="main_title">FRANCHISE SHOPS</h1>
<div class="container">

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM fr_shops WHERE id = '$id'";
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

    $fr_name = $_POST['fr_name'];
    $owner_name = $_POST['owner_name'];
    $franchise_location = $_POST['franchise_location'];
    $fr_code = $_POST['fr_code'];
    $fr_location = $_POST['fr_location'];
    $start_date = $_POST['start_date'];
    

    $query = "UPDATE fr_shops SET fr_name = '$fr_name', owner_name = '$owner_name', franchise_location = '$franchise_location', fr_code = '$fr_code', fr_location = '$fr_location', start_date = '$start_date' WHERE id = '$idnew'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed". mysqli_error());
    }
    else{
           echo '<script>alert("Data updated successfully");
            window.location.href="view_page.php";
         </script>';
        //  header("Location: view_page.php?update_msg=Data updated successfully");
        //  exit;
    }

}
?><div style="display: flex; justify-content: center; align-items: center; height: 70vh;">
    <div style="width: 50%;">
        <form action="update_page.php?id_new=<?php echo $id; ?>" method="post">
            <div style="margin-bottom: 20px;">
                <label for="fr_name">Franchise Name</label>
                <input type="text" name="fr_name" class="form-control" value="<?php echo $row['fr_name']?>">
            </div>
                
            <div style="margin-bottom: 20px;">
                <label for="owner_name">Owner Name</label>
                <input type="text" name="owner_name" class="form-control" value="<?php echo $row['owner_name']?>">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="franchise_location">Franchise Location</label>
                <input type="text" name="franchise_location" class="form-control" value="<?php echo $row['franchise_location']?>">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="fr_code">Franchise Code</label>
                <input type="text" name="fr_code" class="form-control" value="<?php echo $row['fr_code']?>">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="fr_location">Location</label>
                <input type="text" name="fr_location" class="form-control" value="<?php echo $row['fr_location']?>">
            </div>
            
            <div style="margin-bottom: 20px;">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" class="form-control" value="<?php echo $row['start_date']?>">
            </div>
            
            <input type="submit" class="btn btn-success" name="update_new" value="UPDATE">
        </form>
    </div>
</div>


