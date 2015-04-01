<?php
	//this is php commrnt
	//database connection
	include('Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");	
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();



	$username=$_POST["username"];
	$password=$_POST["password"];
	$hash=hash ('md5',$password);
	$SQLString = "SELECT * FROM account WHERE Username='$username' AND Password='$hash'";
	//$hash = password_hash($passwod, PASSWORD_DEFAULT);
	//$SQLString = "SELECT * FROM account WHERE Username='$username' AND Password='$hash'";
	$result = mysqli_query($dbhandle, $SQLString);
	$count=mysqli_num_rows($result);
	if($count==1){
		session_start();
		$_SESSION['loginuser']=$username;
		header("Location: ../index.php");
		die();
	}
	else{
		$SQLString = "SELECT * FROM organizationAccount WHERE Username='$username' AND Password='$hash'";
		$result = mysqli_query($dbhandle, $SQLString);
		$count=mysqli_num_rows($result);
		if($count==1){
			session_start();
			$_SESSION['organizationuser']=$username;
			header("Location: ../index.php");
			die();
		}else{		
			header("Location: ../loginerror.html");
			die();
		}
	}	
?>
