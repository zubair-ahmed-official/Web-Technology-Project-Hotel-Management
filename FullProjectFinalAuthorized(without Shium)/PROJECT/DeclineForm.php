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
	<form action="" method="post">
		<table align="center" style="background-color:rgb(240, 240, 240); width:40%; height:5%;">
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td colspan="2" align="center" style="color: red"><h1><b>Decline Booking</b></h1></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <br></td>
			</tr>
			<tr>
				
				<td align="right">Room No:</td>
				<td><input  name="RoomNo" type="text" value="<?php echo $booked["RoomNo"];?>"><br>
					<span ><?php echo $err_RoomNo;?></span>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><br></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> 
				<input type="submit" name ="Decline" value="Decline">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>