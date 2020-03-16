<?php
session_start();
if(isset($_GET['Adminstration']))
{
 echo "<!DOCTYPE html>";
 echo "<html lang='en'>";
echo "<head>";
echo "<title>Admin Page</title>";
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
   echo  "<meta charset='UTF-8'>";
     echo "<link rel='stylesheet' href='admin.css'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<meta http-equiv='X-UA-Compatible' content='ie=edge'>";
     echo "<title>Document</title>";
 echo "</head>";
 echo "<body>";
 echo "<center><h1  style='color:black;'class='display-3'>Admin CP</h1><br><br><br><br>";
 echo "<a href='adminaccounts.php'><button  style='padding:20px;color:black' type='submit'name='submit' class='btn btn-outline-light' >View Accounts</button></a><br><br><br><br>";
 echo "<a href='adminprojects.php'><button style='padding:20px;color:black'  type='button'name='submit'class='btn btn-outline-light'>View Projects</button></a>";
 echo "</center>";
 echo "<a href='login.php?adminlogout=success'> <button style='color:black;' style='margin-top:20px;'type='button' class='btn btn-outline-light'name='submit'>Log Out</button></a>";
if(isset($_GET['account']))
{
$account=$_GET['account'];
if($account=="fail")
{
    echo "<center><p style='color:black;margin-top:2px;'>No Accounts To Show</p></center>";

}


}
if(isset($_GET['files']))
{
$account=$_GET['files'];
if($account=="fail")
{
    echo "<center><p style='color:black;margin-top:2px;'>No Files To Show</p></center>";

}


}
if(isset($_GET['show']))
{
    $show=$_GET['show'];
    if($show=="none")
    {
        echo "<center><p style='color:black;margin-top:2px;'>No Acounts To Show</p></center>";
    }
}
if(isset($_GET['project']))
{
    $project=$_GET['project'];
    if($project=="zero")
    {
        echo "<center><p style='color:black;margin-top:2px;'>No Projects To Show</p></center>";
    }
}




    
echo "</body>";
 echo "</html>";

}
else
{
    echo "object Does.nt Exists";
}



