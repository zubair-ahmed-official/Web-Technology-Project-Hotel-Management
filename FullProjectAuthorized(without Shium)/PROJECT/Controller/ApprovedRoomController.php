<?php
require_once 'Models/db_config.php';
require_once 'Controller/BookingRoomController.php';
require_once 'Controller/RoomsController.php';


if(isset($_POST["Approved"]))
	{
		
		if(empty($_POST["RoomNo"])){
			$hasError=true;
			$err_RoomNo="Room no Required";
		}
		else{
			$room_no = $_POST["RoomNo"];
		}
		if(empty($_POST["userName"])){
			$hasError=true;
			$err_userName="userName Required";
		}
		else{
			$userName = $_POST["userName"];
		}
		
		if(empty($_POST["Branch"])){
			$hasError=true;
			$err_Branch="Brunch Required";
		}
		else
		{
			$Branch = $_POST["Branch"];
		}
		
		if(empty($_POST["Email"])){
			$hasError = true;
			$err_Email = "Email Required!!!";
		}
		else{
			$Email = $_POST["Email"];
		}
		
		if(empty($_POST["Phone"])){
			$hasError = true;
			$err_Phone = "PhoneNumber Required!!!";
		}
		elseif(is_numeric($_POST["Phone"])){
			$Phone = $_POST["Phone"];
		}
		else{
			$hasError = true;
			$err_Phone = "Please enter a numeric value!!!";
		}
		if(empty($_POST["NID"])){
			$hasError = true;
			$err_NID = "NID No Required!!!";
		}
		elseif(is_numeric($_POST["NID"])){
			$NID = $_POST["NID"];
		}
		else{
			$hasError = true;
			$err_NID = "Please enter a numeric value!!!";
		}
		if(empty($_POST["Address"])){
			$hasError = true;
			$err_Address= "Address Required!!";
		}
		else{
			$Address = $_POST["Address"];
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
			$rs= insertApprovedRooms($_POST["RoomNo"],$_POST["userName"],$_POST["Branch"], $_POST["NID"], $_POST["Address"], $_POST["Email"], $_POST["Phone"], $_POST["CIT"], $_POST["COT"]);
			
			if($rs === true)
			{
				$rp= deleteBookedRoom($_POST["RoomNo"]);
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
			$rs = declineBooking($_POST["RoomNo"]);
			if($rs === true)
			{
				$rp= inseertAvlRooms($_POST["RoomNo"]);
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

function insertApprovedRooms($RoomNo,$userName, $Branch, $NID, $Address, $Email, $Phone, $CIT, $COT)
{
	$query= "insert into approvedrooms values(Null,'$RoomNo','$userName','$Branch', '$NID', '$Address', '$Email', '$Phone', '$CIT', '$COT')";
		return execute($query);
}

	function declineBooking($RoomNo)
	{
	
		$query = "delete from approvedrooms where room_no='$RoomNo'";
		return execute($query);
	}
	
	function getAllApproved()
	{
		$query = "select * from approvedrooms";
		$rs = get($query);
		return $rs;
	}
	function getApprovedByUserName($userName)
	{
		$query = "select * from approvedrooms where userName='$userName'";
		$rs = get($query);
		return $rs;
	}
	function searchApprovedRoom($key)
	{
		$query="select * from approvedrooms where room_no like '%$key%' or phoneNumber like '%$key%'";
		$rs= get($query);
		return $rs;
	}



?>