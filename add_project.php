<!DOCTYPE html>
<html>
<head>
<title>Add Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2>Add New Project</h2>
<form action="save_project.php" method="POST">
<div class="mb-3">
<label>Project Name</label>
<input type="text"
name="project_name"
class="form-control"
required>
</div>
<div class="mb-3">
<label>Description</label>
<textarea name="project_description"
class="form-control"
required></textarea>
</div>
<div class="mb-3">
<label>Status</label>
<select name="status" class="form-control">
<option value="pending">
Pending
</option>
<option value="in-progress">
In Progress
</option>
<option value="completed">
Completed
</option>
</select>
</div>
<div class="mb-3">
<label>Start Date</label>
<input type="date"
name="start_date"
class="form-control"
required>
</div>
<div class="mb-3">
<label>End Date</label>
<input type="date"
name="end_date"
class="form-control"
required>
</div>
<button class="btn btn-success">
Save Project
</button>
<a href="index.php" class="btn btn-secondary">
Back
</a>
</form>
</body>
</html>
