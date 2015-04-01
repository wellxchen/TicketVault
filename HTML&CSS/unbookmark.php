<?php

	/*Author: Chengkang Xu*/

	include('php/Base.php');
	$dbhandle = database_connect();
	
	$eventID=$_GET['eventID'];
	session_start();
	$username=$_SESSION['loginuser'];
	
	$SQLString = "DELETE FROM favorite WHERE Username='$username' AND EventID='$eventID'";
		
	$result = mysqli_query($dbhandle, $SQLString);
	
	header("Location: favorevents.php");/*change to favorite listing*/
	die();
?>


