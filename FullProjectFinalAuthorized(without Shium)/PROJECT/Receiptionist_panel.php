<?php
require_once 'CommonHeader.php';
	if(!isset($_COOKIE["loggeduser2"])){
		header("Location: Login.php");
	}
?>
<html>
<head>
</head>
<body>
	<h1 style="color:green" align="center">Welcome  <?php echo $_COOKIE["loggeduser2"]; ?> </h1>
	<table style="border-color:blue; width:40%; height:50%;" align="center" border="4">
		
		<tr>
			<td colspan="3" align="center"><h1>Receiptionist Panel</h1></td>
		</tr>
		
		<tr>
			<td align="center">Book Room</td>
			<td align="center"><a href ="Room_Booking.php"><input type="button" value="Book"> </a></td>
		</tr>
		<tr>
			<td align="center">Show All Booking Rooms</td>
			<td align="center"><a href ="AllBookingRooms.php"><input type="button" value="Show"> </a></td>
		</tr>
		<tr>
			<td align="center">Show All Available Rooms</td>
			<td align="center"><a href ="AvailableRooms.php"><input type="button" value="Show"> </a></td>
		</tr>
		<tr>
			<td align="center">Show All Approved Rooms</td>
			<td align="center"><a href ="AllApprovedRooms.php"><input type="button" value="show"> </a></td>
		</tr>
		<tr>
			<td align="center">Check in Room</td>
			<td align="center"><a href ="CustomerCheeckin.php"><input type="button" value="Check in"> </a></td>
		</tr>
	</table>		
</body>			
</html>