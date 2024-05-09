<?php
include "conn.php";
if(isset($_POST['add_new'])){

    $fr_name = $_POST['fr_name'];
    $owner_name = $_POST['owner_name'];
    $franchise_location = $_POST['franchise_location'];
    $fr_code = $_POST['fr_code'];
    $fr_location = $_POST['fr_location'];
    $regions = $_POST['regions'];
    $start_date = $_POST['start_date'];
    
    
    if($fr_name == "" || empty($fr_name)){
        header("Location: view_page.php?message=you must fill the required fields");
    } else {
        $query = "INSERT INTO fr_shops (fr_name, owner_name, franchise_location, fr_code, fr_location, regions, start_date) VALUES ('$fr_name', '$owner_name', '$franchise_location','$fr_code', '$fr_location', '$regions', '$start_date')";
    
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Query failed");
        } else {
            header("Location: view_page.php?insert_msg=Data inserted successfully");
        }
    }
}
?>
