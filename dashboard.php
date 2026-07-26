<?php
session_start();
if (!isset($_SESSION["manager_username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Project Manager Dashboard</h2>
<h3>
    Welcome,
    <?php echo htmlspecialchars($_SESSION["manager_username"]); ?>!
</h3>
<p>You have successfully logged into the Project Management System.</p>
    <button onclick="location.href='logout.php'">Logout</button>
</body>
</html>
