<?php
//session_start();
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$name="";
$err_name="";
$ename="";
$err_ename="";
$cname = "";
$err_cname="";
$cid = "";
$err_cid="";
$members = "";
$err_members="";
$time = "";
$err_time="";
$avl = "";
$err_avl="";
$description = "";
$err_description = "";
$img = "";
$err_img = "";
$err_db = "";

$hasError = false;

if(isset($_POST["add_event"]))
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = " Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = " Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	if(empty($_POST["description"]))
	{
		$hasError = true;
		$err_description = " Description required";
	}
	
	else
	{
		$description = $_POST["description"];
	}
	
	if(empty($_POST["time"]))
	{
		$hasError = true;
		$err_time = " Time required";
	}
	else
	{
		$time = $_POST["time"];
	}
	
	
	if(empty($_POST["avl"]))
	{
		$hasError = true;
		$err_avl = " Availability Required";
	}
	else
	{
		$avl = $_POST["avl"];
	}
	
	
	/*if(empty($_POST["img"]))
	{
		$hasError = true;
		$err_img = " Image required";
	}
	else
	{
		$img = $_POST["img"];
	}*/

	if(!$hasError)
	{
		
	$filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);
	
	$rs = inseertProduct($_POST["name"],$_POST["description"],$_POST["time"],$_POST["avl"],$target);
	if($rs === true)
	{
		header("Location: UpcomingEvents.php");
	}
	$err_db = $rs;
	}
}
elseif(isset($_POST["edit_event"]))
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = " Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = " Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	if(empty($_POST["description"]))
	{
		$hasError = true;
		$err_desc = " Description required";
	}
	else if(strlen($_POST["description"])<= 10)
	{
		$hasError = true;
		$err_desc = " Description must be greater than 10 characters";
	}
	else
	{
		$description = $_POST["description"];
	}
	
	if(empty($_POST["time"]))
	{
		$hasError = true;
		$err_time = " Time required";
	}
	else
	{
		$time = $_POST["time"];
	}
	
	
	if(empty($_POST["avl"]))
	{
		$hasError = true;
		$err_avl = " Availability Required";
	}
	else
	{
		$avl = $_POST["avl"];
	}

	if(!$hasError)
	{
		
	/* $filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target); */
	
	$rs = updateProduct($_POST["name"],$_POST["description"],$_POST["time"],$_POST["avl"],$_POST["id"]);
	if($rs === true)
	{
		header("Location: UpcomingEvents.php");
	}
	$err_db = $rs;
	}
}
elseif(isset($_POST["Book_Event"]))
{
	if(!isset($_POST["ename"]))
	{
		$hasError = true;
		$err_ename = " Name required";
	}
	else
	{
		$ename = $_POST["ename"];
		
	}
	
	if(empty($_POST["cname"]))
	{
		$hasError = true;
		$err_cname = " Description required";
	}
	else if(strlen($_POST["cname"])<= 5)
	{
		$hasError = true;
		$err_cname = " Customer Name must be greater than 5 characters";
	}
	else
	{
		$cname = $_POST["cname"];
	}
	
	if(empty($_POST["cid"]))
	{
		$hasError = true;
		$err_cid = "Customer ID required";
	}
	else
	{
		$cid = $_POST["cid"];
	}
	
	
	if(empty($_POST["members"]))
	{
		$hasError = true;
		$err_members = " Members Required";
	}
	else
	{
		$members = $_POST["members"];
	}
	
	if(empty($_POST["phone"]))
	{
		$hasError = true;
		$err_phone = " Phone Required";
	}
	else
	{
		$phone = $_POST["phone"];
	}
	
	if(empty($_POST["email"]))
	{
		$hasError = true;
		$err_email = " Email Required";
	}
	else if(strpos($_POST["email"],"@") && strpos($_POST["email"],".") )
	{
		$email = $_POST["email"];
	}
	
	
	if(empty($_POST["clink"]))
	{
		$hasError = true;
		$err_clink = " Customer Link Required";
	}
	else
	{
		$clink = $_POST["clink"];
	}
	
	
	if(!$hasError)
	{
	/*$filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);*/
	/* $rs = checkEventname($_POST["ename"]);
	
	if($rs === true)
	{ */
	$rs = inseertBooking($_POST["ename"],$_POST["cname"],$_POST["cid"],$_POST["members"],$_POST["phone"],$_POST["email"],$_POST["clink"]);
	if($rs === true)
	{
		//header("Location: Category.php");
	}
	$err_db = "<h2 style='color:green;' align =center> Booking Complete. Thank you.
	<br> Event Name: ".$_POST["ename"]."</h2>";
	}
	else
	{
		$err_db = "<h2 style='color:red;' align =center> Booking is not complete</h2>";
	}
	
}

elseif(isset($_POST["Delete_Event"]))
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = " Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = " Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	if(empty($_POST["description"]))
	{
		$hasError = true;
		$err_desc = " Description required";
	}
	else if(strlen($_POST["description"])<= 10)
	{
		$hasError = true;
		$err_desc = " Description must be greater than 10 characters";
	}
	else
	{
		$description = $_POST["description"];
	}
	
	if(empty($_POST["time"]))
	{
		$hasError = true;
		$err_time = " Time required";
	}
	else
	{
		$time = $_POST["time"];
	}
	
	
	if(empty($_POST["avl"]))
	{
		$hasError = true;
		$err_avl = " Availability Required";
	}
	else
	{
		$avl = $_POST["avl"];
	}
	
	if(!$hasError)
	{
	$rs = deleteEvent($_POST["id"]);
	
	if($rs === true)
	{	
	
		header("Location: UpcomingEvents.php");
	}
	else{
	$err_db = $rs;
	}
	}
}

function inseertProduct($name,$description,$time,$avl,$img)
{
	$query = "insert into events values (NULL,'$name','$description','$time','$avl','$img')";
	return execute($query);
}
 function inseertBooking($ename,$cname,$cid,$members,$phone,$email,$clink)
{
	$query = "insert into bookevent values (NULL,'$ename','$cname',$cid, $members,$phone,'$email','$clink')";
	//$query = "insert into bookevent values (NULL,'$time','$cname',$cid, $members)";
	return execute($query);
}

function getProducts()
{
	$query = "select * from events";
	$rs = get($query);
	return $rs;
}

function getProduct($id)
{
	$query = "select * from events where id=$id";
	$rs = get($query);
	return $rs[0];
}
function deleteEvent($id)
{
	
	$query = "DELETE FROM events WHERE id=$id";
	//echo "$query";
	return execute($query);
}
/* function updateProduct($name,$desc,$time,$avl,$id)
{
	$query = "update events set name ='$name',desc ='$desc',time = '$time' ,avl = '$avl' where id = $id";
	return execute($query);
} */

function updateProduct($name,$description,$time,$avl,$id)
{
	$query = "UPDATE events SET name = '$name',description ='$description',time = '$time',avl = '$avl' WHERE id = $id";
	return execute($query);
}

function checkEventname($ename) {
$query = "select name from events where name='$ename'";
$rs = get ($query) ;
if(count($rs) > 0) 
{
return true;
}
return false;
}
?>