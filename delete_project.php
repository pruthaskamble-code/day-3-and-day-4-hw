<?php
include "db.php";
$id=$_GET['id'];
$sql="delete from projects where id=$id";
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