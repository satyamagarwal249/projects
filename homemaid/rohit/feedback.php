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
<link rel="stylesheet" type="text/css" href="css/mystyle.css " />
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
			<form action="#" method="post">
				<div class="w3agile__text w3agile_banner_btom_login_left">
					<h4>I'm looking for a</h4>
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Maid</option>
						<option value="null">Plumber</option>   
					</select>
				</div>
				<div class="w3agile__text w3agile_banner_btom_login_left1">
					<h4>Aged</h4>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">20</option>
						<option value="null">21</option>   
						<option value="null">22</option>   
						<option value="null">23</option>   
						<option value="null">24</option>   
						<option value="null">25</option>  
						<option value="null">- - -</option>   					
					</select>
					<span>To </span>
					<select id="country2" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">30</option>
						<option value="null">31</option>   
						<option value="null">32</option>   
						<option value="null">33</option>   
						<option value="null">34</option>   
						<option value="null">35</option>  
						<option value="null">- - -</option>   					
					</select>
				</div>
				<div class="w3agile__text w3agile_banner_btom_login_left2">
					<h4>Experience</h4>
					<select id="country3" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">1 years</option>  
						<option value="null">2 years</option>   
						<option value="null">3 years</option>   
						<option value="null">4 years</option>   
						<option value="null">5 years</option> 					
					</select>
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
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<?php
	include "database.php"
	session_start();
	$jid = $_SESSION['job_id'];
	$wid = $_SESSION['wid'];
	$sql = "select wname from worker where worker_id = $wid";
	$r = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($r);
	$name = $row['wname'];
	?>
<div class="feedback">
		<div class="container">
			<h2>Tell us what you think of us</h2>
			<p>Please feel free to post your questions, comments and suggestions. We are eager to assist you and serve you better.</p>
			<p class="text-right"><span style="color:red;font-weight: 100;">*</span>Mandatory</p>
			<form action="fsubmit.php" method="post">
				<div class="col-md-6">
					<div class="agileits">
						<label>Job Id: <?php echo $jid;?></label>
					</div>
					
					<div class="agileits">
						<label>Worker Id: <?php echo $wid;?></label>
					</div>
					<div class="agileits">
						<label>Worker name: <?php echo $name;?></label>
					</div>
					<div class="agileits">
						<fieldset class="form-group">
    
    <legend class="form-legend">Rating:</legend>
    
    <div class="form-item">
      
      <input id="rating-5" name="rating" type="radio" value="5" />
      <label for="rating-5" data-value="5">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">5</span>
      </label>
      <input id="rating-4" name="rating" type="radio" value="4" />
      <label for="rating-4" data-value="4">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">4</span>
      </label>
      <input id="rating-3" name="rating" type="radio" value="3" />
      <label for="rating-3" data-value="3">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">3</span>
      </label>
      <input id="rating-2" name="rating" type="radio" value="2" />
      <label for="rating-2" data-value="2">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">2</span>
      </label>
      <input id="rating-1" name="rating" type="radio" value="1" />
      <label for="rating-1" data-value="1">
        <span class="rating-star">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star"></i>
        </span>
        <span class="ir">1</span>
      </label>
      
      <div class="form-action">
        <input class="btn-reset" type="reset" value="Reset" />   
      </div>

      <div class="form-output">
        ? / 5
      </div>
      
    </div>
    
  </fieldset>
  </div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12 w3_feedbacktextmessage">
					<label><span style="color:red;font-weight: 100;">*</span>Feedback:</label>
					<textarea name="Comments" placeholder=""></textarea>
				</div>
				<div class="clearfix"></div>
				<div class="w3_submit">
					<input type="submit" value="Submit"/>
				</div>
			</form>
		</div>
	</div>
	<!-- //feedback -->
	