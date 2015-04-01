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
							<h3>User Profile</h3>  	
<?php
	
	session_start();
	$username = $_SESSION['loginuser'];
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");	
	
	
	$SQLString = "SELECT * FROM account WHERE Username='$username'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysqli_fetch_assoc($result);
	/*$username['username']=$row['Username'];
	$username['firstname']=$row['Firstname'];
	$username['lastname']=$row['Lastname'];
	$username['email']=$row['Email'];
	$username['birthDay']=$row['Birthday'];
	$username['address']=$row['Address'];
	$username['phone']=$row['Phone'];*/
?> 
  <div id="right">
  
		<div class="us_contentBox">
		
		<form method="post" action="profile(editMode)-validate.php">

			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Username： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="username" type="text" value="<?php echo $row['Username']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
				
				 <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Email： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="email" type="text" value="<?php echo $row['Email']; ?>" placeholder="Email"/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">First Name： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="firstname" type="text" value="<?php echo $row['Firstname']; ?>" placeholder="Enter the First Name"/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Last name： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="lastname" type="text" value="<?php echo $row['Lastname']; ?>" placeholder="Enter the Last Name"/>
                  </td>
                </tr>
               
                
           
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF">Birthday： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF">
                  <div class="row uniform half collpase-at-2">
                  <div class="2u">
                  <select name="birthdayMonth"></option><option value="Month" selected>Month</option><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="1">November</option><option value="12">December</select>
                  </div>
                  <div class="2u">
                  <select name="birthdayDay"><option value="Day" selected>Day</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                  </div>
                  <div class="2u">
                  <select name="birthdayYear"><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="Year" selected>Year</option></select> 
                  	</div>
                    </div>
                	</td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Phone number： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="phone" type="text" value="<?php echo $row['Phone']; ?>" placeholder="Enter phone number"/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Mailing address： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="address" type="text" value="<?php echo $row['Address']; ?>" placeholder="Enter mailing address"/>
                  </td>
                </tr>
                 

		</table>
			<h3>Change Password</h3>
     		<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        		<tr>
        			<td width="20%" align="right" bgcolor="#FFFFFF">Original Password：</td>
        			<td width="80%" align="left" bgcolor="#FFFFFF"><input name="original_password" type="password" size="25"  class="formBorder" /></td>
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

	</div>

	</body>
</html>
