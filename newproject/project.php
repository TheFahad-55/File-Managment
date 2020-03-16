<?php
session_start();

?>
    <!DOCTYPE html>


<html lang="en" >
<head>
<title>Projects</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link href="upload.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style='color:black;'>
<a href='login.php?logout=success'> <button   style='margin-top:20px;color:black;'type='button' class='btn btn-outline-light'name='submit'>Log Out</button></a>

<center>  <h1  class="display-5" style="color:black;">Projects</h1></center> <br><br>
 <?php
echo "<center><p  style='color:black;'id='session'>Hi"." ". $_SESSION['name']."!"."You Are Successfully Logged In!".".Here You Can Create Your Projects.</p></center>";
?>
<center>
<form action="createproject.php" method="POST">
<!-- <label for="">Enter Your Email</label>
<input  id="stylo" type="email" name="email"><br> -->
<h2  style='color:black;'class="display-6">Create Project</h2>

<label for="">Project Name</label>
<input  id="stylo"type="text" name="name">
<br>
<button style="color:black;" type="submit" class="btn btn-outline-light" name="submit">Create</button>
<a  href="viewprojects.php"><button  style="color:black;" type="button" class="btn btn-outline-light" name="view">View Projects</button></a><br><br><br>
<?php
if(isset($_GET['upload']))
{


$upload=$_GET['upload'];
if($upload=="success")
{
echo "<p style='color:black;margin-top:6px;'>Uploaded  Successfully!</p>";
exit();

}
if($upload=="fail")
{
echo "<p style='color:black;'>Upload Failed!</p>";
exit();
}

}
//
if(isset($_GET['project']))
{
$project=$_GET['project'];
if($project=="empty")
{
    echo "<p style='color:black;margin-top:2px;'>Fill In  Name Field </p>";
}
if($project=="notcreated")
{
    echo "<p style='color:black;margin-top:2px;'>Project Creation Failed</p>";
}
if($project=="zero")
{
    echo "<p style='color:black;margin-top:2px;'>No Project To Show</p>";
}

}
//
if(isset($_GET['view']))
{
    $view=$_GET['view'];
    if($view=="fail")
    {
        echo "<p style='color:black;margin-top:2px;'>First Upload Files Nothing To Show At The Moment</p>";

    }
}



?>



</form>









</center>
</body>
</html>