
<?php
require_once 'Controller/QuestionAnswerController.php';

if(!isset($_COOKIE["loggeduser0"])){
header("Location: Login.php");
}
?>



<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h3 align="center" style="color:Green"><u> Ask Question</u></h3><br>
		<form action="" method="post">
		
		<div align="center">
			<input type="text" name="userName" value="<?php echo $_COOKIE["loggeduser0"];?>"><br><br>
			<textarea style="width:80%; height:30%" class="form-control" name="question" placeholder="Write Here..."></textarea>
			<br><span><?php echo $err_question;?></span>
			<br>
			<br>
		</div>
		<div align="center">
			<button class="btn btn-success" name="ask_question">Sent</button>
		</div>
		</form>
	</body>
</html>