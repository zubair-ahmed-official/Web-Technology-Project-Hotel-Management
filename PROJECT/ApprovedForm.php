<?php
	if(!isset($_COOKIE["loggeduser"])){
		header("Location: Login.php");
	}
?><?php
require_once 'Controller/ApprovedRoomController.php';
require_once 'Controller/BookingRoomController.php';
$id= $_GET["id"];
$booked= getBookedRoomById($id);
	
?>


<html>
<head>
	<style>
		
	</style>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" onsubmit = ""  method="post">
		<table align="center" style="background-color:rgb(240, 240, 240); width:40%; height:5%;">
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td colspan="2" align="center" style="color: Green"><h1><b>Approve Booking</b></h1></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				
				<td align="right">Room No:</td>
				<td><input  name="room_no" type="text" value="<?php echo $booked["RoomNo"];?>"><br>
					<span ><?php echo $err_room_no;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Branch:</td>
				<td><input name="branch" type="text"  value="<?php echo $booked["branch"];?>">
					<br>
					<span><?php echo $err_branch;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Email:</td>
				<td><input  name="email" type="text" value="<?php echo $booked["email"];?>"><br>
					<span><?php echo $err_email;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Phone Number:</td>
				<td>
					<input name="phoneNumber" type="text" value="<?php echo $booked["phoneNumber"];?>">
					<br>
					<span><?php echo $err_phoneNumber;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">NID No:</td>
				<td>
					<input  name="nid" type="text" value="<?php echo $booked["nid"];?>">
					<br>
					<span ><?php echo $err_nid;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Address:</td>
				<td><textarea name="address"><?php echo $booked["address"];?></textarea>
						<br><span><?php echo $err_address;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Check In Date:</td>
				<td><input name="CIT" value="<?php echo $$booked["CIT"];?>" type="text">
					  <span><br><?php echo $err_CIT; ?></span></td>
			</tr>
			<tr>
				<td align="right">Check Out Date:</td>
				<td><input name="COT" value="<?php echo $$booked["COT"];?>" type="text">
					  <span><br><?php echo $err_COT; ?></span></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> 
				<input type="submit" name ="Approved" value="Approve">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>