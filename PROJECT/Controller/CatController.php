<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$name = "";
$err_name = "";
$price = "";
$err_price="";
$qty = "";
$err_qty="";
$desc = "";
$err_desc = "";
$img = "";
$err_img = "";
$err_db = "";

$hasError = false;

if(isset($_POST["add_pro"]))
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = " Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = " Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	if(empty($_POST["price"]))
	{
		$hasError = true;
		$err_price = " Price required";
	}
	else
	{
		$price = $_POST["price"];
	}
	
	
	if(empty($_POST["qty"]))
	{
		$hasError = true;
		$err_qty = " Number of Beds required";
	}
	else
	{
		$qty = $_POST["qty"];
	}
	
	if(empty($_POST["desc"]))
	{
		$hasError = true;
		$err_desc = " Description required";
	}
	else
	{
		$desc = $_POST["desc"];
	}
	
	/*if(empty($_POST["img"]))
	{
		$hasError = true;
		$err_img = " Image required";
	}
	else
	{
		$img = $_POST["img"];
	}*/

	if(!$hasError)
	{
		
	$filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);
	
	$rs = inseertProduct($_POST["name"]/*,$_POST["c_id"]*/,$_POST["price"],$_POST["qty"],$target,$_POST["desc"]);
	if($rs === true)
	{
		header("Location: Category.php");
	}
	$err_db = $rs;
	}
}
elseif(isset($_POST["Edit_cat"]))
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = " Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = " Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	if(empty($_POST["price"]))
	{
		$hasError = true;
		$err_price = " Price required";
	}
	else
	{
		$price = $_POST["price"];
	}
	
	
	if(empty($_POST["qty"]))
	{
		$hasError = true;
		$err_qty = " Number of Beds required";
	}
	else
	{
		$qty = $_POST["qty"];
	}
	
	if(empty($_POST["desc"]))
	{
		$hasError = true;
		$err_desc = " Description required";
	}
	else
	{
		$desc = $_POST["desc"];
	}
	
	if(!$hasError)
	{
	$filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);
	
	$rs = updateProduct($_POST["name"]/*,$_POST["c_id"]*/,$_POST["price"],$_POST["qty"],$target,$_POST["desc"]);
	if($rs === true)
	{
		header("Location: Category.php");
	}
	$err_db = $rs;
	}
}

function inseertProduct($name/*,$c_id*/,$price,$qty,$img,$desc)
{
	$query = "insert into products1 values (NULL,'$name',$price,$qty,'$img','$desc')";
	return execute($query);
}

function getProducts()
{
	$query = "select * from products1";
	$rs = get($query);
	return $rs;
}

function getProduct($id)
{
	$query = "select * from products1 where id=$id";
	$rs = get($query);
	return $rs[0];
}

function updateProduct($name,$price,$qty,$img,$desc)
{
	$query = "update products1 set name ='$name',price = $price,qty = $qty,img = '$img',desc ='$desc' where id = $id";
	return execute($query);
}
?>