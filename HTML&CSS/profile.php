<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Profile - TicketVault</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
    
	<body>


	<?php
		include('php/Base.php');
		sub_banner();
	?>


		<!-- Main -->
			<section id="main" class="container">
			</div>
				<div class="row">
					<div class="12u">
						<section class="box">
							<h3>User Profile</h3>
                            <ul class="actions vertical small">
                            	<li> <a href="profile(editMode).php">#Edit Your Profile</a></li>
                            	<li> <a href="userticket.php">#View your booked event</a></li>
								
                            </ul>
  
<?php
	
	session_start();
	$username = $_SESSION['loginuser'];
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");	
	
	
	$SQLString = "SELECT * FROM account WHERE Username='$username'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysqli_fetch_assoc($result);
	$username['username']=$row['Username'];
	$username['firstname']=$row['Firstname'];
	$username['lastname']=$row['Lastname'];
	$username['email']=$row['Email'];
	$username['birthDay']=$row['Birthday'];
	$username['address']=$row['Address'];
	$username['phone']=$row['Phone'];
?> 

  <div id="right">
		<div class="us_contentBox">
        
        	<form method="post" action="profile.php">
        	
			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Username： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="username" type="text" value="<?php echo $row['Username']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
				
				 <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Email： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="email" type="text" value="<?php echo $row['Email']; ?>" placeholder=""/ readonly>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">First Name： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="first name" type="text" value="<?php echo $row['Firstname']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Last name： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="last name" type="text" value="<?php echo $row['Lastname']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
              
                
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF">Birthday： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF">
                  <div class="row uniform">
                  <div class="6u">
				  	<input name="birthday" type="text" value="<?php echo $row['Birthday']; ?>" class="formBorder" readonly/>
                  </div>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Phone number： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="phone" type="text" value="<?php echo $row['Phone']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Mailing address： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="address" type="text" value="<?php echo $row['Address']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>              
		</div>
  
		</div>

	</div>

	</body>
</html>