<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";
$err_db = "";
if(isset($_POST["save"]))
{
	$rs = inseertChecking($_POST["cname"],$_POST["c_id"],$_POST["phone"],$_POST["room_no"],$_POST["btime"],$_POST["bdays"],$_POST["clink"]);
	if($rs === true)
	{
		//header("Location: AllProducts.php");
	}
	$err_db = $rs;
}

function inseertChecking($cname,$c_id,$phone,$room_no,$btime,$bdays,$clink)
{
	
	$query = "insert into customer_checkin values ('$cname',$c_id,$phone,$room_no,'$btime','$bdays','$clink')";
	//echo "$query";
	return execute($query);
} 
?>
<html>
<body>
<form action="" id="insert_form" method="post">
<table id="table_field">
<h1>Customers Checkin</h1>

<tr><td><b>Customer Name: </b></td><td><b>Customer ID:</b></td>  <td><b>Phone:</b></td> <td><b>Room no:</b> </td> <td><b> Booking Time: </b></td> <td><b> Booked Days: </b></td><td><b> Customer account link:</b></td> </tr>
<tr>
<td><input type="text" name="cname" required=""></td>
<td><input type="text" name="c_id" required=""></td>
<td><input type="text" name="phone" required=""></td>
<td><input type="text" name="room_no" required=""></td>
<td><input type="text" name="btime" required=""></td>
<td><input type="text" name="bdays" required=""></td>
<td><input type="text" name="clink" required=""></td>
<td><input type="button" name="add" id="add" value="add"></td>
</tr>
</table>
<center><input type="submit" name="save" id="save" value="Save">

</body>
</html>
