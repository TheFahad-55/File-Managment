<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" dir="ltr">
  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styler.css">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <div class="signin">
    <center>
    <h2  style="color:black;"class="display-3">LogIn</h2><br></center>

    <form class="form-horizontal" action="checker.php" method="POST">
      <center>

    <input type="email" name="email" value="" placeholder="E-mail"><br>
    <input type="password" name="password" value="" placeholder="Password"><br>
    <button type="submit" style="color:black;"  name="submit" class="btn btn-outline-light">Log In</button>
    <a href="index.php"><button  style="color:black;" type="button" name="submit" class="btn btn-outline-light" >Register</button></a>


<?php
if(isset($_GET['logout']))
{
$logout=$_GET['logout'];
if($logout=="success")
{
session_destroy();
echo "<p style='color:black;margin-top:9px;'>Successfully Logged Out</p>";

}
}

if(isset($_GET['signup']))
{
$signup=$_GET['signup'];
if($signup=="success")
{
  echo "<p style='color:black;margin-top:9px;'>Successfully Registered </p>";

}
}
if(isset($_GET['login']))
{
  $login=$_GET['login'];
  if($login=="empty"){
    echo "<p style='color:black;margin-top:9px;'>Fill In  Fields</p>";
    exit();
  }
  if($login=="invalidEmail"){
    echo "<p style='color:black;margin-top:9px;'>Fill In The Correct Email</p>";
    exit();
  }
  if($login=="fail"){
    echo "<p style='color:black;margin-top:12px;'>Invalid Email Or Password</p>";
    exit();
  }

}
if(isset($_GET['adminlogout']))
{
$admin=$_GET['adminlogout'];
if($admin=="success")
{
session_destroy();
echo "<p style='color:black;margin-top:9px;'>Successfully Logged Out</p>";
}

}





?>
    </form>
    </div>
    </center>

  </body>
</html>
