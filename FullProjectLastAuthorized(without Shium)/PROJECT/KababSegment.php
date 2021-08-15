<?php
require_once "Models/db_config.php";
error_reporting (E_ALL ^ E_NOTICE);
$hear = [];
$err_hear = "";
$plates = [];
$RoomNo = "";
$Cid = "";
$phone = "";
$err_phone = "";
$err_Cid = "";
$err_RoomNo = "";

$hasError = false;
   function exist($h)
{
	global $hear;
	foreach ($hear as $hr)
	{
		if($h == $hr)
			return true;
	}
	return false;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if(empty($_POST["RoomNo"]))
	{
		$hasError = true;
		$err_RoomNo = "Room No required";
	}
	else
	{
		$RoomNo = $_POST["RoomNo"];
	}
	
	if(empty($_POST["Cid"]))
	{
		$hasError = true;
		$err_Cid = "Customer ID required";
	}
	else if(strlen($_POST["Cid"])< 4)
	{
		$hasError = true;
		$err_Cid = "Cid must be at least 4 characters";
	}
	else if(strpos($_POST["Cid"], ' ') !== false)
	{
		$hasError = true;
		$err_Cid = "Cid doesn't allow spaces";
	}
	else
	{
		$Cid = $_POST["Cid"];
	}
	
	
	if(empty($_POST["phone"]))
	{
		$hasError = true;
		$err_phone = "Phone required";
	}
	else if(is_numeric($_POST["phone"]) != true)
	{
		$hasError = true;
		$err_phone = "Invalid Phone number";
		
	}
	else
	{
		$phone = $_POST["phone"];
	}
	if(!isset($_POST["hear"]))
	{
		$hasError = true;
		$err_hear = "<b>This part is required to book</b>";
	}
	else
	{
		$hear = $_POST["hear"];
	}
	
	if(!isset($_POST["plates"]))
	{
		$hasError = true;
		$err_plates = "<b>This part is required to book</b>";
	}
	else
	{
		$plates = $_POST["plates"];
	}
	
	if(!$hasError)
	{
		echo "<h2 style='color:SlateBlue;'>The foods you have ordered: </h2>";
		
		$arr = $_POST["hear"];
		$arr2 = $_POST["plates"];
		
    //for($j=1;$j<35;$j++);
	echo "<table border='2'>";
	echo "<tr>";
    foreach($arr as $e)
    {
		
	echo "<td><b>$e</b></td>";
	}
	echo "</tr>";
	echo "<tr>";
	foreach($arr2 as $j)
    {
	echo "<td> No of plates: <b>$j</b> </td>";
    
	}
	echo "</tr>";
	
	echo "</table>";
	
	echo "<br>Room No: ".$_POST["RoomNo"]."<br>";
	echo "Phone No: ".$_POST["phone"]."<br>";
	echo "Customer ID: ".$_POST["Cid"]."<br>";
	
	$rs = inseertProduct($_POST["RoomNo"],$_POST["phone"],$_POST["Cid"],$e,$j);
	if($rs === true)
	{
		//header("Location: Category.php");
	}
	$err_db = $rs;
	
	}
}
function inseertProduct($RoomNo,$phone,$Cid,$e,$j)
{
	$query = "insert into kabab values ($RoomNo,$phone,$Cid,'$e',$j)";
	return execute($query);
}

?>




<html>
    <body>
	
	<h1 align = "center" style= "color:rgb(128, 0, 0)"> Order Food </h1>
	<form action="" method="post">
	<table border="5" align="center" style= "border-color: rgb(115, 38, 38);">
	
	<tr><td colspan="12" align="center"> <h3><br>Kabab Segment </h3></td></tr>
	
	
	<tr><td>1</td><td><input type="checkbox" value= "Special Chicken Kabab" <?php if (exist("Special Chicken Kabab")) echo "checked"; ?> name="hear[]">Special Chicken Kabab</td><td> 440tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>1</td><td><input type="checkbox" value= "Plain Nun" <?php if (exist("Plain Nun")) echo "checked"; ?> name="hear[]">Plain Nun</td><td> 30tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>2</td><td><input type="checkbox" value= "BBQ Chicken" <?php if (exist("BBQ Chicken")) echo "checked"; ?> name="hear[]">BBQ Chicken</td><td> 400tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>2</td><td><input type="checkbox" value= "Garlic Nun" <?php if (exist("Garlic Nun")) echo "checked"; ?> name="hear[]">Garlic Nun</td><td> 40tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>3</td><td><input type="checkbox" value= "Spicy Beef Curry" <?php if (exist("Spicy Beef Curry")) echo "checked"; ?> name="hear[]">Spicy Beef Curry</td><td> 270tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>3</td><td><input type="checkbox" value= "Butter Nun" <?php if (exist("Butter Nun")) echo "checked"; ?> name="hear[]">Butter Nun</td><td> 40tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>4</td><td><input type="checkbox" value= "Shikh Kabab" <?php if (exist("Shikh Kabab")) echo "checked"; ?> name="hear[]">Shikh Kabab</td><td> 400tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>4</td><td><input type="checkbox" value= "Special Nun" <?php if (exist("Special Nun")) echo "checked"; ?> name="hear[]">Special Nun</td><td> 50tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>5</td><td><input type="checkbox" value= "Reshmi Kabab" <?php if (exist("Reshmi Kabab")) echo "checked"; ?> name="hear[]">Reshmi Kabab</td><td> 200tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>5</td><td><input type="checkbox" value= "Tandoori Chicken" <?php if (exist("Tandoori Chicken")) echo "checked"; ?> name="hear[]">Tandoori Chicken</td><td> 200tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>6</td><td><input type="checkbox" value= "Boti Kabab" <?php if (exist("Boti Kabab")) echo "checked"; ?> name="hear[]">Boti Kabab</td><td> 280tk</td><td><select name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	
	
	
	<table align = "center">
	<tr><td></td>
	<tr><td align = "right"><b>Room No:</b></td>
	<td><input name = "RoomNo" value = "<?php echo $RoomNo;?>" type="txt" >
    <span><?php echo $err_RoomNo; ?></span></td> </tr></td></tr>	</td></tr>
	<tr><td></td>
	<tr><td align = "right"><b>Phone No:</b></td><td><input name = "phone" value = "<?php echo $phone;?>"  type="txt" >
	<span><?php echo $err_phone; ?></span></td> </tr>
	
	<tr><td></td>
	<tr><td align = "right"><b>Customer ID:</b></td><td><input name = "Cid" value = "<?php echo $Cid;?>" type="txt" > 
	<span><?php echo $err_Cid; ?></span></td> </tr></td></tr>
	
	<td></td><td align = "center"><input  type="submit" value="Order" >
	
	<!--<tr><td></td><td align = "center"><input  type="submit" value="Order" ></td></tr>-->
	</table>
	</table>
	</form>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img width="550px" height="300px" src="Pictures/Kabab.jpg">
	</body>
</html>