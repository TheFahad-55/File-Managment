<?php
session_start();
$path;
include_once 'conn.php';
if(isset($_GET['path']))
{
    $path=$_GET['path'];
}
$myfile = fopen($path, "r") or die("Unable to open file!");
echo fread($myfile,filesize($path));
fclose($myfile);
