<?php
if(!isset($_COOKIE["loggeduser"])){
header("Location: Login.php");
}
?>
<?php
	session_start();
error_reporting (E_ALL ^ E_NOTICE);
    require_once 'Controller/EmployeeController.php';
	$employees=getAllEmployees();
	$_SESSION["Employees"] = "Employees";
    
?>
<html>
<head></head>
	<h1 style="color:blue" align="center">All <?php echo $_SESSION["Employees"];?></h1>
	
	<h3 align='center' style='color:brown'>

Search Employees:
	 <input  type="text" class="form-control" onkeyup="searchEmployee(this)" placeholder="Search..."></h3>
	<div align="center" id="suggesstion"></div>
	<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
	<thead>
	    <th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>NID</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Educational Background</th>
		<th>Employee Type</th>
		
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($employees as $d){
		$id= $d["id"];
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$d["Name"]."</td>";
		  echo "<td>".$d["Email"]."</td>";
		  echo "<td>".$d["Phone"]."</td>";
		  echo "<td>".$d["NID"]."</td>";
		  echo "<td>".$d["Address"]."</td>";
		  echo "<td>".$d["Gender"]."</td>";
		  echo "<td>".$d["Age"]."</td>";
		  echo "<td>".$d["E_b"]."</td>";
		  echo "<td>".$d["E_type"]."</td>";
		  echo '<td><a href="EditEmployee.php?id='.$id.'">Edit</a></td>';
		  echo '<td><a href="DeleteEmployee.php?id='.$id.'">Delete</a></td>';
		  
		  echo "</tr>";
		  $i++;
	}
	
	?>
	</tbody>
	</table>
<script src="JS/employees.js"></script>
	</body>
</html>