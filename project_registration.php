<?php
include "db.php";
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "insert into project_managers(fullname,email,username,password) values('$fullname','$email','$username','$password')";
if(mysqli_query($conn,$sql))
{
    header("Location: project_login.php");
}
else
{
    echo "Registration Failed!";
}
?>
