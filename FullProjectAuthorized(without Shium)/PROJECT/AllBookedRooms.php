<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) && !isset($_COOKIE["loggeduser2"])){
header("Location: Login.php");
}
?><?php
require_once 'Controller/BookingRoomController.php';
$booked_rooms= getAllBookedRooms();

?>



<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h3 align="center" style="color:Green"><u> All Booked Rooms</u></h3><br>
		<table align="center" class="table table-striped">
			<thead>
				<th>Sl</th>
				<th>Room No</th>
				<th>Username</th>
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
					foreach($booked_rooms as $b){
						$id= $b["id"];
						echo "<tr>";
							echo "<td> $i </td>";
							echo "<td>".$b["RoomNo"]."</td>";
							echo "<td>".$b["userName"]."</td>";
							echo "<td>".$b["Branch"]."</td>";
							echo "<td>".$b["Email"]."</td>";
							echo "<td>".$b["Phone"]."</td>";
							echo "<td>".$b["NID"]."</td>";
							echo "<td>".$b["Address"]."</td>";
							echo "<td>".$b["CIT"]."</td>";
							echo "<td>".$b["COT"]."</td>";
							echo '<td><a href= "ApprovedForm.php?id='.$id.'"class="btn btn-success">Approve</a></td>';
							echo '<td><a href= "DeclineForm.php?id='.$id.'"class="btn btn-danger">Decline</a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
		</table>
	</body>

</html>