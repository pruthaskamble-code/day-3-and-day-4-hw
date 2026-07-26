<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
</head>
<body>
<h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["student_name"];
    $age = $_POST["age"];
    $course = $_POST["course"];
    echo "Thank you for registering, " . $name . "!<br>";
    echo "Your registration details:<br>";
    echo "Age: " . $age . "<br>";
    echo "Course: " . $course;
}
else {
    echo "No registration data received.";
}
?>
</h2>
</body>
</html>