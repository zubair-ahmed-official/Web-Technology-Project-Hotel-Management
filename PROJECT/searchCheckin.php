<?php
require_once 'Controller/CheckinController.php';
//require_once 'CustomerCheeckin.php';

$key = $_GET["key"];
$rooms = searchCheckin($key);
if(count($rooms)>0)
{
	foreach($rooms as $p)
	{
		echo "<a href='EditCheckin.php?id=".$p["id"]."'>".$p["room_no"]."</a><br>";
	}		
}

?>