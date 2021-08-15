<?php
require_once 'main_header.php';
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/AvailabilityController.php';
//require_once 'Controller/CatController.php';
//$id = $_GET["id"];
//$cat = getRoom($id);
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action="" method="post" enctype= "multipart/form-data">
<h2 style="color:red" align ="center">View Rooms Availability:</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Room No: &nbsp;</b></td>
<td>&nbsp;<input type="text" name = "room_no" onfocusout="checkRoomAvailability(this)"><span id="err_room_no"><?php echo $err_room_no; ?></span></td></tr>
<!--<td>&nbsp;<select name="room_no" onfocusout="checkRoomAvailability(this)">
<option disabled selected>Choose</option>
<?php
/* foreach($cat as $c)
{
	echo "<option value='".$c["room_no"]."'>".$c["room_no"]."</option>";
} */
?>
</select></td>--><tr>

<td></td><td>&nbsp;<input type="submit" name ="check" value="Check" > </td>
</table>
<script src ="JS/checkAvailability.js"></script> <!--onsubmit = "return(validate());-->
</body>
</html>
