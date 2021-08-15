<?php
error_reporting (E_ALL ^ E_NOTICE);
    require_once 'Controller/ReviewController.php';
	$reviews=getAllReviews();
	
    
?>
<html>
	<head></head>
	<h1 style="color:blue" align="center">Reviews & Ratings</h1>
	<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
	<thead>
	    <th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Review</th>
		<th>Rating</th>
		
	</thead>
	<tbody>
<?php 
	$i = 1;
	foreach($reviews as $e){
		$id= $e["id"];
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$e["Name"]."</td>";
		  echo "<td>".$e["Email"]."</td>";
		  echo "<td>".$e["Subject"]."</td>";
		  echo "<td>".$e["Message"]."</td>";
		  echo "<td>".$e["Rating"]."</td>";
		  echo "</tr>";
		  $i++;
	}
	
	?>
	</tbody>
	</table>

	</body>
</html>