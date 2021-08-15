<?php 
	include 'Controller/EmployeeController.php';
	$key = $_GET["key"];
	$employees = searchEmployee($key);
	if(count($employees) > 0){
		foreach($employees as $e){
			echo "<a href='EditEmployee.php?id=".$e["id"]."'>".$e["Name"]."</p>";
		}
	}
?>