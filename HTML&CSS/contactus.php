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
		<script type="text/javascript">
			function ValidateForm(frm) {
				if (frm.email.value == "") {alert('Eventname is required.');frm.email.focus();return false;}
				if (frm.subject.value == "") {alert('Price is required.');frm.subject.focus();return false;}
				if (frm.comment.value == "") {alert('Location is required.');frm.comment.focus();return false;}
				
			
			return true; 
		}
		</script>
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
							<h3>Contact us</h3>  	

  <div id="right">
  
		<div class="us_contentBox">
		
		<form method="post" action="contactus-email.php">

			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
			
				 <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Email： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="email" type="text" value="" placeholder="Please enter event name"/>
                  </td>
                </tr>

				 <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Subject： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="subject" type="text" value="" placeholder="Please enter event name"/>
                  </td>
                </tr>
				
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Comment： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="comment" type="text" value="" placeholder="Please enter details"/>
                  </td>
                </tr>
                           
                
                 <tr>
      				<td colspan="2" align="center" bgcolor="#FFFFFF">
        			<input type="submit" name = "submit" id="button" value="submit"/>
					</td>
				</tr>

				
					
   
		</div>
		</form>
  
		</div>

	</div>

	</body>
</html>
