<?php
include('conn.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Ez-Parking</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Coda:400,800&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body> 
<div class="main-agile banner-2">
	<!-- header -->
	<div class="header-w3layouts"> 
	<!-- Navigation -->
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Ez-Parking</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div> 
		<div class="logo-agile-1"> 
			<h1><a class="logo" href="index.html"><i class="fa fa-car" aria-hidden="true"></i>Ez-Parking</a></h1>
		</div> 
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class=""><a href="index.php">Home</a></li>
					<li class="active" ><a href="services.php">About</a></li>
					<li><a class="" href="Rentdriveway.php">Rent driveway</a></li>
					<li><a class="" href="help.php">Help</a></li>
					<li><a class="" href="contact.php">Contact Us</a></li>
					<?php
				
					if(!(isset($_SESSION['name'])))
					{
						?>
						<li><a class="" href="login.php">Login</a></li>
					    <li><a class="" href="regform.php">Sign up</a></li>
						<?php
					}?>

					<?php
					
					if((isset($_SESSION['name'])))
					{
						?>
						<li><a class="" href="logout.php">logout</a></li>
						<?php
					}?>

					
			</ul>
			<div class="w3ls-social-icons-2">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
			</div>
		</div>
		<!-- //navbar-collapse -->
	</nav>  
	<div class="clearfix"> </div>
</div>	
	<!-- //header -->
</div> 
<!-- services -->
<div class="banner-bottom">
	<div class="container">
		<h3 class="agile-title">Our Services</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-car sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<h3>Car <span>Parking </span>Management</h3>
		<p class="text-w3l-services">Maximise yield from underused car parks and vacant land, or transform payments with the India’s favourite parking app.</p>
		<div class='film_roll_container'>
			<div id='film_roll_2'>
				<div id='fr2_0'><img src="images/22.jpg" alt=" " class="img-responsive" /></div>
				<div id='fr2_1'><img src="images/66.jpg" alt=" " class="img-responsive" /></div>
				<div id='fr2_2'><img src="images/33.jpg" alt=" " class="img-responsive" /></div>
				<div id='fr2_3'><img src="images/44.jpg" alt=" " class="img-responsive" /></div>
				<div id='fr2_4'><img src="images/55.jpg" alt=" " class="img-responsive" /></div>
			</div>
			<a href='#' class='btn btn-primary w3l_btn' id='film_roll_2_left'><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a> 
			<a href='#' class='btn btn-primary w3l_btn' id='film_roll_2_right'><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> 
		</div>
		<div class="w3_banner_bottom_service">
			<div class="col-md-4 w3_banner_bottom_service1">
				<div class="col-xs-4 w3layouts_banner_bottom_servicel">
					<div class="agile-hvr-icon-pulse-shrink agileits_w3layouts_thumb">
					</div>
				</div>
				<div class="col-xs-8 w3layouts_banner_bottom_servicer">
					<h4>Discover amazing spaces</h4>
					<p>Find parking anywhere, for now or for later compare prices and pick the place thats best for you.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 w3_banner_bottom_service1">
				<div class="col-xs-4 w3layouts_banner_bottom_servicel">
					<div class="agile-hvr-icon-pulse-shrink agileits_w3layouts_gift">
					</div>
				</div>
				<div class="col-xs-8 w3layouts_banner_bottom_servicer">
					<h4>Reserve prepay and save</h4>
					<p>Book a space in just few easy clicks and save your precious time.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 w3_banner_bottom_service1">
				<div class="col-xs-4 w3layouts_banner_bottom_servicel">
					<div class="agile-hvr-icon-pulse-shrink agileits_w3layouts_heart">
					</div>
				</div>
				<div class="col-xs-8 w3layouts_banner_bottom_servicer">
					<h4>Drive arrive and park</h4>
					<p>Enter easily with your mobile parking pass- pull in and go do your thing. </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //services -->
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
		<h3 class="agile-title">Our Vision</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-car sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="grid_3 grid_5 agile">
				<div class="well" style="font-size: 20px">
					<center>
						Parking is one of the most difficult and dysfunctional parts of modern city life – and that’s no surprise, as it’s barely changed for decades.<br><br>

						Over 23% of car journeys involve some kind of parking pain – that’s 190 million trips a month – with drivers suffering from both uncertainty (availability, prices, restrictions) and inconvenience (full car parks, slow payments, unfair fines) on a daily basis.<br><br>

						Yet we have the technology to make parking function seamlessly – and so much space is lying underutilised. There has to be a better system…<br><br>

						At Ez-Parking, we we’re on a mission to make parking easy. Our 5-star apps help over 1.5 million drivers enjoy an easier parking experience – and our award-winning car park technology helps over 20,000 property owners make more efficient use of their assets.<br><br>

						Ez-Parking is dedicated to solving the parking problem by cracking both sides of the market – making parking easy and efficient for everyone.<br><br>
					</center>
				</div>
		    </div>
		
	</div>
</div>
<!-- stats -->
<div class="stats">
	<div class="container">
		<div class="stats-info">
			<div class="col-md-6 col-sm-6 stats-grid slideanim">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1200' data-delay='.5' data-increment="1">1200</div>
				<h4 class="stats-info">CUSTOMERS</h4>
			</div>
			<div class="col-md-6 col-sm-6 stats-grid slideanim">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3000' data-delay='.5' data-increment="1">3000</div>
				<h4 class="stats-info">DESTINATIONS</h4>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //stats -->
<!-- Popular -->
<div class="albums">
	<div class="container">
		<h3 class="agile-title">LATEST POST</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-car sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="col-md-6 w3lsalbums-grid">
			<div class="albums-left"> 
				<div class="wthree-almub">  
				</div>
			</div>
			<div class="albums-right">
				<h4>Lightning-Fast Parking</h4>
				<p>Park your car in seconds and go do your thing by making payments easily.</p>
				<a class="w3more" href="services.php"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-6 w3lsalbums-grid">
			<div class="albums-left"> 
				<div class="wthree-almub wthree-almub2"> 
				</div> 
			</div>
			<div class="albums-right">
				<h4>No-Surprise Pricing</h4>
				<p>Compare prices, see your total cost up-front, save up to 50% and enjoy the cheapest prices.</p>
				<a class="w3more" href="services.php"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
			</div>
			<div class="clearfix"></div>
		</div>  
		<div class="col-md-6 w3lsalbums-grid">
			<div class="albums1-right"> 
				<div class="wthree-almub wthree-almub3">  
				</div>
			</div>
			<div class="albums1-left">
				<h4>SEARCH</h4>
				<p>Search and compare all available parking options and prices at parking lots in 40 cities in real-time.</p>
				<a class="w3more" href="services.php"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
			</div> 
			<div class="clearfix"></div>
		</div>
		<div class="col-md-6 w3lsalbums-grid">
			<div class="albums1-right"> 
				<div class="wthree-almub wthree-almub4">  
				</div>
			</div>
			<div class="albums1-left">
				<h4>Hassle-Free Booking</h4>
				<p>Reserve a space with a few taps at your desired parking lots and skip the parking hunt.</p>
				<a class="w3more" href="services.php"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
			</div> 
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div> 
	</div>
</div>
<!-- //Popular --> 
<!-- team -->
<div class="team">
	<div class="container">
		<h3 class="agile-title">Team</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="wthree_team_grids">
			<div class="col-md-4 wthree_team_grid">
				<div class="hovereffect">
					<img src="images/t1.jpg" alt=" " class="img-responsive" />
					<div class="overlay">
						<h6>E-Parking</h6>
						<div class="rotate">
							<p class="group1">
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</p>
								<hr>
								<hr>
							<p class="group2">
								<a href="#">
									<i class="fa fa-instagram"></i>
								</a>
								<a href="#">
									<i class="fa fa-dribbble"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				<h4>Kamal Patel</h4>
				<p>Developer</p>
			</div>
			<div class="col-md-4 wthree_team_grid">
				<div class="hovereffect">
					<img src="images/t2.jpg" alt=" " class="img-responsive" />
					<div class="overlay">
						<h6>E-Parking</h6>
						<div class="rotate">
							<p class="group1">
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</p>
								<hr>
								<hr>
							<p class="group2">
								<a href="#">
									<i class="fa fa-instagram"></i>
								</a>
								<a href="#">
									<i class="fa fa-dribbble"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				<h4>Mihir Patel</h4>
				<p>Developer</p>
			</div>
			<div class="col-md-4 wthree_team_grid">
				<div class="hovereffect">
					<img src="images/t3.jpg" alt=" " class="img-responsive" />
					<div class="overlay">
						<h6>E-Parking</h6>
						<div class="rotate">
							<p class="group1">
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</p>
								<hr>
								<hr>
							<p class="group2">
								<a href="#">
									<i class="fa fa-instagram"></i>
								</a>
								<a href="#">
									<i class="fa fa-dribbble"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				<h4>Vruti Doshi</h4>
				<p>Developer</p>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //team -->
<!-- footer -->
<footer>
	<div class="agileinfo-footer">
		<div class="container">
			<div class="agileits-footer-top">
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-map-marker"></i>
					<div class="w3-address1">
						<p>Ahmedabad</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-phone"></i>
					<div class="w3-address1">
						<p>7600769212</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-envelope"></i>
					<div class="w3-address1">
						<p><a href="mailto:info@example.com"> mail@example.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- newsletter -->
			<div class="w3layouts-newsletter">
				<div class="col-md-5 wthree-join">
					<h2><i class="fa fa-envelope" aria-hidden="true"></i>Join our Newsletter</h2>
				</div>
				<div class="col-md-7 agileinfo-newsletter">
					<form action="#" method="post">
						<input type="email"	placeholder="Enter Your Email" name="email" required="" />
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //newsletter -->
			<!-- Counter -->
			<div class="services-bottom">
				<div class="counter-agile">
					<div class="counter-subw3l">
						<p><a href="index.html"><i class="fa fa-plane" aria-hidden="true"></i>E-Parking</a></p>
					</div>
					<div class="ftr-menu">
						 <ul>
							<li class="" ><a href="services.php">About</a></li>
							<li><a class="" href="Rentdriveway.php">Rent driveway</a></li>
							<li><a class="" href="help.php">Help</a></li>
							<li><a class="" href="contact.php">Contact Us</a></li>
							<li><a class="" href="login.php">Login</a></li>
							<li><a class="" href="regform.php">Sign up</a></li>
							
						</ul>
					</div>


			
					<div class="counter-subw3l w3l-right-footer">
						<ul class="w3layouts-agileits-social">
							<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
							<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
						</ul>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //Counter -->
		</div>
		<div class="agileits-footer-bottom">
			<p class="footer-class">&copy; 2017 E-Parking. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
</footer>
<!-- //footer -->
<!-- js-scripts -->			
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	<!-- start-smoth-scrolling -->
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
	<!-- start-smoth-scrolling -->
	<!-- Numscroller -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Numscroller -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- carousal-plugin -->
	<script src="js/jquery.film_roll.js"></script> 
	<script src="js/index.js"></script>
	<!-- //carousal-plugin -->
<!-- //js-scripts -->
</body>
</html>