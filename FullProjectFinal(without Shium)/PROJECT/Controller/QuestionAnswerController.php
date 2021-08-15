<?php
require_once 'Models/db_config.php';

$question="";
$err_question="";
$answer="";
$err_answer="";
$userName="";
$err_userName="";
$id="";
$err_id="";
$err_db="";
	
$hasError=false;
	
	
	if(isset($_POST["answer_question"]))
	{
		
		if(empty($_POST["answer"])){
			$hasError=true;
			$err_answer="Answer Required!!!";
		}
		else{
			$answer = $_POST["answer"];
		}
		
		
		if(!$hasError){
			$rs= answerQuestion($answer,$_POST["id"]);
			if($rs === true)
			{
				header("Location: AdminViewQuestions.php");
			}
			//$err_db= "Email or Password Invalid";
			$err_db= $rs;
		}
		
	}
	else if(isset($_POST["ask_question"]))
	{
		
		if(empty($_POST["question"])){
			$hasError=true;
			$err_question="Question Required!!!";
		}
		else{
			$question = $_POST["question"];
		}
		
		
		if(!$hasError){
			$rs= askQuestion($question,$_POST["userName"]);
			if($rs === true)
			{
				header("Location: CustomerPanel.php");
			}
			//$err_db= "Email or Password Invalid";
			$err_db= $rs;
		}
		
	}

	function askQuestion($question,$userName)
	{
		$query= "insert into questionanswer values(Null,'$question','','$userName')";
		return execute($query);
	}
	function answerQuestion($answer,$id)
	{
		$query= "update questionanswer set answer ='$answer' where issueNo = '$id'";
		return execute($query);
	}
	function getAdminView($id)
	{
		$query = "select * from questionanswer where issueNo = '$id'";
		$rs = get($query);
		return $rs;
	}
	function getCustomerView($userName)
	{
		$query = "select * from questionanswer where userName='$userName'";
		$rs = get($query);
		return $rs;
	}
	function getAll()
	{
		$query = "select * from questionanswer";
		$rs = get($query);
		return $rs;
	}

?>