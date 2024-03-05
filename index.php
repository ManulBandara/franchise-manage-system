<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchise Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 100%;
            height: 100vh;
            background-image : linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(SLT_7.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .logo img {
            max-width: 350px;
            height: auto;
        }
        .btn {
            display: inline-block;
            padding: 15px 25px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 18px;
            font-weight: 500;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        h1 {
            font-size: 50px;
            margin-bottom: 20px;
            color: #ffffff;
            font-style: italic;
        }
        p {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
       <div class="logo">
            <!-- <img src="https://www.mobitel.lk/sites/all/themes/mobitel/templates/slt_mobitel_home/assets/images/landing/slt-logo.svg" alt="Sri Lanka Telecom"> -->
        </div>
        <h1>Welcome to Franchise Operating System</h1>
        <a href="role_select.php" class="btn">Get Started</a>
    </div>
</body>
</html>
