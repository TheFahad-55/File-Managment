<?php
session_start();
include 'conn.php';
$email=$_POST['email'];
$password=$_POST['password'];
$dbEmail;
$dbName;
$dbId;
$dbPassword;
$accesslevel;
if(!isset($_POST['submit']))
{
header("Location:login.php?login=error");
exit();
}
if(empty($email)||empty($password))
{

header("Location:login.php?login=empty");
exit();
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{

    header("Location:login.php?login=invalidEmail");
    exit();

}
//This is Where You Can Add Your Admins Or Admin Depends On you.
if($password=="claudiucitar" && $email=="claudiucitar1@gmail.com")
{
    $_SESSION['adminemail']=$email;
    $_SESSION['adminpassword']=$password;
    header("Location:admin.php?Adminstration");

    exit();
}
$sql="SELECT user_id, name,access_level,email,password from users WHERE email='$email' ";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
$row=mysqli_fetch_assoc($result);
$dbEmail=$row['email'];
$dbPassword=$row['password'];
$accesslevel=$row['access_level'];
$dbName=$row['name'];
$dbId=$row['user_id'];
}
//user.
  if($password==$dbPassword&& $email==$dbEmail&&$accesslevel==1)
{
    $_SESSION['user_id']=$dbId;
    $_SESSION['name']=$dbName;
    $_SESSION['email']= $dbEmail;
    $_SESSION['access_level']=$accesslevel;
    header("Location:project.php");
}
if($password!=$dbPassword||$email!=$dbEmail)
{
    header("Location:login.php?login=fail");



}





