<?php
include 'Controller/AvailabilityController.php';
$room_no = $_GET["room_no"];
$user = checkRoomAvailability($room_no);
if($user)
{
	echo "Room Booked";
}
else
{
	echo "Room not Booked";
}

?>