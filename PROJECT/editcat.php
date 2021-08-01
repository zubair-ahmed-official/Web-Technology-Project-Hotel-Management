<?php 
require_once 'Controller/CategoryController.php';
$id = $_GET["id"];
$c = getCategory($id);
?>
<html>
<body>
<h1 align ="center" style="width:100%; height:100%;">Welcome Admin
<form action="" method="post">
<p>Edit Category:</p>
<span><?php echo $err_db; ?></span>
<p><input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>"> </p>
<p><input type="text" name= "name" value = "<?php echo $c["name"]; ?>"> </p>
<p><input type="submit" name= "edit_cat" value="Edit" > </p>
</body>
</html>