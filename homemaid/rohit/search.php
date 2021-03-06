<?php
	session_start();
?>

<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<title>Profile</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- /online fonts -->
<!-- nav smooth scroll -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>	
<!-- //nav smooth scroll -->			
<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		 });
		</script>
<!-- //Calendar -->			
<link rel="stylesheet" href="css/intlTelInput.css">
</head>
<!-- //head -->
<!-- body -->
<body>

<!-- header -->
<header>
	<!--  Navigation Start -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
          <div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Browse Profiles by</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li><a href="matches.html">All Profiles</a></li>
								<li class="has-children">
									<a href="#">Language</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="l_list.html">Hindi</a></li>
												<li><a href="l_list.html">English</a> </li>
									</ul> <!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">City</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="city_list.html">Kanpur</a></li> 
												<li><a href="city_list.html">Lucknow</a></li> 
												<li><a href="city_list.html">Noida</a></li> 
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								<li class="has-children">
									<a href="#">Occupation</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
												<li><a href="o_list.html">Maid </a></li> 
												<li><a href="o_list.html">Plumber </a></li>
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li class="active"><a href="index.html">Home</a></li>
		            <li><a href="about.html">About</a></li>
		            <li><a href="search.html">Search</a></li>
		            <li><a href="app.html" target="_blank">Mobile</a></li>
					  
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quick Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <div class="banner-bottom-login">
		<div class="w3agile_banner_btom_login">
			<form action="search.php" method="post">
				<div class="w3agile__text w3agile_banner_btom_login_left">
					<h4>I'm looking for a</h4>
					<select name="category" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Maid</option>
						<option value="null">Plumber</option>
						<option value="null">Electrician</option>
						<option value="null">Carpenter</option>   
						<option value="null">Beautician</option>
						<option value="null">Cook</option>
					</select>
				</div>
				<div class="w3agile__text w3agile_banner_btom_login_left1">
					<h4>Pay</h4>
					<input type="text" style="width: 70px; height: 30px" name="pays">
					<span>To </span>
					<input type="text" style="width: 70px; height: 30px" name="paye">
				</div>
				<div class="w3agile__text w3agile_banner_btom_login_left1">
					<h4>Description</h4>
					<textarea rows="4" cols="50" name="overview"></textarea>
				</div>
				<div class="w3agile_banner_btom_login_left3">
					<input type="submit" value="Search" />
				</div>
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		              </ul>
		            </li>
		            <li class="last"><a href="contact.html">Contacts</a></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> 
</header>
<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->
</div>
</div>

<script src="d/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="d/vendor/bootstrap/js/popper.js"></script>
	<script src="d/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="d/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="d/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="d/js/main.js"></script>

<?php 
include "database.php";
$cat = $_POST['category'];
$sql6 = "select category_id from category where category_name='$cat'";
$res = mysqli_query($con,$sql6);
$d = mysqli_fetch_assoc($res);
$cid = $d['category_id'];
$pays = $_POST['pays'];
$paye = $_POST['paye'];
$overview = $_POST['overview'];
$start = $_POST['start'];
$_SESSION['overview'] =$overview;
$sql = "select * from worker where category_id = '$cid'";
$r = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($r)){
	$wid = $row['worker_id'];
	$wname = $row['wname'];
	$ph = $row['phone'];
	$sql1 = "select avg(rating) from feedback where worker_id=$wid";
	$r1 = mysqli_query($con,$sql1);
	$rat = mysqli_fetch_assoc($r1);
	$rat = $rat['avg(rating)'];
	$pay = $row['expectedpay'];
	//echo "hllo";
	
	?>
		<table border="4" cellpadding="10px" cellspacing="10" height="100%" width="60%" style="background-color:white;display:block;border-radius: 10px;border: 3px solid #BADA55;">  
		<tr>
			<td>NAME:<?php echo $wid."  ".$wname?></td>
		</tr>
		
		<?php
			if($wtype == 'full'){
				$sql = "select * from fulltime where worker_id =$wid";
				$res = mysqli_query($con,$sql);
				$row1 = mysqli_fetch_assoc($res);
		?>
		<tr>
			<td>Start Time: <?php echo $row1['start'];?></td>
			<td>End Time: <?php echo $row1['end'];?></td>
			
			</tr><?php }?>
		<tr>
			<td>Phone: <?php echo $ph;?></td>
			<td>Rating: <?php echo $rat;?></td>
			</tr>
		<tr><td>
			<form method = "post" action = "appoint.php">
			<button type = "submit" name = "<?php echo $wid?>">Appoint</button></form>
			</td>
		</tr>
		
		</table><?php }?>
	</br>
	</center>