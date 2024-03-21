<?php
include "conn.php";
if(isset($_POST['add_new'])){

    $region_name = $_POST['region_name'];
   
    
    
    if($region_name == "" || empty($region_name)){
        header("Location: view_region.php?message=you must fill the required fields");
    } else {
        $query = "INSERT INTO region (region_name) VALUES ('$region_name')";
    
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Query failed");
        } else {
            // header("Location: view_region.php?insert_msg=Data inserted successfully");
             echo '<script>alert("Data added successfully");
            window.location.href="view_region.php";
         </script>';
        }
    }
}
?>
