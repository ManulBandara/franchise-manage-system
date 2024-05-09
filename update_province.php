<?php
include ("conn/conn.php");
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>All Provinces</title>
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

<h1 id="main_title">All Provinces</h1>
<div class="container">

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM provinces WHERE id = '$id'";
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

    $province_name = $_POST['province_name'];
    
    

    $query = "UPDATE provinces SET province_name = '$province_name' WHERE id = '$idnew'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed". mysqli_error());
    }
    else{
           echo '<script>alert("Data updated successfully");
            window.location.href="view_province.php";
         </script>';
        //  header("Location: view_page.php?update_msg=Data updated successfully");
        //  exit;
    }

}
?>                            <div style="display: flex; justify-content: center;height: 20vh;">
               <form action="update_province.php?id_new=<?php echo $id; ?>" method="post">
                <div class="form-group">
                    <label for="province_name">Province Name</label>
                    <input type="text" name="province_name" class="form-control" value="<?php echo $row['province_name']?>">
                </div>
                
                
                    <input type="submit" class="btn btn-success" name="update_new" value="UPDATE">

                </form>
</div>

