<?php


error_reporting(0);
include("config.php");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>EDUFARE</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	
	<style>
		body
		{
			background-color:silver;
			font-color:dark black;
			background-image: url("./img/background2.jpg");
		}
		 td
		{
			font-family:Arial, Helvetica, sans-serif;
			font-size:12px;
			text-align:center;
		}
		th
		{
			border:2px solid;
			align: center;
		}
		table,tr
		{
			border:1px solid gray;
			text-align:center;
		}
		label
		{
			color:#FF5733;
			font-family:verdana;
			font-size:20px;
		}
		.nr,.nt
		{
			border: 2px solid white ;
		}
		#customers 
		{
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#customers td, #customers th
		{
			border: 1px solid #ddd;
			padding: 8px;
		}

		#customers tr:nth-child(even)
		{
			background-color: #f2f2f2;
		}

		#customers tr:hover 
		{
			background-color: #ddd;
		}

		#customers th 
		{
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
	</style>
	

</head>
<body>

	<!-- Header -->
	<header id="homes">
		<!-- Background Image-->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.png" alt="EduFare">
							<img class="logo-alt" src="img/logo-alt.png" alt="EduFare">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html">About</a></li>
					<li><a href="index.html">Services</a></li>
					<li><a href="index.html">Team</a></li>
					<li><a href="index.html">SignUp</a></li>
					<li><a href="index.html">Contact</a></li>
				</ul>
					
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->
		

	</header>
	<!-- /Header -->
		<center>
			<form id="form1" name="form1" method="post" action="display5.php">
				<div style="width:50%">
					
					
					</br>
					<table class="nt">
						<tr class="nr">
							<td style="font-size:15px;"> <label>Course Name :&nbsp; </label></td>
							<td style="width:10cm;"><input name="course_name" type="text" id="from" size="10" placeholder="........ENTER YOUR COURSE HERE......" value="<?php echo $_REQUEST["course_name"]; ?>" ></td>&nbsp;&nbsp;
							&nbsp;&nbsp;<td style="height:100%"><button class="w3-button w3-xlarge w3-circle w3-red w3-card-4" type="submit" name="button" id="button" color="green"value="SEARCH" >+</button></td>
							
							
						</tr>
					</table>
				</div>
				</br>
				<label>Category : </label>
						<select name="category">
								<option value="">SELECT</option>
								<option value="java">JAVA</option>
								<option value="android">Android</option>
								<option value="C">C</option>
								<option value="Python">Python</option>
								<option value="HTML">HTML</option>
						</select>
						<label>Price : </label>
						<select name="price">
								<option value="">SELECT</option>
								<option value="1000">0-1000</option>
								<option value="2000">1001-2000</option>
								<option value="3000">2001-3000</option>
								<option value="4000">3001-4000</option>
								<option value="5000">4001-above</option>
						</select>
						
						<label>Duration : </label>
						<select name="duration">
								<option value="">SELECT</option>
						<?php
								$sql = "SELECT * FROM ".$SETTINGS["data_table"]." GROUP BY duration ORDER BY duration";
								$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
								while ($row = mysql_fetch_assoc($sql_result)) 
								{
									echo "<option value='".$row["duration"]."'".($row["duration"]==$_REQUEST["duration"] ? " selected" : "").">".$row["duration"]."</option>";
								}
							?>
						
						</select>
						<label>Institute</label>
							<select name="institute">
							<option value="">Select</option>
							<?php
								$sql = "SELECT * FROM ".$SETTINGS["data_table"]." GROUP BY institute ORDER BY institute";
								$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
								while ($row = mysql_fetch_assoc($sql_result)) 
								{
									echo "<option value='".$row["institute"]."'".($row["institute"]==$_REQUEST["institute"] ? " selected" : "").">".$row["institute"]."</option>";
								}
							?>
						</select></br>
						<label>Rating : </label>
						<select name="rating">
								<option value="">SELECT</option>
								<option value="null">1 star</option>
								<option value="2">2 star</option>
								<option value="3">3 star</option>
								<option value="4">4 star</option>
								<option value="5">5 star</option>
						</select>
						
						<label>Website : </label>
						<select name="website">
								<option value="">SELECT</option>
								<?php
								$sql = "SELECT * FROM ".$SETTINGS["data_table"]." GROUP BY website ORDER BY website";
								$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
								while ($row = mysql_fetch_assoc($sql_result)) 
								{
									echo "<option value='".$row["website"]."'".($row["website"]==$_REQUEST["website"] ? " selected" : "").">".$row["website"]."</option>";
								}
							?>
						</select>
						<label>tag : </label>
						<select name="tag">
								<option value="">SELECT</option>
								<?php
								$sql = "SELECT * FROM ".$SETTINGS["data_table"]." GROUP BY tag ORDER BY tag";
								$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
								while ($row = mysql_fetch_assoc($sql_result)) 
								{
									echo "<option value='".$row["tag"]."'".($row["tag"]==$_REQUEST["tag"] ? " selected" : "").">".$row["tag"]."</option>";
								}
							?>
						</select>
						<label>Free : </label>
						<select name="free">
								<option value="">SELECT</option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
						</select>
				</br>
				<button class="w3-button w3-xlarge w3-circle w3-red w3-card-4" type="submit" name="button" id="button" color="green"value="FILTER" >filter</button>
				  </label>
				  <a href="display5.php" style="font-size:20px" class="w3-button w3-xlarge w3-circle w3-red w3-card-4">reset</a>
			</form>
		</center>
		<div style="border:2px solid white;background-color:white; margin:2cm;">
			<center>
				<table id="customers" width="100%" border="1" cellspacing="1" cellpadding="4">
				  <tr>
					<th width="90" bgcolor="#CCCCCC"><strong>Course_id</strong></th>
					<th width="90" bgcolor="#CCCCCC"><strong>Course_name</strong></th>
					<th width="90" bgcolor="#CCCCCC"><strong>Institute</strong></th>
					<th width="90" bgcolor="#CCCCCC"><strong>Price</strong></th>
					<th width="90" bgcolor="#CCCCCC"><strong>Rating</strong></th>
					<th width="90" bgcolor="#CCCCCC"><strong>Description</strong></th>
					<th width="90" bgcolor="#CCCCCC"><strong>Tag</strong></th>
					<th width="90" bgcolor="#CCCCCC"><strong>From date</strong></th>
					<th width="159" bgcolor="#CCCCCC"><strong>Duration</strong></th>
					<th width="191" bgcolor="#CCCCCC"><strong>Category</strong></th>
					<th width="113" bgcolor="#CCCCCC"><strong>Website</strong></th>
					<th width="90" bgcolor="#CCCCCC"><strong>Link</strong></th>
				  </tr>
				<?php
				if ($_REQUEST["course_name"]<>'') 
				{
					$search_string = " AND course_name LIKE '%".mysql_real_escape_string($_REQUEST["course_name"])." %'";	
				}
				if ($_REQUEST["institute"]<>'')
				{
					$search_institute = " AND institute='".mysql_real_escape_string($_REQUEST["institute"])."'";	
				}
				if ($_REQUEST["price"]<>'')
				{
					$search_price = " AND price='".mysql_real_escape_string($_REQUEST["price"])."'";	
				}
				if ($_REQUEST["rating"]<>'')
				{
					$search_rating = " AND rating='".mysql_real_escape_string($_REQUEST["rating"])."'";	
				}
				if ($_REQUEST["tag"]<>'')
				{
					$search_tag = " AND tag='".mysql_real_escape_string($_REQUEST["tag"])."'";	
				}
				if ($_REQUEST["duration"]<>'')
				{
					$search_duration = " AND duration='".mysql_real_escape_string($_REQUEST["duration"])."'";	
				}
				if ($_REQUEST["category"]<>'')
				{
					$search_category = " AND category='".mysql_real_escape_string($_REQUEST["category"])."'";	
				}
				if ($_REQUEST["website"]<>'')
				{
					$search_website = " AND duration='".mysql_real_escape_string($_REQUEST["website"])."'";	
				}
				
				
				if ($_REQUEST["from"]<>'' and $_REQUEST["to"]<>'') {
					$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE from_date >= '".mysql_real_escape_string($_REQUEST["from"])."' AND to_date <= '".mysql_real_escape_string($_REQUEST["to"])."'".$search_string.$search_city;
				} else if ($_REQUEST["from"]<>'') {
					$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE from_date >= '".mysql_real_escape_string($_REQUEST["from"])."'".$search_string.$search_city;
				} else if ($_REQUEST["to"]<>'') {
					$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE to_date <= '".mysql_real_escape_string($_REQUEST["to"])."'".$search_string.$search_city;
				} else {
					$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE course_id >0".$search_string.$search_institute.$search_price.$search_rating.$search_tag.$search_duration.$search_category.$search_website;
				}
				$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
				if (mysql_num_rows($sql_result)>0) {
					while ($row = mysql_fetch_assoc($sql_result)) {
				?>
				  <tr>
					<td><?php echo $row["course_id"]; ?></td>
					<td><?php echo $row["course_name"]; ?></td>
					<td><?php echo $row["institute"]; ?></td>
					<td>Rs. <?php echo $row["cost"]; ?></td>
					<td><?php echo $row["rating"]; ?></td>
					<td><?php echo $row["description"]; ?></td>
					<td><?php echo $row["tag"]; ?></td>
					<td><?php echo $row["start_date"]; ?></td>
					<td><?php echo $row["duration"]; ?> hrs.</td>
					<td><?php echo $row["category"]; ?></td>
					<td><?php echo $row["website"]; ?></td>
					<td><a href="<?php echo $row["link"]; ?>">LINK</a></td>
				  </tr>
				<?php
					}
				} else {
				?>
				<tr><td colspan="5">No results found.</td>
				<?php	
				}
				?>
				</table>


				<script>
					$(function() {
						var dates = $( "#from, #to" ).datepicker({
							defaultDate: "+1w",
							changeMonth: true,
							numberOfMonths: 2,
							dateFormat: 'yy-mm-dd',
							onSelect: function( selectedDate ) {
								var option = this.id == "from" ? "minDate" : "maxDate",
									instance = $( this ).data( "datepicker" ),
									date = $.datepicker.parseDate(
										instance.settings.dateFormat ||
										$.datepicker._defaults.dateFormat,
										selectedDate, instance.settings );
								dates.not( this ).datepicker( "option", option, date );
							}
						});
					});
					</script>
	
				</center>
			</div>

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="img/logo-alt.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
				<p>Copyright © 2019. All Rights Reserved. Designed by <a href="#" target="_blank">EduFare </a>For more tag Templates <a href="https://colorlib.com">  Click</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	</div>
<?phpmysqli_close($con);?>
</body>

</html>