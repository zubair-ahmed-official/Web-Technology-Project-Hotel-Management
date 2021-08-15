<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) && !isset($_COOKIE["loggeduser2"]) ){
header("Location: Login.php");
}

?><?php
require_once 'Controller/ApprovedRoomController.php';
$approved_rooms= getAllApproved();	


?>



<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h3 align="center" style="color:Green"><u> All Approved Rooms</u></h3><br>
		<div align="center">
			<input type="text" class="form-control" onkeyup="searchApprovedRoom(this)" placeholder="Search Here...">
			<br>
		</div>
		<div id="suggetion_ApprovedRoom">
		<table align="center" class="table table-striped">
			<thead>
				<th>Sl</th>
				<th>Room No</th>
				<th>Branch</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>NID No</th>
				<th>Address</th>
				<th>Check In Date</th>
				<th>Check Out Date</th>
			</thead>
			<tbody>
				<?php
					$i=1;
					foreach($approved_rooms as $a){
						$id= $a["id"];
						echo "<tr>";
							echo "<td> $i </td>";
							echo "<td>".$a["room_no"]."</td>";
							echo "<td>".$a["branch"]."</td>";
							echo "<td>".$a["email"]."</td>";
							echo "<td>".$a["phoneNumber"]."</td>";
							echo "<td>".$a["nid"]."</td>";
							echo "<td>".$a["address"]."</td>";
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
	<script src="JS/ApprovedRoom.js"></script>
</html>