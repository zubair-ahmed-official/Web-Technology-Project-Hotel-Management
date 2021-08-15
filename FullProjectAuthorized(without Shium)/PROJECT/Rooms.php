<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?>
<?php
require_once 'Controller/RoomsController.php';
require_once 'main_header.php';
$rooms = getRooms();
setcookie("ROOMS","ROOMS",time()+(500));
echo "<h1 align='center' style='color:green'> All ".$_COOKIE["ROOMS"]."</h1>";
$i=1;

echo "<h3 align='center' style='color:brown'>

Search Rooms: <input type='text' onkeyup='searchRooms(this)'><div id='suggesstion'></div><br>";
//echo "&nbsp;&nbsp;";
foreach($rooms as $c)
{
	$id = $c["id"];
	echo "<table align='center' style='width:50%; height:30%;' border = '4'>";
	echo "<tr><td>ID</td><td>Room No.</td><td>Catergory</td><td>Price</td>";
	
	echo "<tr>";
	echo "<td>$i.</td>";
	echo '<td>'.'<b>'.$c["room_no"].'</b>'.'</td>';
	echo '<td>'.'<b>'.$c["c_name"].'</b>'.'</td>';
	echo "<td>".'<b>'.$c["c_price"].'</b>'.' BDT'."</td>";
	/* echo "<td>".$c["qty"]."</td>";
	echo "<td>".$c["desc"]."</td>"; */
	echo '<td>&nbsp;&nbsp;&nbsp;<a href= "EditRoom.php?id='.$c["id"].'"><input type="button" value="Update">  </a> &nbsp;&nbsp;&nbsp;
	<a href= "DeleteRoom.php?id='.$c["id"].'"><input type="button" value="Delete">  </a></td>';
	echo "</tr>";
	$i++;
	echo "</table>";
	
	echo '&nbsp;';
	
}
?>
<script src ="JS/searchRooms.js"></script>
