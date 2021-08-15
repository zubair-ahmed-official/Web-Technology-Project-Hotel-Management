<?php
if(isset($_COOKIE["loggeduser"]) || isset($_COOKIE["loggeduser1"]) || isset($_COOKIE["loggeduser2"])){


require_once 'main_header.php';
require_once 'Controller/AvailableRoomsController.php';
$rooms = getRooms();
echo "<h1 align='center' style='color:green'>AVAILABLE ROOMS</h1>";
$i=1;
echo "<h3 align='center' style='color:brown'>

Search Available Rooms: <input type='text' onkeyup='searchAvlRooms(this)'><div id='suggesstion'></div><br>";
foreach($rooms as $c)
{
	$id = $c["id"];
	echo "<table align='center' style='width:50%; height:30%;' border = '4'>";
	echo "<tr><td>ID</td><td>Room No.</td>";
	
	echo "<tr>";
	echo "<td>$i.</td>";
	echo '<td>'.'<b>'.$c["room_no"].'</b>'.'</td>';
	//echo '<td>'.'<b>'.$c["c_name"].'</b>'.'</td>';
	//echo "<td>".'<b>'.$c["c_price"].'</b>'.' BDT'."</td>";
	/* echo "<td>".$c["qty"]."</td>";
	echo "<td>".$c["desc"]."</td>"; */
	//echo '<td><a href= "EditRoom.php?id='.$c["id"].'"><input type="button" value="Update">  </a></td>';
	echo '<td>&nbsp;&nbsp;&nbsp;<a href= "EditAvlRoom.php?id='.$c["id"].'"><input type="button" value="Update">  </a> &nbsp;&nbsp;&nbsp;
	<a href= "DeleteAvlRoom.php?id='.$c["id"].'"><input type="button" value="Delete">  </a></td>';
	echo "</tr>";
	$i++;
	echo "</table>";
	
	echo '&nbsp;';
	
}
}
else
{
	header("Location: Login.php");
}
?>

<script src ="JS/searchAvlRooms.js"></script>