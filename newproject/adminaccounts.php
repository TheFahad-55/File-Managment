<?php
session_start();
include 'conn.php';
$sql="SELECT user_id,name,email FROM users";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0)
{
    echo "<html>";
    echo "<head>";
    echo "<title>User's Accounts</title>";
    echo " <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
    echo "<link href='view.css' rel='stylesheet'></link>";
    echo "</head>";
    echo "<body>";
    echo "<center><h1 classs='display-3'>Accounts</h1></center>";
    echo "<table>";
    
    echo "<tr><th>UserId</th><th>UserName</th><th>Email</th><th>Delete</th></tr>";

    while($rows=mysqli_fetch_assoc($result))
    
    {

 echo "<tr><td>".$rows['user_id']."</td><td>".$rows['name']."</td><td>".$rows['email']."</td> 
  <td><a href='deleteaccounts.php?id=".$rows["user_id"]."' alt='edit'>Delete</a></td><tr>".
"<br>";
      




    }
    echo "</table>";
    echo "</body>";
    echo "</html>";
    //while

    echo "<a href='admin.php?Adminstration'> <button  style='margin-top:20px;'type='button' class='btn btn-outline-dark'name='submit'>Back</button></a>";
    echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>You Can Only Delete Those User's Directly Who Have No Projects And Files Uploaded!</p></center>";
}
// else
// {
//     header("Location:admin.php?account=fail");
//     exit();

// }
else
{
    header("Location:admin.php?show=none");
}
if(isset($_GET['delete']))
 {
     $delete=$_GET['delete'];
     if($delete=="error")
     {
        echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>First Remove User's Projects!</p></center>";
         
     }
     if($delete=="success")
     {
        echo "<center><p style='color:black;margin-top:9px;font-Size:24px;'>Successfully Removed User!</p></center>";
     }
 }

