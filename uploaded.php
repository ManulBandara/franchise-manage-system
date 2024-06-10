
<?php
include ("conn/conn.php");
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>
<?php

// Fetch data from the uploaded_sheet table
$uploadedSheetQuery = "SELECT * FROM uploaded_sheet";
$uploadedSheetResult = mysqli_query($conn, $uploadedSheetQuery);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>View Uploaded Data</title>
</head>
<body>

<center><h2>Uploaded Sheet Data</h2></center>


<!-- Display data from uploaded_sheet table -->
<center>
<table border="1">
<thead>
<tr>
<th>#</th>
<th>File Name</th>
<th>Sheet ID</th>
</tr>
</thead>

<tbody>
<?php
if (mysqli_num_rows($uploadedSheetResult) > 0) {
    $i = 1;
    while ($row = mysqli_fetch_assoc($uploadedSheetResult)) {
        echo "<tr>";
        echo "<td>" . $i++ . "</td>";
        echo "<td>" . $row['file_name'] . "</td>";
        echo "<td>" . $row['sheet_id'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No data found in uploaded_sheet table.</td></tr>";
}
?>
</tbody>
</table>
</center>
</body>
</html>

<?php
// Include the footer file
?>