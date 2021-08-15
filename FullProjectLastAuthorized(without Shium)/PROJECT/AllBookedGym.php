<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?>
<?php
require_once "Models/db_config.php";
require_once 'main_header.php';

function getBookedGym()
{
	$query = "select * from gym";
	$rs = get($query);
	return $rs;
}
$gym = getBookedGym();
echo "<h1 align='center' style='color:green'>All Booked Gym Schedules</h1>";
$i=1;

//echo "&nbsp;&nbsp;";
foreach($gym as $c)
{
	$id = $c["id"];
	echo "<table align='center' style='width:40%; height:30%;' border = '4'>";
	echo "<tr><td>ID</td><td>Customer ID:</td><td>Schedules:</td>";
	
	echo "<tr>";
	echo "<td>$i.</td>";
	echo '<td>'.'<b>'.$c["id"].'</b>'.'</td>';
	echo '<td>'.'<b>'.$c["schedule"].'</b>'.'</td>';
	
	/* echo "<td>".$c["qty"]."</td>";
	echo "<td>".$c["desc"]."</td>"; */
	
	echo "</tr>";
	$i++;
	echo "</table>";
	
	echo '&nbsp;';
	
}
?>

