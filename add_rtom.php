<?php
include "conn.php";
if(isset($_POST['add_new'])){

    $rtom_code = $_POST['rtom_code'];
    $region_name = $_POST['region_name'];
    $province_name = $_POST['province_name'];
   
    
    
    if($rtom_code == "" || empty($rtom_code)){
        header("Location: view_rtom.php?message=you must fill the required fields");
    } else {
        $query = "INSERT INTO rtom (rtom_code,region_name,province_name) VALUES ('$rtom_code','$region_name','$province_name')";
    
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Query failed");
        } else {
            // header("Location: view_region.php?insert_msg=Data inserted successfully");
             echo '<script>alert("Data added successfully");
            window.location.href="view_rtom.php";
         </script>';
        }
    }
}
?>
