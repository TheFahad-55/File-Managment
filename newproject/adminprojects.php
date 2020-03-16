<?php
include_once 'conn.php';
session_start();
$sql1="SELECT u.name,p.user_id,p.dir_name,p.project_name,p.project_id FROM projects as p INNER JOIN users as u ON u.user_id=p.user_id ";
$result=mysqli_query($conn,$sql1);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
    echo "<html>";
    echo "<head>";
    echo "<title>User's Projects</title>";
    echo " <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
    echo "<link href='view.css' rel='stylesheet'></link>";
    echo "</head>";
    echo "<body>";
    echo "<center><h1>Projects</h1></center>";
    echo "<table>";
    
    echo "<tr><th>userName</th><th>userId</th><th>projectId</th><th>ProjectName</th><th>Files</th><th>Delete</th></tr>";

    while($rows=mysqli_fetch_assoc($result))
    
    {
   
        
    //    $fileid=$rows['file_id'];
        // echo "<tr><td>".$rows['file_id']."</td><td>".$rows['file_name']."</td><td>".
        // "</td><td>"."<a href=deletefiles.php?id=$rows['file_id']></a></td></tr>"."<br>";
        echo "<tr><td>".$rows['name']."</td><td>".$rows['user_id']."</td><td>".$rows['project_id']."</td><td>".$rows['project_name']."</td>
        "."<td><a href='viewadminfiles.php?id=".$rows["project_id"]."' alt='edit'>Files</a></td><td><a href='deleteadminprojects.php?id=".$rows["project_id"]."' alt='edit'>Delete</a></td>"."<tr>"."<br>";
      




    }
    echo "</table>";
    echo "</body>";
    echo "</html>";
    //while
    echo "<a href='admin.php?Adminstration'> <button  style='margin-top:20px;'type='button' class='btn btn-outline-dark'name='submit'>Back</button></a>";
    echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>If Projects Contain Files You Have To Delete Them First!</p></center>";
}
else
{
    header("Location:admin.php?project=zero");


}

if(isset($_GET['file']))
{
   $file=$_GET['file'];
   if($yes=="zero")
   {
    echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>No Files To Show</p></center>";
   
}
}
if(isset($_GET['delete']))
{
   $delete=$_GET['delete'];
  if( $delete=="fatal")
   {
    echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>First Delete Project Files!</p></center>";
   
   }
   if( $delete=="success")
   {
    echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>Successfully Deleted Project!</p></center>";
   
   }

}
