<!--<head>

</head>
<body>
	<fieldset>
	<form action="Room_Booking.php" method = "post">
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1><b>Room Categories</b></h1></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
			<tr>
				<td align="left"><h2><b>Luxury (4 Beds)</b></h2></td>
			</tr>
			<tr>
				<td><img width="400px" heigth="300px" src="4 beds.jpg"/></td>
				<td><img width="500px" heigth="500px" src="4.PNG"/></td>
			</tr>
			<tr>
				<td align="left"><b>BDT- 30,000</b>/Night</td>
			</tr>
			<tr>
						<td><br></td>
			</tr>
			<tr>
				<td><a href ="Room_Booking.php"><input type="button" value="Book Now"> </a></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
			<tr>
						<td><br><br><br><br></td>
			</tr>
			<tr>
				<td align="left"><h2><b>Luxury (2 Beds)</b></h2></td>
			</tr>
			<tr>
				<td><img width="400px" heigth="300px" src="2 beds.jpg"/></td>
				<td><img width="500px" heigth="500px" src="2.PNG"/></td>
			</tr>
			<tr>
				<td align="left"><b>BDT- 17,000</b>/Night</td>
			</tr>
			<tr>
						<td><br></td>
			</tr>
			<tr>
				<td><a href ="Room_Booking.php"><input type="button" value="Book Now"> </a></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
			<tr>
						<td><br><br><br><br></td>
			</tr>
			<tr>
				<td align="left"><h2><b>Classic</b></h2></td>
			</tr>
			<tr>
				<td><img width="400px" heigth="300px" src="Classic.jpg"/></td>
				<td><img width="500px" heigth="500px" src="cl.PNG"/></td>
			</tr>
			<tr>
				<td align="left"><b>BDT- 10,000</b>/Night</td>
			</tr>
			<tr>
						<td><br></td>
			</tr>
			<tr>
				<td><a href ="Room_Booking.php"><input type="button" value="Book Now"> </a></td>
			</tr>-->
		<?php
		require_once 'Controller/CatController.php';
		require_once 'main_header.php';
		session_start();
		$_SESSION["Category"] = "CATEGORY";
		$pro = getProducts();
		
		$i=1;
		echo "<h1 style='color:green' align='center'><b>ROOM ".$_SESSION['Category']."</b></h1>";

		foreach($pro as $c)
		{
			$id = $c["id"];
			
			echo "<table border = '6'>";
			
			echo "<tr>";
			//echo "<td></td>";
			echo "<td colspan='3'>
			<h1 style='color:brown'>$i. ". $c["name"].'</h1>'."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td rowspan='5'><img width='600px' heigth='600px' src = '".$c["img"]."'</td>";
			echo "</tr>";
			//echo "<td>".$c["c_name"]."</td>";
			echo "<tr>";
			echo "<td>&nbsp;&nbsp;<b>Price:</b> </td><td>".'&nbsp;&nbsp;&nbsp;&nbsp;'.$c["price"].' BDT'.'&nbsp;&nbsp;&nbsp;&nbsp;'."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>&nbsp;&nbsp;<b>Number of Beds:</b>&nbsp;&nbsp; </td><td>".'&nbsp;&nbsp;&nbsp;&nbsp;'.$c["qty"]. ' Beds'. '&nbsp;&nbsp;&nbsp;&nbsp;'."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>&nbsp;&nbsp;<b>Description:</b> </td><td>".'&nbsp;&nbsp;&nbsp;&nbsp;'.$c["description"]. '&nbsp;&nbsp;&nbsp;&nbsp;'."</td>";
			echo "</tr>";
			
			echo "<tr>";
			
			echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href ="Room_Booking.php"><input type="button" value="Book Now"> </a></td>';
			echo "</tr>";
			echo "</table>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			
			$i++;
			
		}
		?>

