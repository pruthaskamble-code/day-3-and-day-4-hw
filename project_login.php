<?php
session_start();
include "db.php";
$error="";
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from project_managers where username='$username'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_assoc($result);
        if(password_verify($password,$row['password']))
        {
            $_SESSION['username']=$row['username'];
            $_SESSION['fullname']=$row['fullname'];
            header("Location:project_dashboard.php");
            exit();
        }
        else
        {
            $error="Incorrect Password";
        }
    }
    else
    {
        $error="Username not found";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-5">
<div class="card shadow">
<div class="card-header">
<h3 class="text-center">Project Login</h3>
</div>
<div class="card-body">
<form method="POST">
<div class="mb-3">
<label>Username</label>
<input type="text" class="form-control" name="username">
</div>
<div class="mb-3">
<label>Password</label>
<input type="password" class="form-control" name="password">
</div>
<button class="btn btn-success w-100" name="login">
Login
</button>
<p class="text-danger mt-3">
<?php echo $error; ?>
</p>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
