<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/CategoryController.php';

?>

<html>
<body>
<h1 align ="center">Welcome Admin
<form action="" method="post" enctype= "multipart/form-data">
<p>ADD Category:</p>
<p>Category Name: <input type="text" name = "name"> </p>
<p>Image:<input type="file" name="p_image"> </p>
<span><?php echo $err_db; ?></span>
<p><input type="submit" name ="add_cat" value="Add" > </p>
</body>
</html>
