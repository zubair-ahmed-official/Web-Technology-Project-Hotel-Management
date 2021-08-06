<?php
require_once 'Controller/AvailabilityController.php';
//require_once 'CustomerCheeckin.php';
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