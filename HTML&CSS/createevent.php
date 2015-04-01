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
				if (frm.eventname.value == "") {alert('Eventname is required.');frm.username.focus();return false;}
				if (frm.price.value == "") {alert('Price is required.');frm.email.focus();return false;}
				if (frm.location.value == "") {alert('Location is required.');frm.password.focus();return false;}
				if (frm.remainingtickets.value == "") {alert('Remaining tickets is required.');frm.password.focus();return false;}
			
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
							<h3>Create Event</h3>  	
<?php
	session_start();
?> 
  <div id="right">
  
		<div class="us_contentBox">
		
		<form method="post" action="php/create_event.php">

			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
			
				 <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Organization name： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="orgname" type="text" value="<?php echo $_SESSION['organizationuser'] ?>" placeholder="Please enter event name"/readonly>
                  </td>
                </tr>

				 <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Event name： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="eventname" type="text" value="" placeholder="Please enter event name"/>
                  </td>
                </tr>
				
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Detail： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="detail" type="text" value="" placeholder="Please enter details"/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Price： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="price" type="text" value="" placeholder="Please enter the price"/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Location： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="location" type="text" value="" placeholder=""/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Total tickets： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="remainingtickets" type="text" value="" class="formBorder"/>
                  </td>
                </tr>
                
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Category： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
				  <div class="row uniform half collpase-at-2">
                  <div class="6u">
                  <select name="category"></option><option value="category" selected>Please Select</option><option value="Sport">Sport</option><option value="Gaming">Gaming</option><option value="Picnic">Picnic</option><option value="Meeting">Meeting</option><option value="Trip">Trip</option><</select>
                  </div>
                  </td>
                </tr>
                
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF">Date： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF">
                  <div class="row uniform half collpase-at-2">
                  <div class="2u">
                  <select name="EventMonth"></option><option value="Month" selected>Month</option><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</select>
                  </div>
                  <div class="2u">
                  <select name="EventDay"><option value="Day" selected>Day</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                  </div>
                  <div class="2u">
                  <select name="EventYear"><option value="2014">2014</option><option value="2015">2015</option><option value="Year" selected>Year</option></select> 
                  	</div>
                  <div class="2u">
                  <select name="TimeHours"><option value="Hours" selected>Hours</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option></select>
                  </div>
               <div class="2u">
                  <select name="TimeMinute"><option value="Minute" selected>Minute</option><option value="00">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
                  </div>
                    
                             
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
