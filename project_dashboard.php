<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("Location:project_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2>
Welcome,
<?php echo $_SESSION['fullname']; ?>
</h2>
<hr>
<h4>Current Projects</h4>
<ul class="list-group">
<li class="list-group-item">Website Development</li>
<li class="list-group-item">Employee Management System</li>
<li class="list-group-item">Inventory System</li>
</ul>
<br>
<h4>Current Tasks</h4>
<ul class="list-group">
<li class="list-group-item">Design Database</li>
<li class="list-group-item">Develop Login Module</li>
<li class="list-group-item">Testing</li>
</ul>
<br>
<form action="project_logout.php" method="post">
<button class="btn btn-danger">
Logout
</button>
</form>
</body>
</html>
