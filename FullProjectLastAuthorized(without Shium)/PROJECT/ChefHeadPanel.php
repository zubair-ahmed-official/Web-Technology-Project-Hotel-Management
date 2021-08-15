<?php
	if(!isset($_COOKIE["loggeduser3"])){
		header("Location: Login.php");
	}
?>
<html>
<head>
</head>
<body>
	<h1 style="color:green" align="center">Welcome <?php echo $_COOKIE["loggeduser3"]; ?> </h1>
	<table style="border-color:blue; width:40%; height:50%;" align="center" border="4">
		
		<tr>
			<td colspan="3" align="center"><h1>Head Chef Panel</h1></td>
		</tr>
		
		<tr>
			<td align="center"> Ordered Foods</td>
			<td align="center"><a href ="OrderedFoods.php"><input type="button" value="Show"> </a></td>
		</tr>
		
	</table>		
</body>			
</html>