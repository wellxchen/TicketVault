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
		<title>Lost password - TicketVault</title>
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
				if (frm.username.value == "") {alert('Username is required.');frm.username.focus();return false;}
				if (frm.pwd.value == "") {alert('Password is required.');frm.pwd.focus();return false;}
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
			<section id="main" class="container small">
				<header>
					<h2>Retrieve password</h2>
				</header>
				<div class="box">
					<form method="post" action="php/Lostpwd_email.php" onsubmit="return ValidateForm(this);">
						<div class="row uniform half">
							<div class="12u">
								<h4>Enter your username<input type="text" name="username" id="username" value="" placeholder="User Name" /></h4>
							</div>
						</div>

						<div class="row uniform">
							<div class="12u">
								<ul class="actions align-center">
									<input type="submit" name = "submit" id="button" value="submit"/>
								</ul>
							</div>
						</div>
		
					</form>
				</div>
			</section>
			
		<!-- Footer -->
		<?php
			footer();
		?>

	</body>
</html>
