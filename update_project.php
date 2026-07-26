<?php
include "db.php";
$id=$_POST['id'];
$name=$_POST['project_name'];
$description=$_POST['project_description'];
$status=$_POST['status'];
$start=$_POST['start_date'];
$end=$_POST['end_date'];
$sql="update projects set project_name='$name',project_description='$description',status='$status',start_date='$start',end_date='$end' where id=$id";
if(mysqli_query($conn,$sql))
{
header("Location:index.php");
exit();
}
else
{
echo mysqli_error($conn);
}
?>