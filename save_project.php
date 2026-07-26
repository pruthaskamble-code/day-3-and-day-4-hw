<?php
include "db.php";
$name=$_POST['project_name'];
$description=$_POST['project_description'];
$status=$_POST['status'];
$start=$_POST['start_date'];
$end=$_POST['end_date'];
$sql="insert into projects(project_name,project_description,status,start_date,end_date) values('$name','$description','$status','$start','$end')";
if(mysqli_query($conn,$sql))
{
    header("Location: index.php");
    exit();
}
else
{
    echo "Error: ".mysqli_error($conn);
}
?>