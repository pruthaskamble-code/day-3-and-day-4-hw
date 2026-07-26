<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "project_management";
$conn = new mysqli($servername , $username , $password , $db_name);
if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}
?>