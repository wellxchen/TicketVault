<?php
	session_start();
	function login(){
		echo "<body class="."landing".">";
		echo "<header id="."header"." class="."alt".">";
		echo "<h1><a href="."http://ticketvault.cu.cc".">TicketVault</a></h1>";
			if(isset($_SESSION['loginuser'])){
				echo "<nav id="."nav".">";
				echo "<ul>";
				echo "<li><a href="."http://ticketvault.cu.cc"." >Home</a></li>";
				echo "<li><a href="."eventmanage.php"." >Manage Event</a></li>";	
				echo "<li><a href="."UpcomingEvent.php"." >Upcoming Event</a></li>";
				echo "<li><a href="."profile.php"." >Profile</a></li>";
				echo "<li><a href="."php/Logout.php"." class="."button".">logout</a></li>";
				echo "</ul>";
				echo "</nav>";
			}else{
				echo "<nav id="."nav".">";
				echo "<ul>";
				echo "<li><a href="."http://ticketvault.cu.cc"." >Home</a></li>";
				echo "<li><a href="."eventmanage.php"." >Manage Event</a></li>";
				echo "<li><a href="."UpcomingEvent.php"." >Upcoming Event</a></li>";
				echo "<li><a href="."signup.php"." class="."button".">Sign Up</a></li>";
				echo "<li><a href="."login.php"." class="."button".">login</a></li>";
				echo "</ul>";
				echo "</nav>";
			}
			echo "</header>";
		}
?>
