<!DOCTYPE html>
<html>
<head>
<title>Project Manager Registration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card shadow">
<div class="card-header text-center">
<h3>Project Manager Registration</h3>
</div>
<div class="card-body">
<form action="project_registration.php" method="POST">
<div class="mb-3">
<label>Full Name</label>
<input type="text" class="form-control" name="fullname" required>
</div>
<div class="mb-3">
<label>Email</label>
<input type="email" class="form-control" name="email" required>
</div>
<div class="mb-3">
<label>Username</label>
<input type="text" class="form-control" name="username" required>
</div>
<div class="mb-3">
<label>Password</label>
<input type="password" class="form-control" name="password" required>
</div>
<button class="btn btn-primary w-100">
Register
</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
