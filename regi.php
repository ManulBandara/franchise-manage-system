<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("sltlogo.jpg");
            background-color:#0056a2;
            background-size: 250px 150px;
            background-repeat: no-repeat;
            background-attachment: fixed;        
            overflow: hidden;
            height: 100vh;
        }
        
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.4);
            height: 100vh;
        }

        .login-container, .registration-container {
            width: 500px;
            box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            color: rgb(255, 255, 255);
        }

        .title-container > h4 {
            font-size: 48px !important;
            color: rgb(255, 255, 255);
            text-shadow: 2px 4px 2px rgba(200,200,200,0.6);
        }

        .show-form {
            color: rgb(100, 100, 200);
            text-decoration: underline;
            cursor: pointer;
        }

        .show-form:hover {
            color: rgb(100, 100, 255);
        }
    </style>
</head>
<body>
    
    <div class="main row">

        <div class="title-container col-10 text-center">
            <h4>Franchise Operating System</h4>
        </div>

        <div class="main-container col-4">
        


        <!-- Registration Area -->
        <div class="registration-container" id="registrationForm" style="display:none;">
            <h2 class="text-center">Register Your Account!</h2>
            <p class="text-center">Please enter your personal details.</p>
            <div class="registration-form">
            <form method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-control" id="role" name="role">
                        <option>-select-</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="registerUsername">Username:</label>
                    <input type="text" class="form-control" id="registerUsername" name="username">
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password:</label>
                    <input type="password" class="form-control" id="registerPassword" name="password">
                </div>
                <!-- <div class="form-group">
                    <label for="confirmPassword">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                </div> -->
                <div class="form-group float-right">
                    <small class="show-form" onclick="showForm()">Already have an account? Login Here.</small>
                </div>
                <button type="submit" class="btn btn-primary login-register form-control" name="regbtn">Register</button>
            </form>

            </div>

        </div>
        </div>


    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script>
        function showForm() {
            const loginForm = document.getElementById('loginForm');
            const registrationForm = document.getElementById('registrationForm');

            if (registrationForm.style.display == 'none') {
                loginForm.style.display = 'none';
                registrationForm.style.display = '';
            } else {
                loginForm.style.display = '';
                registrationForm.style.display = 'none';
            }
        }
    </script>
</body>
</html>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("sltlogo.jpg");
            background-color:#0056a2;
            background-size: 250px 150px;
            background-repeat: no-repeat;
            background-attachment: fixed;        
            overflow: hidden;
            height: 100vh;
        }
        
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.4);
            height: 100vh;
        }

        .login-container, .registration-container {
            width: 500px;
            box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            color: rgb(255, 255, 255);
        }

        .title-container > h4 {
            font-size: 48px !important;
            color: rgb(255, 255, 255);
            text-shadow: 2px 4px 2px rgba(200,200,200,0.6);
        }

        .show-form {
            color: rgb(100, 100, 200);
            text-decoration: underline;
            cursor: pointer;
        }

        .show-form:hover {
            color: rgb(100, 100, 255);
        }
    </style>
</head>
<body>
    
    <div class="main row">

        <div class="title-container col-10 text-center">
            <h4>Franchise Operating System</h4>
        </div>

        <div class="main-container col-4">
        <!-- Login Form -->
        <div class="login-container" id="loginForm">
            <h2 class="text-center">Welcome Back!</h2>
            <p class="text-center">Please enter your login details.</p>
            <div class="login-form">
                <form action="./endpoint/login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    
                    <div class="row m-auto">
                    <div class="form-group form-check col-6">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                    </div>
                    <small class="show-form col-6 text-center pl-4" onclick="showForm()">No Account? Register Here.</small>
                    </div>

                    <button type="submit" class="btn btn-primary login-btn form-control">Login</button>
                </form>
            </div>
        </div>


        <!-- Registration Area -->
        <div class="registration-container" id="registrationForm" style="display:none;">
            <h2 class="text-center">Register Your Account!</h2>
            <p class="text-center">Please enter your personal details.</p>
            <div class="registration-form">
            <form method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-control" id="role" name="role">
                        <option>-select-</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="registerUsername">Username:</label>
                    <input type="text" class="form-control" id="registerUsername" name="username">
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password:</label>
                    <input type="password" class="form-control" id="registerPassword" name="password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                </div>
                <div class="form-group float-right">
                    <small class="show-form" onclick="showForm()">Already have an account? Login Here.</small>
                </div>
                <button type="submit" class="btn btn-primary login-register form-control">Register</button>
            </form>

            </div>

        </div>
        </div>


    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script>
        function showForm() {
            const loginForm = document.getElementById('loginForm');
            const registrationForm = document.getElementById('registrationForm');

            if (registrationForm.style.display == 'none') {
                loginForm.style.display = 'none';
                registrationForm.style.display = '';
            } else {
                loginForm.style.display = '';
                registrationForm.style.display = 'none';
            }
        }
    </script>
</body>
</html>

<?php
include '../conn/conn.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

 
 
            $query = "INSERT INTO `login_tbl`(`name`, `username`, `password`, `role`) VALUES ('$name', '$username', '$password', '$role')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                // echo "<script>alert('User Account Created...!!!')</script>";
                echo "created";
            } else {
                // echo "<script>alert('User Account Not Created...!!!')</script>";
                echo "not created";
            }
        
    }

?>
