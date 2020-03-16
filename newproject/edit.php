
    <!DOCTYPE html>


<html lang="en" >
<head>
<title>Edit File</title>


 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link href="styler.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<center>  <h1  class="display-4" style="color:white;">Edit File</h1><br><br>
<?php
session_start();
include_once 'conn.php';
$title=$_SESSION['title'];
$sql="SELECT name,type,size,title FROM file  WHERE title='$title'";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
$name;
$size;
$type;
$title;

if($resultCheck>0)
{
    echo "<html>";
    echo "<head>";
    echo"</head>";
    echo "<body>";
    echo "<form action='editfile.php' method='post'>";
    if($rows=mysqli_fetch_assoc($result))
    {
        $name=$rows['name'];
        $type=$rows['type'];
        $title=$rows['title'];
        $size=$rows['size'];

        
    
        echo "<input type='text' name='name' value='$name' ></input>"."<br>";
        echo "<input type='text' name='title' value='$title' ></input>"."<br>";
        echo "<input type='text' name='size' value='$size' ></input>"."<br>";
        echo "<input type='text' name='type' value='$type' ></input>"."<br>";
        echo "<button type='submit' class='btn btn-outline-light' name='view'>Edit File</button>";


       


    }
        echo "</form>";
        echo "</body>";
        echo "</html>";

}
if(isset($_GET['edit']))
{
$edit=$_GET['edit'];

   if($edit=="fail")
   {
       echo "<p style='color:white;'>Edit Failed</p>";

   }

}




?>



</form>
</center> 
</body>
</html>


