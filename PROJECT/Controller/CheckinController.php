<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$cname = "";
$err_cname = "";
$err_db = "";

$hasError = false;
if(isset($_POST["add"]))
{
	if(empty($_POST["cname"]))
	{
		$hasError = true;
		$err_cname = "<span style='color:red'>Name required</span>";
	}
	else
	{
		$cname = $_POST["cname"];
	}
	
	if(empty($_POST["cid"]))
	{
		$hasError = true;
		$err_cid = "<span style='color:red'> Customer ID required</span>";
	}
	else
	{
		$cid = $_POST["cid"];
	}
	
	if(empty($_POST["phone"]))
	{
		$hasError = true;
		$err_phone = "<span style='color:red'> Phone required</span>";
	}
	else
	{
		$phone = $_POST["phone"];
	}
	
	if(empty($_POST["room_no"]))
	{
		$hasError = true;
		$err_room_no = "<span style='color:red'> Room No required</span>";
	}
	else
	{
		$room_no = $_POST["room_no"];
	}
	
	if(empty($_POST["btime"]))
	{
		$hasError = true;
		$err_btime = "<span style='color:red'> Checkin Time required</span>";
	}
	else
	{
		$btime = $_POST["btime"];
	}
	
	if(empty($_POST["bdays"]))
	{
		$hasError = true;
		$err_bdays = " <span style='color:red'>Checkout Time required</span>";
	}
	else
	{
		$bdays = $_POST["bdays"];
	}
	
	if(empty($_POST["clink"]))
	{
		$hasError = true;
		$err_clink = "<span style='color:red'> Customer Link required</span>";
	}
	else
	{
		$clink = $_POST["clink"];
	}
	
	if(!$hasError)
	{
	$rs = checkRoomAvailability($_POST["room_no"]);
	{
	if($rs === false)
	{
	$rs = inseertChecking($_POST["cname"],$_POST["cid"],$_POST["phone"],$_POST["room_no"],$_POST["btime"],$_POST["bdays"],$_POST["clink"]);
	if($rs === true)
	{
	$pro = getProducts();
	//echo "<h1>All Checked In Customers</h1>";
	$i=1;

	foreach($pro as $c)
	{
	
	
    }
		//header("Location: AllProducts.php");
	}
	$err_db = $rs;
	}
	}
}
}
elseif(isset($_POST["Edit_Checkin"]))
{
	
	$rs = updateProduct($_POST["cname"],$_POST["cid"],$_POST["phone"],$_POST["room_no"],$_POST["btime"],$_POST["bdays"],$_POST["clink"],$_POST["id"]);
	
	if($rs === true)
	{
		header("Location: CustomerCheeckin.php");
	}
	else{
	$err_db = $rs;
	}
}

elseif(isset($_POST["Cancel_Checkin"]))
{
	
	$rs = checkOut($_POST["id"]);
	
	if($rs === true)
	{
	
	$rs = cancelBooking($_POST["room_no"]);
	
	if($rs === true)
	{	
	
		header("Location: CustomerCheeckin.php");
	}
	else{
	$err_db = $rs;
	}
}
}


function inseertChecking($cname,$cid,$phone,$room_no,$btime,$bdays,$clink)
{
	
	$query = "insert into customer_checkin values (NULL,'$cname',$cid,$phone,$room_no,'$btime','$bdays','$clink')";
	//echo "$query";
	return execute($query);
}


function checkOut($id)
{
	
	$query = "DELETE FROM customer_checkin WHERE id=$id";
	echo "$query";
	return execute($query);
}
function cancelBooking($room_no)
{
	
	$query = "DELETE FROM booked_rooms WHERE booked_rooms.room_no=$room_no";
	/* $query = "DELETE t1 
	FROM booked_rooms t1
	JOIN customer_checkin t2 ON t1.room_no = t2.room_no;"; */
	
	echo "$query"; 
	return execute($query);
}


function getProducts()
{
	$query = "select * from customer_checkin";
	$rs = get($query);
	return $rs;
}

function getProduct($id)
{
	$query = "select * from customer_checkin where id=$id";
	$rs = get($query);
	return $rs[0];
}

function checkRoomAvailability($room_no) {
$query = "select room_no from booked_rooms where room_no='$room_no'";
$rs = get ($query) ;
if(count($rs) > 0) 
{
return true;
}
return false;
}

function updateProduct($cname,$cid,$phone,$room_no,$btime,$bdays,$clink,$id)
{
	$query = "update customer_checkin set cname ='$cname',cid = $cid, phone = $phone,room_no = $room_no, btime = '$btime',bdays = '$bdays',clink = '$clink' where id = $id";
	//echo $query;
	return execute($query);
} 
?>