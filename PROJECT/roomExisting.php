<?php
require_once 'Controller/AvailabilityController.php';
//require_once 'CustomerCheeckin.php';
$room_no = $_GET["room_no"];
$user = checkRoomExisting($room_no);
if($user)
{
	echo "Room Exists";
}
else
{
	echo "Room does not Exist";
} 

/* $key = $_GET["key"];
$rooms = searchRooms($key);
if(count($rooms)>0)
{
	foreach($rooms as $p)
	{
		echo "<p>".$p["room_no"]."</p>";
	}		
} */

?>