<?php include('conn.php');?>


<?php


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM students WHERE id = '$id'";
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

    if(isset($_POST['update_students'])){

        if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];
        }
        $fr_code = $_POST['fr_code'];
        $full_name = $_POST['full_name'];
        $address = $_POST['address'];
        $mob_no = $_POST['mob_no'];
        $nic = $_POST['nic'];

        $query = "UPDATE students SET fr_code = '$fr_code', full_name = '$full_name', address = '$address', 
        mob_no = '$mob_no', nic = '$nic' WHERE id = '$idnew'";

        $result = mysqli_query($conn, $query);

        if(!$result){
        die("Query failed". mysqli_error());
    }
    else{
        echo '<script>alert("Data updated successfully");
            window.location.href="manage_employee.php";
        </script>';
        }

    }

?>   
<!DOCTYPE html>
<html>
<head>
<title>Employees</title>
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

<h1 id="main_title">Employess</h1>
<div class="container">


               <form action="update_employee.php?id_new=<?php echo $id; ?>" method="post">
               <div class="form-group">
                    <label for="fr_code">Franchsie Code</label>
                    <input type="text" name="fr_code" class="form-control" value="<?php echo $row['fr_code']?>">
                </div>
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" class="form-control" value="<?php echo $row['full_name']?>">
                </div>
                 <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $row['address']?>">
                </div>
                 <div class="form-group">
                    <label for="mob_no">Mobile Number</label>
                    <input type="text" name="mob_no" class="form-control" value="<?php echo $row['mob_no']?>">
                </div>
                    <div class="form-group">
                    <label for="nic">NIC</label>
                    <input type="text" name="nic" class="form-control" value="<?php echo $row['nic']?>">
                </div>
                
                    <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">

                </form>


