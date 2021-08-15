<?php
	include 'Controller/EmployeeController.php'; 
	$Name = $_GET["Name"];
	$nam = checkName($Name);
	if($nam){
		echo "invalid";
	}
	else echo "valid";
?>