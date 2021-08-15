<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?><?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'main_header.php';
require_once 'Controller/RoomsController.php';
require_once 'Controller/CatController.php';
$cat = getProducts();
setcookie("ROOMS","ROOMS",time()+(500));
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action=""  method="post" onsubmit = "return(validate());" enctype= "multipart/form-data">
<h2 style="color:red" align ="center">ADD <?php echo $_COOKIE["ROOMS"];?> :</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Room No: &nbsp;</b></td>
<td>&nbsp;<input type="number" id = "room_no" name = "room_no"><?php echo $err_room_no; ?><span id="err_room_no"></span> </td></tr>
<tr><td align="right"><b>Category: &nbsp;</b></td></span>
<td>&nbsp;<select id="c_id" name="c_id">
<option> Choose </option>
<?php
foreach($cat as $c)
{
	echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
}
?>
</select><span id="err_c_id"><?php echo $err_c_id; ?></td><tr>

<span><?php //echo $err_db; ?></span>

<td></td><td>&nbsp;<input type="submit" name ="add_pro" value="Add Room" > </td>
</table>

<script src ="JS/addroom.js"></script> 
</body>
</html>
