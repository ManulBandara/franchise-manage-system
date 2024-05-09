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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>File upload and download</title>

    <style>
       body {
            background-color: #ffffff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh; /* Adjusted height */
            width: 80%; /* Adjusted width */
            margin: 0 auto; /* Centering horizontally */
        }

        .upload-form {
            max-width: 500px;
            width: 100%;
            padding: 30px;
            border: 1px solid #ced4da;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .upload-heading {
            color: #495057;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-upload,
        .btn-show-files {
            width: 100%;
        }
    </style>
</head>
<body>
    
<!-- file uploading code -->

<div class="container">
    <div class="upload-form">
        <h2 class="upload-heading">Upload a File</h2>
        <form action="inventory_upload.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="file" class="form-label">Select File</label>
                <input type="file" class="form-control" name="file" id="file">
            </div>
            <button type="submit" class="btn btn-primary btn-upload">Upload File</button>
        </form>

        <!-- New button to redirect to another page -->
        <div class="mt-3">
            <a href="show_inventory.php" class="btn btn-success btn-show-files">Show Files</a>
        </div>
    </div>
</div>
    
<!-- end of file uploading code -->

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $target_dir = "uploads/"; // Change this to the desired directory for uploaded files
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

                // Insert the file information into the database
                $sql = "INSERT INTO files (filename, filesize, filetype) VALUES ('$filename', $filesize, '$filetype')";

                if ($conn->query($sql) === TRUE) {
                    echo "The file " . basename($_FILES["file"]["name"]) . " File Uploaded Successfully.";
                } else {
                    echo "Sorry, there was an error uploading your file and storing information in the database: " . $conn->error;
                }

                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>

