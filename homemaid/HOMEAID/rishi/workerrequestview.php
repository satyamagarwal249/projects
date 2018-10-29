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
    height: 100%; /* Should be removed. Only for demonstration */
}
tr,td
	{
		border: 3px solid white;
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
<<body style="height:100%; background:url("../images/couple4.jpg") no-repeat 0px 0px;">
</br>
</br>
	<center>
		<table border="4" cellpadding="10px" cellspacing="10" height="100%" width="60%" style="background-color:white;display:block;border-radius: 10px;border: 3px solid #BADA55;">  
		<tr>
			<td width="20%" rowspan="5"><img class="logo" src="img/*.png" alt="employee" style="width:40%; height:40%; margin-bottom:0.5cm"></td>
			<td width="50%" style="text-align: justify;" colspan="2" ><center>Employee Name</center></td>
		</tr>
		<tr>
			<td width="50%">Category </td>
			<td width="50%" >SubCategory</td>
		</tr>
		
		<tr>
			<td width="40%" style="text-align: justify;">Skill</td>
			<td width="60%" style="text-align: justify;">Type</td>
			
		</tr>
		<tr>
			<td width="40%" colspan="2" >Experience</td>
			
		</tr>
		
		<tr>
			<td width="40%" >Expected pay</td>
			<td width="40%" >A</td>
		</tr>
		<tr>
			<td width="40%" rowspan="2"></td>
			<td width="40%" style="text-align: justify;">Mobile</td>
			<td width="40%" >Working hours</td>
		</tr>
		<tr>
			<td width="40%" >
			
				<div class="clearfix"></div>
								<p class="w3ls-login"><a href="#" data-toggle="modal" data-target="#myModal">Accept</a></p>
					<center>
						<!-- Modal -->
								<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
								  <div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
										<h4 class="modal-title">!!..More Entry..!!</h4>
									  </div>
									  <div class="modal-body">
										<div class="login-w3ls">
											<form id="signin" action="#" method="post">
												<label>User Name </label>
												<input type="text" name="User Name" placeholder="Username" required="">
												<label>Password</label>
												<input type="password" name="Password" placeholder="Password" required="">	
												
												<div class="clearfix"> </div>
												<input type="submit" name="submit" value="Login">
												<div class="clearfix"> </div>
													
											</form>
										</div>
									  </div>
									</div>
								  </div>
								</div>
								<!-- //Modal -->
								</br>
								</center>	
							</div>
						<td width="50%" ><a href="#" class="medium7" title="Link">Reject</a></td>
					</tr>
					
				</table>
				</br>
				</center>	
</body><!-- footer -->

<footer style="float:bottom-login; display:block;">
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">

				<div class="col-md-8 address-right">
					
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<div class="copy-right"> 
		<div class="container">
			<p>@2019 PSIT. All rights reserved | Design by <a href="http://w3layouts.com"> Invincibes.</a></p>
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