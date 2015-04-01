<?php
	//this is php commrnt
	//database connection
	include('Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");	
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	$eventname_insert = $_POST['eventname'];
	$detail_insert = $_POST['detail'];
	$price_insert = $_POST['price'];
	$location_insert = $_POST['location'];
	$remainingtickets_insert = $_POST['remainingtickets'];
	$orgname_insert = $_POST['orgname'];
	$year = $_POST['EventYear'];
	$month= $_POST['EventMonth'];
	$day= $_POST['EventDay'];
	$hour= $_POST['TimeHours'];
	$minute= $_POST['TimeMinute'];
	$category = $_POST['category'];
	$event_ID = hash("md5",rand());	
	$date = $year.'-'.$month.'-'.$day;
	$time = $hour.':'.$minute.':'.'00';
	$SQLString = "INSERT INTO event (OrganizationName,Eventname,Detail,Price,Location,RemainingTickets,EventID,Category,Date,Time)VALUES( '$orgname_insert','$eventname_insert', '$detail_insert','$price_insert','$location_insert','$remainingtickets_insert','$event_ID','$category','$date','$time')";
	mysqli_query($dbhandle, $SQLString);
	
	//echo "done";
	//echo $event_ID;
	header("Location: ../CreateEventSuccess.php");

?>
	