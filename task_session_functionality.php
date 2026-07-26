<?php
session_start();
$_SESSION['task_id'] = 101;
echo "<h2>Task Session Functionality</h2>";
echo "Currently Active Task ID: " . $_SESSION['task_id'];
?>
<br><br>
<a href="check_task_session.php">
Go to another page and check active task
</a>
