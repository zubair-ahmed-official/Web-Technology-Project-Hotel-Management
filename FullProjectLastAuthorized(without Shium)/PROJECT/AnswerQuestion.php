<?php
session_start();
require_once 'Controller/QuestionAnswerController.php';
$id= $_GET["id"];
//$answer = getAdminView($id);	

?>



<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h3 align="center" style="color:Green"><u> Answer <?php echo $_SESSION["questions"];?></u></h3><br>
		<form action="" method="post">
		<div align="center">
			<input type="text" name="id" value="<?php echo $id;?>">
			<br><br>
			<textarea style="width:80%; height:30%" class="form-control" name="answer" placeholder="Write Here..."></textarea>
			<br><span><?php echo $err_answer;?></span>
			<br>
			<br>
		</div>
		<div align="center">
			<button class="btn btn-success" name="answer_question">Reply</button>
		</div>
		</form>
	</body>

</html>