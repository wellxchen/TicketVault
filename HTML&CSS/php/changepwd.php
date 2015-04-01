 <?php	
	include('Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");
	$username = $_POST['username']; 
	$password = $_POST['new_password'];
	if ($_POST['confirm_password'] != $_POST['new_password']) {
 				echo 'Passwords do not match';
 	}else{
 		$hash_password = hash('md5',$password);
		$SQLupdate = "UPDATE account SET Password = '$hash_password' WHERE Username = '$username'" ;
		$result_update = mysqli_query($dbhandle, $SQLupdate);
		$context =  hash('md5', $username);
		$filename = "../".$context.".php";
		echo($filename);
		unlink($filename);
		header("Location: ../change_pwd_succeeds.html");
	}
?>
