<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/EventsController.php';
//require_once 'Controller/CategoryController.php';
//$cat = getallcategory();
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action="" name = "myForm" onsubmit = "return(validate());"  method="post" enctype= "multipart/form-data">
<h2 style="color:red" align ="center">ADD Events:</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Event Name:</b></td>
<td>&nbsp;<input type="text" name = "name"><?php echo $err_name; ?> </td></tr>
<td align="right"><b>Description:</b></td>
<td>&nbsp;<input type="textarea" name = "desc"> <?php echo $err_desc; ?></td></tr>
<tr><td align="right"><b>Time:</b></td>
<td>&nbsp;<input type="textarea" name = "time"><?php echo $err_time; ?> </td></tr>
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
<td>&nbsp;<input type="textarea" name = "avl"><?php echo $err_avl; ?> </td></tr>

<tr><td align="right"><b>Image:</b></td>
<td>&nbsp;<input type="file" name="p_image"><?php //echo $err_img; ?> </td></tr>
<tr><td></td>
<td>&nbsp;<input type="submit" name ="add_event" value="Add" ></td></tr>
</table>
</body>
</html>
