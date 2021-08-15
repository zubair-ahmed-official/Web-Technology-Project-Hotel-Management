<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Models/db_config.php';
$name = "";
$err_name = "";
$username = "";
$err_username = "";
$password = "";
$err_password = "";
$email = "";
$err_email = "";

$err_db = "";
$hasError = false;


//if($_SERVER["REQUEST_METHOD"] == "POST")
if(isset($_POST["register"]))
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = "Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = "Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	if(empty($_POST["username"]))
	{
		$hasError = true;
		$err_username = "UserName required";
	}
	else if(strlen($_POST["username"])< 6)
	{
		$hasError = true;
		$err_username = "UserName must be at least 6 characters";
	}
	else if(strpos($_POST["username"], ' ') !== false)
	{
		$hasError = true;
		$err_username = "UserName doesn't allow spaces";
	}
	else
	{
		$username = $_POST["username"];
	}
	
	
	if(empty($_POST["password"]))
	{
		$hasError = true;
		$err_password = "Password required";
	}

	else if((strlen($_POST["password"])< 8))
	{
		$hasError = true;
		$err_password = "Password requires minimum 8 characters";
	}
	if((strlen($_POST["password"])>= 8))
	{
	
	
	if(strpos($_POST["password"],'#') == false && (strpos($_POST["password"],'?') == false))
	{
		$hasError = true;
		$err_password = "Password requires minimum 1 '#' and '?'";
	}
	
	
	else
	{
		$password = $_POST["password"];
	}
	}
	
	
	if(empty($_POST["email"]))
	{
		$hasError = true;
		$err_email = "Email required";
	}
	else if(strpos($_POST["email"],"@") && strpos($_POST["email"],".") )
	{
		$email = $_POST["email"];
	}
	else
	{
		$hasError = true;
		$err_email = "Email format not correct";
	}
	
	if(!$hasError)
	{
	/*echo $_POST["name"]."<br>";
	echo $_POST["username"]."<br>";
    echo $_POST["password"]."<br>";
	echo $_POST["email"]."<br>";*/
	
	$rs = insertUser($name,$username,$_POST["password"],$_POST["email"]);
	
	if($rs === true)
	{
		header("Location: Login.php");
	}
	$err_db = $rs;
	}
	
}

elseif (isset($_POST["Login"]))
{
	if(empty($_POST["username"]))
	{
		$hasError = true;
		$err_username = "UserName required";
	}
	else
	{
		$username = $_POST["username"];
	}
	if(empty($_POST["password"]))
	{
		$hasError = true;
		$err_password = "Password required";
	}
	else
	{
		$password = $_POST["password"];
	}
	if(!$hasError)
	{
		/*foreach($users as $u=>$p)
		{
			if($username == $u && $password == $p)
			{
				//$_SESSION["loggeduser"] = $username;
				setcookie("loggeduser",$username,time()+120);
				header("Location: Signup.php");
			}
		}
		echo "invalid username";*/
		
		if(authenticateUser($username,$password))
		{
			header("Location: AddCategory.php");
		}
		$err_db = "invalid username or password";
		
	}
}
function insertUser($name,$username,$password,$email)
	{
		$query = "insert into users values ('10','$name','$username','$email','$password')";
		return execute($query);
	}
	
function authenticateUser($username,$password)
{
	$query = "select * from users where username = '$username' and password = '$password'";
	$rs = get($query);
	if(count($rs)>0)
	{
		return true;
	}
	return false;
	
	
}

?>