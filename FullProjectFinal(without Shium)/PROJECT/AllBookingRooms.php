<?php
session_start();
	error_reporting (E_ALL ^ E_NOTICE);
    require_once 'Controller/BookingRoomController.php';
	$rooms=getAllRooms();
$_SESSION["Booking Rooms"] = "Booking Rooms";	
    
?>

<html>
	<head></head>
	<h1 align="center">All <?php echo $_SESSION["Booking Rooms"];?></h1>
	
	<h3 align='center' style='color:brown'>

	Search Booking Rooms:
	<input type="text" class="form-control" onkeyup="searchRoom(this)" placeholder="Search..."></h3>
	<div align="center" id="suggesstion"></div>
	<table style="border-color:green; width:80%; height:40%;" align="center" border="4">
	<thead>
	    <th>ID</th>
		<th>Room No</th>
		<th>Username</th>
		<th>Branch</th>
		<th>NID</th>
		<th>Address</th>
		<th>Email</th>
		<th>Phone No</th>
		<th>Check in time</th>
		<th>Check out time</th>
		
	</thead>
	<tbody>
<?php 
	$i = 1;
	foreach($rooms as $e){
		$id= $e["id"];
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$e["RoomNo"]."</td>";
		  echo "<td>".$e["userName"]."</td>";
		  echo "<td>".$e["Branch"]."</td>";
		  echo "<td>".$e["NID"]."</td>";
		  echo "<td>".$e["Address"]."</td>";
		  echo "<td>".$e["Email"]."</td>";
		  echo "<td>".$e["Phone"]."</td>";
		  echo "<td>".$e["CIT"]."</td>";
		  echo "<td>".$e["COT"]."</td>";
		  echo '<td><a href="EditBookingRoom.php?id='.$id.'">Edit</a></td>';
		  echo '<td><a href="DeleteBookingRoom.php?id='.$id.'">Delete</a></td>';
		  
		  echo "</tr>";
		  $i++;
	}
	
	?>
	</tbody>
	</table>
<script src="JS/rooms.js"></script>
	</body>
</html>