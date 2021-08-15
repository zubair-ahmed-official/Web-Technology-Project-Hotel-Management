<?php
require_once 'CommonHeader.php';
if(!isset($_COOKIE["loggeduser1"])){
header("Location: Login.php");
}
?>
<html>
<head>
</head>
<body>
<br>

<h1 style="color:green" align="center">Welcome <?php echo $_COOKIE["loggeduser1"]; ?> </h1><br>
<table style="border-color:blue; width:40%; height:70%;" align="center" border="4">

<tr>
<td colspan="3" align="center"><h1>Manager Panel</h1></td>
</tr>

<tr>
<td align="center"> Add Category</td>
<td align="center"><a href ="AddCat.php"><input type="button" value="Add"> </a></td>
</tr>
<tr>
<td align="center">All Categories</td>
<td align="center"><a href ="Category.php"><input type="button" value="Show"> </a></td>
</tr>
<tr>
<td align="center"> All Customers</td>
<td align="center"><a href ="AllCustomer.php"><input type="button" value="Show"> </a></td>
</tr>
<tr>
<td align="center"> Add Event</td>
<td align="center"><a href ="AddEvents.php"><input type="button" value="Add"> </a></td>
</tr>
<tr>
<td align="center"> All Events</td>
<td align="center"><a href ="UpcomingEvents.php"><input type="button" value="Add"> </a></td>
</tr>

<tr>
<td align="center"> Add Rooms</td>
<td align="center"><a href ="AddRooms.php"><input type="button" value="Show"> </a></td>
</tr>

<tr>
<td align="center"> All Rooms</td>
<td align="center"><a href ="Rooms.php"><input type="button" value="Show"> </a></td>
</tr>

<tr>
<td align="center"> All Booked Rooms</td>
<td align="center"><a href ="AllBookedRooms.php"><input type="button" value="Approve"> </a></td>
</tr>
<tr>
<td align="center"> All Approved Rooms</td>
<td align="center"><a href ="AllApprovedRooms.php"><input type="button" value="Show"> </a></td>
</tr>
<tr>
<td align="center"> All Available Rooms</td>
<td align="center"><a href ="AvailableRooms.php"><input type="button" value="Show"> </a></td>
</tr>

<tr>
<td align="center"> Add Notice</td>
<td align="center"><a href ="AddNotice.php"><input type="button" value="Add"> </a></td>
</tr>
<tr>
<td align="center"> All Booked Gym Schedules</td>
<td align="center"><a href ="AllBookedGym.php"><input type="button" value="Show"> </a></td>
</tr>

<tr>
<td align="center"> All Booked Spa Schedules</td>
<td align="center"><a href ="AllBookedSpa.php"><input type="button" value="Show"> </a></td>
</tr>
</table>
</body>
</html>