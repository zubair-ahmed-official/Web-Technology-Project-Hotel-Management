<?php
require_once 'models/db_config.php';

$room_no="";





function inseertAvlRooms($room_no)
{

$query = "insert into available_rooms values (NULL,'$room_no')";
//echo "$query";
return execute($query);
}


function getAllRoomsWithPrice()
	{
		$query = "SELECT r.*,c.name as category, c.price, c.description, c.img as image FROM rooms r LEFT JOIN categories c on r.c_id= c.id";
		$rs = get($query);
		return $rs;
	}
function searchRoom($key)
	{
		$query="select r.id, r.room_no from rooms r left join categories c on r.c_id= c.id where c.name like '%$key%'";
		$rs= get($query);
		return $rs;
	}

?>




