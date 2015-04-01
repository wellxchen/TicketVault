<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Search result</title>
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
				<header>
					<h2>Upcoming event</h2>
					<p></p>
				</header>
				
				
				<div class="row">
					<div class="12u">
							<section class="box">
								<h3>Table</h3>
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
											
											$dbhandle = mysqli_connect("mysql.hostinger.co.uk","u907917272_cs307","CS307TEAM8","u907917272_table");
											if (mysqli_connect_errno())
											{	
												echo "Failed to connect to MySQL: " . mysqli_connect_error();
  											}

  											$selected_val = $_GET['item'];  // Storing Selected Value In Variable
  											$searchword=$_GET['keyword'];		
											if($selected_val==1){
													$SQLString = "SELECT * FROM event WHERE Eventname = '".$searchword."' AND Category='Sport'";
													$result = mysqli_query($dbhandle, $SQLString);
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
											}
											else if ($selected_val==2){
												$SQLString = "SELECT * FROM event WHERE Eventname = '".$searchword."' AND Category='Gaming'";
													$result = mysqli_query($dbhandle, $SQLString);
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
											}
											else if($selected_val==3){

														//echo "3";	
												$SQLString = "SELECT * FROM event WHERE Eventname = '".$searchword."' AND Category='Picnic'";
													$result = mysqli_query($dbhandle, $SQLString);
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
											}
											else if ($selected_val==4) {
															//echo "4";
												$SQLString = "SELECT * FROM event WHERE Eventname = '".$searchword."' AND Category='Meeting'";
													$result = mysqli_query($dbhandle, $SQLString);
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
											}
											else{
														//echo "5";
												$SQLString = "SELECT * FROM event WHERE Eventname = '".$searchword."' AND Category='Trip'";
													$result = mysqli_query($dbhandle, $SQLString);
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




</body>
</html>
