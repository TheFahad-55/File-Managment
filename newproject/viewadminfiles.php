<?php
session_start();
include_once 'conn.php';
$project_id=$_GET['id'];
$sql="SELECT file_name,path,file_id FROM files WHERE project_id='$project_id'";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
    echo "<html>";
    echo "<head>";
    echo " <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
    echo "<link href='view.css' rel='stylesheet'></link>";
    echo "</head>";
    echo "<body>";
    echo "<center><h1>User Files</h1></center>";
    echo "<table>";
    
    echo "<tr><th>FileId</th><th>FileName</th><th>View</th><th>Delete</th></tr>";
    while($rows=mysqli_fetch_assoc($result))
    
    {
   
        echo "<tr><td>".$rows['file_id']."</td><td>".$rows['file_name']."</td> <td><a href=".$rows['path']."> View  File</a></td><td><a href='deleteadminfiles.php?id=".$rows["file_id"]."' alt='edit'>Delete</a></td><tr>".
"<br>";
      

      




    }
    echo "</table>";
    echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>Project Also Contains Files Remove Them As Well! </p></center>";
    echo "</body>";
    echo "</html>";
    //while
    echo "<a href='adminprojects.php'> <button  style='margin-top:20px;'type='button' class='btn btn-outline-dark'name='submit'>Back</button></a>";

}
else
{
  header("adminprojects?files=zero");
}

