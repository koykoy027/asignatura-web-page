<?php 
ob_start(); 
@session_start();

$dbhost = "sql310.epizy.com";
$dbuser = "epiz_30568392";
$dbpass = "G62mXZTCLt39E";
$dbname = "epiz_30568392_asignatura";


$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(mysqli_connect_errno())
{
 echo "Failed to connect" . mysqli_connect_errno();
}
?>