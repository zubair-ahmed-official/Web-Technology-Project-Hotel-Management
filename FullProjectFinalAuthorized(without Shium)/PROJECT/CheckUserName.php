<?php
require_once 'Controller/CustomerController.php';
$userName=$_GET["userName"];
$uName= checkUserName($userName);
//echo $uName;

if($uName)
{
	echo "Invalid";
}
else 
	echo "Valid";
?>