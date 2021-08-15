<?php
	if(!isset($_COOKIE["loggeduser2"])){
		header("Location: Login.php");
	}
?><?php 
require_once 'main_header.php';
require_once 'Controller/CheckinController.php';

?>
<html>
<body>
<form  onsubmit="return validate()" method="post"> <!--method="post" checkRoomAvailability(this) -->
<table>
<h1 style='color:rgb(128, 0, 64)'>&nbsp; Customers Checkin</h1>

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<b>Customer Name: </b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<b>Customer ID:</b></td>  <td>&nbsp;&nbsp;&nbsp;&nbsp;<b>Phone:</b></td> <td>&nbsp;&nbsp;&nbsp;&nbsp;<b>Room no:</b> </td> <td>&nbsp;&nbsp;&nbsp;&nbsp;<b> Checkin Time: </b></td> <td>&nbsp;&nbsp;&nbsp;&nbsp;<b> Checkout Time: </b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<b> Customer account link:</b></td> </tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="cname" name="cname" value="<?php echo $cname?>" >&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="cid" name="cid" value="<?php echo $cid?>" onfocusout="customerIdExisting(this)" >&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="phone" name="phone" value="<?php echo $phone?>" >&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="room_no" name="room_no"  value="<?php echo $room_no?>" onfocusout="checkRoomAvailability(this) ; checkRoomExisting(this)"><?php //echo $err_room_no; ?>&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="btime" name="btime" value="<?php echo $btime?>">&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="bdays" name="bdays" value="<?php echo $bdays?>">&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="clink" name="clink" value="<?php echo $clink?>">&nbsp;&nbsp;</td>
<td>&nbsp;<input type="submit" name="add" id="add" value="Add Checkin">&nbsp;&nbsp;</td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<span id="err_cname"  ></span><?php echo $err_cname; ?>&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red" id="err_cid"  ></span><?php echo $err_cid; ?>&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<span id="err_phone"  ></span><?php echo $err_phone; ?>&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red" id="err_room_no"><?php echo $err_room_no; ?>&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<span id="err_btime"  ></span><?php echo $err_btime; ?>&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<span id="err_bdays"  ></span><?php echo $err_bdays; ?>&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<span id="err_clink"  ></span><?php echo $err_clink; ?>&nbsp;&nbsp;</td>


</tr>

</table>
<br>

<table align="center">
<tr><td><?php echo "<h3 align='center' style='color:green'>Search CheckedIn Rooms: <input type='text' onkeyup='searchCheckin(this)'><div id='suggesstion'></div><br>"?></td>

<tr><td><?php echo "<h3 align='center' style='color:blue'>Search CheckedIn Customers: <input type='text' onkeyup='searchCheckinCust(this)'><div id='suggesstion2'></div><br>"?></td>
</table>
<script src ="JS/checkAvailability.js"></script>
<script src ="JS/roomExisting.js"></script>
<script src ="JS/checkin.js"></script>
<script src ="JS/searchCheckin.js"></script>
<script src ="JS/searchCheckinCust.js"></script>
<script src ="JS/customerIdExisting.js"></script>

</body>
</html>

<?php
echo "<h1 align='center' style='color:brown'>All Checked In Customers</h1>";
require_once "AllCheckin.php"; 
?>