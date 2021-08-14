<?php
		require_once 'models/db_config.php';
		$Notice="";
		$err_Notice="";
		
		$hasError=false;
		$err_db="";
		
		if(isset($_POST["Add_Notice"]))
		{
		if(empty($_POST["Notice"]))
				{
					$hasError=true;
					$err_Notice="Notice Required";
				}
				else
				{
					$Notice=$_POST["Notice"];
				}
		if(!$hasError)
				{		
		$rs = insertNotice($Notice);
		
		if ($rs === true){
			header("Location: AllNotices.php");
		}
		$err_db = $rs;	
		}
		}
		function insertNotice($Notice){
	$query="insert into notices values (NULL,'$Notice')";
	return execute($query);
	}
	
	function getAllNotices(){
		$query = "select * from notices";
		$rs = get($query);
		return $rs;
	}
	function getNotices($id){
		$query = "select * from notices where id = $id";
		$rs = get($query);
		return $rs[0];	
	}
?>
