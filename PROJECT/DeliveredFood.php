<?php 
error_reporting (E_ALL ^ E_NOTICE);
require_once 'main_header.php';
require_once "Models/db_config.php";
function getFood($id)
{
	$query = "select * from classic where id=$id";
	$rs = get($query);
	return $rs[0];
}

$id = $_GET["id"];
$c = getFood($id);

if(isset($_POST["Deliver"]))
{
	
	$rs = DeliverFood($_POST["id"]);
	
	if($rs === true)
	{
		
		header("Location: OrderedFoods.php");
	}
	else{
	$err_db = $rs;
	}
}

function DeliverFood($id)
{
	
	$query = "DELETE FROM classic WHERE id=$id";
	//echo "$query";
	return execute($query);
}
?>
<html>
<body>
<h1 style="color:blue;" align ="center">Welcome Chef</h1>
<form action="" method="post">
<?php
setcookie("Foods", "Foods", time() + 120);
?>
<h2 style="color:red;" align ="center">Deliver <?php echo $_COOKIE["Foods"]; ?>:</h2>
<span><?php //echo $err_db; ?></span>
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">
<?php echo "<table style='border-color: green ; width='60%'; height='50%';' align='center' width='80%' height='30%' border = '3'>";
	//echo "<tr><td colspan='10'>All Checked In Customers</td></tr>";
	echo "<tr><td><b>Room No.: </b></td> <td><b>Phone:</b></td> <td><b>Customer ID:</b></td>   <td><b>Foods:</b> </td> 
	<td><b> Plates </b></td> ";
	echo "<tr>";
	//echo "<td>$i.</td>";
	echo "<td>".$c["RoomNo"]."</td>";
	echo "<td>".$c["phone"]."</td>";
	echo "<td>".$c["Cid"]."</td>";
	echo "<td>".$c["foods"]."</td>";
	echo "<td>".'&nbsp;'.$c["plates"]."</td>";
	//echo '<td> <a href= "DeliveredFood.php?id='.$id.'"> <input type="button" value="Deliver"> </a></td>';
	
	echo '<td>&nbsp;&nbsp;&nbsp; <input type="submit" name= "Deliver" value="Deliver" ></td>';
	echo "</tr>";
	echo "</table>";	?>
	
</td></tr>
</table>
</body>
</html>