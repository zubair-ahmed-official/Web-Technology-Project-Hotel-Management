<?php
		require_once "Models/db_config.php";
		$Name="";
		$err_Name="";
		$Email="";
		$err_Email="";
		$Phone=" ";
		$err_Phone="";
		$NID="";
		$err_NID="";
		$Address="";
		$err_Address="";
		$Gender="";
		$err_Gender="";
		$Age="";
		$err_Age="";
		$EB="";
		$err_EB="";
		$ET="";
		$err_ET="";
		
		$hasError=false;
		$err_db="";
		
		$EmpT=array("Manager","Receptionist","Hotel Maintenance Engineer","Event planner","Housekeeper","Porter","Chef","Waiter/Waitress","Cleaner");
		
		if(isset($_POST["Add_Employee"])){
			
				if(empty($_POST["Name"]))
				{
					$hasError=true;
					$err_Name="Name Required";
				}
				/*elseif(strlen($_POST["Name"])<=6)
				{
					$hasError=true;
					$err_Name="Name must be greater than 6 characters";
				}*/
				else
				{
					$Name=$_POST["Name"];
				}
				
				
				
				if(empty($_POST["Email"]))
				{
					$hasError=true;
					$err_Email="Email Required";
				}
				else
				{
					$Email=$_POST["Email"];
				}
				
				
				
				if(empty($_POST["Phone"]))
				{
					$hasError=true;
					$err_Phone="Phone Required";
				}
				else
				{
					$Phone=$_POST["Phone"];
				}
				
				
				
				if(empty($_POST["NID"]))
				{
					$hasError=true;
					$err_NID="NID Required";
				}
				else
				{
					$NID=$_POST["NID"];
				}
				
				
				
				if(empty($_POST["Address"]))
				{
					$hasError=true;
					$err_Address="Address Required";
				}
				else
				{
					$Address=$_POST["Address"];
				}
				
				
				
				if(!isset($_POST["Gender"]))
				{
					$hasError=true;
					$err_Gender="Gender Required";
				}
				else
				{
					$Gender=$_POST["Gender"];
				}
				
				
				
				if(!isset($_POST["Age"]))
				{
					$hasError=true;
					$err_Age="Age Required";
				}
				else
				{
					$Age=$_POST["Age"];
				}
				
				
				
				if(empty($_POST["EB"]))
				{
					$hasError=true;
					$err_EB="Educational Background Required";
				}
				else
				{
					$EB=$_POST["EB"];
				}
				
				
				
				if(!isset($_POST["ET"]))
				{
					$hasError=true;
					$err_ET="Employee Type Required";
				}
				else
				{
					$ET=$_POST["ET"];
				}
				
		if(!$hasError)
				{			
				
		$rs = insertEmployee($_POST["Name"],$Email,$Phone,$NID,$Address,$Gender,$Age,$EB,$ET);
		
		if ($rs === true){
			
			header("Location: AllEmployees.php");
		}
		$err_db = $rs;	
		}
		}
		
		else if(isset($_POST["EditEmployee"])){
			
				if(empty($_POST["Name"]))
				{
					$hasError=true;
					$err_Name="Name Required";
				}
				elseif(strlen($_POST["Name"])<=6)
				{
					$hasError=true;
					$err_Name="Name must be greater than 6 characters";
				}
				else
				{
					$Name=$_POST["Name"];
				}
				
				
				
				if(empty($_POST["Email"]))
				{
					$hasError=true;
					$err_Email="Email Required";
				}
				elseif(strpos($_POST["Email"],"@")== false && strpos($_POST["Email"],".")== false)
				{
					$hasError = true;
					$err_Email = " Email Invalid Id";
				}
				else
				{
					$Email=$_POST["Email"];
				}
				
				
				
				if(empty($_POST["Phone"]))
				{
					$hasError=true;
					$err_Phone="Phone Required";
				}
				else
				{
					$Phone=$_POST["Phone"];
				}
				
				
				
				if(empty($_POST["NID"]))
				{
					$hasError=true;
					$err_NID="NID Required";
				}
				else
				{
					$NID=$_POST["NID"];
				}
				
				
				
				if(empty($_POST["Address"]))
				{
					$hasError=true;
					$err_Address="Address Required";
				}
				else
				{
					$Address=$_POST["Address"];
				}
				
				
				
				if(!isset($_POST["Gender"]))
				{
					$hasError=true;
					$err_Gender="Gender Required";
				}
				else
				{
					$Gender=$_POST["Gender"];
				}
				
				
				
				if(!isset($_POST["Age"]))
				{
					$hasError=true;
					$err_Age="Age Required";
				}
				else
				{
					$Age=$_POST["Age"];
				}
				
				
				
				if(empty($_POST["EB"]))
				{
					$hasError=true;
					$err_EB="Educational Background Required";
				}
				else
				{
					$EB=$_POST["EB"];
				}
				
				
				
				if(!isset($_POST["ET"]))
				{
					$hasError=true;
					$err_ET="Employee Type Required";
				}
				else
				{
					$ET=$_POST["ET"];
				}
				
		if(!$hasError)
				{			
				
		$rs = updateEmployee($_POST["Name"],$Email,$Phone,$NID,$Address,$Gender,$Age,$EB,$ET,$_POST["id"]);
		
		if ($rs === true){
			header("Location: AllEmployees.php");
		}
		$err_db = $rs;	
		}
		}
		
		elseif(isset($_POST["DeleteEmployee"]))
		{
			if(!$hasError)
			{
			$rs = deleteEmployee($_POST["id"]);
			
			if($rs === true)
			{	
			
				header("Location: AllEmployees.php");
			}
			else{
			$err_db = $rs;
			}
			}
	
		}
		
		
	function insertEmployee($Name,$Email,$Phone,$NID,$Address,$Gender,$Age,$EB,$ET){
	$query="insert into employees values (NULL,'$Name','$Email','$Phone','$NID','$Address','$Gender','$Age','$EB','$ET')";
	echo $query;
	return execute($query);
	}
	function deleteEmployee($id)
	{
	
	$query = "delete from employees where id=$id";
	//echo "$query";
	return execute($query);
	}
	function getAllEmployees(){
		$query = "select * from employees";
		$rs = get($query);
		return $rs;
	}
	function getEmployees($id){
		$query = "select * from employees where id = $id";
		$rs = get($query);
		return $rs[0];	
	}
	
	function updateEmployee($Name,$Email,$Phone,$NID,$Address,$Gender,$Age,$EB,$ET,$id)
	{
		$query = "update employees set Name='$Name',Email='$Email',Phone='$Phone', NID='$NID', Address='$Address', Gender='$Gender', Age='$Age', E_b='$EB', E_type='$ET'  where id = $id";
		return execute($query);
	}
	function checkName($Name){
		$query = "select Name from employees where Name='$Name'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
	function searchEmployee($key){
		$query = "select * from employees where Name like '%$key%'";
		$rs = get($query);
		return $rs;
	}
?>