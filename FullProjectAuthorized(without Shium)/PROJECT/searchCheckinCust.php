<?php
require_once 'Controller/CheckinController.php';
//require_once 'CustomerCheeckin.php';

$key = $_GET["key"];
$cid = searchCheckinCust($key);
if(count($cid)>0)
{
	foreach($cid as $p)
	{
		echo "<a href='EditCheckin.php?id=".$p["id"]."'>".$p["cname"]."</a><br>";
	}		
}

?>