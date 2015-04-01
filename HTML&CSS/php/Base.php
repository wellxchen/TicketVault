<?php
	session_start();
	
	function index_banner(){
		echo "<body class=".'"'."landing".'"'.">";
		echo "<header id=".'"'."header".'"'." class=".'"'."alt".'"'.">";
		echo "<h1><a href=".'"'."http://ticketvault.cu.cc".'"'.">TicketVault</a></h1>";
			if(isset($_SESSION['loginuser'])){
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."hotevents.php".'"'." >Hot Events</a></li>";
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'." >Upcoming Events</a></li>";
				echo "<li><a href=".'"'."favorevents.php".'"'." >Favorite Events</a></li>";
				echo "<li><a href=".'"'."profile.php".'"'." >Profile</a></li>";
				echo "<li><a href=".'"'."search.php".'"'." class=".'"'."button".'"'.">Search</a></li>";

				echo "<li><a href=".'"'."php/Logout.php".'"'." class=".'"'."button".'"'.">logout</a></li>";
				echo "<li><a href=".'"'."help.php".'"'." >Help</a></li>";
				echo "</ul>";
				echo "</nav>";
			}else if(isset($_SESSION['organizationuser'])){
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."hotevents.php".'"'." >Hot Events</a></li>";
				echo "<li><a href=".'"'."createevent.php".'"'." >Create Event</a></li>";	
				echo "<li><a href=".'"'."manageTicket.php".'"'." >Manage Event</a></li>";	
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'." >Upcoming Event</a></li>";
				echo "<li><a href=".'"'."php/Logout.php".'"'." class=".'"'."button".'"'.">logout</a></li>";
				echo "<li><a href=".'"'."help.php".'"'." >Help</a></li>";
				echo "</ul>";
				echo "</nav>";
			}else{
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."hotevents.php".'"'." >Hot Events</a></li>";
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'." >Upcoming Event</a></li>";
				echo "<li><a href=".'"'."signup.php".'"'." class=".'"'."button".'"'.">Sign Up</a></li>";
				echo "<li><a href=".'"'."login.php".'"'." class=".'"'."button".'"'.">login</a></li>";
				echo "<li><a href=".'"'."help.php".'"'." >Help</a></li>";
				echo "</ul>";
				echo "</nav>";
			}
			echo "</header>";
	}
	
	
	function sub_banner(){
			echo "<header id=".'"'."header".'"'.">";
			echo "<h1><a href=".'"'."http://ticketvault.cu.cc".'"'.">TicketVault</a></h1>";
			if(isset($_SESSION['loginuser'])){
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."hotevents.php".'"'." >Hot Events</a></li>";
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'." >Upcoming Event</a></li>";
				echo "<li><a href=".'"'."favorevents.php".'"'." >Favorite Events</a></li>";
				echo "<li><a href=".'"'."profile.php".'"'." >Profile</a></li>";
				echo "<li><a href=".'"'."php/Logout.php".'"'." class=".'"'."button".'"'.">logout</a></li>";
				echo "<li><a href=".'"'."help.php".'"'." >Help</a></li>";
				echo "</ul>";
				echo "</nav>";
			}else if(isset($_SESSION['organizationuser'])){
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."hotevents.php".'"'." >Hot Events</a></li>";
				echo "<li><a href=".'"'."createevent.php".'"'." >Create Event</a></li>";	
				echo "<li><a href=".'"'."manageTicket.php".'"'." >Manage Event</a></li>";	
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'." >Upcoming Event</a></li>";
				echo "<li><a href=".'"'."php/Logout.php".'"'." class=".'"'."button".'"'.">logout</a></li>";
				echo "<li><a href=".'"'."help.php".'"'." >Help</a></li>";
				echo "</ul>";
				echo "</nav>";
			}else{
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."hotevents.php".'"'." >Hot Events</a></li>";
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'." >Upcoming Event</a></li>";
				echo "<li><a href=".'"'."signup.php".'"'." class=".'"'."button".'"'.">Sign Up</a></li>";
				echo "<li><a href=".'"'."login.php".'"'." class=".'"'."button".'"'.">login</a></li>";
				echo "<li><a href=".'"'."help.php".'"'." >Help</a></li>";
				echo "</ul>";
				echo "</nav>";
			}
			echo "</header>";
	}
	
	function footer(){
			echo "<footer id=".'"'."footer".'"'.">";
			echo "<ul class=".'"'."icons".'"'.">";
			echo "<li><a href=".'"'."https://github.com/TicketVault/TicketVault".'"'." class=".'"'."icon fa-github".'"'."><span class=".'"'."label".'"'.">Github</span></a></li>";
			echo "<li><a href=".'"'."https://www.cs.purdue.edu/homes/bxd/307/".'"'." class=".'"'."icon fa-dribbble".'"'."><span class=".'"'."label".'"'.">Dribbble</span></a></li>";
			echo "</ul>";
			echo "<ul class=".'"'."copyright".'"'.">";
			echo "<li>&copy; CS307 Fall2014 Team8</li>";
			echo "</ul>";
			echo "</footer>";
	}
	
	function database_connect(){
		$dbhandle = mysqli_connect("mysql.hostinger.co.uk","u907917272_cs307","CS307TEAM8","u907917272_table");
		if (mysqli_connect_errno())
		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		return $dbhandle; 
	}
	
	function signup_email($email){
		$file = file_get_contents('htmlemail/signup_email.html', true);
		$to      = $email;
		$subject = 'Welcome to TicketVault';
		$message = $file;
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// Additional headers
		$headers .= 'From: Ticket Vault <support@ticketvault.cu.cc>' . "\r\n";
		$headers .= 'Cc: '. "\r\n";
		$headers .= 'Bcc: ' . "\r\n";
			// Mail it
		mail($to, $subject, $message, $headers);
	}
?>
