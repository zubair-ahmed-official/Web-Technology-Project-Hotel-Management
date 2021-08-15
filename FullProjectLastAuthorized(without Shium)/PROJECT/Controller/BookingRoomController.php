<?php
		require_once 'Models/db_config.php';
		$RoomNo="";
		$err_RoomNo="";
		$Branch="";
		$err_Branch="";
		$NID="";
		$err_NID="";
		$Address="";
		$err_Address="";
		$Email="";
		$err_Email="";
		$Phone="";
		$err_Phone="";
		$userName="";
		$err_userName="";
		$CIT="";
		$err_CIT="";
		$COT="";
		$err_COT="";
		
		$hasError=false;
		$err_db="";
		
		
		$Br=array("Coxs Bazar","Chittagong","Dhaka");
		
		
		if(isset($_POST["Room_Booking"]))
		{
		if(empty($_POST["RoomNo"]))
				{
					$hasError=true;
					$err_RoomNo="Room No Required";
				}
				else
				{
					$RoomNo=$_POST["RoomNo"];
				}
		if(empty($_POST["userName"]))
				{
					$hasError=true;
					$err_userName="userName Required";
				}
				else
				{
					$userName=$_POST["userName"];
				}
				
		if(empty($_POST["Branch"]))
				{
					$hasError=true;
					$err_Branch="Branch Name Required";
				}
				else
				{
					$Branch=$_POST["Branch"];
				}

		if(empty($_POST["NID"]))
				{
					$hasError=true;
					$err_NID="NID Required";
				}
				else
				{
					$NID=$_POST["NID"];
				}
				
		if(empty($_POST["Address"]))
				{
					$hasError=true;
					$err_Address="Address Required";
				}
				else
				{
					$Address=$_POST["Address"];
				}

		if(empty($_POST["Email"]))
				{
					$hasError=true;
					$err_Email="Email Required";
				}
				else
				{
					$Email=$_POST["Email"];
				}

		if(empty($_POST["Phone"]))
				{
					$hasError=true;
					$err_Phone="Phone Required";
				}
				else
				{
					$Phone=$_POST["Phone"];
				}

		if(empty($_POST["CIT"]))
				{
					$hasError=true;
					$err_CIT="Check in Time Required";
				}
				else
				{
					$CIT=$_POST["CIT"];
				}
				
		if(empty($_POST["COT"]))
				{
					$hasError=true;
					$err_COT="Check out Time Required";
				}
				else
				{
					$COT=$_POST["COT"];
				}		
				
		if(!$hasError)
		{
		$rs = insertRoom($RoomNo,$userName, $Branch,$NID,$Address,$Email,$Phone,$CIT,$COT);
		
		if ($rs === true)
		{
		$rs = inseertBooking($RoomNo);
		
		if ($rs === true)
		{
			header("Location: AllBookingRooms.php");
		}
		$err_db = $rs;	
		}
		
		}
		}
		
		
		else if(isset($_POST["EditRoom"]))
		{
		if(empty($_POST["RoomNo"]))
				{
					$hasError=true;
					$err_RoomNo="Room No Required";
				}
				else
				{
					$RoomNo=$_POST["RoomNo"];
				}
				
		if(empty($_POST["Branch"]))
				{
					$hasError=true;
					$err_Branch="Branch Name Required";
				}
				else
				{
					$Branch=$_POST["Branch"];
				}
				
		if(empty($_POST["NID"]))
				{
					$hasError=true;
					$err_NID="NID Required";
				}
				else
				{
					$NID=$_POST["NID"];
				}
				
		if(empty($_POST["Address"]))
				{
					$hasError=true;
					$err_Address="Address Required";
				}
				else
				{
					$Address=$_POST["Address"];
				}

		if(empty($_POST["Email"]))
				{
					$hasError=true;
					$err_Email="Email Required";
				}
				else
				{
					$Email=$_POST["Email"];
				}

		if(empty($_POST["Phone"]))
				{
					$hasError=true;
					$err_Phone="Phone Required";
				}
				else
				{
					$Phone=$_POST["Phone"];
				}


		if(empty($_POST["CIT"]))
				{
					$hasError=true;
					$err_CIT="Check in Time Required";
				}
				else
				{
					$CIT=$_POST["CIT"];
				}
				
		if(empty($_POST["COT"]))
				{
					$hasError=true;
					$err_COT="Check out Time Required";
				}
				else
				{
					$COT=$_POST["COT"];
				}		
				
				
		$rs = updateRoom($RoomNo,$Branch,$NID,$Address,$Email,$Phone,$CIT,$COT,$_POST["id"]);
		
		if ($rs === true){
			header("Location: AllBookingRooms.php");
		}
		$err_db = $rs;	
		}
		
		elseif(isset($_POST["DeleteRoom"]))
		{
			if(!$hasError)
			{
			$rs = deleteRoom($_POST["id"]);
			
			if($rs === true)
			{	
		    $rs = cancelBooking($_POST["RoomNo"]);
			
			if($rs === true)
			{	
			
				header("Location: AllBookingRooms.php");
			}
			else{
			$err_db = $rs;
			}
			}
			}
	
		}
		
	function insertRoom($RoomNo,$userName,$Branch,$NID,$Address,$Email,$Phone,$CIT,$COT){
	$query="insert into bookingrooms values (NULL,'$RoomNo','$userName','$Branch','$NID','$Address','$Email','$Phone','$CIT','$COT')";
	return execute($query);
	}
	function deleteRoom($id)
	{
	
	$query = "delete from bookingrooms where id=$id";
	//echo "$query";
	return execute($query);
	}
	
	function getAllRooms(){
		$query = "select * from bookingrooms";
		$rs = get($query);
		return $rs;
	}
	function getbookedrooms($id){
		$query = "select * from bookingrooms where id = $id";
		$rs = get($query);
		return $rs[0];	
	}
	function updateRoom($RoomNo,$Branch,$NID,$Address,$Email,$Phone,$CIT,$COT,$id)
	{
		$query = "update bookingrooms set RoomNo='$RoomNo',Branch='$Branch',NID='$NID',Address='$Address',Email='$Email',Phone='$Phone',CIT='$CIT', COT='$COT'  where id = $id";
		return execute($query);
	}
	function checkRoom($RoomNo){
		$query = "select RoomNo from bookingrooms where RoomNo='$RoomNo'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
	
	function inseertBooking($RoomNo)
	{
	$query = "insert into booked_rooms values (NULL,'$RoomNo')";
	//$query = "insert into bookevent values (NULL,'$time','$cname',$cid, $members)";
	return execute($query);
	}
	
	function cancelBooking($RoomNo)
	{
	$query = "DELETE FROM booked_rooms WHERE booked_rooms.room_no=$RoomNo";
	return execute($query);
	}
	
	function searchBookingRoom($key){
		$query = "select * from bookingrooms where RoomNo like '%$key%'";
		$rs = get($query);
		return $rs;
	}
	
	function deleteBookedRoom($RoomNo)
	{
	
		$query = "delete from bookingrooms where RoomNo='$RoomNo'";
		return execute($query);
	}
	
	
	function getAllBookedRooms()
	{
		$query = "SELECT * FROM bookingrooms";
		$rs = get($query);
		return $rs;
	}
	function getBookedRoomById($id)
	{
		$query = "SELECT * FROM bookingrooms where id='$id'";
		$rs = get($query);
		return $rs[0];
	}
?>