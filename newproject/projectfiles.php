<?php
session_start();
include_once 'conn.php';
$projectid=$_GET['id'];
$sql1="SELECT  project_id ,file_name,path,file_id FROM files WHERE project_id='$projectid'";
$result=mysqli_query($conn,$sql1);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
    echo "<html>";
    echo "<head>";
    echo " <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
    echo "<link href='view.css' rel='stylesheet'></link>";
    echo "</head>";
    echo "<body>";
    echo "<center><h1>Project Files</h1></center>";
    echo "<table>";
    
    echo "<tr><th>ProjectId</th><th>FileId</th><th>FileName</th><th>Download File</th><th>Delete</th></tr>";
    while($rows=mysqli_fetch_assoc($result))
    
    {
   
        echo "<tr><td>".$rows['project_id']."</td><td>".$rows['file_id']."</td><td>".$rows['file_name']."</td><td><a href=".$rows['path']."> View Or Download File</a></td><td><a href='deleteprojectfiles.php?id=".$rows["file_id"]."' alt='edit'>Delete</a></td><tr>".
"<br>";
      

      




    }
    echo "</table>";
    echo "</body>";
    echo "</html>";
    //while
    echo "<a href='viewprojects.php'> <button  style='margin-top:20px;'type='button' class='btn btn-outline-dark'name='submit'>Back</button></a>";

}
else
{
    header("Location:viewprojects.php?view=null");
    exit();

}
