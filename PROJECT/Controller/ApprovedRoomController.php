<?php
require_once 'models/db_config.php';
require_once 'Controller/BookingRoomController.php';
require_once 'Controller/RoomsController.php';

$room_no="";
$err_room_no="";
$branch="";
$err_branch="";
$nid="";
$err_nid="";
$address="";
$err_address="";
$email="";
$err_email="";
$phoneNumber="";
$err_phoneNumber="";
$CIT="";
$err_CIT="";
$COT="";
$err_COT="";
$err_db="";

$hasError= false;

if(isset($_POST["Approved"]))
	{
		
		if(empty($_POST["room_no"])){
			$hasError=true;
			$err_room_no="Room no Required";
		}
		else{
			$room_no = $_POST["room_no"];
		}
		
		if(empty($_POST["branch"])){
			$hasError=true;
			$err_branch="Brunch Required";
		}
		else
		{
			$branch = $_POST["branch"];
		}
		
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "Email Required!!!";
		}
		elseif(strpos($_POST["email"],"@.")){
			$email = $_POST["email"];	
		}
		else{
			$hasError = true;
			$err_email = "please use an @. !!!";
		}
		
		if(empty($_POST["phoneNumber"])){
			$hasError = true;
			$err_phoneNumber = "PhoneNumber Required!!!";
		}
		elseif(is_numeric($_POST["phoneNumber"])){
			$phoneNumber = $_POST["phoneNumber"];
		}
		else{
			$hasError = true;
			$err_phoneNumber = "Please enter a numeric value!!!";
		}
		if(empty($_POST["nid"])){
			$hasError = true;
			$err_nid = "NID No Required!!!";
		}
		elseif(is_numeric($_POST["nid"])){
			$nid = $_POST["nid"];
		}
		else{
			$hasError = true;
			$err_nid = "Please enter a numeric value!!!";
		}
		if(empty($_POST["address"])){
			$hasError = true;
			$err_address= "Address Required!!";
		}
		else{
			$address = $_POST["address"];
		}
		if(empty($_POST["CIT"])){
			$hasError = true;
			$err_CIT= "Check In Time Required!!";
		}
		else{
			$CIT = $_POST["CIT"];
		}
		if(empty($_POST["COT"])){
			$hasError = true;
			$err_COT= "Check Out Time Required!!";
		}
		else{
			$COT = $_POST["COT"];
		}
		
		if(!$hasError){
			$rs= insertApprovedRooms($room_no,$branch, $nid, $address, $email, $phoneNumber, $CIT, $COT);
			
			if($rs === true)
			{
				$rp= deleteBookedRoom($room_no);
				if($rp === true)
				{
					header("Location: AllBookedRooms.php");
				}
				else
				{
					$err_db= $rs;
				}
			}
			
		}
		
	}
	
	else if(isset($_POST["Decline"]))
	{
		
		if(!$hasError)
		{
			$rs = declineBooking($room_no);
			if($rs === true)
			{
				$rp= inseertAvlRooms($room_no);
				if($rp === true)
				{
					header("Location: AllBookedRooms.php");
				}
				else
				{
					$err_db= $rs;
				}
			}
			
		}
	
	}

function insertApprovedRooms($room_no,$branch, $nid, $address, $email, $phoneNumber, $CIT, $COT)
{
	$query= "insert into approvedrooms values(Null,'$room_no','$branch', '$nid', '$address', '$email', '$phoneNumber', '$CIT', '$COT')";
		return execute($query);
}

	function declineBooking($room_no)
	{
	
		$query = "delete from approvedrooms where room_no='$room_no'";
		return execute($query);
	}
	
	function getAllApproved()
	{
		$query = "select * from approvedrooms";
		$rs = get($query);
		return $rs;
	}
	function getApprovedByEmail($email)
	{
		$query = "select * from approvedrooms where email='$email'";
		$rs = get($query);
		return $rs;
	}
	function searchApprovedRoom($key)
	{
		$query="select * from approvedrooms where room_no like '%$key%'";
		$rs= get($query);
		return $rs;
	}



?>