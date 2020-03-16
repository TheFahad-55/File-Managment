<?php
include_once 'conn.php';
session_start();
$project_id;
$pname=$_SESSION['pname'];
if(!isset($_POST['submit']))
{
    header("Location:file.php?upload=eroor");
}
$files=$_FILES['file'];
$name=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$size=$_FILES['file']['size'];
$error=$_FILES['file']['error'];
$type=$_FILES['file']['type'];
echo $name;
if(empty($size))
{
    header("Location:file.php?file=empty");
}

$fileExt=explode('.',$name);
$fileActualExt=strtolower(end($fileExt));
$fileNewName=uniqid(' ',true).".".$fileActualExt;
$allowed=array('jpg','jpeg','docx','png','pdf','mp4','mp3','rar','pptx');
if(in_array($fileActualExt,$allowed))
{   
    if($size<1000000000){
    $sql="SELECT project_id  FROM projects WHERE project_name='$pname'";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck>0)
    {
    $row=mysqli_fetch_assoc($result);  $project_id=$row['project_id'];
    }
$file_destination=$_SESSION['pname']."/".$name;
if(move_uploaded_file($tmp_name,$file_destination))
{
    $_SESSION['id']=$project_id;
    $sql1="INSERT INTO files(path,file_name,project_id,realname) VALUES('$file_destination','$name','$project_id','$fileNewName')";
    if(mysqli_query($conn,$sql1))
    {
        header("Location:file.php?upload=success"); 
    }
    else
    {
        header("Location:file.php?upload=fail"); }
    }
    
}
else
{
      header("Location:file.php?file=large");
}
}
else
{
    header("Location:file.php?file=notallowed");

}










    















