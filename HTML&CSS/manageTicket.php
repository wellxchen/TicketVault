<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Manage Events</title>
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
				<header>
					<h2>Manage event</h2>
					<p></p>
				</header>
				
				
				<div class="row">
					<div class="12u">
							<section class="box">
								<h3>My event</h3>
								<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th>Events Name</th>
												<th>Organization name</th>
                                                <th>Events Description</th>
												<th>Price</th>
											</tr>
										</thead>
									<html><head><title>MySQL Table Viewer</title></head><body>
									</body></html>
									<tbody>
										<?php
										
											session_start();
											$dbhandle = database_connect();
											
											$ouser = $_SESSION['organizationuser'];
											$SQLString = "SELECT * FROM organizationAccount WHERE Username = '$ouser'";
											$result = mysqli_query($dbhandle, $SQLString);
											$row = mysqli_fetch_assoc($result);
									
											$oname = $row['OrganizationName'];
											$result = mysqli_query($dbhandle, "SELECT * FROM event WHERE OrganizationName='$oname'");
									
											while($row=mysqli_fetch_array($result)){
												echo '<tr>';
												echo '<td>';
												echo '<a href = "eventdetail.php?event_name='.$row['Eventname'].'">'.$row['Eventname'].'</a><br>';
												echo '</td>';
												echo '<td>';
												echo $row['OrganizationName'];
												echo '</td>';
												echo '<td>';
												echo $row['Detail'];
												echo '</td>';
												echo '<td>';
												echo $row['Price'];
												echo '</td>';
												echo '</tr>';
											}
										?>									
										</tbody>
									</table>
								</div>
							</section>

					</div>
				</div>
				<div class="row">
					<div class="12u">

						<!-- Buttons -->
							

					</div>
				</div>
				
				
			</section>
		<!-- Footer -->
		<?php
			footer();
		?>
	</html>
