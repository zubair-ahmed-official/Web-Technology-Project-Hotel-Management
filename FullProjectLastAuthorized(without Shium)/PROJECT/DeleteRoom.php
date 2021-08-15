<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?><?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'main_header.php';
require_once 'Controller/RoomsController.php';
require_once 'Controller/CatController.php';
error_reporting(0);
$id = $_GET["id"];
$c = getRoom($id);
$cat = getProducts();
//session_start();
//$_SESSION["Rooms"] = "ROOMS";
?>

<html>
<body>
<form action="" onsubmit = "return(validate());" method="post">
<h2 style="color:red" align ="center">DELETE <?php echo $_COOKIE["ROOMS"];?></h2>
<span> <?php echo $err_db; ?></span>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Room No:</b></td>
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">
<td>&nbsp;<input type="text" id="room_no"  name = "room_no" value = "<?php echo $c["room_no"]; ?>"><?php echo $err_room_no; ?><span id="err_room_no"></span> </td></tr>
<!--<td align="right"><b>Category:</b></td>
<td>&nbsp;<select id="c_id" name="c_id" >
<option value="<?php //echo $c["c_id"]; ?>">--Choose--</option>
<?php
/* foreach($cat as $c)
{
	echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
} */
?>
</select><span id="err_c_id"><?php //echo $err_c_id; ?></td><tr>-->

<td>&nbsp;<input type="submit" name ="delete_room" value="Delete" ></td></tr>
</table>
<script src ="JS/deleteroom.js"></script> 
</body>
</html>
