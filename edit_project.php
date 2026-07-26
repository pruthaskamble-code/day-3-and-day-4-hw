<?php
include "db.php";
$id=$_GET['id'];
$result=mysqli_query($conn,"select * from projects where id=$id");
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2>Edit Project</h2>
<form action="update_project.php" method="POST">
<input type="hidden"
name="id"
value="<?php echo $row['id']; ?>">
<label>Project Name</label>
<input type="text"
name="project_name"
class="form-control mb-3"
value="<?php echo $row['project_name']; ?>">
<label>Description</label>
<textarea name="project_description"
class="form-control mb-3">
<?php echo $row['project_description']; ?>
</textarea>
<label>Status</label>
<select name="status" class="form-control mb-3">
<option>
pending
</option>
<option>
in-progress
</option>
<option>
completed
</option>
</select>
<label>Start Date</label>
<input type="date"
name="start_date"
class="form-control mb-3"
value="<?php echo $row['start_date']; ?>">
<label>End Date</label>
<input type="date"
name="end_date"
class="form-control mb-3"
value="<?php echo $row['end_date']; ?>">
<button class="btn btn-primary">
Update
</button>
</form>
</body>
</html>