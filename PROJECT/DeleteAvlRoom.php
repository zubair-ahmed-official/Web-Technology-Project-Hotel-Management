<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'main_header.php';
require_once 'Controller/AvailableRoomsController.php';
require_once 'Controller/CatController.php';
error_reporting(0);
$id = $_GET["id"];
$c = getRoom($id);
$cat = getProducts();
session_start();
$_SESSION["Rooms"] = "ROOMS";
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action="" method="post">
<h2 style="color:red" align ="center">Delete <?php echo $_SESSION["Rooms"];?></h2>
<span> <?php echo $err_db; ?></span>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Room No:</b></td>
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">
<td>&nbsp;<input type="text" name = "room_no" value = "<?php echo $c["room_no"]; ?>"><?php echo $err_room_no; ?> </td></tr>
<!--<td align="right"><b>Category:</b></td>
<td>&nbsp;<select name="c_id" >
<option value="<?php //echo $c["c_id"]; ?>">--Choose--</option>
<?php
/* foreach($cat as $c)
{
	echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
} */
?>
</select><?php //echo $err_c_id; ?></td><tr>-->

<td>&nbsp;<input type="submit" name ="delete_room" value="Delete" ></td></tr>
</table>
</body>
</html>
