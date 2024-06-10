<?php

include 'includes/header.php';
include 'includes/sidebar.php';
include 'includes/topbar.php';
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            background-color: #0056a2; /* Blue background color for the body */
            background-size: cover;
        }

        .container {
            font-size: 5px;
            color: rgb(255, 255, 255);
            text-shadow: 2px 4px 2px rgba(200,200,200,0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            height: 80%;
            margin: 20;
            padding-right: 50px;
        }

        .main-container {
            background-color: #ffffff; /* White background color for the form container */
            padding: 100px;
            margin-left: 20px;
            padding-left: 50px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 60px;
            width: 150%;
        }

        .title-container {
            text-align: center; /* Center the text */
        }

        .title-container h1 {
            font-size: 48px !important;
            color: rgb(255, 255, 255);
            text-shadow: 2px 4px 2px rgba(200,200,200,0.6);
        }

        .title-container h4 {
            text-align: center; /* Center the text */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-container">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					
                    <h1>Send Email</h1>
                    <h4></h4>
                </div>
                <div class="main-container">
                    <form class="" action="send.php" method="post">
                        <input type="email" name="email" class="form-control mb-3" placeholder="To">
                        <input type="text" name="subject" class="form-control mb-3" placeholder="Subject">
                        <textarea name="message" class="form-control mb-3" placeholder="Message"></textarea>
                        <input type="submit" name="send" class="btn btn-primary" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include 'includes/script.php';
?>
