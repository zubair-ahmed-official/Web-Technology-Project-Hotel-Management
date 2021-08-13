<?php 
	include 'Controller/BookingRoomController.php';
	$key = $_GET["key"];
	$rooms = searchRoom($key);
	if(count($rooms) > 0){
		foreach($rooms as $e){
			echo "<p>".$e["RoomNo"]."</p>";
		}
	}
?>