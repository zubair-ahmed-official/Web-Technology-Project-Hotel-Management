<?php
		require_once 'Controller/EventsController.php';
		$pro = getProducts();
		
		$i=1;
		echo "<h1 style='color:green' align='center'><b>Upcoming Events</b></h1>";

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
			echo "<td>&nbsp;&nbsp;<b>Description:</b> </td><td>".'&nbsp;&nbsp;&nbsp;&nbsp;'.$c["desc"].'&nbsp;&nbsp;&nbsp;&nbsp;'."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>&nbsp;&nbsp;<b>Time & Date:</b>&nbsp;&nbsp; </td><td>".'&nbsp;&nbsp;&nbsp;&nbsp;'.$c["time"]. '&nbsp;&nbsp;&nbsp;&nbsp;'."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>&nbsp;&nbsp;<b>Available For:</b> </td><td>".'&nbsp;&nbsp;&nbsp;&nbsp;'.$c["avl"]. '&nbsp;&nbsp;&nbsp;&nbsp;'."</td>";
			echo "</tr>";
			
			echo "<tr>";
			//echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href= "EditCatagory.php?id='.$id.'"><input type="button" value="Update">  </a></td>
			echo '<td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href ="EventBooking.php"><input type="button" value="Book Now"> </a></td>';
			echo "</tr>";
			echo "</table>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			
			$i++;
			
		}
		?>