<?php
		require_once "Models/db_config.php";
		//session_start();
		$Username="";
		$err_Username="";
		$Password="";
		$err_Password="";

		$hasError=false;
		
		if(isset($_POST["Log_In"]))
		{
		if(empty($_POST["Username"]))
				{
					$hasError=true;
					$err_Username="Username Required";
				}
				/*elseif(strlen($_POST["Username"])<=4)
				{
					$hasError=true;
					$err_Username="Username must be contain at least 4 characters";
				}
				elseif(strpos($_POST["Username"], ' ') !== false)
				{
					$hasError=true;
					$err_Username="Username doesn't allow space";
				}*/
				else
				{
					$Username=$_POST["Username"];
				}
				
				
				if(empty($_POST["Password"]))
				{
					$hasError=true;
					$err_Password="Password Required";
				}
				/*elseif(strlen($_POST["Password"])>= 4) 
				{
					$hasError = true;
					$err_Password = "Password must have atleast 4 character";
				}
				elseif(!strpos($_POST["Password"],"#") && !strpos($_POST["Password"],"?"))
				{
					$hasError = true;
					$err_Password = "Password must have atleast one special character(# or ?)";
				}
				elseif(!ctype_upper($_POST["Password"]) && !ctype_lower($_POST["Password"]))
				{
					$hasError = true;
					$err_Password = "Password must have combination of upper and lower character";
				}*/
				else
				{
					$Password=$_POST["Password"];
				}
				
				
				
			if(!$hasError){
			$rs= authenticateCustomer($Username,$Password);
			if($rs === true)
			{
				//$_SESSION["loggeduser"] = $Username;
				setcookie("loggeduser0",$Username,time()+1000);
				header("Location: CustomerPanel.php");
			}
			
			$rs= authenticatAdmin($Username,$Password);
			if($rs === true)
			{
				//$_SESSION["loggeduser"] = $Username;
				setcookie("loggeduser",$Username,time()+1000);
				header("Location: Admin_panel.php");
			}
			
			$rs= authenticatManager($Username,$Password);
			if($rs === true)
			{
				//$_SESSION["loggeduser"] = $Username;
				setcookie("loggeduser1",$Username,time()+1000);
				header("Location: Manager_panel.php");
			}
			
			$rs= authenticatReceiptionist($Username,$Password);
			if($rs === true)
			{
				//$_SESSION["loggeduser"] = $Username;
				setcookie("loggeduser2",$Username,time()+1000);
				header("Location: Receiptionist_panel.php");
			}
			
			$rs= authenticatHeadChef($Username,$Password);
			if($rs === true)
			{
				//$_SESSION["loggeduser"] = $Username;
				setcookie("loggeduser3",$Username,time()+1000);
				header("Location: ChefHeadPanel.php");
			}
			
			$err_db= $rs;
			}
		}
		

	function authenticateCustomer($Username,$Password)
	{
		$query= "select * from customers where userName= '$Username' and password= '$Password'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticatAdmin($Username,$Password)
	{
		$query= "select * from admin where userName= '$Username' and password= '$Password'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticatManager($Username,$Password)
	{
		$query= "select * from manager where userName= '$Username' and password= '$Password'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticatReceiptionist($Username,$Password)
	{
		$query= "select * from receiptionist where userName= '$Username' and password= '$Password'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticatHeadChef($Username,$Password)
	{
		$query= "select * from headchef where userName= '$Username' and password= '$Password'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
?>

