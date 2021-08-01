<?php
error_reporting (E_ALL ^ E_NOTICE);


$txt = "";
$txt2 = "";
$txt3 = "";
$txt4 = "";
$txt5 = "";

$err_txt = "Must be greater than 7 characters";
$err_txt2 = "Must be greater than 5 characters";
$err_txt3 = "Invalid Phone Number";
$err_txt4 = "Invalid Room Number";
$err_txt5 = "Must be greater than 7 characters";

$i = 1;

$hasError = false;

	
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	    /*if(strlen($_POST["txt$i"]) < 8 )
		{
			if(strlen($_POST["txt$i"]) > 0  )
			{
		    $hasError = true;
		    $err_txt = "Name must be greater than 7 characters";
			}
			else if(strlen($_POST["txt$i"]) ==  0  )
			{
		    $txt = $_POST["txt$i"];
			}
			
	    }
		if(strlen($_POST["txt$i"]) > 8 )
			{
		    $txt = $_POST["txt$i"];
			}*/
		
	    /*if((empty($_POST["txt$i"])))
	    {
		$txt = $_POST["txt$i"];
	    }*/
		
		//for($i=0;$i<25;$i++);
	
		 //$_POST['txt'.$i];
		
		//echo strlen($_POST["txt$i"]);
		
		
		 
}
?> 
<html>
<body>
<form action="" method="post">
<table>
<h1>Add Customers</h1>

<tr><td><b>Customer Name: </b></td><td><b>Customer ID:</b></td>  <td><b>Phone:</b></td> <td><b>Room no:</b> </td> <td><b> Booking Time: </b></td> <td><b> Booked Days: </b></td><td><b> Customer account link:</b></td> </tr>
<tr><td> <?php 
echo "<form method='post'>";
//error_reporting (E_ALL ^ E_NOTICE);
//$err = "";
//$txt = "";
for($i=0;$i<25;$i++)
{
	$tx = $_POST["txt$i"];
	//echo "<form method='post'>";
	echo "<br><input type='text' name='txt$i' value= '$tx'><br>";
	$len =  strlen($tx);
	//echo $len;
	if($len>8)
	{
		$tx = $_POST["txt$i"];
	}
	else if($len>0 && $len<8 )
	{
		echo $err_txt;
	}
}
	//echo "<br><input type= submit value= Save>";
	//echo "</form>";
	
?>
	 
</td>

<td>

	<?php 
//error_reporting (E_ALL ^ E_NOTICE);
//$err = "";
//$txt = "";
for($j=0;$j<25;$j++)
{
	$tx2 = $_POST["txt2$j"];
	//echo "<form method='post'>";
	echo "<br><input type='text' name='txt2$j' value= '$tx2'><br>";
	$len2 =  strlen($tx2);
	//echo $len;
	if($len2>4)
	{
		$tx = $_POST["txt2$j"];
	}
	else if($len2>0 && $len2<5 )
	{
		echo $err_txt2;
	}
}
	//echo "<br><input type= submit value= Save>";
	//echo "</form>";
	
?>

    
</td>
<td>
<?php 
//error_reporting (E_ALL ^ E_NOTICE);
//$err = "";
//$txt = "";
for($k=0;$k<25;$k++)
{
	$tx3 = $_POST["txt3$k"];
	//echo "<form method='post'>";
	echo "<br><input type='text' name='txt3$k' value= '$tx3'><br>";
	$len3 =  strlen($tx3);
	
	if($len3>0 && $len3<11)
	{
		echo $err_txt3;
	}
	if($len3==11)
	{
	if(is_numeric($_POST["txt3$k"]) != true)
	{
		echo $err_txt3;
	}
	else
	{
		$tx3 = $_POST["txt3$k"];
	}
	
	}
}
	//echo "<br><input type= submit value= Save>";
	//echo "</form>";
	
?>
</td>
<td>
<?php 
//error_reporting (E_ALL ^ E_NOTICE);
//$err = "";
//$txt = "";
for($l=0;$l<25;$l++)
{
	$tx4 = $_POST["txt4$l"];
	//echo "<form method='post'>";
	echo "<br><input type='text' name='txt4$l' value= '$tx4'><br>";
	$len4 =  strlen($tx4);
	
	if($len4>0 && $len4<3)
	{
		echo $err_txt4;
	}
	if($len4==4)
	{
	if(is_numeric($_POST["txt4$l"]) != true)
	{
		echo $err_txt4;
	}
	else
	{
		$tx4 = $_POST["txt4$l"];
	}
	
	}
}
	//echo "<br><input type= submit value= Save>";
	//echo "</form>";
	
?>
</td>
<td>
<?php 
//error_reporting (E_ALL ^ E_NOTICE);
//$err = "";
//$txt = "";
for($m=0;$m<25;$m++)
{
	$tx5 = $_POST["txt5$m"];
	//echo "<form method='post'>";
	echo "<br><input type='text' name='txt5$m' value= '$tx5'><br>";
	
		$tx5 = $_POST["txt5$m"];
	
	
	
}
	//echo "<br><input type= submit value= Save>";
	//echo "</form>";
	
?>
</td>
<td> 
<?php 
//error_reporting (E_ALL ^ E_NOTICE);
//$err = "";
//$txt = "";
for($n=0;$n<25;$n++)
{
	$tx6 = $_POST["txt6$n"];
	//echo "<form method='post'>";
	echo "<br><input type='text' name='txt6$n' value= '$tx6'><br>";
	
		$tx5 = $_POST["txt6$n"];
}
	//echo "<br><input type= submit value= Save>";
	echo "</form>";
	
?>

</td>
<td>
<?php 
//error_reporting (E_ALL ^ E_NOTICE);
//$err = "";
//$txt = "";
for($o=0;$o<25;$o++)
{
	$tx7 = $_POST["txt7$o"];
	//echo "<form method='post'>";
	echo "<br><input type='text' name='txt7$o' value= '$tx7'><br>";
	
		$tx5 = $_POST["txt7$o"];
}
	//echo "<br><input type= submit value= Save>";
	echo "</form>";
	
?>
	 </td>
<td>

</td>
<td>

</td>
    <td>
   
	 </td>

</tr>
<tr><td></td><td></td><td></td><td></td><td></td><td></td><td align="right"> <input type="submit" value="Save"> </td>
</body>
</html>