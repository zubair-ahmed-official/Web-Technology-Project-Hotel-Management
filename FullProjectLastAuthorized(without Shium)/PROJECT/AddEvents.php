<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?><?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'main_header.php';
require_once 'Controller/EventsController.php';
//require_once 'Controller/CategoryController.php';
//$cat = getallcategory();
session_start();
$_SESSION["EVENTS"] = "EVENTS";
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action="" name = "myForm" onsubmit = "return validate();"  method="post" enctype= "multipart/form-data">
<h2 style="color:red" align ="center">ADD <?php echo $_SESSION["EVENTS"]; ?> :</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Event Name:</b></td>
<td>&nbsp;<input type="text" id = "name" name = "name"><?php echo $err_name; ?><span id="err_name"></span> </td></tr>
<td align="right"><b>Description:</b></td>
<td>&nbsp;<input type="text" id = "description" name = "description"><?php echo $err_description; ?><span id = "err_description"></span> </td></tr>
<tr><td align="right"><b>Time:</b></td>
<td>&nbsp;<input type="textarea" id = "time" name = "time"><?php echo $err_time; ?> <span id="err_time"></span></td></tr>
<!--<p>Category:</p>
<select name="c_id">
<option disabled selected>Choose</option>
<?php
/*foreach($cat as $c)
{
	//echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
}*/
?>
</select>-->
<tr><td align="right"><b>Available For:</b></td>
<td>&nbsp;<input type="textarea" id = "avl" name = "avl"><?php echo $err_avl; ?><span id="err_avl"></span> </td></tr>

<tr><td align="right"><b>Image:</b></td>
<td>&nbsp;<input type="file" id="p_image" name="p_image"><?php //echo $err_img; ?> </td></tr>
<tr><td></td>
<td>&nbsp;<input type="submit" name ="add_event" value="Add" ></td></tr>
<script src = "JS/Event.js"></script>
</table>
</body>
</html>
