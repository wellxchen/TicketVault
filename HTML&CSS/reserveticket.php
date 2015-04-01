<!DOCTYPE HTML>
<!--
	Created by CS307 Team8 
	Using HTML5UP as tamplate
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->


<html>
	<head>
		<title>Reserve Tickets</title>
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
		<script src="js/dropdown.js"></script>
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
		
    
			<section id="main" class="container">
				<header>
					<h2>Reserve Tickets</h2>
				</header>
				
	<?php
		session_start();
		$username = $_SESSION['loginuser'];
		$dbhandle = database_connect();	
	
		$SQLString1 = "SELECT * FROM account WHERE Username='$username'";
		$result1 = mysqli_query($dbhandle, $SQLString1);
		$row1 = mysqli_fetch_assoc($result1);
		$username['username']=$row1['Username'];
		$username['email']=$row1['Email'];
		$username['phone']=$row1['Phone'];
		
	
		$SQLString2 = "SELECT * FROM event WHERE Eventname = '".$_GET['eventName']."'";
		$result2 = mysqli_query($dbhandle, $SQLString2);
		$row2 = mysqli_fetch_assoc($result2);
		$eventname['eventname']=$row2['Eventname'];
		$eventname['organizationname']=$row2['OrganizationName'];
		$eventname['price']=$row2['Price'];
		$eventname['detail']=$row2['Detail'];
		
	?>
	
			
				<form method="post" action="reserveticket-validate.php">
				<div class="row">
					<div class="12u">
							<section class="box">
								<h4>Please make sure all information below is correct before submitting your request!</h4>
								<h3>Ticket Information</h3>
								<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

               						<tr>
                  					<td width="20%" align="right" bgcolor="#FFFFFF">Event Name： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="eventname" type="text" value="<?php echo $row2['Eventname']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
				
				 					<tr>
                  					<td width="20%" align="right" bgcolor="#FFFFFF">Organization Name： </td>
                  					<td width="80" align="left" bgcolor="#FFFFFF">
                  					<input name="email" type="text" value="<?php echo $row2['OrganizationName']; ?>" placeholder=""/ readonly>
                  					</td>
                					</tr>
                
                					<tr>
                 					<td width="20%" align="right" bgcolor="#FFFFFF">Event Description： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="first name" type="text" value="<?php echo $row2['Detail']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
                
                					<tr>
                 	 				<td width="20%" align="right" bgcolor="#FFFFFF">Price： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="last name" type="text" value="<?php echo $row2['Price']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
									
									                					<tr>
                 	 				<td width="20%" align="right" bgcolor="#FFFFFF">Remaining Tickets： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="last name" type="text" value="<?php echo $row2['RemainingTickets']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
									
									<tr>
                  					<td width="28%" align="right" bgcolor="#FFFFFF">Quantity： </td>
                  					<td width="72%" align="left" bgcolor="#FFFFFF">
                  						<div class="row uniform half collpase-at-2">
                  							<div class="2u">
  												<SELECT NAME="Quantity" >
        										<OPTION VALUE="1" SELECTED>1</OPTION>
        										<OPTION VALUE="2">2</OPTION>
        										<OPTION VALUE="3">3</OPTION>
        										<OPTION VALUE="4">4</OPTION>
        										<OPTION VALUE="5">5</OPTION>
        										<OPTION VALUE="6">6</OPTION>
        										<OPTION VALUE="7">7</OPTION>
        										<OPTION VALUE="8">8</OPTION>
        										<OPTION VALUE="9">9</OPTION>
        										<OPTION VALUE="10">10</OPTION>
												<OPTION VALUE="11">11</OPTION>
												<OPTION VALUE="12">12</OPTION>
												<OPTION VALUE="13">13</OPTION>
												<OPTION VALUE="14">14</OPTION>
												<OPTION VALUE="15">15</OPTION>
												<OPTION VALUE="16">16</OPTION>
												<OPTION VALUE="17">17</OPTION>
												<OPTION VALUE="18">18</OPTION>
												<OPTION VALUE="19">20</OPTION>
      											</SELECT>
                 					 		</div>

                    					</div>
                					</td>
                					</tr>
									
								</table>
                                
                                <h3>User Information</h3>
								<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

               						<tr>
                  					<td width="20%" align="right" bgcolor="#FFFFFF">Username： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="username" type="text" value="<?php echo $row1['Username']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
				
				 					<tr>
                  					<td width="20%" align="right" bgcolor="#FFFFFF">Email： </td>
                  					<td width="80" align="left" bgcolor="#FFFFFF">
                  					<input name="email" type="text" value="<?php echo $row1['Email']; ?>" placeholder=""/ readonly>
                  					</td>
                					</tr>
                
                					<tr>
                 					<td width="20%" align="right" bgcolor="#FFFFFF">Phone： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="first name" type="text" value="<?php echo $row1['Phone']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
               
								</table>
		

				
                                
                                <div class=”12u">
                                    <ul class="actions">
                                        <li>
        									<input type="submit" value="Reserve"/>
                                        </li>
                                
                                    </ul>
                                </div>
                                
							</section>

					</div>
				</div>
			</form>
		</section>
    </body>
	
	<?php
		footer();
	?>

</html>