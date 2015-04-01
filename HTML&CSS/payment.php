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
	<form method="post" action="success.php">

		<div class="row">
			<div class="12u">
				<section class="box">


			<h3>Event Information</h3>
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
					
			</table>
				
		<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
		

		<p2><strong>&nbsp;Billing Information (required)</strong></p2>
			
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">First Name:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="firstName" type="text" size="50"></td>
  			</tr>
			
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">Last Name:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="lastName" type="text" size="50"></td>
  			</tr>
			 
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">Street Address:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="address1" type="text" value="" size="50"></td>
  			</tr> 
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">Street Address (2):</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="address2" type="text" value="" size="50"></td>
  			</tr>
			
 	 		<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">City:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="city" type="text" value="" size="50"></td>
  			</tr>
			
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">State/Province:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="state" type="text" value="" size="50"></td>
  			</tr>
			
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">Zip/Postal Code:</td>
   				<td width="80%" align="left" bgcolor="#FFFFFF"><input name="zip" type="text" value="" size="50"></td>
  			</tr>
			
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">Country:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="country" type="text" value="" size="50"></td>
  			</tr>
			
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">Phone:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="phone" type="text" value="" size="50"></td>
  			</tr>
			
			</table>
			
			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
			
			<p2><strong>&nbsp;Credit Card (required)</strong></p2>
			
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">Credit Card Number:</td>
   	 			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="CCNo" type="text" value="" size="19" maxlength="40"></td>
  			</tr>
			
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">Expiration Date:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF">
				   <div class="row uniform half collpase-at-2">
                  	<div class="2u">
    	 	 		<SELECT NAME="CCExpiresMonth" >
        			<OPTION VALUE="" SELECTED>--Month--</OPTION>
        			<OPTION VALUE="01">January (01)</OPTION>
        			<OPTION VALUE="02">February (02)</OPTION>
        			<OPTION VALUE="03">March (03)</OPTION>
        			<OPTION VALUE="04">April (04)</OPTION>
        			<OPTION VALUE="05">May (05)</OPTION>
        			<OPTION VALUE="06">June (06)</OPTION>
        			<OPTION VALUE="07">July (07)</OPTION>
        			<OPTION VALUE="08">August (08)</OPTION>
        			<OPTION VALUE="09">September (09)</OPTION>
        			<OPTION VALUE="10">October (10)</OPTION>
        			<OPTION VALUE="11">November (11)</OPTION>
        			<OPTION VALUE="12">December (12)</OPTION>
      				</SELECT>
					</div>
					<div class="2u">
      				<SELECT NAME="CCExpiresYear">
        			<OPTION VALUE="" SELECTED>--Year--</OPTION>
        			<OPTION VALUE="12">2012</OPTION>
        			<OPTION VALUE="13">2013</OPTION>
        			<OPTION VALUE="14">2014</OPTION>
        			<OPTION VALUE="15">2015</OPTION>
					<OPTION VALUE="16">2016</OPTION>
        			<OPTION VALUE="17">2017</OPTION>
        			<OPTION VALUE="18">2018</OPTION>
        			<OPTION VALUE="19">2019</OPTION>
        			<OPTION VALUE="20">2020</OPTION>
        			<OPTION VALUE="21">2021</OPTION>
        			<OPTION VALUE="22">2022</OPTION>
        			<OPTION VALUE="23">2023</OPTION>
      				</SELECT>
					</div>
					</div>
    			</td>
  			</tr>
			</table>
			
			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
			
				<p2><strong>&nbsp;Additional Information</strong></p2>
			
  			<tr> 
    			<td width="20%" align="right" bgcolor="#FFFFFF">Contact Email:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="contactEmail" type="text" value="" size="50"></td>
  			</tr>
			
  			<tr> 
    			<td height="22" width="20%" align="right" bgcolor="#FFFFFF">Special Notes:</td>
    			<td width="80%" align="left" bgcolor="#FFFFFF"><textarea name="notes" cols="45" rows="4"></textarea></td>
  			</tr>
			</table>
		
		<p><input name="Submit" type="submit" value="Confirm your payment"></p>
		
			</section>
			</div>
		</div>
		
	</form>
	
	</section>
	
	<?php
		footer();
	?>

</html>