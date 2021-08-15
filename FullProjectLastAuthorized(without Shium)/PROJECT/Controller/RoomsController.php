<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$hasError = false;
$err_db = "";
if(isset($_POST["add_pro"]))
{
	if(empty($_POST["room_no"]))
	{
		$hasError = true;
		$err_room_no = " Room No. required";
	}
	elseif(strlen($_POST["room_no"]) != 4)
	{
		$hasError = true;
		$err_room_no = "Room No. length must be 4";
	}
	else
	{
		$room_no = $_POST["room_no"];
	}
	
	if(!isset($_POST["c_id"]))
	{
		$hasError = true;
		$err_c_id= " Category required";
	}
	else
	{
		$c_id = $_POST["c_id"];
	}
	/* $filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target); */
	
	//$room_no = $_POST["room_no"];
	//$c_id = $_POST["c_id"];
	if(!$hasError)
	{
	$rs = inseertAvlRooms($_POST["room_no"]);
	if($rs === true)
	{
	$rs = inseertRooms($_POST["room_no"],$_POST["c_id"]);
	if($rs === true)
	{
		header("Location: Rooms.php");
	}
	$err_db = $rs;
	}
	}
}
elseif(isset($_POST["edit_room"]))
{
	if(empty($_POST["room_no"]))
	{
		$hasError = true;
		$err_room_no = " Room No. required";
	}
	elseif(strlen($_POST["room_no"]) != 4)
	{
		$hasError = true;
		$err_room_no = "Room No. length must be 4";
	}
	else
	{
		$room_no = $_POST["room_no"];
	}
	
	if(!$hasError)
	{
	$rs = updateRooms($_POST["room_no"],$_POST["c_id"],$_POST["id"]);
	if($rs === true)
	{
		header("Location: Rooms.php");
		//$rs = updateAvlRooms($_POST["room_no"],$_POST["c_id"],$_POST["id"]);
	}
	$err_db = $rs;
	}
	
}

elseif(isset($_POST["delete_room"]))
{
	if(empty($_POST["room_no"]))
	{
		$hasError = true;
		$err_room_no = " Room No. required";
	}
	elseif(strlen($_POST["room_no"]) != 4)
	{
		$hasError = true;
		$err_room_no = "Room No. length must be 4";
	}
	else
	{
		$room_no = $_POST["room_no"];
	}
	
	if(!$hasError)
	{
	$rs = deleteRooms($_POST["id"]);
	if($rs === true)
	{
	$rs = deleteAvlRooms($_POST["room_no"]);
	if($rs === true)
	{
		header("Location: Rooms.php");
		//$rs = updateAvlRooms($_POST["room_no"],$_POST["c_id"],$_POST["id"]);
	}
	$err_db = $rs;
	}
	}
}

function inseertRooms($room_no,$c_id)
{
	
	$query = "insert into rooms values (NULL,'$room_no',$c_id)";
	//echo "$query";
	return execute($query);
}

function inseertAvlRooms($room_no)
{
	
	$query = "insert into available_rooms values (NULL,'$room_no')";
	//echo "$query";
	return execute($query);
}

function getRooms()
{
	//$query = "SELECT p.*,c.name as 'c_name' from rooms p left join products1 c on p.c_id = c_id";
	$query = "SELECT rooms.*, products1.name as 'c_name', products1.price as 'c_price'
	FROM rooms
	INNER JOIN products1 ON rooms.c_id=products1.id";
	$rs = get($query);
	return $rs;
}

function getRoom($id)
{
	$query = "select * from rooms where id=$id";
	$rs = get($query);
	return $rs[0];
}

function updateRooms($room_no,$c_id,$id)
{
	$query = "update rooms set room_no ='$room_no',c_id = $c_id where id = $id";
	echo $query;
	return execute($query);
}

function deleteRooms($id)
{
	
	$query = "DELETE FROM rooms WHERE id=$id";
	//echo "$query";
	return execute($query);
}
function deleteAvlRooms($room_no)
{
	
	$query = "DELETE FROM available_rooms WHERE room_no=$room_no";
	//echo "$query";
	return execute($query);
}

function searchRooms($key)
{
	//$query = "select * from rooms where room_no like '%$key%'";
	$query = "select p.id,p.room_no from rooms p left join products1 c on p.c_id = c.id where p.room_no like '%$key%' or c.name like '%$key%'";
	$rs = get($query);
	return $rs;
}
function getAllRoomsWithPrice()
	{
		$query = "SELECT r.*,c.name as category, c.price, c.description, c.img as image FROM rooms r LEFT JOIN products1 c on r.c_id= c.id";
		$rs = get($query);
		return $rs;
	}
function searchRoom($key)
	{
		$query="select r.*,c.name as category, c.price, c.description, c.img as image from rooms r left join products1 c on r.c_id= c.id where c.name like '%$key%' or r.room_no like '%$key%'";
		$rs= get($query);
		return $rs;
	}
/* function updateAvlRooms($room_no,$c_id,$id)
{
	$query = "update available_rooms set available_rooms.room_no ='$room_no',available_rooms.c_id = $c_id where available_rooms.id = $id";
	echo $query;
	return execute($query);
} */

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