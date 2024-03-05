<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Role</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
        }

        .container-full-height {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-image: url('https://www.mobitel.lk/sites/all/themes/mobitel/templates/slt_mobitel_home/assets/images/landing/slt-logo.svg'); */
            background-color :#ADD8E6 ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .landheader {
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>
<body>
    <div class="container-full-height">
        <div class="landheader">
            <div class="logo">
                <img src="https://www.mobitel.lk/sites/all/themes/mobitel/templates/slt_mobitel_home/assets/images/landing/slt-logo.svg" alt="Sri Lanka Telecom">
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3>Admin</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Select this option if you are an admin.</p>
                            <form method="post" action="admin_login.php">
                                <input type="hidden" name="role" value="admin">
                                <button type="submit" class="btn btn-primary" onclick="viewadmin()">Select Admin</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h3>User</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Select this option if you are a user.</p>
                            <form method="post" action="user_login.php">
                                <input type="hidden" name="role" value="user">
                                <button type="submit" class="btn btn-primary" onclick="viewuser()">Select User</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function viewadmin() {
        window.location.href = "admin_login.php";
    }
    function viewuser() {
        window.location.href = "user_login.php";
    }
</script>
</html>
