<?php
include ("conn/conn.php");
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Agreement Upload</title>

    <style>
        body {
            /* background-image: url('path/to/your/pdf-background-image.jpg');  */
            background-color: #ffffff;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .upload-heading {
            color: #000000;
        }

    </style>
</head>
<center>
<body>
    <div class="container" style="margin-top: 200px;">
        <h2 class="upload-heading">Upload a file</h2>
        <br>
        <form action="upload_agreement.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="file" class="form-label">Select file</label>
                <input type="file" class="form-control" name="file" id="file" style="width: 30%;" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload file</button>
        </form>

        <!-- New button to redirect to another page -->
        <div class="mt-3">
            <a href="agreement_view.php" class="btn btn-success">View Agreement</a>
        </div>
    </div>
</body>
</center>
</html>
<?php
// Assuming $conn is your database connection variable
// Replace this with your actual database connection code

// Check if connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $target_dir = "agreement/"; // Change this to the desired directory for uploaded files
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is allowed (you can modify this to allow specific file types)
        $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf", "xlsx", "docx");
        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF, XLSX, DOCX and PDF files are allowed.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                // File upload success, now store information in the database
                $filename = $_FILES["file"]["name"];
                $filesize = $_FILES["file"]["size"];
                $filetype = $_FILES["file"]["type"];

                // Insert the file information into the database using prepared statements
                $sql = "INSERT INTO agreement (filename, filesize, filetype) VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "sds", $filename, $filesize, $filetype);

                if (mysqli_stmt_execute($stmt)) {
                    echo '<script>alert("The file ' . basename($_FILES["file"]["name"]) . ' File Uploaded Successfully.");
                        window.location.href="upload_agreement.php";
                    </script>';
                } else {
                    echo "Sorry, there was an error uploading your file and storing information in the database: " . mysqli_error($conn);
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}

// Close the database connection
mysqli_close($conn);
?>

<?php
include 'includes/script.php';
?>

