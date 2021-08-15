<?php
	require_once "Models/db_config.php";

	$name="";
	$err_name="";
	$userName="";
	$err_userName="";
	$password="";
	$err_password="";
	$ConfirmPassword="";
	$err_ConfirmPassword="";
	$email="";
	$err_email="";
	$PhoneNumber="";
	$err_PhoneNumber="";
	$Address="";
	$err_Address="";
	$gender="";
	$err_gender="";
	$NID="";
	$err_NID="";
	$age="";
	$err_age="";
	$id="";
	$err_id="";
	$err_db="";
	
	$hasError=false;
	
	
	if(isset($_POST["Sign_Up"]))
	{
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=2){
			$hasError = true;
			$err_name = "Name must be greater than 2 characters";
		}
		elseif (is_numeric($_POST["name"]))
		{
			$hasError = true;
			$err_name = "Name can't be numeric!!";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["userName"])){
			$hasError=true;
			$err_userName="UserName Required";
		}
		elseif (strlen($_POST["userName"]) <6){
			$hasError = true;
			$err_userName = "UserName must be greater than 6 characters";
		}
		elseif (strpos($_POST["userName"]," ")){
			$hasError = true;
			$err_userName = "UserName can't take space!!!";
		}
		else
		{
			$userName = $_POST["userName"];
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
		else
		{
			$password = $_POST["password"];
		}
	
		if(empty($_POST["ConfirmPassword"]))
		{
		$hasError = true;
		$err_ConfirmPassword = "ConfirmPassword required";
		}

		else if((strlen($_POST["ConfirmPassword"])< 8))
		{
		$hasError = true;
		$err_ConfirmPassword = "ConfirmPassword requires minimum 8 characters";
		}
		else
		{
			$ConfirmPassword = $_POST["ConfirmPassword"];
		}
		
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "Email Required!!!";
		}
		else{
			$email = $_POST["email"];
		}
		
		if(empty($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required!!!";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(empty($_POST["PhoneNumber"])){
			$hasError = true;
			$err_PhoneNumber = "PhoneNumber Required!!!";
		}
		elseif(is_numeric($_POST["PhoneNumber"])){
			$PhoneNumber = $_POST["PhoneNumber"];
		}
		else{
			$hasError = true;
			$err_PhoneNumber = "Please enter a numeric value!!!";
		}
		if(empty($_POST["NID"])){
			$hasError = true;
			$err_NID = "NID No Required!!!";
		}
		elseif(is_numeric($_POST["NID"])){
			$NID = $_POST["NID"];
		}
		else{
			$hasError = true;
			$err_NID = "Please enter a numeric value!!!";
		}
		if(empty($_POST["Address"])){
			$hasError = true;
			$err_Address= "Address Required!!";
		}
		else{
			$Address = $_POST["Address"];
		}
		if(empty($_POST["age"])){
			$hasError = true;
			$err_age = "Age Required!!";
		}
		else{
			$age = $_POST["age"];
		}		
		
		$file_name=basename($_FILES["customer_image"]["name"]);//image file name
		$ext= strtolower(pathinfo($file_name, PATHINFO_EXTENSION));// file extention with lower case
		$myFileName= uniqid().".$ext"; // by which name i want to upload the file
		$target= "storage/Customer_images/$myFileName";
		$temp_Path= $_FILES["customer_image"]["tmp_name"];
		move_uploaded_file($temp_Path,$target);
		
		if(!$hasError){
			$rs= insertCustomer($name,$userName,$password,$email,$PhoneNumber,$NID,$Address,$gender,$age,$target);
			if($rs === true)
			{
				header("Location: LogIn.php");
			}
			//$err_db= "Email or Password Invalid";
			$err_db= $rs;
		}
		
	}
	
	else if(isset($_POST["Edit_CustomerByAdmin"]))
	{
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=2){
			$hasError = true;
			$err_name = "Name must be greater than 2 characters";
		}
		elseif (is_numeric($_POST["name"]))
		{
			$hasError = true;
			$err_name = "Name can't be numeric!!";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["userName"])){
			$hasError=true;
			$err_userName="UserName Required";
		}
		elseif (strlen($_POST["userName"]) <6){
			$hasError = true;
			$err_userName = "UserName must be greater than 6 characters";
		}
		elseif (strpos($_POST["userName"]," ")){
			$hasError = true;
			$err_userName = "UserName can't take space!!!";
		}
		else
		{
			$userName = $_POST["userName"];
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "Email Required!!!";
		}
		else{
			$email = $_POST["email"];
		}
		
		if(empty($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required!!!";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(empty($_POST["PhoneNumber"])){
			$hasError = true;
			$err_PhoneNumber = "PhoneNumber Required!!!";
		}
		elseif(is_numeric($_POST["PhoneNumber"])){
			$PhoneNumber = $_POST["PhoneNumber"];
		}
		else{
			$hasError = true;
			$err_PhoneNumber = "Please enter a numeric value!!!";
		}
		if(empty($_POST["NID"])){
			$hasError = true;
			$err_NID = "NID No Required!!!";
		}
		elseif(is_numeric($_POST["NID"])){
			$NID = $_POST["NID"];
		}
		else{
			$hasError = true;
			$err_NID = "Please enter a numeric value!!!";
		}
		if(empty($_POST["Address"])){
			$hasError = true;
			$err_Address= "Address Required!!";
		}
		else{
			$Address = $_POST["Address"];
		}
		if(empty($_POST["age"])){
			$hasError = true;
			$err_age = "Age Required!!";
		}
		else{
			$age = $_POST["age"];
		}	
		
		if(!$hasError){
			$rs= updateCustomer($name,$userName,$email,$PhoneNumber,$NID,$Address,$gender,$age,$_POST["id"]);
			if($rs === true)
			{
				header("Location: AllCustomer.php");
			}
			//$err_db= "Email or Password Invalid";
			$err_db= $rs;
		}
		
	}
	else if(isset($_POST["Edit_CustomerByCustomer"]))
	{
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=2){
			$hasError = true;
			$err_name = "Name must be greater than 2 characters";
		}
		elseif (is_numeric($_POST["name"]))
		{
			$hasError = true;
			$err_name = "Name can't be numeric!!";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["userName"])){
			$hasError=true;
			$err_userName="UserName Required";
		}
		elseif (strlen($_POST["userName"]) <6){
			$hasError = true;
			$err_userName = "UserName must be greater than 6 characters";
		}
		elseif (strpos($_POST["userName"]," ")){
			$hasError = true;
			$err_userName = "UserName can't take space!!!";
		}
		else
		{
			$userName = $_POST["userName"];
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "Email Required!!!";
		}
		else{
			$email = $_POST["email"];
		}
		
		if(empty($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required!!!";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(empty($_POST["PhoneNumber"])){
			$hasError = true;
			$err_PhoneNumber = "PhoneNumber Required!!!";
		}
		elseif(is_numeric($_POST["PhoneNumber"])){
			$PhoneNumber = $_POST["PhoneNumber"];
		}
		else{
			$hasError = true;
			$err_PhoneNumber = "Please enter a numeric value!!!";
		}
		if(empty($_POST["NID"])){
			$hasError = true;
			$err_NID = "NID No Required!!!";
		}
		elseif(is_numeric($_POST["NID"])){
			$NID = $_POST["NID"];
		}
		else{
			$hasError = true;
			$err_NID = "Please enter a numeric value!!!";
		}
		if(empty($_POST["Address"])){
			$hasError = true;
			$err_Address= "Address Required!!";
		}
		else{
			$Address = $_POST["Address"];
		}
		if(empty($_POST["age"])){
			$hasError = true;
			$err_age = "Age Required!!";
		}
		else{
			$age = $_POST["age"];
		}		
		
		
		
		if(!$hasError){
			$rs= updateCustomerByOwn($name,$userName,$email,$PhoneNumber,$NID,$Address,$gender,$age,$_POST["id"]);
			if($rs === true)
			{
				header("Location: ShowOwnDetailsCustomer.php");
			}
			//$err_db= "Email or Password Invalid";
			$err_db= $rs;
		}
		
	}
	else if(isset($_POST["Delete_ByCustomer"]))
	{
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "Email Required!!!";
		}
		else{
			$email = $_POST["email"];
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
		else
		{
			$password = $_POST["password"];
		}
		if(!$hasError)
		{
				$rs = deleteCustomer($email);
				if($rs === true)
				{	
					header("Location: HomePageF.php");
				}
				else
				{
					$err_db = $rs;
				}
			
		}
	
	}
	
	
	function insertCustomer($name,$userName,$password,$email,$PhoneNumber,$NID,$Address,$gender,$age,$image)
	{
		$query= "insert into customers values(Null,'$name','$userName','$password','$email','$PhoneNumber','$NID','$Address','$gender','$age','$image')";
		return execute($query);
	}
	function updateCustomerByOwn($name,$userName,$email,$PhoneNumber,$NID,$Address,$gender,$age,$id)
	{
		$query = "update customers set name ='$name',userName = '$userName',email = '$email',phoneNumber ='$PhoneNumber',nidNo='$NID',address='$Address',gender='$gender',age='$age' where customerId = '$id'";
		return execute($query);
	}
	
	function updateCustomer($name,$userName,$email,$PhoneNumber,$NID,$Address,$gender,$age,$id)
	{
		$query = "update customers set name ='$name',userName = '$userName',email = '$email',phoneNumber ='$PhoneNumber',nidNo='$NID',address='$Address',gender='$gender',age='$age' where customerId = '$id'";
		return execute($query);
	}
	
	function deleteCustomer($email)
	{
	
		$query = "delete from customers where email='$email'";
		return execute($query);
	}
	
	function getAllCustomer()
	{
		$query = "select * from customers";
		$rs = get($query);
		return $rs;
	}

	function getcustomer($id)
	{
		$query = "select * from customers where customerId='$id'";
		$rs = get($query);
		return $rs[0];
	}
	function checkUserName($userName)
	{
		$query= "select userName from customers where userName= '$userName'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function searchCustomer($key)
	{
		$query="select * from customers where name like '%$key%' or phoneNumber like '%$key%'";
		$rs= get($query);
		return $rs;
	}
	function getcustomerId($userName)
	{
		$query = "select customerId from customers where userName='$userName'";
		$rs = get($query);
		return $rs[0];
	}
	function getcustomerByUserName($userName)
	{
		$query = "select * from customers where userName='$userName'";
		$rs = get($query);
		return $rs;
	}
	/*function getcustomerEmail($userName)
	{
		$query = "select email from customers where userName='$userName'";
		$rs = get($query);
		return $rs;
	}*/

?>