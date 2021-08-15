<?php
require_once 'main_header.php';
require_once 'Controller/CheckinController.php';
require_once 'CustomerCheeckin.php';
$pro = getProducts();

$i=1;
foreach($pro as $c)
{
	$id = $c["id"];
	echo "<table style='border-color: brown' align='center' width='80%' height='30%' border = '3'>";
	//echo "<tr><td colspan='10'>All Checked In Customers</td></tr>";
	echo "<tr><td><b>No. </b></td><td><b>Customer Name: </b></td><td><b>Customer ID:</b></td>  <td><b>Phone:</b></td> <td><b>Room no:</b> </td> 
	<td><b> Checkin Time: </b></td> <td><b> Checkout Time: </b></td><td><b> Customer account link:</b></td> </tr>";
	echo "<tr>";
	echo "<td>$i.</td>";
	echo "<td>".$c["cname"]."</td>";
	echo "<td>".$c["cid"]."</td>";
	echo "<td>".$c["phone"]."</td>";
	echo "<td>".$c["room_no"]."</td>";
	echo "<td>".$c["btime"]."</td>";
	echo "<td>".$c["bdays"]."</td>";
	echo "<td>".$c["clink"]."</td>";
	echo '<td> <a href= "EditCheckin.php?id='.$id.'"> <input type="button" value="Update"> </a></td>';
	echo '<td>&nbsp;<a href= "Checkout.php?id='.$id.'"><input type="button" value="Checkout">&nbsp;&nbsp;</td>';
	echo "</tr>";
	echo "</table>";
	$i++;
	echo "&nbsp;";
}
?>

