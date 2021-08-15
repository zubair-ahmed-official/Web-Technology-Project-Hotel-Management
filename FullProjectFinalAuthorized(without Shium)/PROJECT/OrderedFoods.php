<?php
	if(!isset($_COOKIE["loggeduser3"])){
		header("Location: Login.php");
	}
?><?php
error_reporting (E_ALL ^ E_NOTICE);
error_reporting (0);
require_once "Models/db_config.php";
//require_once 'Classic.php';
//require_once 'CustomerCheeckin.php';
function getFoods()
{
	//$query = "SELECT p.*,c.name as 'c_name' from rooms p left join products1 c on p.c_id = c_id";
	$query = "SELECT * from classic";
	$rs = get($query);
	return $rs;
}

$pro = getFoods();

$i=1;
setcookie("Foods", "Foods", time() + 1000);

echo "<h1 align='center' style='color: blue'> Ordered ".$_COOKIE["Foods"].'</h1>';
foreach($pro as $c)
{
	$id = $c["id"];
	echo "<table style='border-color: green' align='center' width='80%' height='30%' border = '3'>";
	//echo "<tr><td colspan='10'>All Checked In Customers</td></tr>";
	echo "<tr><td><b>No. </b></td><td><b>Room No.: </b></td> <td><b>Phone:</b></td> <td><b>Customer ID:</b></td>   <td><b>Foods:</b> </td> 
	<td><b> Plates </b></td> ";
	echo "<tr>";
	echo "<td>$i.</td>";
	echo "<td>".'&nbsp;'.$c["RoomNo"]."</td>";
	echo "<td>".'&nbsp;'.$c["phone"]."</td>";
	echo "<td>".'&nbsp;'.$c["Cid"]."</td>";
	echo "<td>".'&nbsp;'.$c["foods"]."</td>";
	echo "<td>".'&nbsp;'.$c["plates"]."</td>";
	echo '<td> &nbsp; <a href= "DeliveredFood.php?id='.$id.'"> <input type="button" value="Deliver"> </a></td>';
	echo "</tr>";
	echo "</table>";
	$i++;
	echo "&nbsp;";
}
?>

