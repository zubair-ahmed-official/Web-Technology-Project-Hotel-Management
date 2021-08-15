<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?><?php 
require_once 'main_header.php';
require_once 'Controller/CatController.php';
$id = $_GET["id"];
$c = getProduct($id);
session_start();
?>
<html>
<body>
<h1 style="color:blue;" align ="center">Welcome Admin</h1>
<form action="" method="post">
<h2 style="color:red;" align ="center">Delete <?php echo $_SESSION["Category"];?>:</h2>
<span><?php echo $err_db; ?></span>
<table style="border-color:green; width:40%; height:70%;" align="center" border="4">
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">
<tr><td align="right"><b>Name:</b></td><td>&nbsp;<input type="text" name= "name" value = "<?php echo $c["name"]; ?>"><span><?php echo $err_name ?></span> </td></tr>
<tr><td align="right"><b>Price:</b></td><td>&nbsp;<input type="text" name= "price" value = "<?php echo $c["price"]; ?>"><span><?php echo $err_price ?></span></td></tr>
<tr><td align="right"><b>Number of Beds:</b></td><td>&nbsp;<input type="text" name= "qty" value = "<?php echo $c["qty"]; ?>"><span><?php echo $err_qty ?></span> </td></tr>
<!--<tr><td align="right"><b>Image:</b></td><td><input type="file" name= "img" ><img width='200px' heigth='400px' src = "<?php //echo $c["img"]; ?>"></img></td></tr>-->
<tr><td align="right"><b>Description:</b></td><td>&nbsp;<input type="textarea" name= "description" value = "<?php echo $c["description"]; ?>"><span><?php echo $err_description ?></span></td> </tr>
<tr><td ><b></b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name= "Delete_cat" value="Delete" ></td></tr>
</table>
</body>
</html>