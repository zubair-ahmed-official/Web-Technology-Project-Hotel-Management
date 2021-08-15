<?php
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
	<form action=""  method="post">
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
				<td><input  name="RoomNo" type="text" value="<?php echo $booked["RoomNo"];?>"><br>
					<span ><?php echo $err_RoomNo;?></span>
				</td>
			</tr>
			<tr>
				
				<td align="right">Username:</td>
				<td><input  name="userName" type="text" value="<?php echo $booked["userName"];?>"><br>
					<span ><?php echo $err_userName;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Branch:</td>
				<td><input name="Branch" type="text"  value="<?php echo $booked["Branch"];?>">
					<br>
					<span><?php echo $err_Branch;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Email:</td>
				<td><input  name="Email" type="text" value="<?php echo $booked["Email"];?>"><br>
					<span><?php echo $err_Email;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Phone Number:</td>
				<td>
					<input name="Phone" type="text" value="<?php echo $booked["Phone"];?>">
					<br>
					<span><?php echo $err_Phone;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">NID No:</td>
				<td>
					<input  name="NID" type="text" value="<?php echo $booked["NID"];?>">
					<br>
					<span ><?php echo $err_NID;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Address:</td>
				<td><textarea name="Address"><?php echo $booked["Address"];?></textarea>
						<br><span><?php echo $err_Address;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Check In Date:</td>
				<td><input name="CIT" value="<?php echo $booked["CIT"];?>" type="text">
					  <span><br><?php echo $err_CIT; ?></span></td>
			</tr>
			<tr>
				<td align="right">Check Out Date:</td>
				<td><input name="COT" value="<?php echo $booked["COT"];?>" type="text">
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