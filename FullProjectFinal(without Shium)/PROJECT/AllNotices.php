<?php
error_reporting (E_ALL ^ E_NOTICE);
    require_once 'Controller/NoticeController.php';
	$notices=getAllNotices();
	
    
?>
<html>
	<head></head>
	<h1 style="color:blue" align="center">All Notices</h1>
	<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
	<thead>
	    <th>ID</th>
		<th>Notice</th>
		
	</thead>
	<tbody>
<?php 
	$i = 1;
	foreach($notices as $e){
		$id= $e["id"];
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$e["Notice"]."</td>";
		  echo "</tr>";
		  $i++;
	}
	
	?>
	</tbody>
	</table>

	</body>
</html>