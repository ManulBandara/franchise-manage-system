<?php
include "conn.php";
if(isset($_POST['add_new'])){

    $province_name = $_POST['province_name'];
    $region_name = $_POST['region_name'];
    
    
    if($province_name == "" || empty($province_name)){
        header("Location: view_province.php?message=you must fill the required fields");
    } else {
        $query = "INSERT INTO provinces (province_name,region_name) VALUES ('$province_name','$region_name')";
    
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Query failed");
        } else {
            // header("Location: view_region.php?insert_msg=Data inserted successfully");
             echo '<script>alert("Data added successfully");
            window.location.href="view_province.php";
         </script>';
        }
    }
}
?>
