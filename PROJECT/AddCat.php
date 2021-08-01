<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/CatController.php';
//require_once 'Controller/CategoryController.php';
//$cat = getallcategory();
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action="" name = "myForm" onsubmit = "return(validate());"  method="post" enctype= "multipart/form-data">
<h2 style="color:red" align ="center">ADD Category:</h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Name:</b></td>
<td>&nbsp;<input type="text" name = "name"> <?php echo $err_name; ?></td></tr>
<tr><td align="right"><b>Price:</b></td>
<td>&nbsp;<input type="text" name = "price"><?php echo $err_price; ?> </td></tr>
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
<tr><td align="right"><b>Number of Beds:</b></td>
<td>&nbsp;<input type="text" name = "qty"><?php echo $err_qty; ?> </td></tr>
<tr><td align="right"><b>Description:</b></td>
<td>&nbsp;<input type="text" name = "desc"><?php echo $err_desc; ?> </td></tr>
<tr><td align="right"><b>Image:</b></td>
<td>&nbsp;<input type="file" name="p_image"><?php //echo $err_img; ?> </td></tr>
<tr><td></td>
<td>&nbsp;<input type="submit" name ="add_pro" value="Add" ></td></tr>
</table>
</body>
</html>
