<?php include('conn.php');?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed". mysqli_error());
    }
    else{
          echo '<script>alert("Data Deleted Successfully");
            window.location.href="manage_employee.php";
        </script>';
    }

}


?>