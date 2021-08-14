<?php
	if(!isset($_COOKIE["loggeduser"])){
		header("Location: Login.php");
	}
?>
<?php
require_once "Models/db_config.php";
//require_once 'Controller/EventsController.php';
require_once 'main_header.php';

function getBookeds()
{
	$query = "select * from booked_rooms";
	$rs = get($query);
	return $rs;
}
$bookeds = getBookeds();
echo "<h1 align='center' style='color:red'>Booked Rooms</h1>";
$i=1;

//echo "&nbsp;&nbsp;";
foreach($bookeds as $c)
{
	$id = $c["id"];
	echo "<table align='center' style='width:45%; height:30%;' border = '4'>";
	echo "<tr><td>No:</td><td>Rooms:</td>";
	
	echo "<tr>";
	echo "<td>$i.</td>";
	//echo '<td>'.'<b>'.$c["id"].'</b>'.'</td>';
	echo '<td>'.'<b>'.$c["room_no"].'</b>'.'</td>';
	
	
	echo "</tr>";
	$i++;
	echo "</table>";
	
	echo '&nbsp;';
	
}
?>

