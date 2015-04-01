<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Reset Password - TicketVault</title>
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
<section id="main" class="container">

	  <div id="right">
  
		<div class="us_contentBox">
				<h3>Change Password</h3>
		<form method="post" action="php/changepwd.php">
     		<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
     		    <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Username： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="username" type="text" value="<?php echo $username; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
                
				<tr>
        			<td width="20%" align="right" bgcolor="#FFFFFF">New Password：</td>
        			<td align="left" bgcolor="#FFFFFF"><input name="new_password" type="password" size="25"  class="formBorder" /></td>
				</tr>
        		<tr>
        			<td width="20%" align="right" bgcolor="#FFFFFF">Confirm Password：</td>
        			<td align="left" bgcolor="#FFFFFF"><input name="confirm_password" type="password" size="25"  class="formBorder" /></td>
				</tr>
        		<tr>
      				<td colspan="2" align="center" bgcolor="#FFFFFF">
        			<input name="act" type="hidden" value="act_edit_password" />
        			<input type="submit" name = "submit" id="button" value="submit changes"/>
					</td>
				</tr>
			</table>
   
		</div>
		</form>
  
		</div>
		
	</body>
	</div>
</section>

		<?php
		footer();
	?>
</html>