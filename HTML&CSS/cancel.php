<?php
	include('php/Base.php');
	session_start();
	$dbhandle = database_connect();
	$eventname = $_GET['eventName'];
	$SQLString = "SELECT * FROM event WHERE Eventname = '$eventname'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysqli_fetch_assoc($result);
	
	$EventID = $row['EventID'];
	$UNE = $_SESSION['loginuser'];
	
	$SQLString = "SELECT * FROM ticket WHERE EventID = '$EventID' AND Username='$UNE'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row2 = mysqli_fetch_assoc($result);
	$Quantity = (int)$row2['Quantity'];

	
	$SQLString = "DELETE FROM ticket WHERE EventID='$EventID' AND Username='$UNE'";
	$result = mysqli_query($dbhandle, $SQLString);
	
	if ($result === TRUE) {
	
	
		$RemainingTickets = (int)$row['RemainingTickets'];
		
		$NRT = $RemainingTickets + $Quantity;
		
		$SQLString = "UPDATE event SET RemainingTickets = '$NRT' WHERE Eventname = '$eventname'" ;
 		$result = mysqli_query($dbhandle, $SQLString);
    	
    	header("Location: success.php");
	} 	   
	die();

?>