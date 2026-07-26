<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
<h2>Student Registration Form</h2>
<form action="thank_you.php" method="post">
    <label>Student Name:</label>
    <input type="text" name="student_name" required>
    <br><br>
    <label>Age:</label>
    <input type="number" name="age" required>
    <br><br>
    <label>Course:</label>
    <input type="text" name="course" required>
    <br><br>
    <input type="submit" value="Register">
</form>
</body>
</html>