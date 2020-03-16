<?php
session_start();
include_once 'conn.php';
$name=$_POST['name'];
$user_id=$_SESSION['user_id'];
$newName=$name.$user_id;
$_SESSION['pname']=$newName;
$dir;
if(empty($name))
    {
        header("Location:project.php?project=empty");
        exit();
    }

    
    

mkdir($newName);

$dir=$newName;


$sql="INSERT INTO projects(project_name,dir_name,user_id)VALUES('$newName','$dir','$user_id')";
if(mysqli_query($conn,$sql))
{
    header("Location:file.php?project='$newName'");

}
else
{
header("Location:project.php?project=notcreated");
}