<?php
		require_once "Models/db_config.php";
		$Name="";
		$err_Name="";
		$Email="";
		$err_Email="";
		$Subject="";
		$err_Subject="";
		$Message="";
		$err_Message="";
		$Rating="";
		$err_Rating="";
		
		$hasError=false;
		$err_db="";
		
		if(isset($_POST["Add_Review"]))
		{
			if(empty($_POST["Name"]))
				{
					$hasError=true;
					$err_Name="Name Required";
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
				
				
			if(empty($_POST["Subject"]))
				{
					$hasError=true;
					$err_Subject="Subject Required";
				}
				else
				{
					$Subject=$_POST["Subject"];
				}
				
				
			if(empty($_POST["Message"]))
				{
					$hasError=true;
					$err_Message="Message Required";
				}
				else
				{
					$Message=$_POST["Message"];
				}
				
			if(empty($_POST["Rating"]))
				{
					$hasError=true;
					$err_Rating="Rating Required";
				}
				else
				{
					$Rating=$_POST["Rating"];
				}
				if(!$hasError)
				{
			$rs = insertReview($_POST["Name"],$Email,$Subject,$Message,$Rating);
		
		if ($rs === true){
			header("Location: AllReviews.php");
		}
		$err_db = $rs;	
		}
		}
		
		function insertReview($Name,$Email,$Subject,$Message,$Rating){
	$query="insert into reviews values (NULL,'$Name','$Email','$Subject','$Message','$Rating')";
	return execute($query);
	}
	
	function getAllReviews(){
		$query = "select * from reviews";
		$rs = get($query);
		return $rs;
	}
	function getReviews($id){
		$query = "select * from reviews where id = $id";
		$rs = get($query);
		return $rs[0];	
	}
?>
