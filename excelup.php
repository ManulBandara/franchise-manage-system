<?php
include ("conn/conn.php");
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: #000; font-weight: bold;">Upload Excelsheet</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">
					
				<form class="" action="" method="post" enctype="multipart/form-data">
					<input type="file" name="excel" required value="">
				<button type="submit" name="import" width>Import</button>
				</form>
				</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
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
<option value="" selected>Filter by Region</option>
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
<option value="" selected>Filter by Province</option>
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
<option value="" selected>Filter by RTOM Code</option>
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
<th></th>
<th class="select-header">
<select id="serviceTypeSelect" class="filter-select">
<option value="" selected>Filter by Service Type</option>
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
<option value="" selected>Filter by SO Status</option>
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
<th></th>
<th></th>
<th class="select-header">
<select id="bbPackageSelect" class="filter-select">
<option value="" selected>Filter by BB Package</option>
<?php
// Fetch distinct BB packages from the database
$distinctBBPackages = mysqli_query($conn, "SELECT DISTINCT bb_package FROM tb_data");
foreach($distinctBBPackages as $bbPackage) {
echo '<option value="' . $bbPackage["bb_package"] . '">' . $bbPackage["bb_package"] . '</option>';
}
?>
</select>
</th>
<th></th>
</tr>
</thead>
<tbody>
<?php
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
<?php endforeach; ?>
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

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excelReader/excel_reader2.php';
			require 'excelReader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				$regions = $row[0];
				$province = $row[1];
				$rtom_code = $row[2];
				$lea = $row[3];
				$so_id = $row[4];
				$product_label = $row[5];
				$so_datecreated = $row[6];
				$so_ordt_type = $row[7];
				$service_type = $row[8];
				$cr = $row[9];
				$acct_number = $row[10];
				$so_status = $row[11];
				$so_statusdate = $row[12];
				$sod_approved_date = $row[13];
				$milestone_1_actual_end_date = $row[14];
				$sales_channel = $row[15];
				$sales_person = $row[16];
				$so_initiator = $row[17];
				$actual_dsp_date = $row[18];
				$iptv_package = $row[19];
				$bb_package = $row[20];
				$iptv_previous_package = $row[21];
				$bb_previous_package = $row[22];
				$customer_contact = $row[23];
				$imei_no = $row[24];
				$payment_method = $row[25];
				
				
				
				mysqli_query($conn, "INSERT INTO tb_data VALUES('', '$regions', '$province', '$rtom_code', '$lea', '$so_id', '$product_label', '$so_datecreated' , '$so_ordt_type', '$service_type', '$cr', 
				'$acct_number', '$so_status' , '$so_statusdate' , '$sod_approved_date' , '$milestone_1_actual_end_date' , '$sales_channel' , '$sales_person' , '$so_initiator' , '$actual_dsp_date' , '$iptv_package' , '$bb_package' , '$iptv_previous_package' , '$bb_previous_package' , '$customer_contact' , '$imei_no' , '$payment_method')");
			}



}
?>

<script>
$(document).ready(function(){
// Change event on select dropdowns for filtering
$('.filter-select').change(function(){
var columnIndex = $(this).closest('th').index() + 1;
var columnValue = $(this).val();

// Filter the table based on the selected value
filterTable(columnIndex, columnValue);
});

function filterTable(columnIndex, columnValue) {
// Show all rows
$('#data-table tbody tr').show();

// Hide rows that don't match the selected value in the specified column
if (columnValue !== '') {
$('#data-table tbody tr').not(':has(td:nth-child(' + columnIndex + '):contains("' + columnValue + '"))').hide();
}
}
});
</script>


<?php include 'includes/script.php';?>
<?php include 'includes/footer.php';?>
    
</body>
</html>


