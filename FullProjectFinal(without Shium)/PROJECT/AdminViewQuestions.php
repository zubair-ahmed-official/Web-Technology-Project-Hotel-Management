<?php
session_start();
require_once 'Controller/QuestionAnswerController.php';
$questions= getAll();

$_SESSION["questions"]="Question";	
?>



<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h3 align="center" style="color:Green"><u> All <?php echo $_SESSION["questions"];?></u></h3><br>
		<table align="center" class="table table-striped" style="width:60%">
			<thead>
				<th>Issue No</th>
				<th>Questions</th>
				<th>Answers</th>
				<th>Username</th>
			</thead>
			<tbody>
				<?php
					foreach($questions as $q){
						$id= $q["issueNo"];
						echo "<tr>";
							echo "<td>".$q["issueNo"]."</td>";
							echo "<td>".$q["question"]."</td>";
							echo "<td>".$q["answer"]."</td>";
							echo "<td>".$q["userName"]."</td>";
							echo '<td><a href= "AnswerQuestion.php?id='.$id.'" class="btn btn-success">Reply</a></td>';
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</body>

</html>