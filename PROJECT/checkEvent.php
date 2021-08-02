<?php

include 'Controller/EventsController.php';
$ename = $_GET["ename"];
$user = checkEventname($ename);
if($user)
{
	echo "Event exists";
}
else
{
	echo "Event doesn't exist";
}
?>