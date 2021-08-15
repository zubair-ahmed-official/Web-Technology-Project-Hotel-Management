<?php
require_once 'Controller/CheckinController.php';
//require_once 'CustomerCheeckin.php';
$cid = $_GET["cid"];
$user = customerIdExisting($cid);
if($user)
{
	echo "Cid exits";
}
else
{
	echo "Cid doesn't exit";
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