<?php
session_start();

?>
    <!DOCTYPE html>


<html lang="en" >
<head>
<title>Files</title>


 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link href="upload.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<a href='login.php?logout=success'> <button  style='margin-top:20px;color:black'type='button' class='btn btn-outline-light'name='submit'>Log Out</button></a>

<center>  <h1  class="display-5" style="color:black;">Files</h1></center> <br><br>
 <?php
echo "<center><p style='color:black;'>You Have Successfully Created"."  ". $_SESSION['pname']. "    "."   Project.Now You Can Uplaod Files In This Project."."</p></center>'";
?>
<center>
<form action="uploadfile.php" method="POST" enctype="multipart/form-data">
<!-- <label for="">Enter Your Email</label>
<input  id="stylo" type="email" name="email"><br> -->
<h2 style="color:black;" class="display-6">Upload File</h2><br>

<!-- <label for="">File Name</label> 
<input  id="stylo"type="text" name="name">
<br>  -->
<input type="file"  style="color:black;"name="file" >
<br><br>
<span class="glyphicon glyphicon-upload"></span>
<button type="submit" style="color:black;"class="btn btn-outline-light btn-md">
          <span class="glyphicon glyphicon-upload"></span> Upload
        </button>
<a  href="viewfile.php"><button style="color:black;"  type="button" class="btn btn-outline-light" name="view">View Files</button></a><br><br><br>

<?php
if(isset($_GET['upload']))
{
    $upload=$_GET['upload'];
    if($upload=="success")
    {
        echo "<p style='color:black;margin-top:9px;'>Successfully Uploaded File </p>";
    }
    
}
if(isset($_GET['view']))
{
    $view=$_GET['view'];
    if($view=="null")
    {
        echo "<p style='color:black;margin-top:9px;'>No Files To Show </p>";
    }
}
if(isset($_GET['file']))
{
    $file=$_GET['file'];
    if($file=="notallowed")
    {
        echo "<p style='color:black;margin-top:9px;'>File Not Allowed </p>";
    }
    if($file=="large")
    {
        echo "<p style='color:black;margin-top:9px;'>File Too Large </p>";
    }
    if($file=="empty")
    {
        echo "<p style='color:black;margin-top:9px;'>Choose File First </p>";
    }
}

echo "<a href='project.php'> <button  style='margin-top:20px;color:black'type='button' class='btn btn-outline-light'name='submit'>Back</button></a>";

?>
</form>









</center>
</body>
</html>