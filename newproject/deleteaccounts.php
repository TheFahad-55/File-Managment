<?php
include_once 'conn.php';
session_start();
$user_id=$_GET['id'];
$sql="SELECT * FROM projects WHERE user_id='$user_id'";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
    header("Location:adminaccounts.php?delete=error");


} 
else{
 $sql1="DELETE FROM users WHERE user_id='$user_id' ";
    if(mysqli_query($conn,$sql1))
    {
        header("Location:adminaccounts.php?delete=success");
    }
    else
    {
        header("Loctaion:adminaccounts.php?delete=fail");
    }
}
    

