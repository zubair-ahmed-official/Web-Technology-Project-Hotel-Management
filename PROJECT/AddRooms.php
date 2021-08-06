<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/RoomsController.php';
require_once 'Controller/CatController.php';
$cat = getProducts();
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action=""  method="post" enctype= "multipart/form-data">
<h2 style="color:red" align ="center">ADD Rooms:</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Room No: &nbsp;</b></td>
<td>&nbsp;<input type="text" name = "room_no"><?php echo $err_room_no; ?> </td></tr>
<tr><td align="right"><b>Category: &nbsp;</b></td>
<td>&nbsp;<select name="c_id">
<option disabled selected>Choose</option>
<?php
foreach($cat as $c)
{
	echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
}
?>
</select><?php echo $err_c_id; ?></td><tr>

<span><?php //echo $err_db; ?></span>

<td></td><td>&nbsp;<input type="submit" name ="add_pro" value="Add Room" > </td>
</table>
<!--<script src ="checkProductname.js"></script> onsubmit = "return(validate());-->
</body>
</html>
