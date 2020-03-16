 <?php
include_once 'conn.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$accesslevel;
if(!isset($_POST['submit']))
{
header("Location:index.php?signup=error");
exit();


}
 if(!preg_match("/^[a-zA-z]*$/",$name))
 {
    header("Location:index.php?signup=char");
    exit();

}

 if(empty($name)||empty($email)||empty($password))
{

header("Location:index.php?signup=empty");
exit();
}
 if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{

    header("Location:index.php?signup=invalidEmail");
    exit();

}
$sql="INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

 if(mysqli_query($conn,$sql))
 {
$sql1="SELECT access_level FROM users WHERE email='$email'";
$result=mysqli_query($conn,$sql1);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{  if($row=mysqli_fetch_assoc($result))
      {
        $accesslevel=$row['access_level'];

      }
      
}
$accesslevel=1;
$sql2="UPDATE users SET access_level='$accesslevel'WHERE email='$email'";
if(mysqli_query($conn,$sql2))
{
    header("Location:login.php?signup=success");
}




 }














