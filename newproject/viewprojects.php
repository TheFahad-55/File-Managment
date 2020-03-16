<?php
include_once 'conn.php';
session_start();
$uid=$_SESSION['user_id'];
$sql="SELECT user_id,project_name,project_id FROM projects WHERE user_id='$uid'";
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
    echo "<center><h1>Projects</h1></center>";
    echo "<table>";
    
    echo "<tr><th>userId</th><th>ProjectId</th><th>ProjectName</th><th>Files</th><th>Delete</th></tr>";

    while($rows=mysqli_fetch_assoc($result))
    
    {
   
        
    //    $fileid=$rows['file_id'];
        // echo "<tr><td>".$rows['file_id']."</td><td>".$rows['file_name']."</td><td>".
        // "</td><td>"."<a href=deletefiles.php?id=$rows['file_id']></a></td></tr>"."<br>";
        echo "<tr><td>".$rows['user_id']."</td><td>".$rows['project_id']."</td><td>".$rows['project_name']."</td><td>"."<a href='projectfiles.php?id=".$rows["project_id"]."' alt='edit'>Files</a></td><td>"."<a href='deleteprojects.php?id=".$rows["project_id"]."' alt='edit'>Delete</a></td>"."<tr>"."<br>";
      




    }
    echo "</table>";
    echo "</body>";
    echo "</html>";
    //while
    echo "<a href='project.php'> <button  style='margin-top:20px;'type='button' class='btn btn-outline-dark'name='submit'>Back</button></a>";
   
}
else
{
header("Location:project.php?project=zero");
}
if(isset($_GET['name']))
{
    $name=$_GET['name'];
    if($name=="error")
    {
        echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>First Delete User's Projects</p></center>";
    }
}
if(isset($_GET['delete']))
{
    $delete=$_GET['delete'];
    if($delete=="fatal")
    {
        echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>First Delete Project Files!</p></center>";
    }
}
if(isset($_GET['view']))
{
    $view=$_GET['view'];
    if($view=="null")
    {
        echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>Project Is Empty!</p></center>";
    }
}