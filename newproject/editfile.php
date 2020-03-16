<?php
session_start();
include_once 'conn.php';
$name=$_POST['name'];
$type=$_POST['type'];
$size=$_POST['size'];
$title=$_POST['title'];
$sql="UPDATE file SET name='$name',type='$type',size='$size',title='$title'";
if(mysqli_query($conn,$sql))
{
    header("Location:view.php?edit=success");

}
else
{
    header("Location:edit.php?edit=fail");

}



