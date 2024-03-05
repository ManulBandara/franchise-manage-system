<?php
include "conn.php";

$id = $_GET['id'];
$status = $_GET['status'];
$query = "UPDATE students SET status = '$status' WHERE id = '$id'";

mysqli_query($conn, $query);

header("Location: manage_employee.php");

?>
