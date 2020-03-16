<?php
include_once 'conn.php';
session_start();
$id=$_GET['id'];
$dir;
$sql1="SELECT * FROM files WHERE project_id='$id'";
$result=mysqli_query($conn,$sql1);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
header("Location:adminprojects.php?delete=fatal");
}
else
{
    $sql5="SELECT dir_name FROM projects WHERE project_id='$id'";
    $result=mysqli_query($conn,$sql5);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck>0)
    {
        $row=mysqli_fetch_assoc($result);
        $dir=$row['dir_name'];
 
    }
    rmdir($dir);

$sql="DELETE FROM projects WHERE project_id='$id'";
if(mysqli_query($conn,$sql))
{
    header("Location:adminprojects.php?delete=success");
}
else
{
    header("Location:adminprojects.php?delete=fail");
}

}