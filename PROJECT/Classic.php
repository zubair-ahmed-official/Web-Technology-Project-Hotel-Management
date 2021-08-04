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
		$err_hear = "<b>Choose food item to order</b>";
	}
	else
	{
		$hear = $_POST["hear"];
	}
	
	if(!isset($_POST["plates"]))
	{
		$hasError = true;
		$err_plates = "<b>Choose the number of plates to order</b>";
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
	
	$query = "insert into classic values ($RoomNo,$phone,$Cid,'$e',$j)";
	echo $query;
	return execute($query);
}
?>

<html>
    <body>
	<h1 align = "center" style= "color: rgb(128, 0, 0)"> Order Food </h1>
	<form action="" onsubmit="return validate()" method="post">
	<table border="5" align="center" style= "border-color: rgb(115, 38, 38);">
	
	<tr><td colspan="12" align="center"> <h2><br>Classic Menu</h2></td></tr>
	<tr><td colspan="4" align="center"> <b>Chinese Items </b></td>
	<td colspan="4" align="center"><b>Vegetable Items</b></td>
	<td colspan="4" align="center"><b>Rice Items</b></td>
	</tr>
	
	<tr><td>1</td><td><input type="checkbox" id="Chinese noodles" value= "Chinese noodles" <?php if (exist("Chinese noodles")) echo "checked"; ?> name="hear[]">Chinese noodles</td> <td> 200tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td> <td>1</td><td><input type="checkbox" id="Vegetable noodles" value= "Vegetable noodles" <?php if (exist("Vegetable noodles")) echo "checked"; ?> name="hear[]">Vegetable noodles</td><td> 200tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select></td><td>1</td><td><input type="checkbox" id="Special Fried Rice" value= "Special Fried Rice" <?php if (exist("Special Fried Rice")) echo "checked"; ?> name="hear[]">Special Fried Rice</td><td> 400tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select></td></tr>
	<tr><td>2</td><td><input type="checkbox" id="Hot and Sour Soup" value= "Hot and Sour Soup" <?php if (exist("Hot and Sour Soup")) echo "checked"; ?> name="hear[]">Hot and Sour Soup</td></td><td> 250tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>2</td><td><input type="checkbox" id="Special Vegetable Soup" value= "Special Vegetable Soup" <?php if (exist("Special Vegetable Soup")) echo "checked"; ?> name="hear[]">Special Vegetable Soup</td><td> 250tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>2</td><td><input type="checkbox"id="Vegetable BBQ Fried Rice" value= "Vegetable BBQ Fried Rice" <?php if (exist("Vegetable BBQ Fried Rice")) echo "checked"; ?> name="hear[]">Vegetable BBQ Fried Rice</td><td> 450tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>3</td><td><input type="checkbox" id="Vegetable Soup" value= "Vegetable Soup" <?php if (exist("Vegetable Soup")) echo "checked"; ?> name="hear[]">Vegetable Soup</td><td> 300tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td> <td>3</td><td><input type="checkbox" id="Vegetable Mexican Curry" value= "Vegetable Mexican Curry" <?php if (exist("Vegetable Mexican Curry")) echo "checked"; ?> name="hear[]">Vegetable Mexican Curry</td></td><td> 200tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>3</td><td><input type="checkbox" id= "Plain Rice" value= "Plain Rice" <?php if (exist("Plain Rice")) echo "checked"; ?> name="hear[]">Plain Rice</td><td> 200tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>4</td><td><input type="checkbox" id="Chinese special Cheicken Curry" value= "Chinese special Cheicken Curry" <?php if (exist("Chinese special Cheicken Curry")) echo "checked"; ?> name="hear[]">Chinese special Cheicken Curry</td></td><td> 250tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td> <td>4</td><td><input type="checkbox" id="Vegetable Chilli curry" value= "Vegetable Chilli curry" <?php if (exist("Vegetable Chilli curry")) echo "checked"; ?> name="hear[]">Vegetable Chilli curry</td></td><td> 250tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>4</td><td><input type="checkbox" id= "Chicken Biriyani" value= "Chicken Biriyani" <?php if (exist("Chicken Biriyani")) echo "checked"; ?> name="hear[]">Chicken Biriyani</td><td> 350tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>5</td><td><input type="checkbox" id="Spring Rolls" value= "Spring Rolls" <?php if (exist("Spring Rolls")) echo "checked"; ?> name="hear[]">Spring Rolls</td><td> 150tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td> <td>5</td><td><input type="checkbox" id="Spring Vegetable Rolls" value= "Spring Vegetable Rolls" <?php if (exist("Spring Vegetable Rolls")) echo "checked"; ?> name="hear[]">Spring Vegetable Rolls</td><td> 200tk</td> <td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>5</td><td><input type="checkbox" id= "Tehari"value= "Tehari" <?php if (exist("Tehari")) echo "checked"; ?> name="hear[]">Tehari</td><td> 400tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>6</td><td><input type="checkbox" id="Chicken Curry" value= "Chicken Curry" <?php if (exist("Chicken Curry")) echo "checked"; ?> name="hear[]">Chicken Curry</td><td> 200tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td> <td>6</td><td><input type="checkbox" id="Chinese noodles" value= "Chinese noodles" <?php if (exist("Vegetable Chicken Curry")) echo "checked"; ?> name="hear[]">Vegetable Chicken Curry</td><td> 200tk</td> <td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>6</td><td><input type="checkbox" id= "Mutton Kacchi" value= "Mutton Kacchi" <?php if (exist("Mutton Kacchi")) echo "checked"; ?> name="hear[]">Mutton Kacchi</td><td> 400tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>7</td><td><input type="checkbox" id="Special Chinese noodles" value= "Special Chinese noodles" <?php if (exist("Special Chinese noodles")) echo "checked"; ?> name="hear[]">Special Chinese noodles</td></td><td> 150tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td> <td>7</td><td><input type="checkbox" id="Chinese noodles" value= "Chinese noodles" <?php if (exist("Chinese noodles")) echo "checked"; ?> name="hear[]">Chinese noodles</td><td> 250tk</td> <td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>7</td><td><input type="checkbox" id= "Special Vegetable Salad" value= "Special Vegetable Salad" <?php if (exist("Special Vegetable Salad")) echo "checked"; ?> name="hear[]">Special Vegetable Salad</td><td> 200tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	
	
	<tr><td colspan="4" align="center"><b>Curry</b></td>
	<td colspan="4" align="center"><b>Dessert</b></td></tr>
	
	<tr><td>1</td><td><input type="checkbox" id= "Special Chicken Curry" value= "Special Chicken Curry" <?php if (exist("Special Chicken Curry")) echo "checked"; ?> name="hear[]">Special Chicken Curry</td><td> 440tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>1</td><td><input type="checkbox" id= "Strawberry Cake" value= "Strawberry Cake" <?php if (exist("Strawberry Cake")) echo "checked"; ?> name="hear[]">Strawberry Cake</td><td> 150tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>2</td><td><input type="checkbox" id= "Vegetable BBQ Curry" value= "Vegetable BBQ Curry" <?php if (exist("Vegetable BBQ Curry")) echo "checked"; ?> name="hear[]">Vegetable BBQ Curry</td><td> 400tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>2</td><td><input type="checkbox" id= "Chocolate Cake" value= "Chocolate Cake" <?php if (exist("Chocolate Cake")) echo "checked"; ?> name="hear[]">Chocolate Cake</td><td> 350tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>3</td><td><input type="checkbox" id= "Spicy Beef Curry" value= "Spicy Beef Curry" <?php if (exist("Spicy Beef Curry")) echo "checked"; ?> name="hear[]">Spicy Beef Curry</td><td> 270tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>3</td><td><input type="checkbox" id= "Browny"value= "Browny" <?php if (exist("Browny")) echo "checked"; ?> name="hear[]">Browny</td><td> 400tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>4</td><td><input type="checkbox" id= "Kala Vuna" value= "Kala Vuna" <?php if (exist("Kala Vuna")) echo "checked"; ?> name="hear[]">Kala Vuna</td><td> 400tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>4</td><td><input type="checkbox" id= "Chocolate Ice-Cream" value= "Chocolate Ice-Cream" <?php if (exist("Chocolate Ice-Cream")) echo "checked"; ?> name="hear[]">Chocolate Ice-Cream</td><td> 250tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>5</td><td><input type="checkbox" id= "Chicken Curry with Mashrooms" value= "Chicken Curry with Mashrooms" <?php if (exist("Chicken Curry with Mashrooms")) echo "checked"; ?> name="hear[]">Chicken Curry with Mashrooms</td><td> 200tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td><td>5</td><td><input type="checkbox" id= "Fruits" value= "Fruits" <?php if (exist("Fruits")) echo "checked"; ?> name="hear[]">Fruits</td><td> 100tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	<tr><td>6</td><td><input type="checkbox" id= "Khichuri" value= "Khichuri" <?php if (exist("Khichuri")) echo "checked"; ?> name="hear[]">Khichuri</td><td> 280tk</td><td><select id="plates" name="plates[]"><option selected disabled >--No of Plates--</option><?php for($i=1;$i<=10;$i++)if($i == $_POST["plates"])echo "<option selected>$i</option>"; else echo "<option>$i</option>";?></select> </td></tr>
	</table>
	<h3 id = "err_hear" align="center">
	<?php echo $err_hear;?>
	</h3>
	<h3 align="center" id = "err_plates"> 
	<?php echo $err_plates;?>
	</h3>
	
	<table align = "center">
	<tr><td></td>
	<tr><td align = "right"><b>Room No:</b></td>
	<td><input id="RoomNo" name = "RoomNo" value = "<?php echo $RoomNo;?>" type="txt" ></td>
    <td id="err_RoomNo"><?php echo $err_RoomNo; ?></td> </tr></td></tr>	</td></tr>
	<tr><td></td>
	<tr><td align = "right"><b>Phone No:</b></td><td><input id="phone" name = "phone" value = "<?php echo $phone;?>"  type="txt" ></td>
	<td id="err_phone"> <?php echo $err_phone; ?></td> </tr>
	
	<tr><td></td>
	<tr><td align = "right"><b>Customer ID:</b></td><td><input id="Cid" name = "Cid" value = "<?php echo $Cid;?>" type="txt" > </td>
	<td id="err_Cid"><?php echo $err_Cid; ?></td> </tr></td></tr>
	
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
	<img width="550px" height="300px" src="Classic2.jpg">
	<script src= "Classic.js" ></script>
	</body>
</html>