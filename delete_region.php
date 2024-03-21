<?php include('conn.php');?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM region WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed". mysqli_error());
    }
    else{


        // header("Location: view_region.php?delete_msg=Data deleted successfully");
         echo '<script>alert("Data deleted successfully");
            window.location.href="view_region.php";
         </script>';
          
    }

}

?>