<?php
include ("conn/conn.php");
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Import Excel To MySQL</title>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<style>
#main_title {
    text-align: center;
    background-color: #0056a2;
    color: #fff;
    padding: 20px;
    letter-spacing: 2px;
    font-weight: 500;
    width:5000px;
}
.container {
    margin-top: 80px;
    margin-bottom: 80px;
    margin-left: 100px;
}

th,
td {
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 30px;
    padding-right: 40px;
}

table {
    border-collapse: collapse;
    width: 100%;

}

th {
    background-color: #07081b;
    color: #fff;
    font-weight: 500;
    letter-spacing: 2px;
}

header {
    background-color: #0056a2;
    color: #fff;
    position: fixed;
    padding: 20px;
    letter-spacing: 2px;
    font-weight: 500;
}







</style>

</head>

<body>
<div class="button-container">
<a href="uploade.php" class="button">  
<button id="viewUploadedSheetBtn" style="float: right;">View Uploaded Sheet</button><br>
</a>
</div>

<hr>
<!-- Add search form for filtering by sheet ID -->
<form method="post" action="">
    <div style="float: right;">
        <input type="text" id="searchId" name="searchId" placeholder="Search ID">
        <button type="submit" id="searchButton" name="searchButton">Search</button>
    </div>
</form>



<form class="" action="" method="post" enctype="multipart/form-data">
<input type="file" name="excel" required value="">
<!-- Add input field for sheet ID -->
<label for="sheetID">Sheet ID:</label>
<input type="text" id="sheetID" name="sheetID" required>

<button type="submit" name="import">Import</button>
<div id="no-data-message" style="display: none; margin-top: 10px;">No data found for the selected criteria.</div>

</form>

<hr>

<!-- Total Sales Textbox -->
<div style="text-align: center;">
    <label for="totalSales" style="display: inline-block; margin-right: 10px;">Total Sales:</label>
    <input type="text" id="totalSales" readonly style="display: inline-block;">
</div>
<br>


<!-- Table with dropdowns for filtering -->
<table id="data-table" border="1">
<thead>
<tr>
<th>#</th>
<th>REGIONS</th>
<th>PROVINCE</th>
<th>RTOM_CODE</th>
<th>LEA</th>
<th>SO_ID</th>
<th>PRODUCT_LABEL</th>
<th>SO_DATECREATED</th>
<th>SO_ORDT_TYPE</th>
<th>SERVICE_TYPE</th>
<th>CR</th>
<th>ACCT_NUMBER</th>
<th>SO_STATUS</th>
<th>SOD_APPROVED_DATE</th>
<th>MILESTONE_1_ACTUAL_END_DATE</th>
<th>SALES_CHANNEL</th>
<th>SALES_PERSON</th>
<th>BB_PACKAGE</th>
<th>IMEI_NO</th>

</tr>
<tr>
<th></th>
<th class="select-header">
<select id="regionsSelect" class="filter-select">
<option value="" selected>All Region</option>
<?php
// Fetch distinct regions from the database
$distinctRegions = mysqli_query($conn, "SELECT DISTINCT regions FROM tb_data");
foreach($distinctRegions as $region) {
echo '<option value="' . $region["regions"] . '">' . $region["regions"] . '</option>';
}
?>
</select>
</th>
<th class="select-header">
<select id="provinceSelect" class="filter-select">
<option value="" selected>All Province</option>
<?php
// Fetch distinct provinces from the database
$distinctProvinces = mysqli_query($conn, "SELECT DISTINCT province FROM tb_data");
foreach($distinctProvinces as $province) {
echo '<option value="' . $province["province"] . '">' . $province["province"] . '</option>';
}
?>
</select>
</th>
<th class="select-header">
<select id="rtomCodeSelect" class="filter-select">
<option value="" selected>All RTOM Code</option>
<?php
// Fetch distinct RTOM codes from the database
$distinctRtomCodes = mysqli_query($conn, "SELECT DISTINCT rtom_code FROM tb_data");
foreach($distinctRtomCodes as $rtomCode) {
echo '<option value="' . $rtomCode["rtom_code"] . '">' . $rtomCode["rtom_code"] . '</option>';
}
?>
</select>
</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th class="select-header">
<select id="soOrderTypeSelect" class="filter-select">
<option value="" selected>All SO Order Type</option>
<?php
// Fetch distinct SO order types from the database
$distinctSOOrderTypes = mysqli_query($conn, "SELECT DISTINCT so_ordt_type FROM tb_data");
foreach($distinctSOOrderTypes as $soOrderType) {
echo '<option value="' . $soOrderType["so_ordt_type"] . '">' . $soOrderType["so_ordt_type"] . '</option>';
}
?>
</select>
</th>

<th class="select-header">
<select id="serviceTypeSelect" class="filter-select">
<option value="" selected>All Service Type</option>
<?php
// Fetch distinct service types from the database
$distinctServiceTypes = mysqli_query($conn, "SELECT DISTINCT service_type FROM tb_data");
foreach($distinctServiceTypes as $serviceType) {
echo '<option value="' . $serviceType["service_type"] . '">' . $serviceType["service_type"] . '</option>';
}
?>
</select>
</th>
<th></th>
<th></th>
<th class="select-header">
<select id="soStatusSelect" class="filter-select">
<option value="" selected>All SO Status</option>
<?php
// Fetch distinct SO statuses from the database
$distinctSOStatuses = mysqli_query($conn, "SELECT DISTINCT so_status FROM tb_data");
foreach($distinctSOStatuses as $soStatus) {
echo '<option value="' . $soStatus["so_status"] . '">' . $soStatus["so_status"] . '</option>';
}
?>
</select>
</th>
<th></th>
<th></th>

<th class="select-header">
<select id="salesChannelSelect" class="filter-select">
<option value="" selected>All Sales Channel</option>
<?php
// Fetch distinct sales channels from the database
$distinctSalesChannels = mysqli_query($conn, "SELECT DISTINCT sales_channel FROM tb_data");
foreach($distinctSalesChannels as $salesChannel) {
echo '<option value="' . $salesChannel["sales_channel"] . '">' . $salesChannel["sales_channel"] . '</option>';
}
?>
</select>
</th>


<th class="select-header">
<select id="salesPersonSelect" class="filter-select">
<option value="" selected>All Sales Person</option>
<?php
// Fetch distinct sales persons from the database
$distinctSalesPersons = mysqli_query($conn, "SELECT DISTINCT sales_person FROM tb_data");
foreach($distinctSalesPersons as $salesPerson) {
echo '<option value="' . $salesPerson["sales_person"] . '">' . $salesPerson["sales_person"] . '</option>';
}
?>
</select>
</th>

<th class="select-header">
<select id="bbPackageSelect" class="filter-select">
<option value="" selected>All BB Package</option>
<?php
// Fetch distinct BB packages from the database
$distinctBBPackages = mysqli_query($conn, "SELECT DISTINCT bb_package FROM tb_data");
foreach($distinctBBPackages as $bbPackage) {
echo '<option value="' . $bbPackage["bb_package"] . '">' . $bbPackage["bb_package"] . '</option>';
}
?>
</select>
</th>


<th class="select-header">
<select id="imeiNoSelect" class="filter-select">
<option value="" selected>All IMEI No</option>
<?php
// Fetch distinct IMEI numbers from the database
$distinctIMEINos = mysqli_query($conn, "SELECT DISTINCT imei_no FROM tb_data");
foreach($distinctIMEINos as $imeiNo) {
echo '<option value="' . $imeiNo["imei_no"] . '">' . $imeiNo["imei_no"] . '</option>';
}
?>
</select>
</th>
</tr>
</thead>
<tbody>

<?php
if(isset($_POST["searchButton"])){
    $sheetID = $_POST['searchId'];
    $query = "SELECT * FROM tb_data WHERE sheet_id LIKE '%$sheetID%'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $i = 1;
        foreach($result as $row){
            ?>
            <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["regions"]; ?></td>
            <td><?php echo $row["province"]; ?></td>
            <td><?php echo $row["rtom_code"]; ?></td>
            <td><?php echo $row["lea"]; ?></td>
            <td><?php echo $row["so_id"]; ?></td>
            <td><?php echo $row["product_label"]; ?></td>
            <td><?php echo $row["so_datecreated"]; ?></td>
            <td><?php echo $row["so_ordt_type"]; ?></td>
            <td><?php echo $row["service_type"]; ?></td>
            <td><?php echo $row["cr"]; ?></td>
            <td><?php echo $row["acct_number"]; ?></td>
            <td><?php echo $row["so_status"]; ?></td>
            <td><?php echo $row["sod_approved_date"]; ?></td>
            <td><?php echo $row["milestone_1_actual_end_date"]; ?></td>
            <td><?php echo $row["sales_channel"]; ?></td>
            <td><?php echo $row["sales_person"]; ?></td>
            <td><?php echo $row["bb_package"]; ?></td>
            <td><?php echo $row["imei_no"]; ?></td>
           
            </tr>
            <?php
        }
    } else {
        echo "<tr><td colspan='20'>No data found for the given Sheet ID.</td></tr>";
    }
} else {
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM tb_data");
    foreach($rows as $row) :
    ?>
    <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $row["regions"]; ?></td>
    <td><?php echo $row["province"]; ?></td>
    <td><?php echo $row["rtom_code"]; ?></td>
    <td><?php echo $row["lea"]; ?></td>
    <td><?php echo $row["so_id"]; ?></td>
    <td><?php echo $row["product_label"]; ?></td>
    <td><?php echo $row["so_datecreated"]; ?></td>
    <td><?php echo $row["so_ordt_type"]; ?></td>
    <td><?php echo $row["service_type"]; ?></td>
    <td><?php echo $row["cr"]; ?></td>
    <td><?php echo $row["acct_number"]; ?></td>
    <td><?php echo $row["so_status"]; ?></td>
    <td><?php echo $row["sod_approved_date"]; ?></td>
    <td><?php echo $row["milestone_1_actual_end_date"]; ?></td>
    <td><?php echo $row["sales_channel"]; ?></td>
    <td><?php echo $row["sales_person"]; ?></td>
    <td><?php echo $row["bb_package"]; ?></td>
    <td><?php echo $row["imei_no"]; ?></td>
  
    </tr>
    <?php endforeach;
}
?>
</tbody>
</table>

<?php
if(isset($_GET['delete_msg'])){
echo "<h6>".$_GET['delete_msg']."</h6>";
}
?>

<?php
if(isset($_POST["import"])){
    $fileName = $_FILES["excel"]["name"];
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));
    $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

    $targetDirectory = "uploads/" . $newFileName;
    move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

   // Get sheet ID entered by the user
$sheetID = $_POST['sheetID'];

// Check if the sheet ID already exists in the uploaded_sheet table
$existingSheetIDQuery = "SELECT * FROM uploded_sheet WHERE sheet_id = '$sheetID'";
$existingSheetIDResult = mysqli_query($conn, $existingSheetIDQuery);

if(mysqli_num_rows($existingSheetIDResult) > 0){
    // Sheet ID already exists
    echo "<script>alert('Sheet ID $sheetID has already been used. Please provide a new Sheet ID.');</script>";
} else {
    // Check if the uploaded sheet already exists in the uploaded_sheet table
    $existingSheetQuery = "SELECT * FROM uploded_sheet WHERE file_name = '$fileName'";
    $existingSheetResult = mysqli_query($conn, $existingSheetQuery);

    if(mysqli_num_rows($existingSheetResult) > 0){
        // Check if the sheet ID exists for the given file name
        $existingSheetWithIDQuery = "SELECT * FROM uploded_sheet WHERE file_name = '$fileName' AND sheet_id = '$sheetID'";
        $existingSheetWithIDResult = mysqli_query($conn, $existingSheetWithIDQuery);

        if(mysqli_num_rows($existingSheetWithIDResult) > 0){
            // Sheet ID exists
            echo "<script>alert('Sheet ID $sheetID has been used before for this file. Please provide a new Sheet ID.');</script>";
        } else {
            // Sheet ID doesn't exist for the given file name
            echo "<script>alert('This sheet has been imported before with a different Sheet ID.');</script>";
        }
    } else {
        // Insert uploaded sheet details into the uploaded_sheet table
        mysqli_query($conn, "INSERT INTO uploded_sheet (file_name, sheet_id) VALUES ('$fileName', '$sheetID')");

        // Display success message
        echo "<script>alert('Import upload detail successful');</script>";
    }




        // Read Excel data and insert into td_data table
        error_reporting(0);
        ini_set('display_errors', 0);

        require 'excelReader/excel_reader2.php';
        require 'excelReader/SpreadsheetReader.php';

        $reader = new SpreadsheetReader($targetDirectory);
        foreach ($reader as $key => $sheetData) {
            
            if ($key > 0){

            $regions = $sheetData[0];
            $province = $sheetData[1];
            $rtom_code = $sheetData[2];
            $lea = $sheetData[3];
            $so_id = $sheetData[4];
            $product_label = $sheetData[5];
            $so_datecreated = $sheetData[6];
            $so_ordt_type = $sheetData[7];
            $service_type = $sheetData[8];
            $cr = $sheetData[9];
            $acct_number = $sheetData[10];
            $so_status = $sheetData[11];
            $sod_approved_date = $sheetData[12];
            $milestone_1_actual_end_date = $sheetData[13];
            $sales_channel = $sheetData[14];
            $sales_person = $sheetData[15];
            $bb_package = $sheetData[16];
            $imei_no = $sheetData[17];

           // Insert data into the database with the corresponding sheet ID
        mysqli_query($conn, "INSERT INTO tb_data (regions, province, rtom_code, lea, so_id, product_label, so_datecreated, so_ordt_type, service_type, cr, acct_number, so_status, sod_approved_date, milestone_1_actual_end_date, sales_channel, sales_person, bb_package, imei_no, sheet_id) VALUES ('$regions', '$province', '$rtom_code', '$lea', '$so_id', '$product_label', '$so_datecreated', '$so_ordt_type', '$service_type', '$cr', '$acct_number', '$so_status', '$sod_approved_date', '$milestone_1_actual_end_date', '$sales_channel', '$sales_person', '$bb_package', '$imei_no', '$sheetID')");
    }
}

    echo
    "
    <script>
    alert('Successfully Imported');
    document.location.href = '';
    </script>
    ";
    }
}

?>

<script>
$(document).ready(function(){
    // Change event on select dropdowns for filtering
    $('.filter-select').change(function(){
        // Hide all rows
        $('#data-table tbody tr').hide();

        // Filter the table based on the selected values
        var regionValue = $('#regionsSelect').val();
        var provinceValue = $('#provinceSelect').val();
        var rtomCodeValue = $('#rtomCodeSelect').val();
        var soOrderTypeValue = $('#soOrderTypeSelect').val();
        var serviceTypeValue = $('#serviceTypeSelect').val();
        var soStatusValue = $('#soStatusSelect').val();
        var salesChannelValue = $('#salesChannelSelect').val();
        var salesPersonValue = $('#salesPersonSelect').val();
        var bbPackageValue = $('#bbPackageSelect').val();
        var imeiNoValue = $('#imeiNoSelect').val();

        var $filteredRows = $('#data-table tbody tr').filter(function(){
            var regionMatch = regionValue === '' || $(this).find('td:nth-child(2)').text() === regionValue;
            var provinceMatch = provinceValue === '' || $(this).find('td:nth-child(3)').text() === provinceValue;
            var rtomCodeMatch = rtomCodeValue === '' || $(this).find('td:nth-child(4)').text() === rtomCodeValue;
            var soOrderTypeMatch = soOrderTypeValue === '' || $(this).find('td:nth-child(9)').text() === soOrderTypeValue;
            var serviceTypeMatch = serviceTypeValue === '' || $(this).find('td:nth-child(10)').text() === serviceTypeValue;
            var soStatusMatch = soStatusValue === '' || $(this).find('td:nth-child(13)').text() === soStatusValue;
            var salesChannelMatch = salesChannelValue === '' || $(this).find('td:nth-child(16)').text() === salesChannelValue;
            var salesPersonMatch = salesPersonValue === '' || $(this).find('td:nth-child(17)').text() === salesPersonValue;
            var bbPackageMatch = bbPackageValue === '' || $(this).find('td:nth-child(18)').text() === bbPackageValue;
            var imeiNoMatch = imeiNoValue === '' || $(this).find('td:nth-child(19)').text() === imeiNoValue;


            return regionMatch && provinceMatch && rtomCodeMatch && soOrderTypeMatch && serviceTypeMatch && soStatusMatch && salesChannelMatch && salesPersonMatch && bbPackageMatch && imeiNoMatch;
        });

        // Update the total sales textbox value
        $('#totalSales').val($filteredRows.length);
    

        if ($filteredRows.length === 0) {
            $('#no-data-message').show();
        } else {
            $('#no-data-message').hide();
            $filteredRows.show();
        }
    });
});
</script>

</body>
</html>


