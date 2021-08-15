<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?><?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/EventsController.php';
error_reporting(0);
require_once 'main_header.php';
$id = $_GET["id"];
$c = getProduct($id);
//setcookie($Events,"Events", time() + (120));
//require_once 'Controller/CategoryController.php';
//$cat = getallcategory();
session_start();
?>

<html>
<body>
<form action="" onsubmit = "return(validate());" method="post">
<h2 style="color:red" align ="center">UPDATE <?php echo $_SESSION["EVENTS"]; ?></h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Event Name:</b></td>
<input type="hidden" id= "id" name= "id" value = "<?php echo $c["id"]; ?>">
<td>&nbsp;<input type="text" id = "name" name = "name" value = "<?php echo $c["name"]; ?>"><span id="err_name"></span><?php echo $err_name; ?> </td></tr>
<td align="right"><b>Description:</b></td>
<td>&nbsp;<input type="textarea" id = "description" name = "description" value = "<?php echo $c["description"]; ?>"><span id="err_description"></span> <?php echo $err_description; ?></td></tr>
<tr><td align="right"><b>Time:</b></td>
<td>&nbsp;<input type="textarea" id = "time" name = "time" value = "<?php echo $c["time"]; ?>"><span id="err_time"></span><?php echo $err_time; ?> </td></tr>
<tr><td align="right"><b>Available For:</b></td>
<td>&nbsp;<input type="textarea" id = "avl" name = "avl" value = "<?php echo $c["avl"]; ?>"><span id="err_avl"></span><?php echo $err_avl; ?> </td></tr>

<tr><td></td><td>&nbsp;<input type="submit" name ="edit_event" value="Update" ></td></tr>
</table>
<script src ="JS/EditEvents.js"></script> 
</body>
</html>
