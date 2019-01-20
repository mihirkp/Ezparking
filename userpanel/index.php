<?php
include('conn.php');
session_start();

if(isset($_POST['search']))
{
    $area=$_POST['area'];
    $_SESSION["area"] = $area;	 
	
	header('location:allsearch.php');		
}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function getarea(str)
{
	$.ajax({
	
	type:"POST",
	url:"getarea.php",
	data:"q="+str,
	success: function(data)
	{
		$("#area").html(data);
	}
		  })
}
</script>
</head>
<body> 
<div class="main-agile">
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 
		<!-- banner-text -->
		<div class="w3layouts-banner-top">
			<div class="container">
				<div class="agileits-banner-info">
					<div class="rw-wrapper">
				<div class="rw-sentence">
					<div class="rw-words rw-words-1">
						<span>Welcome To Ez-Parking</span>
						<span>Welcome To Ez-Parking</span>
						<span>Welcome To Ez-Parking</span>
						<span>Welcome To Ez-Parking</span>
						<span>Welcome To Ez-Parking</span>
						<span>Welcome To Ez-Parking</span>
					</div>
					<div class="rw-words rw-words-2">
						<span>Parking Made Easy</span>
						<span>Find Parking In Seconds</span>
						<span>Parking Made Easy</span>
						<span>Find Parking In Seconds</span>
						<span>Parking Made Easy</span>
						<span>Find Parking In Seconds</span>
					</div>
				</div>
			</div>
				</div>	
				<div class="sap_tabs">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item grid1"><span><i class="glyphicon glyphicon-home" aria-hidden="true"></i>Find Parking in Seconds</span></li>
							
						</ul>				  	 
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content">
								<div class="facts">
									<form action="" method="post">
										<div class="reservation">
											<ul>		
												<li  class="span1_of_1 desti">
													<div class="book_date">
														<div class="control-group form-group">
                                            				<div class="controls" align="center">
                                            				<label class="contact-p11" style="color: darkgrey;font-size: 20px" >Select City:</label>
				                                            <select name="city" style="width: 40%" onChange="getarea(this.value)">
				                                                <option value="">Select City</option>
				                                                <?php
				                                                $sel="select * from city";
				                                                $exe=$conn->query($sel);
				                                                while($fetch=$exe->fetch_object()){ 
				                                                ?>
				                                                <option value="<?php echo $fetch->cityid; ?>">
				                                                    <?php echo $fetch->cityname; ?>
				                                                </option>
					                                              <?php } ?>        
					                                        </select>   
					                                        </div>
					                                    </div>
					                                    <div class="control-group form-group">
                                            				<div class="controls" align="center">
                                            				<label class="contact-p11" style="color: darkgrey;font-size: 20px" >Select Area:</label>
				                                            <select name="area" id="area" style="width: 40%" required="">
				                                                <option value="">Select Area</option>
				                                            </select>   
					                                        </div>
					                                    </div>
													</div>					
												</li>
											</ul>
										</div>
										
										<div class="reservation w3l-submit">
											<ul>	
												 <li class="span1_of_3">
														<div class="date_btn">
																<input type="submit" name="search" value="search">
														</div>
												 </li>
											</ul>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>
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
				<li class="active"><a href="index.php">Home</a></li>
					<li class="" ><a href="services.php">About</a></li>
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
	</div>	
<!-- //header -->
<!-- welcome -->
<div class="about w3layouts-agileinfo">
	<div class="container">
		<div class="about-top w3ls-agile">
			<div class="col-md-6 red-w3l">
				<img class="img-responsive" src="images/112.jpg" alt="">
				<img class="img-responsive" src="images/111.jpg" alt="">
				<div class="position-w3l"></div>
			</div>
			<div class="col-md-6 come">
				<div class="about-wel">
					<?php
					if((isset($_SESSION['name'])))
					{
						?>
					<h1 align="center">Welcome: <?php echo $_SESSION['name'];?></h1>
					<?php
					}
					?>

					<h5>Welcome To E-Parking</h5>
					<p>Whether your requirements are for onstreet or offstreet parking we can improve your services.</p>
					<p>Smart Parking technology enables your customers to find spaces quickly and easily. Less time parking means less stress and happier customers. </p>
				</div>
				<div class="steps-wel">
					<h5>Follow Us For Easy Steps</h5>
					<div class="col-md-3 col-sm-3 col-xs-3 w3ls_banner_bottom_grids first-posi-w3l">
						<div class="w3l_banner_bottom_grid1">
							<i class="fa fa-phone hvr-pulse-shrink" aria-hidden="true"></i>
						</div>
						<div class="w3l_banner_bottom_grid1">
							<i class="fa fa-users hvr-pulse-shrink" aria-hidden="true"></i>
						</div>
						<div class="w3l_banner_bottom_grid1">
							<i class="fa fa-map-marker hvr-pulse-shrink" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2 w3ls_banner_bottom_grids">
						<h6>01</h6>
						<h6>02</h6>
						<h6>03</h6>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-7 w3ls_banner_bottom_grids">
						<p>Contact us anytime through our 24-hour call services</p>
						<p>We are also available at different social medias.</p>
						<p>You are just a click away from our different parking sites.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //welcome -->
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
		<h3 class="agile-title">MOST POPULAR</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
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
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> 	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>	
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});	
			 
		$( "#datepicker,#datepicker1" ).datepicker();
			 
		$('.start_datetime').datetimepicker({
	        //language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			forceParse: 0,
	        showMeridian: 1
	    });
	    $('.end_datetime').datetimepicker({
	        //language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			forceParse: 0,
	        showMeridian: 1
	    });
	  </script>
</body>
</html>