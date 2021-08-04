<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$err_db = "";
if(isset($_POST["add_pro"]))
{
	
	/* $filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target); */
	
	$room_no = $_POST["room_no"];
	$c_id = $_POST["c_id"];
	
	$rs = inseertRooms($_POST["room_no"],$_POST["c_id"]);
	if($rs === true)
	{
		header("Location: Rooms.php");
	}
	$err_db = $rs;
}
elseif(isset($_POST["edit_room"]))
{
	//echo "OK";
	$rs = updateRooms($_POST["room_no"],$_POST["c_id"],$_POST["id"]);
	if($rs === true)
	{
		header("Location: Rooms.php");
	}
	$err_db = $rs;
}

function inseertRooms($room_no,$c_id)
{
	
	$query = "insert into rooms values (NULL,'$room_no',$c_id)";
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