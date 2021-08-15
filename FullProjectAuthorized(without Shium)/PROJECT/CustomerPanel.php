
<?php
require_once 'CommonHeader.php';

if(!isset($_COOKIE["loggeduser0"])){
header("Location: Login.php");
}

	
?>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!--k rel="stylesheet" href="styles/mystyle.css">-->
	</head>
	<body>
	<br>
		<div class="text-center">
			<h1 style="color:green" align="center">Welcome <?php echo $_COOKIE["loggeduser0"];?></h1>
		</div>
		<br>
		
		<table style="border-color:skyBlue; width:40%; height:70%;" align="center" border="4">
		
		<tr>
			<td colspan="3" align="center"><h1>Customer Panel</h1></td>
		</tr>
		
		<tr>
			<td align="center"> Rooms with price</td>
			<td align="center"><a href ="AllRooms.php">Show</a></td>
		</tr>
		<tr>
			<td align="center"> Profile </td>
			<td align="center"><a href ="ShowOwnDetailsCustomer.php">Show</a></td>
		</tr>
		
		<tr>
			<td align="center"> Ask Question</td>
			<td align="center"><a href ="CustomerViewQAns.php">Ask</a></td>
		</tr>
		<tr>
			<td align="center">Booking History</td>
			<td align="center"><a href ="ShowOwnApprovedRoomCus.php">Show</a></td>
		</tr>
		
		<tr>
			<td align="center"> Book Room </td>
			<td align="center"><a href ="Room_Booking.php">Book</a></td>
		</tr>
		<tr>
			<td align="center"> Reserve for Gym </td>
			<td align="center"><a href ="GymReserve.php">Add</a></td>
		</tr>
		<tr>
			<td align="center"> Reserve for Spa</td>
			<td align="center"><a href ="Spa.php">Add</a></td>
		</tr>
		
		<tr>
			<td align="center"> Order Foods</td>
			<td align="center"><a href ="Restaurant.php">Order</a></td>
		</tr>
		
		<tr>
			<td align="center">Events</td>
			<td align="center"><a href ="UpcomingEventsCust.php">Show</a></td>
		</tr>
		<tr>
			<td align="center"> Give Review</td>
			<td align="center"><a href ="Review.php">Add</a></td>
		</tr>
		<tr>
			<td align="center"> Give Rating</td>
			<td align="center"><a href ="">Add</a></td>
		</tr>
		
	</table>
</body>	
		
		<!--menu starts
		<div class="text-center">
			<a href="AllRooms.php" class="btn btn-primary">Rooms with price</a>
			
			<a href="ShowOwnDetailsCustomer.php" class="btn btn-primary">Show Own Details</a><br><br><br>
			<a href="CustomerViewQAns.php" class="btn btn-primary">Ask Question</a>
			<a href="ShowOwnApprovedRoomCus.php" class="btn btn-primary">Booking History</a>
			<a href="Review.php" class="btn btn-primary">Give Review</a><br><br><br>
			<a href="Room_Booking.php" class="btn btn-primary">Book Room</a>
			<a href="GymReserve.php" class="btn btn-primary">Reserve for Gym</a>
			<a href="Spa.php" class="btn btn-primary">Reserve for Spa</a>
			<a href="Restaurant.php" class="btn btn-primary">Order Foods</a>
			linked
			
			<a href="ShowOwnApprovedRoomCus.php" class="btn btn-primary">Give Rating</a>
		</div>-->
		<!--menu ends-->
</html>