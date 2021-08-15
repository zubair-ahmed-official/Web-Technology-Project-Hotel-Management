
<?php
require_once 'CommonHeader.php';

if(!isset($_COOKIE["loggeduser"])){
header("Location: Login.php");
}

	
?>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!--k rel="stylesheet" href="styles/mystyle.css">-->
	</head>
	<body>
		<div class="text-center">
			<h1 align="center">Welcome <?php echo $_COOKIE["loggeduser"];?></h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="AllRooms.php" class="btn btn-primary">Rooms with price</a>
			<a href="CategoryCust.php" class="btn btn-primary">Room Categories</a>
			<a href="ShowOwnDetailsCustomer.php" class="btn btn-primary">Show Own Details</a><br><br><br>
			<a href="CustomerViewQAns.php" class="btn btn-primary">Ask Question</a>
			<a href="ShowOwnApprovedRoomCus.php" class="btn btn-primary">Booking History</a>
			<a href="Review.php" class="btn btn-primary">Give Review</a><br><br><br>
			<a href="Room_Booking.php" class="btn btn-primary">Book Room</a>
			<a href="GymReserve.php" class="btn btn-primary">Reserve for Gym</a>
			<a href="Spa.php" class="btn btn-primary">Reserve for Spa</a>
			<a href="Restaurant.php" class="btn btn-primary">Order Foods</a>
			<a href="UpcomingEventsCust.php" class="btn btn-primary">Events</a>
			<!--linked-->
			
			<a href="ShowOwnApprovedRoomCus.php" class="btn btn-primary">Give Rating</a>
		</div>
		<!--menu ends-->
</html>
<?php
	if(!isset($_COOKIE["loggeduser"])){
		header("Location: Login.php");
	}
?>
<html>
<head>
</head>
<body>
	<h1 style="color:green" align="center">Welcome <?php echo $_COOKIE["loggeduser"]; ?> </h1>
	<table style="border-color:blue; width:40%; height:50%;" align="center" border="4">
		
		<tr>
			<td colspan="3" align="center"><h1>Customers Panel</h1></td>
		</tr>
		
		<tr>
			<td align="center"> Rooms with price</td>
			<td align="center"><a href ="AllRooms.php"><input type="button" value="Show"> </a></td>
		</tr>
		<tr>
			<td align="center">Room Categories</td>
			<td align="center"><a href ="CategoryCust.php"><input type="button" value="Show"> </a></td>
		</tr>
		<tr>
			<td align="center"> Show Own Details</td>
			<td align="center"><a href ="ShowOwnDetailsCustomer.php"><input type="button" value="Show"> </a></td>
		</tr>
		<tr>
			<td align="center">Ask Question</td>
			<td align="center"><a href ="CustomerViewQAns.php"><input type="button" value="Show"> </a></td>
		</tr>
		<tr>
			<td align="center"> Booking History</td>
			<td align="center"><a href ="ShowOwnApprovedRoomCus.php"><input type="button" value="Show"> </a></td>
		</tr>
		
		<tr>
			<td align="center"> Give Review</td>
			<td align="center"><a href ="Review.php"><input type="button" value="Show"> </a></td>
		</tr>
		
		<tr>
			<td align="center"> Book Room</td>
			<td align="center"><a href ="Room_Booking.php"><input type="button" value="Book"> </a></td>
		</tr>
		<tr>
			<td align="center"> Reserve for Gym</td>
			<td align="center"><a href ="GymReserve.php"><input type="button" value="Show"> </a></td>
		</tr>
		
		<tr>
			<td align="center"> Reserve for Spa</td>
			<td align="center"><a href ="Spa.php"><input type="button" value="Show"> </a></td>
		</tr>
		
		<tr>
			<td align="center"> Order Foods</td>
			<td align="center"><a href ="Restaurant.php"><input type="button" value="Show"> </a></td>
		</tr>
		<tr>
			<td align="center">Events</td>
			<td align="center"><a href ="UpcomingEventsCust.php"><input type="button" value="Show"> </a></td>
		</tr>
	</table>		
</body>			
</html>