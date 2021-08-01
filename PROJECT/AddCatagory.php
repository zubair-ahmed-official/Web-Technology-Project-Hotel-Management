<?php
	$catagoryName="";
	$err_catagoryName="";
	$price="";
	$err_price="";
	//$catagoryNumber="";
	//$err_catagoryNumber="";
	$roomNumber="";
	$err_roomNumber="";
	$roomDetails="";
	$err_roomDetails="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	
	$hasError=false;
	
	$months= array("January","February","March","April","May","June","July","August","September","October","November","December");
	$years= array("1985","1986","1987","1988","1989","1990","1991","1992","1993","1994","1995","1996","1997","1998","2000","2001","2002","2003",
	              "2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020","2021");
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["catagoryName"])){
			$hasError=true;
			$err_catagoryName="Catagory Name Required!!";
		}
		elseif (strlen($_POST["catagoryName"]) <=2){
			$hasError = true;
			$err_catagoryName = "Name must be greater than 2 characters";
		}
		elseif (is_numeric($_POST["catagoryName"]))
		{
			$hasError = true;
			$err_catagoryName = "Name can't be numeric!!";
		}
		else{
			$catagoryName = $_POST["catagoryName"];
		}
		/*
		if(empty($_POST["catagoryNumber"])){
			$hasError = true;
			$err_catagoryNumber = "Catagory Number Required!!!";
		}
		elseif(is_numeric($_POST["catagoryNumber"])){
			$catagoryNumber = $_POST["catagoryNumber"];
		}
		else{
			$hasError = true;
			$err_catagoryNumber = "Please enter a numeric value!!!";
		}*/
		
		if(empty($_POST["roomNumber"])){
			$hasError = true;
			$err_roomNumber = "Room Number Required!!!";
		}
		else{
			$roomNumber = $_POST["roomNumber"];
		}
		
		if(empty($_POST["price"])){
			$hasError = true;
			$err_price = "Price Required!!!";
		}
		elseif(is_numeric($_POST["price"])){
			$price = $_POST["price"];
		}
		else{
			$hasError = true;
			$err_price = "Please enter a numeric value!!!";
		}
		
		if(empty($_POST["roomDetails"])){
			$hasError = true;
			$err_roomDetails = "Details Required!!!";
		}
		else{
			$roomDetails = $_POST["roomDetails"];
		}
		
		if(empty($_POST["day"])){
			$hasError = true;
			$err_day= "Please choose a date!!";
		}
		else{
			$day = $_POST["day"];
		}
		if(empty($_POST["month"])){
			$hasError = true;
			$err_month= "Please choose a month!!";
		}
		else{
			$month = $_POST["month"];
		}
		if(empty($_POST["year"])){
			$hasError = true;
			$err_year= "Please choose year!!";
		}
		else{
			$year = $_POST["year"];
		}
		
		if(!$hasError){
			echo $_POST["catagoryName"]."<br>";
			echo $_POST["price"]."<br>";
			echo $_POST["roomNumber"]."<br>";
			echo $_POST["roomDetails"]."<br>";
			echo $_POST["day"]."<br>";
			echo $_POST["month"]."<br>";
			echo $_POST["year"]."<br>";
		}
		
	}
	
?>



<html>
<head>
	<style>
		
	</style>
</head>
<body>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1><b>Add Catagory</b></h1></td>
			</tr>
			<tr>
				<td align="right">Catagory Name*</td>
				<td><input name="catagoryName" value="<?php echo $catagoryName;?>" type="text"><br>
					<span><?php echo $err_catagoryName;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Room Number*</td>
				<td><input name="roomNumber" type="text" value="<?php echo $roomNumber;?>"><br>
					<span><?php echo $err_roomNumber;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Room Details*</td>
				<td><textarea name="roomDetails"><?php echo $roomDetails;?></textarea>
						<br><span><?php echo $err_roomDetails;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Price*</td>
				<td><input name="price" type="text" value="<?php echo $price;?>"><br>
					<span><?php echo $err_price;?></span>
				</td>
			</tr>
				<tr>
					<td align="right">Date*</td>
					<td colspan="2"><select name="day" value="<?php echo $day;?>">
							<option selected disabled>Day</option>
							<?php
								for($i=1; $i<=31; $i++){
									echo "<option>$i</option>";
								}
							?>
						</select><span><?php echo $err_day;?></span>
						<select name="month" value="<?php echo $month;?>">
							<option selected disabled>Month</option>
							<?php
								foreach($months as $m){
									if($m == $month)
										echo "<option selected>$m</option>";
									else
										echo "<option>$m</option>";
								}
							?>
						</select><span><?php echo $err_month;?></span>
						<select name="year" value="<?php echo $year;?>">
							<option selected disabled>Year</option>
							<?php
								foreach($years as $y){
									if($y == $year)
										echo "<option selected>$y</option>";
									else
										echo "<option>$y</option>";
								}
							?>
						</select><span><?php echo $err_year;?></span>
					</td>
				</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>