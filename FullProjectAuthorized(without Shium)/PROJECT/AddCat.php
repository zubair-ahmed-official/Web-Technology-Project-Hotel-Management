<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?>
<?php
require_once 'main_header.php';
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/CatController.php';
//require_once 'Controller/CategoryController.php';
//$cat = getallcategory();
session_start();
$_SESSION["Category"] = "CATEGORY";
?>

<html>
<body>
<form action="" onsubmit = "return validate()"  method="post" enctype= "multipart/form-data">
<h2 style="color:red" align ="center">ADD <?php echo $_SESSION["Category"];?></h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Name:</b></td>
<td>&nbsp;<input type="text" id = "name" name = "name"> <?php echo $err_name; ?> <span id = "err_name"></span> </td></tr>
<tr><td align="right"><b>Price:</b></td>
<td>&nbsp;<input type="number" id = "price" name = "price"><?php echo $err_price; ?> <span id = "err_price"></span></td></tr>
<!--<p>Category:</p>
<select name="c_id">
<option disabled selected>Choose</option>
<?php
/*foreach($cat as $c)
{
	//echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
}*/
?>
</select><span id = "err_p_image"></span>-->
<tr><td align="right"><b>Number of Beds:</b></td>
<td>&nbsp;<input type="number" id = "qty" name = "qty"><?php echo $err_qty; ?><span id = "err_qty"></span> </td></tr>
<tr><td align="right"><b>Description:</b></td>
<td>&nbsp;<input type="text" id = "description" name = "description"><?php echo $err_desc; ?><span id = "err_description"></span> </td></tr>
<tr><td align="right"><b>Image:</b></td>
<td>&nbsp;<input type="file" id="p_image" name="p_image"><?php echo $err_img; ?> </td></tr>
<tr><td></td>
<td>&nbsp;<input type="submit" name ="add_pro" value="Add" ></td></tr>
<script src = "JS/Category.js"></script>
</table>
</body>
</html>
