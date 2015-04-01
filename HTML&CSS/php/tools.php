<?php
	$orz = $_POST['orz'];
	include('Base.php');
	echo $orz;
	$dbhandle = database_connect();
	$SQLString = "INSERT INTO organizationAccount(OrganizationName)VALUES( '$orz')";
	mysqli_query($dbhandle, $SQLString);
?>