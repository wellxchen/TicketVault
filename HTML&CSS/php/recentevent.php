<?php
	include('Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");											
	$result = mysqli_query($dbhandle, "SELECT * FROM event ORDER BY Date DESC");
	$file_email1 = file_get_contents('../htmlemail/upcomingevent_email1.html', true);
	$file_email2 = file_get_contents('../htmlemail/upcomingevent_email2.html', true);
	$result2 = mysqli_query($dbhandle, "SELECT * FROM account" );

	$subject = 'Upcoming Event';
	$message = $file_email1;
	while($row=mysqli_fetch_array($result)){
		$message = $message.$row['Eventname'].'</br>'.'Date:'.$row['Date'].'</br>'.'</br>';
		
	}
	$message = $message.$file_email2;
	echo $message;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
	$headers .= 'From: Ticket Vault <support@ticketvault.cu.cc>' . "\r\n";
	$headers .= 'Cc: '. "\r\n";
	$headers .= 'Bcc: ' . "\r\n";
	
	while($row2=mysqli_fetch_array($result2)){
		$to = $row2['Email'];
		mail($to, $subject, $message, $headers);
	}
	//echo $message;

?>