<?php
require_once "Models/db_config.php";
require_once 'main_header.php';
$hear = [];
$err_hear = "";
$id= "";
$err_id = "";

//$con = mysqli_connect("localhost","root", "","thirddatabase");

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
	if(!isset($_POST["hear"]))
	{
		$hasError = true;
		$err_hear = "<b>This part is required to book</b>";
	}
	else
	{
		$hear = $_POST["hear"];
	}
	if(empty($_POST["id"]))
	{
		$hasError = true;
		$err_id = " ID required";
	}
	else
	{
		$id = $_POST["id"];
	}
	$id = $_POST["id"];
	$hear = $_POST["hear"];
	if(!$hasError)
	{
		echo "<h2 style='color:SlateBlue;'>Your Spa schedule has been booked to: </h2>";
		$arr = $_POST["hear"];
		//$id = $_POST["id"] ;
    foreach($arr as $e)
    {
	echo "<h1>$e</h1><br>";
	//$query= "INSERT INTO gym VALUES ('$id','$e')";
	//$query_run = mysqli_connect($con,$query);
    
	
	$rs = inseertProduct($_POST["id"],$e);
	if($rs === true)
	{
		//header("Location: Category.php");
	}
	$err_db = $rs;
	}
	}
}
function inseertProduct($id,$e)
{
	$query = "insert into gym values ($id,'$e')";
	return execute($query);
}
?>


<html>
    <body>
	<h1 style="color:Red;"> Booking can be done on the previous day or on the current day </h1>
	
	<script>
	
	//var hear[];
	//var err_hear = "";
	//var hasError = false;
	
	function get(id)
	{
		return document.getElementById(id);
	}

	function validateSchedule()
	{
		
		var gym = document.querySelector('input[name="hear[]"]:checked');
		
		if (gym == null)
		{
			return false;
		}
		return true;
		
		/*var gym = document.getElementsByName("hear[]");
		for(var i=0;i<gym.length;i++)
		{
			if(gym[i].checked)
			{
				return true;
			}
		}
		return false;*/
	}
	
	function validate()
	{
		refresh();
		
		if(get("id").value == "")
		{
		hasError = true;
		get("err_id").innerHTML = "<h3 style='color: red;'>Customer ID required.</h3>";
		}
		
		//document.write("Hello");
		if(validateSchedule() != true)
		{
		hasError = true;
		get("err_hear").innerHTML = "<h3 style='color: red;'>Select schedule for reserving.</h3>";
		}
		
		/*if(!get("7am-10am").checked && !get("11am-2pm").checked  && !get("4pm-7pm").checked && !get("7pm-10pm").checked)
		{
		hasError = true;
		get("err_hear").innerHTML = "Select schedule for reserving.";
		}*/
		return !hasError;
	}
	function refresh()
	{
		hasError = false;
		get("err_hear").innerHTML = "";
	}

    </script>
	
	<form action="" onsubmit="return validate()" method="post">
	<table>
	
	
	<tr> <td><h1 style="color:Green"> Schedules for Spa : </td> 
	<td><h1><input type="checkbox" id="7am-10am" value= "7am-10am" <?php if (exist("7am-10am")) echo "checked"; ?> name="hear[]"> 7:00am - 10:00am <br>
	
	<h1><input type="checkbox" id= "11am-2pm" value= "11am-2pm" <?php if (exist("11am-2pm")) echo "checked"; ?> name="hear[]"> 11:00am - 2:00pm <br>
	
	<h1><input type="checkbox" id="4pm-7pm" value= "4pm-7pm" <?php if (exist("4pm-7pm")) echo "checked"; ?> name="hear[]"> 4:00pm - 7:00pm  <br>
	
	<h1><input type="checkbox" id="7pm-10pm" value= "7pm-10pm" <?php if (exist("7pm-10pm")) echo "checked"; ?> name="hear[]"> 7:00pm - 10:00pm  </td></tr>
	
	<tr><td></td><td id = "err_hear" >
	<?php echo $err_hear;?></td>
	</table>
	
	<table>
	
	<tr><td align="right"> 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Customer ID:</b> </td>
	<td><input id="id" type="text" value="<?php echo $id; ?>" name = "id"><span id="err_id"> <?php echo $err_id; ?> </td>
	</tr>
	<tr><td></td><td align = "right"> <h1><input align = "Right" type="submit" value="Book" > </td> </tr>
	
	</table>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img width="500px" height="500px" src="Pictures/Spa.jpg">
	</form>
	
	</body>
</html>