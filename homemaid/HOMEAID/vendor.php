<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<title>Your Title</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<script type='text/javascript' src='js/regi.js'></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/toggle.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- nav smooth scroll -->
<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 100%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

</style>


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
					logo	 
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
</header>
</body>
<!-- /header -->
<body style="background-color:gray;">
	<!-- register -->
	<div class="clearfix"></div>
	<div  class="agileits-register">
	<h3><center>Vendor Register Details</center></h3>
		<div class="column" style="background-color:white;">
			<form action="#" method="post">
				<div class="w3_modal_body_grid">
					<span>Category:</span>
					<select id="w3_country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Select</option>
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Skill:</span>
					<input type="text" name="skill" placeholder=" " required="*"/>
				</div>
				
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth:</span>
					<input class="date" id="datepicker" name="dob" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
				<span>Mobile No:</span>
					<input type="text" name="mobile" placeholder=" " required="*"/>
				  
				</div>
				<div class="w3_modal_body_grid">
					<span>Work Type:</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label class="radio"><input type="radio" name="type" checked="" onclick="myFunctionhide()"><i></i>Service</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="type" onclick="myFunctionshow()"><i></i>Full Time</label>
						</div>
						<div class="clearfix"> </div>
						<div class="clearfix"> </div>
						</br>
					</div>
				</div></br>
				<div class="w3_modal_body_grid">
					<span>Experience:</span>
					<input type="text" name="experience" placeholder=" " required="*"/>
				</div>
				
				</br>
			</form>
			</br>
		</div>
		<div class="clearfix"></div>
		<div class="clearfix"></div>
		<div class="column" id="myDIV">
			<form action="#" method="post">
				<div class="fulltime" style="background-color:white;">
						<div class="w3_modal_body_grid w3_modal_body_grid1">
							<span>Education:</span>
							<input type="text" name="education" placeholder=" " required="*"/>
						</div>
						<div class="w3_modal_body_grid">
							<span>Married:</span>
							<div class="w3_gender">
								<div class="colr ert">
									<label class="radio"><input type="radio" name="married" checked=""><i></i>Yes</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="married"><i></i>No</label>
								</div>
								<div class="clearfix"> </div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="w3_modal_body_grid">
							<span>Child:</span>
							<div class="w3_gender">
								<div class="colr ert">
									<label class="radio"><input type="radio" name="child" checked=""><i></i>1</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="child"><i></i>2</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="child"><i></i>3</label>
								</div>
								<div class="colr">
									<label class="radio"><input type="radio" name="child"><i></i>more</label>
								</div>
								<div class="clearfix"> </div>
								<div class="clearfix"> </div>
								</br>
							</div>
						</div>
						<div class="w3_modal_body_grid w3_modal_body_grid1">
							<span>Woring Hours:</span>
							<input type="text" name="Expectedpay" placeholder=" " required="*"/>
						</div>
						<div class="w3_modal_body_grid w3_modal_body_grid1">
							<span>Start time:</span>
							<input class="date" id="datepicker" name="start_time" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
						</div>
						<div class="w3_modal_body_grid w3_modal_body_grid1">
							<span>End Time:</span>
							<input class="date" id="datepicker" name="end_time" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
						</div>
				</div>
				
			</form>
			
		</div>
		<input type="submit" value="Register me" />
				<div class="clearfix"></div>
	</div>
	<script>
		function myFunctionshow()
		{
			var x = document.getElementById("myDIV");
			if (x.style.display === "none")
			{
				x.style.display = "block";
			} 
			else 
			{
				x.style.display = "none";
			}
		}
		function myFunctionhide()
		{
			var x = document.getElementById("myDIV");
			x.style.display = "none";
		}
		
	</script>

	<!-- register -->
</body>
<!-- footer -->

<footer style="float:bottom-login; display:block;">
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">

				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="feedback.html">Feedback</a></li>  
							<li><a href="help.html">Help</a></li>  
							<li><a href="tips.html">Safety Tips</a></li>
							<li><a href="typo.html">Typography</a></li>
							<li><a href="icons.html">Icons Page</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Quick links</h3>
						<ul>
							<li><a href="terms.html">Terms of use</a></li>
							<li><a href="privacy_policy.html">Privacy Policy</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="sitemap.html">Sitemap</a></li>
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Follow Us on</h3>
						<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>	
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						</section>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<div class="copy-right"> 
		<div class="container">
			<p>© 2017 Match. All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
		</div>
	</div> 
</footer>
<!-- //footer -->	
<!-- menu js aim -->
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
							
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- for smooth scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	</script>

	<!-- //for smooth scrolling -->

	<!-- //body -->

</html>
<!-- //html -->