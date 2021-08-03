<?php
require_once 'Controller/RoomsController.php';
$rooms = getRooms();
echo "<h1 style='color:green'>All ROOMS</h1>";
$i=1;

foreach($rooms as $c)
{
	$id = $c["id"];
	echo "<table style='width:30%; height:30%;' border = '4'>";
	echo "<tr><td>ID</td><td>Room No.</td><td>Catergry</td><td>Price</td>";
	
	echo "<tr>";
	echo "<td>$i.</td>";
	echo '<td>'.'<b>'.$c["room_no"].'</b>'.'</td>';
	echo '<td>'.'<b>'.$c["c_name"].'</b>'.'</td>';
	echo "<td>".'<b>'.$c["c_price"].'</b>'.' BDT'."</td>";
	/* echo "<td>".$c["qty"]."</td>";
	echo "<td>".$c["desc"]."</td>"; */
	echo '<td><a href= "EditRoom.php?id='.$c["id"].'"><input type="button" value="Update">  </a></td>';
	echo "</tr>";
	$i++;
	echo "</table>";
	
	echo '&nbsp;';
	
}
?>

