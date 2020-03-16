<?php
include_once'conn.php';
session_start();
$id=$_GET['id'];
$path;
$sql="SELECT path from files WHERE file_id='$id'";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
    if($row=mysqli_fetch_assoc($result))
    {
        $path=$row['path'];
    }

}
unlink($path);

$sql1="DELETE FROM files WHERE file_id='$id='";
if(mysqli_query($conn,$sql1))
{
    header("Location:viewfile.php?delete=success");
}
