<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$err_db = "";


function getRooms()
{
	//$query = "SELECT p.*,c.name as 'c_name' from rooms p left join products1 c on p.c_id = c_id";
	$query = "SELECT * from available_rooms";
	$rs = get($query);
	return $rs;
}

function getRoom($id)
{
	$query = "select * from available_rooms where id=$id";
	$rs = get($query);
	return $rs[0];
}

function searchAvlRooms($key)
{
	$query = "select * from available_rooms where room_no like '%$key%'";
	//$query = "select p.id,p.room_no from available_rooms p left join products1 c on p.c_id = c.id where p.room_no like '%$key%' or c.name like '%$key%'";
	$rs = get($query);
	return $rs;
}
/* function checkUsername ($uname) {
$query = "select name from users where username='$uname'";
$rs = get ($query) ;
if(count($rs) > 0) 
{
return true;
}
return false;
} */
?>