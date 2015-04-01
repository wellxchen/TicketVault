 <?php
	
/*Handle interconnection between server and eventProfile(editMode) page*/
	
	include('php/Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");
	
 	$orgname = $_POST['orgname'];
 	$eventID = $_POST['eventID']; 	
 
 	
	if (!empty($_POST['eventname'])) {
 			
 			
 		$SQLupdate = "UPDATE event SET Eventname = '".$_POST['eventname']."' WHERE OrganizationName = '$orgname' AND EventID = '$eventID'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);
 			
 	}
 		
 	if (!empty($_POST['detail'])) {
 		
 		$SQLupdate = "UPDATE event SET Detail = '".$_POST['detail']."' WHERE OrganizationName = '$orgname' AND EventID = '$eventID'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);
 			
 	}
 		
 	if (!empty($_POST['price'])) {
 		
 		$SQLupdate = "UPDATE event SET Price = '".$_POST['price']."' WHERE OrganizationName = '$orgname' AND EventID = '$eventID'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);

 	}
 	
 	if (!empty($_POST['location'])) {
 		
 		$SQLupdate = "UPDATE event SET Location = '".$_POST['location']."' WHERE OrganizationName = '$orgname' AND EventID = '$eventID'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);

 	}
 	
 	if (!empty($_POST['remainingtickets'])) {
 		
 		$SQLupdate = "UPDATE event SET RemainingTickets = '".$_POST['remainingtickets']."' WHERE OrganizationName = '$orgname' AND EventID = '$eventID'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);

 	}
 	
 	
 	header("Location: manageTicket.php");
	die();
 	
 	
 	
 ?>