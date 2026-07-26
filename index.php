<?php
include "db.php";
$result = mysqli_query($conn,"SELECT * FROM projects");
?>
<!DOCTYPE html>
<html>
<head>
<title>Project Management System</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2 class="mb-4">
Project Management System
</h2>
<a href="add_project.php" class="btn btn-primary mb-3">
Add New Project
</a>
<table class="table table-bordered">
<tr class="table-dark">
<th>ID</th>
<th>Project Name</th>
<th>Status</th>
<th>Start Date</th>
<th>End Date</th>
<th>Action</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td>
<?php echo $row['id']; ?>
</td>
<td>
<?php echo $row['project_name']; ?>
</td>
<td>
<?php echo $row['status']; ?>
</td>
<td>
<?php echo $row['start_date']; ?>
</td>
<td>
<?php echo $row['end_date']; ?>
</td>
<td>
<a href="edit_project.php?id=<?php echo $row['id']; ?>"
class="btn btn-warning btn-sm">
Edit
</a>
<a href="delete_project.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this project?')">
Delete
</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>
