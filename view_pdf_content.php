<?php
// Include necessary files and connect to the database
include 'conn.php';

// Fetch the filename from the query parameter
$filename = isset($_GET['filename']) ? $_GET['filename'] : '';

if (!empty($filename)) {
    // Fetch the PDF content based on the filename
    $sql = "SELECT filetype FROM agreement WHERE `filename` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $filename);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the PDF content
        $row = $result->fetch_assoc();
        $pdf_content = $row['filetype'];

        // Set appropriate headers for PDF
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="sample.pdf"');

        // Output the PDF content
        echo $pdf_content;
    } else {
        echo "PDF file not found in the database";
    }
} else {
    echo "Invalid filename";
}

$conn->close();
?>
