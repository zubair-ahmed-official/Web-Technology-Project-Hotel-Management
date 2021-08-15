<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?><?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'main_header.php';
require_once 'Controller/EventsController.php';
$id = $_GET["id"];
$c = getProduct($id);
//require_once 'Controller/CategoryController.php';
//$cat = getallcategory();
session_start();
?>

<html>
<body>
<form action="" method="post">
<h2 style="color:red" align ="center">DELETE <?php echo $_SESSION["EVENTS"]; ?>:</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Event Name:</b></td>
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">
<td>&nbsp;<input type="text" name = "name" value = "<?php echo $c["name"]; ?>"><?php echo $err_name; ?> </td></tr>
<td align="right"><b>Description:</b></td>
<td>&nbsp;<input type="textarea" name = "description" value = "<?php echo $c["description"]; ?>"> <?php echo $err_description; ?></td></tr>
<tr><td align="right"><b>Time:</b></td>
<td>&nbsp;<input type="textarea" name = "time" value = "<?php echo $c["time"]; ?>"><?php echo $err_time; ?> </td></tr>
<tr><td align="right"><b>Available For:</b></td>
<td>&nbsp;<input type="textarea" name = "avl" value = "<?php echo $c["avl"]; ?>"><?php echo $err_avl; ?> </td></tr>

<tr><td></td><td>&nbsp;<input type="submit" name ="Delete_Event" value="Delete" ></td></tr>
</table>
</body>
</html>
