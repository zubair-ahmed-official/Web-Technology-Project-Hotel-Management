<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'main_header.php';
?>

<?php
require_once 'Models/db_config.php';
$err_db ="";
if(isset($_POST["add_cat"]))
{
	
	$filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);
	
	$rs = insertcategory($_POST["name"],$target);
	if($rs === true)
	{
		header("Location: AllCat.php");
	}
	$err_db = $rs;
}
elseif(isset($_POST["edit_cat"]))
{
	$rs = updatecategory($_POST["name"],$_POST["id"]);
	if($rs === true)
	{
		header("Location: AllCat.php");
	}
	$err_db = $rs;
}

function insertcategory($name,$img)
{
	$query = "insert into  cat values (NULL,'$name','$img')";
	return execute($query);
}
function getallcategory()
{
	$query = "select * from cat";
	$rs = get($query);
	return $rs;
}
function getcategory($id)
{
	$query = "select * from cat where id = $id";
	$rs = get($query);
	return $rs[0];
}
function updatecategory($name,$id)
{
	$query = "update cat set name= '$name',img = '$img' where id = $id";
	return execute($query);
}
?>