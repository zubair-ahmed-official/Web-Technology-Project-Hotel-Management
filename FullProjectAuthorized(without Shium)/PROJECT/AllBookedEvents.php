<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}?>
<?php
require_once 'Controller/EventsController.php';
require_once 'main_header.php';

function getBookedEvents()
{
	$query = "select * from bookevent";
	$rs = get($query);
	return $rs;
}
$events = getBookedEvents();
echo "<h1 align='center' style='color:green'>All Booked Events</h1>";
$i=1;

//echo "&nbsp;&nbsp;";
foreach($events as $c)
{
	$id = $c["id"];
	echo "<table align='center' style='width:80%; height:35%;' border = '4'>";
	echo "<tr><td>ID</td><td>Event Name:</td><td>Customer Name:</td><td>Customer ID:</td><td>Number of Members:</td>
	<td>Phone:</td><td>E-Mail:</td><td>Customer ID Link:</td>";
	
	echo "<tr>";
	echo "<td>$i.</td>";
	echo '<td>'.'<b>'.$c["name"].'</b>'.'</td>';
	echo '<td>'.'<b>'.$c["cname"].'</b>'.'</td>';
	echo "<td>".'<b>'.$c["cid"].'</b>'."</td>";
	echo "<td>".'<b>'.$c["members"].'</b>'."</td>";
	echo "<td>".'<b>'.$c["phone"].'</b>'."</td>";
	echo "<td>".'<b>'.$c["email"].'</b>'."</td>";
	echo "<td>".'<b>'.$c["clink"].'</b>'."</td>";
	/* echo "<td>".$c["qty"]."</td>";
	echo "<td>".$c["desc"]."</td>"; */
	
	echo "</tr>";
	$i++;
	echo "</table>";
	
	echo '&nbsp;';
	
}
?>

