<?php
include "conn.php";
if(isset($_POST['add_employees'])){

    $fr_code = $_POST['fr_code'];
    $full_name = $_POST['full_name'];
    $address = $_POST['address'];
    $mob_no = $_POST['mob_no'];
    $nic = $_POST['nic'];
    
   if($full_name == "" || empty($full_name)){
        header("Location: manage_employee.php?message=you must fill the required fields");
   }

   else{
        $query = "INSERT INTO `students`(`fr_code`, `full_name`, `address`, `mob_no`, `nic`) VALUES ('$fr_code', '$full_name', '$address', '$mob_no', '$nic')";
    
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Query failed");
        }

        else{
        echo '<script>alert("Data inserted successfully");
            window.location.href="manage_employee.php";
        </script>';
     //    header("Location: manage_employee.php");
     

      
        

     
        }
   }
}



?>
