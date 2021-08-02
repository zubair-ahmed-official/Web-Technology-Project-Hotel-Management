<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/EventsController.php';
$id = $_GET["id"];
$c = getProduct($id);
//require_once 'Controller/CategoryController.php';
//$cat = getallcategory();
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action="" method="post">
<h2 style="color:red" align ="center">Update Events:</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Event Name:</b></td>
<td>&nbsp;<input type="text" name = "name" value = "<?php echo $c["name"]; ?>"><?php echo $err_name; ?> </td></tr>
<td align="right"><b>Description:</b></td>
<td>&nbsp;<input type="textarea" name = "desc" value = "<?php echo $c["desc"]; ?>"> <?php echo $err_desc; ?></td></tr>
<tr><td align="right"><b>Time:</b></td>
<td>&nbsp;<input type="textarea" name = "time" value = "<?php echo $c["time"]; ?>"><?php echo $err_time; ?> </td></tr>
<tr><td align="right"><b>Available For:</b></td>
<td>&nbsp;<input type="textarea" name = "avl" value = "<?php echo $c["avl"]; ?>"><?php echo $err_avl; ?> </td></tr>

<td>&nbsp;<input type="submit" name ="edit_event" value="Update" ></td></tr>
</table>
</body>
</html>
