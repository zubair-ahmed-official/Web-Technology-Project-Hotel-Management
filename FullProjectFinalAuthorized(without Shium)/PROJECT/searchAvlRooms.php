<?php
require_once 'Controller/AvailableRoomsController.php';
//require_once 'CustomerCheeckin.php';

$key = $_GET["key"];
$rooms = searchAvlRooms($key);
if(count($rooms)>0)
{
	foreach($rooms as $p)
	{
		echo "<p>".$p["room_no"]."</p>";
	}		
}

?>