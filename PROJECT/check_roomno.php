<?php
	require_once 'Controller/BookingRoomController.php'; 
	$RoomNo = $_GET["RoomNo"];
	$rm = checkRoom($RoomNo);
	if($rm){
		echo "invalid";
	}
	else echo "valid";
?>