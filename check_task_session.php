<?php
session_start();
echo "<h2>Active Task Tracking</h2>";
if(isset($_SESSION['task_id']))
{
    echo "Currently Active Task ID: " . $_SESSION['task_id'];
}
else
{
    echo "No active task found.";
}
?>