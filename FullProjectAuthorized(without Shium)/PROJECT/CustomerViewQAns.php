
<?php
require_once 'Controller/QuestionAnswerController.php';

if(!isset($_COOKIE["loggeduser0"])){
header("Location: Login.php");
}
$questions= getCustomerView($_COOKIE["loggeduser0"]);	
?>



<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h3 align="center" style="color:Green"><u> Your Answers</u></h3><br>
		<table align="center" class="table table-striped" style="width:60%">
			<thead>
				<th>Issue No</th>
				<th>Questions</th>
				<th>Answers</th>
			</thead>
			<tbody>
				<?php
					foreach($questions as $q){
						echo "<tr>";
							echo "<td>".$q["issueNo"]."</td>";
							echo "<td>".$q["question"]."</td>";
							echo "<td>".$q["answer"]."</td>";
						echo "</tr>";
					}
					
				?>
				
			</tbody>
		</table>
		<div align="center">
			<tr>
				<td><a href= "AskQuestion.php" class="btn btn-success">Ask Anything</a></td>
			</tr>
		</div>
	</body>

</html>