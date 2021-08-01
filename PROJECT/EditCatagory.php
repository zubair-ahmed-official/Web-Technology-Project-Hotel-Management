<?php 
require_once 'Controller/CatController.php';
$id = $_GET["id"];
$c = getProduct($id);
?>
<html>
<body>
<h1 style="color:blue;" align ="center">Welcome Admin</h1>
<form action="" method="post">
<h2 style="color:red;" align ="center">Edit Category:</h2>
<span><?php echo $err_db; ?></span>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">
<tr><td align="right"><b>Name:</b></td><td>&nbsp;<input type="text" name= "name" value = "<?php echo $c["name"]; ?>"> </td></tr>
<tr><td align="right"><b>Price:</b></td><td>&nbsp;<input type="text" name= "price" value = "<?php echo $c["price"]; ?>"></td></tr>
<tr><td align="right"><b>Number of Beds:</b></td><td>&nbsp;<input type="text" name= "qty" value = "<?php echo $c["qty"]; ?>"> </td></tr>
<!--<tr><input type="file" name= "img" value = "<?php //echo $c["img"]; ?>"> </tr>-->
<tr><td align="right"><b>Description:</b></td><td>&nbsp;<input type="text" name= "desc" value = "<?php echo $c["desc"]; ?>"></td> </tr>
<tr><td ><b></b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name= "Edit_cat" value="Edit" ></td></tr>
</table>
</body>
</html>