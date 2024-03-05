<?php
// Include necessary files and connect to the database
include 'conn.php';

if (isset($_POST['view'])) {
    // Assuming you have a table named 'agreement' with a column 'filename' where you store the PDF filenames
    $sql = "SELECT `filename` FROM agreement WHERE `filename` = 'sample.pdf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the PDF filename
        $row = $result->fetch_assoc();
        $filename = $row['filename'];

        // Redirect to the PHP script to serve the PDF file
        header("Location: view_pdf_content.php?filename=$filename");
        exit;
    } else {
        echo "PDF file not found in the database";
    }

    $conn->close();
}
?>

