<?php
include('conn.php');

if(isset($_REQUEST['login']))
{
	$name=$_REQUEST['name'];
	$password=$_REQUEST['password'];

	$sel="select * from registration where name='$name' and password='$password'";
	$exe=$conn->query($sel);
	$chk=$exe->num_rows;
	if($chk==1)
	{
		header('location:index.php');
	}
	else
	{
		echo "login failed";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login PAge</title>
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
			<h1><a class="logo" href="index.html"><i class="fa fa-car" aria-hidden="true"></i>E-Parking</a></h1>
		</div> 
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class=""><a href="index.php">Home</a></li>
					<li class="" ><a href="services.php">About</a></li>
					<li><a class="" href="Rentdriveway.php">Rent driveway</a></li>
					<li><a class="" href="help.php">Help</a></li>
					<li><a class="" href="contact.php">Contact Us</a></li>
					<li><a class="" href="login.php">Login</a></li>
					<li><a class="" href="regform.php">Sign up</a></li>
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

<section class="contact-w3ls">
	<div class="container">
		<h3 class="agile-title">Login Page</h3>
		<div class="w3layouts_header">
			<p><span><i class="fa  fa-chevron-circle-up sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				
				<form action="#" method="post">
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Name:</label> 
                            <input type="text" class="form-control" name="name" id="name" Placeholder="Enter name" required="">
                            <p class="help-block"></p>
                        </div>
                    </div>	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Password:</label> 
                            <input type="password" class="form-control" name="password" id="name" Placeholder="Enter password" required="">
                            <input type="checkbox" checked="checked"> Remember me<br>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="login" class="btn btn-primary">login</button>	
				</form>            
			</div>
		</div>
		
</section>




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