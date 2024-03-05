<!-- CHANGE BY SHANU  need to impliment session-->

<?php include 'conn.php';?>

<?php


$u=$_POST['username'];
$p=$_POST['password'];
$e="user";
$a="admin";

$sql="select * from login_tbl where username='$u' AND password='$p'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($u==" " &&$p==" "){
    
    echo "
            <script>
                alert('Login Failed, Incorrect Password!');
                window.location.href = 'http://localhost/franchise-manage-system/';
            </script>
            ";
}

//sql Database
if($row['username']==$u && $row['password']==$p && $row['role']==$e){
    
    header('location:http://localhost/franchise-manage-system/user_dash.php');



}elseif ($row['username']==$u && $row['password']==$p && $row['role']==$a){
    header('location:http://localhost/franchise-manage-system/admin.php');
}

else{
    header('location:admin_login.php');
}

   
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";



?>


