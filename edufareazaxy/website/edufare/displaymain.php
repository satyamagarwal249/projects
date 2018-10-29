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
 <script src="jquery-3.3.1.min.js"></script>
 
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
<?php $cars=array("course_id","course_name","institute","cost","free","rating","description","tag","start_date","duration","weekly_study","category","website","users");?>
	<!-- Header -->
	<header id="homes">
		<!-- Background Image class="bg-img" style="background-image: url('./img/background1.jpg'");-->
		<div  >
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
			<form id="form1" name="form1" method="post" action="displaymain.php">
				<div style="width:50%">
					
					
					</br>

					<table class="nt">
						<tr class="nr">
							<td style="font-size:15px;"> <label>Course Name :&nbsp; </label></td>
							<td style="width:10cm;">
							<input name="course_name" type="text" id="from" size="10" placeholder="........ENTER YOUR COURSE HERE......" value="<?php echo $_REQUEST["course_name"]; ?>" >
							</td>&nbsp;&nbsp;
							&nbsp;&nbsp;<td style="height:100%"><button class="w3-button w3-xlarge w3-circle w3-red w3-card-4" type="submit" name="button" id="button" color="green"value="SEARCH" >go</button></td>
							
							
						</tr>
					</table>
				</div>
				</br>
				<label>Category : </label>
				
				<select name="category">
				<option value="">	 all</option>
				<?php
								$sql = "SELECT distinct category  FROM course  order by category";
								$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
								while ($row = mysql_fetch_assoc($sql_result)) 
								{
								//	echo "<option value='".$row["name"]."'".($row["name"]==$_REQUEST["name"] ? " selected" : "").">".$row["name"]."</option>";
									echo "<option value='".$row["category"]."'>".$row['category']."</option>";
								}
						
								?>
						
						</select>
						<label>Duration : </label>
						<select name="duration">
								
								<option value="">	 SELECT		</option>
								<option value="1">LESS THAN 1 WEEK</option>
								<option value="3">2-3 WEEK				 </option>
								<option value="4">1 MONTH 				 </option>
								<option value="13">1-3MONTHS				 </option>
								<option value="26">3-6 MONTHS				 </option>
								<option value="52">6-12 MONTHS				 </option>
								<option value="104">1 YEAR</option>
						</select>
					
						
						<label>Institute</label>
							<select name="institute">
							<option value="">Select</option>
							<?php
								$sql = "SELECT distinct institute FROM  course ORDER BY institute";
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
								<option value="1">	1 star & above</option>
								<option value="2">		2 star & above</option>
								<option value="3">		3 star & above</option>
								<option value="4">		4 star & above</option>
								<option value="5">		5 star & above</option>
						</select>
						<?php include("range.php");?>
						<label>Website : </label>
						<select name="website">
								<option value="">SELECT</option>
								<?php
								$sql = "SELECT distinct website from course ORDER BY website";
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
								$sql = "SELECT distinct tag from course ORDER BY tag";
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
								<option value="1">free version</option>
								<option value="0">complete free</option>
						</select>
						
<div style="width:25%">
						<label>After: </label>
						<?PHP	
$start    =date("Y-m-d");?>
 <input type='DATE' name='after' value='<?php echo $start ?>'   > 
 </div>
				</br>
				<button class="w3-button w3-xlarge w3-circle w3-red w3-card-4" type="submit" name="button" id="button" color="green"value="FILTER" >filter</button>
				  </label>
				  <a href="displaymain.php" style="font-size:20px" class="w3-button w3-xlarge w3-circle w3-red w3-card-4">reset</a>
			</form>
		</center>
		


		<div   style="border:2px solid white;background-color:white; margin:2cm;">
			<center>
				<table id="customers" width="100%" border="1" cellspacing="1" cellpadding="4">
				  <tr>
					<th  name="sorting" value="0"  width="90" bgcolor="#CCCCCC"><strong>Course_id</strong></th>
					<th  name="sorting" value="1" width="90" bgcolor="#CCCCCC"><strong>Course_name</strong></th>
					<th  name="sorting" value="2" width="90" bgcolor="#CCCCCC"><strong>Institute</strong></th>
					<th  name="sorting" value="3"   width="90" bgcolor="#CCCCCC"><strong>Price(in dollars)</strong></th>
					<th  name="sorting" value="4" width="90" bgcolor="#CCCCCC"><strong>free version available</strong></th>
					<th  name="sorting" value="5"   width="90" bgcolor="#CCCCCC"><strong>Rating (stars)</strong></th>
					<th  name="sorting" value="6" width="90" bgcolor="#CCCCCC"><strong>Description</strong></th>
					<th  name="sorting" value="7" width="90" bgcolor="#CCCCCC"><strong>Tag</strong></th>
					<th  name="sorting" value="8" width="90" bgcolor="#CCCCCC"><strong>From date</strong></th>
					<th  name="sorting" value="9"   width="159" bgcolor="#CCCCCC"><strong>Duration (in weeks)</strong></th>
					<th  name="sorting" value="10"  width="159" bgcolor="#CCCCCC"><strong>weekly study(in hours)</strong></th>
					<th  name="sorting" value="11"  width="191" bgcolor="#CCCCCC"><strong>Category</strong></th>
					<th  name="sorting" value="12"  width="113" bgcolor="#CCCCCC"><strong>Website</strong></th>
					<th  name="sorting" value="13" width="113" bgcolor="#CCCCCC"><strong>users</strong></th>
					
					<th  width="90" bgcolor="#CCCCCC"><strong>Link</strong></th>
				  </tr>
				  </table>
				  <div  id="table-container" >
				  <table id="customers" width="100%" border="1" cellspacing="1" cellpadding="4">
				<?php
				
	
	
		if ($_REQUEST["course_name"]<>'') 
				{
					$search_string = " AND (course_name LIKE '%".mysql_real_escape_string($_REQUEST["course_name"])." %' or search LIKE '%".mysql_real_escape_string($_REQUEST["course_name"])." %' or category LIKE '%".mysql_real_escape_string($_REQUEST["course_name"])." %')";					
				}
				if ($_REQUEST["category"]<>'') 
				{
					$search_category = " AND category LIKE '%".mysql_real_escape_string($_REQUEST["category"])." %'";	
				}
				if ($_REQUEST["institute"]<>'')
				{
					$search_institute = " AND institute='".mysql_real_escape_string($_REQUEST["institute"])."'";	
				}
				#if ($_REQUEST["price"]<>'')
				
					
				
				if ($_REQUEST["rating"]<>'')
				{
					$search_rating = " AND rating >='".mysql_real_escape_string($_REQUEST["rating"])."'";	
				}
				if ($_REQUEST["tag"]<>'')
				{
					$search_tag = " AND tag='".mysql_real_escape_string($_REQUEST["tag"])."'";	
				}
				$dur=$_REQUEST["duration"];
				if ($dur<>'')
				{

				$search_duration = " AND duration<=".$dur."'";	
				}
				if ($_REQUEST["free"]<>'')
				{if ($_REQUEST["free"]=='1')
					$search_free= " AND free='1'";	
				 else 
				 $search_free= " AND cost='0'";	
				}
				if(isset ($_REQUEST["after"]))
					$search_after = " AND start_date>='".($_REQUEST["after"])."'";	
				if(isset ($_REQUEST["min"]) and isset($_REQUEST["max"]))
				$search_price = " AND cost between '".mysql_real_escape_string($_REQUEST["min"])."' and '".mysql_real_escape_string($_REQUEST["max"])."'";	
				if ($_REQUEST["website"]<>'')
				{
					$search_website = " AND website='".mysql_real_escape_string($_REQUEST["website"])."'";	
				}
				
				
				
					$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE 1".$search_string.$search_category.$search_institute.$search_price.$search_rating.$search_tag.$search_duration.$search_free.$search_website.$search_after;
					
				
				echo $sql;
				$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
				if (mysql_num_rows($sql_result)>0) {
					while ($row = mysql_fetch_assoc($sql_result)) {
				?>
				
				  <tr>
				  
					<td>  <?php echo $row["course_id"]; 			?>	   </td>
					<td>  <?php echo $row["course_name"]; 			?>	   </td>
					<td>  <?php echo $row["institute"]; 			?>	   </td>
					<td>  <?php echo $row["cost"]; 				?>    	   </td>
					<td>  <?php echo $row["free"]; 				?>	   </td>
					<td>  <?php echo $row["rating"]; 				?>	   </td>
					<td>  <?php echo $row["description"];			?>	   </td>
					<td>  <?php echo $row["tag"]; 					?>	   </td>
					<td>  <?php echo $row["start_date"];			?>	   </td>
					<td>  <?php echo $row["duration"];				?>		</td>
					<td>  <?php echo $row["weekly_study"]; 				?>	   </td>
					<td>  <?php echo $row["category"];				?>	   </td>
					<td>  <?php echo $row["website"]; 				?>	   </td>
					<td>  <?php echo $row["users"]; 				?>	   </td> 
					<td><a href="<?php echo $row["link"]; 		?>">LINK</a></td>
					
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
</div>

	
				</center>
			</div>
<script type="text/javascript">
 checkarr=[1,0,0,0,0,0,0,0,0,0,0,0,0,0];//0-13
//var checkarr={request:"1",key:"0"};
 one=0;
    $(document).ready(function()
                     {alert("sasasasasaidgasd"+$(this).attr("value"));
					 
					  
        $("th[name='sorting']").on('click',function()
           {
		   var keyword = $(this).attr("value");
					 // document.write(keyword);
				alert(keyword+  "one "+one);
		   if(keyword!=one)
		     {
			 checkarr[keyword]=1;
			 checkarr[one]=0;
			 one=keyword;
			  alert(keyword+  "one "+one);
			 }
			
			 else
             {
			 //document.write("yes");
			 checkarr[keyword]*=-1;
			 }
			  alert(keyword+  "one "+one);
			  //document.write(checkarr);
			$.ajax(
            {
                url:'disp2.php',
                type:'POST',
				data: { arr: checkarr, no : keyword },
                success:function(data)
                {
                    $("#table-container").html(data);
                    //alert(data);
                },
            });
        });
    });
	
</script>

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
						<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/?originalSubdomain=in"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
				<p>Copyright © 2019. All Rights Reserved. Designed by <a href="#" target="_blank">EduFare </a></p>
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

	
	<!-- jQuery Plugins -->
	</div>
<?php mysqli_close($con);?>
</body>

</html>