<?php include('conn.php');?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM agreement WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed". mysqli_error());
    }
    else{
          echo '<script>alert("File Deleted Successfully");
            window.location.href="agreement_view.php";
        </script>';
    }

}


?>