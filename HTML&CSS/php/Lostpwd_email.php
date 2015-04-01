<?php
	include('Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");	
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	$username_=$_POST["username"];
	$SQLString = "SELECT * FROM account WHERE Username='$username_'";
	//$hash = password_hash($passwod, PASSWORD_DEFAULT);
	//$SQLString = "SELECT * FROM account WHERE Username='$username' AND Password='$hash'";
	
	$result = mysqli_query($dbhandle, $SQLString);
	$count=mysqli_num_rows($result);
	if($count==0){
		echo "No such User";
	}else{
		echo $username_;
		$context = hash('md5', $username_);
		echo $context;
		$myfile = fopen('../'.$context.'.php', "w");
		fwrite($myfile,"<?php $");
		fwrite($myfile, "username=");
		fwrite($myfile, $_POST["username"]);
		fwrite($myfile, "?>");
		$file = file_get_contents('../lostpwd.php', true);
		fwrite($myfile, $file);
		$file_email1 = file_get_contents('../htmlemail/lost_password_email1.html', true);
		$file_email2 = file_get_contents('../htmlemail/lost_password_email2.html', true);
		$to = 'huang420@purdue.edu';
		$subject = 'Reset your password';
		$message = $file_email1."<a href=".'"'."http://ticketvault.cu.cc/".$context.".php".$file_email2;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// Additional headers
		$headers .= 'From: Ticket Vault <support@ticketvault.cu.cc>' . "\r\n";
		$headers .= 'Cc: '. "\r\n";
		$headers .= 'Bcc: ' . "\r\n";
		mail($to, $subject, $message, $headers);
		header("Location: ../change_pwd_emailsend.html");
		die();
	}
?>
