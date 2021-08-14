<?php
require_once 'HomeHeader.php';
?>


<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="CSS/Style.css">
	</head>
	<body>
		<div id="slider">
			<figure>
				<img src="images/hotelNew2.jpg" width="1365px" height="540px" >
				<img src="images/hotelNew5.jpg" width="1365px" height="540px" >
				<img src="images/hotelImage2.jpg" width="1365px" height="540px">
				<img src="images/hotelNew6.jpg" width="1365px" height="540px">
				<img src="images/hotelNew1.jpg" width="1365px" height="540px">
			<figure>	
		</div>
		<br>
		<br>
		<!--<div>
		<table align="center" style="background-color:rgb(220, 220, 220); width:100%; height:10%;">
		<tr>
			<td>Check In</td>
			<td>Check Out</td>
			<td>Adult</td>
			<td>Children</td>
			<td rowspan="2"><a href="AvailableRooms.php" ><input type="submit" value="Check Availability" style="width:100%; height:100%;" class="btn btn-success"></a></td>
		</tr>
		<tr>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td>
				<select>
					<option selected disabled>--Select--</option>
							<?php
								for($i=1; $i<=15; $i++){
									echo "<option>$i</option>";
								}
							?>
				</select>
			</td>
			<td>
				<select>
					<option selected disabled>--Select--</option>
							<?php
								for($i=1; $i<=15; $i++){
									echo "<option>$i</option>";
								}
							?>
				</select>
			</td>
		</tr>
	</table>
	</div>
	
	<div>-->
	<table>
		<tr>
			<td colspan="5" align="center">
				<h3 style="color:Orange"><u><i>Others</i></u></h3>
			</td>
		</tr>
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr>
			<td align="center">
				<img width="600px" height="500px" src="images/4 beds.jpg">
			</td>
			<td colspan="2">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td colspan="2" align="center">
				<h3><i>Luxurious Hotel</i></h3>
				<hr><br>
				<p> we are dedicated in making sure that your visit to Dhaka is memorable, comfortable and delightful.</p>
			</td>
		</tr>
	</table>
	</div>	
	</body>
	<?php require_once 'CommonFooter.php';?>
</html>