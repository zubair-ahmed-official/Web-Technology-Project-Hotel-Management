<?php
require_once 'Controller/CustomerController.php';
require_once 'Controller/ApprovedRoomController.php';

if(!isset($_COOKIE["loggeduser"])){
header("Location: Login.php");
}
$email= getcustomerEmail($_COOKIE["loggeduser"]);
$approved_room= getApprovedByEmail($email);
	
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h1 align="center">Hello <?php echo $_COOKIE["loggeduser"];?></h1>
		
		<table align="center" class="table table-striped">
			<thead>
				<th>Sl</th>
				<th>Room No</th>
				<th>Branch</th>
				<th>Check In Date</th>
				<th>Check Out Date</th>
			</thead>
			<tbody>
				<?php
					$i=1;
					foreach($approved_room as $a){
						$id= $a["id"];
						echo "<tr>";
							echo "<td> $i </td>";
							echo "<td>".$a["room_no"]."</td>";
							echo "<td>".$a["branch"]."</td>";
							echo "<td>".$a["CIT"]."</td>";
							echo "<td>".$a["COT"]."</td>";
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
		</table>
		</div>
	</body>
</html>