<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$err_db = "";


function getRooms()
{
	//$query = "SELECT p.*,c.name as 'c_name' from rooms p left join products1 c on p.c_id = c_id";
	$query = "SELECT available_rooms.*, products1.name as 'c_name', products1.price as 'c_price'
	FROM available_rooms
	INNER JOIN products1 ON available_rooms.c_id=products1.id";
	$rs = get($query);
	return $rs;
}

function getRoom($id)
{
	$query = "select * from available_rooms where id=$id";
	$rs = get($query);
	return $rs[0];
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