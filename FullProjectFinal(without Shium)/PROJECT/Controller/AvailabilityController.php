<?php
//session_start();
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$room_no="";
$err_room_no="";

$hasError = false;



if(isset($_POST["check"]))
{
	/*$filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);*/
	//echo "OK";
	if(!$hasError)
	{
	$rs = checkRoomExisting($_POST["room_no"]);
	
	if($rs === true)
	{
	
	$rs = deleteAvailable($_POST["room_no"]);
	
	if($rs === true)
	{
	$rs = checkRoomAvailability($_POST["room_no"]);
	{
	if($rs === false)
	{
	
	$rs = inseertBooking($_POST["room_no"]);
	if($rs === true)
	{
		//header("Location: Category.php");
	}
	$err_db = "<h2 style='color:green;' align =center> Booking Complete. Thank you.</h2>";
	}
	else
	{
		$err_db = "<h2 style='color:red;' align =center> Booking is not complete</h2>";
	}
	}
	}
	}
	}
}

function inseertBooking($room_no)
{
	$query = "insert into booked_rooms values (NULL,'$room_no')";
	//$query = "insert into bookevent values (NULL,'$time','$cname',$cid, $members)";
	return execute($query);
}

function deleteAvailable($room_no)
{
	
	$query = "DELETE FROM available_rooms WHERE room_no=$room_no";
	//echo "$query";
	return execute($query);
}
/* function updateProduct($name,$desc,$time,$avl,$id)
{
	$query = "update events set name ='$name',desc ='$desc',time = '$time' ,avl = '$avl' where id = $id";
	return execute($query);
} 

function updateProduct($name,$desc,$time,$avl)
{
	$query = "UPDATE events SET name = '$name',desc ='$desc',time = '$time',avl = '$avl' WHERE id = $id";
	return execute($query);
}*/

function checkRoomAvailability($room_no) {
$query = "select room_no from booked_rooms where room_no='$room_no'";
$rs = get ($query) ;
if(count($rs) > 0) 
{
return true;
}
return false;
}

function checkRoomExisting($room_no) {
$query = "select room_no from rooms where room_no='$room_no'";
$rs = get ($query) ;
if(count($rs) > 0) 
{
return true;
}
return false;
}
/* function searchRooms($key)
{
	$query = "select * from available_rooms where room_no like '%$key%'";
	$rs = get($query);
	return $rs;
} */

?>