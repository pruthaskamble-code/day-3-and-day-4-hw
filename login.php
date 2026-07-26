<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    if (!empty($username) && !empty($password)) {
        $_SESSION["manager_username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Please enter both username and password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Project Management System - Login Page</h2><br><br>
<form method="post" action="">
    <label>Project Manager Username:</label>
    <input type="text" name="username" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>
<p style="color:red;">
<?php
if (isset($error)) {
    echo $error;
}
?>
</p>
</body>
</html>

