<?php
include 'user_header.php';
include 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .header {
            background-color: #0056a2;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 20px;
        }

        .navbar {
            background-color: #0056a2;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 20px;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            display: inline;
            margin-right: 20px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
        }

        .navbar ul li a:hover {
            text-decoration: underline;
        }

        /* Styles for footer */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color:#0056a2;
            color: white;
            text-align: center;
            padding: 10px;
        }

        /* Styles for button container */
        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center the buttons horizontally */
            margin-top: 20px;
        }

        .button {
            margin: 50px;
            padding: 0; /* Remove padding */
            width: 250px; /* Set fixed width */
            height: 100px; /* Set fixed height */
            background-color: #002D62; /* Change background color to blue */
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 20px; /* Increase border radius for a rounded button appearance */
            cursor: pointer;
            display: flex; /* Use flexbox for vertical alignment */
            justify-content: center; /* Center text horizontally */
            align-items: center; /* Center text vertically */
            font-size: 30px;
            text-align: center;
            font-weight: bold;
}

    </style>
    <title>Franchise User</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="button-container">
        <a href="manage_employee.php" class="button">Manage Employee</a>
        <a href="show_inventory.php" class="button">View Inventory</a>
        <!-- <a href="agreement_view.php" class="button">View Agreement</a> -->
      <form id="viewForm" action="view_pdf.php" method="post">
            <button type="submit" name="view" class="button">View Agreement</button>
            <input type="hidden" name="view" value="true">
        </form>

    </div>

    <script type="text/javascript">
        function view() {
            document.getElementById("viewForm").submit();
        }
    </script>
</body>

</html>

<footer class="footer">
    <p>&copy; Franchise Operating system.</p>
</footer>






