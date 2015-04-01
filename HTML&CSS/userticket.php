<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Upcoming event</title>
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
					<h2>Welcome Back</h2>
					<?php
						session_start();
						echo "<h4>",$_SESSION['loginuser'],'</h4>';
					?>
					<p></p>
				</header>
				
				
				<div class="row">
					<div class="12u">
							<section class="box">
								<h4>Here is the event that your already booked</h4>
								<div class="table-wrapper">
									<table>
									
										<thead>
											<tr>
												<th>Events Name</th>
												<th>Organization name</th>
                                                <th>Events Description</th>
												<th>Price</th>
												<th>Number of tickets booked</th>
											</tr>
										</thead>
									<html><head><title>MySQL Table Viewer</title></head><body>
									</body></html>
									<tbody>
										<?php
											$username = $_SESSION['loginuser'];
											$dbhandle = database_connect();	
											mysqli_query($dbhandle,"USE u907917272_cs307");											
											$result = mysqli_query($dbhandle, "SELECT * FROM ticket WHERE Username='$username' ");
											while($row = mysqli_fetch_assoc($result)){
												$eventid = $row['EventID'];
												$result_event = mysqli_query($dbhandle, "SELECT * FROM event WHERE EventID='$eventid' ");
												$row_event=mysqli_fetch_array($result_event);
												echo '<tr>';
												echo '<td>';
												echo '<a href = "eventdetail.php?event_name='.$row_event['Eventname'].'">'.$row_event['Eventname'].'</a><br>';
												echo '</td>';
												echo '<td>';
												echo $row_event['OrganizationName'];
												echo '</td>';
												echo '<td>';
												echo $row_event['Detail'];
												echo '</td>';
												echo '<td>';
												echo $row_event['Price'];
												echo '</td>';
												echo '<td>';
												echo $row['Quantity'];
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
