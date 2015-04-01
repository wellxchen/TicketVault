<!DOCTYPE HTML>
<!--
	Author:Chengkang Xu
-->
<html>
	<head>
		<title>Signup - TicketVault</title>
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
				if (frm.email.value == "") {alert('Email is required.');frm.email.focus();return false;}
				if (frm.password.value == "") {alert('Password is required.');frm.password.focus();return false;}
				if (frm.password_validate.value != frm.password.value) {alert('Password does not match.');frm.password_validate.focus();return false;}
			
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
	
	<?php
		session_start();
		if (isset($_SESSION['UN'])) {
			
			$UN=$_SESSION['UN'];
			unset($_SESSION['UN']);
			
		}
		
		if (isset($_SESSION['EM'])) {
			
			$EM=$_SESSION['EM'];
			unset($_SESSION['EM']);
			
		}
		
		if (isset($_SESSION['DUP'])) {
			
			$DUP = $_SESSION['DUP'];
			unset($_SESSION['DUP']);
		}
	?>

		<!-- Main -->
			<section id="main" class="container small">
				<header>
					<h2>Sign up</h2>
					
				</header>
				<div class="box">
					<form method="post" action="signup-validate.php" onsubmit="return ValidateForm(this);">
						<div class="row uniform half">
							<div class="12u">
								<input type="text" name="username" id="username" value="<?php echo "$UN"; ?>" placeholder="User Name" />
								
								<?php
								
									if ($DUP == 1) {
										echo '<h6 class = "actions align-center"> Username is duplicated. </h6>';
									}
								?>
							</div>
						</div>
						<div class="row uniform half">
							<div class="12u">
								<input type="text" name="email" id="email" value="<?php echo "$EM"; ?>" placeholder="Email" />
								<?php
									if ($DUP == 2) {
										echo '<h6 class = "actions align-center"> email is duplicated. </h6>';
									}
								?>
							</div>
						</div>
						<div class="row uniform half ">
							<div class="12u">
								<input type="password" name="password" id="password" value="" placeholder="Password",class="formBorder"/>
								
							</div>
						</div>
						<div class="row uniform half ">
							<div class="12u">
								<input type="password" name="password_validate" id="password_validate" value="" placeholder="Enter password again", class="formBorder"/>
								
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
					<h6 class = "actions align-center"> Tips: please enter only alphabetic and numeric letters for username and password. </h6>
				</div>
			</section>	
	<!-- Footer -->
	<?php
		footer();
	?>

	</body>
</html>
