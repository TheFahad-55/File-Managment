<!DOCTYPE html>
<html lang="en" dir="ltr">
<body style="color:black;">
  <head>
    <script src="validate.js"></script>
  <link rel="stylesheet" href="styler.css">
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="styler.css">
    <title>Index</title>
  </head>
  
<div class="signin">
<!-- <button  id="btn"type="submit" name="submit" class="btn btn-info">Register</button>
<button  id="btn"type="submit" name="submit" class="btn btn-info">SignIn</button> -->
  

  <center>
  <form class="form-horizontal" action="signup.php" method="POST" name="f1">
<h2 style="color:black;">Sign Up</h2> <br>
<input type="text" name="name" value="" placeholder="UserName"><span id="first"></span><br>
<input type="email" name="email" value="" placeholder="E-mail"><span id="email"></span><br>
<input type="password" name="password" value="" placeholder="Password"><span id="password"></span><br>
<a href="index.php"><button style="color:black;" type="submit" name="submit" class="btn btn-outline-light" >Register</button></a>
<a href="login.php"><button style="color:black;"  type="button" name="submit" class="btn btn-outline-light">Sign In</button></a>
<?php
if(!isset($_GET['signup'])){
  exit();
}
else
{
  $signUp=$_GET['signup'];
  if($signUp=="empty"){
    echo "<p id='red'>Fill In The Fields</p>";
    exit();
  }
  if($signUp=="invalidEmail"){
    echo "<p id='red'>Fill In The Correct Email</p>";
    exit();
  }
  if($signUp=="char"){
    echo "<p id='red'>Fill In The Correct Name</p>";
    exit();
  }

if($signUp=="error"){
    echo "<p id='red'>Click the Button</p>";
    exit();
  }

}



?>

</form>
</div>
</center>
  </body>
</html>
