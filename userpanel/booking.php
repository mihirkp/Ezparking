<?php
include('conn.php');
session_start();
if(isset($_REQUEST['book']))
   {
   	  $date1=$_REQUEST['date1'];
   	  $time1=$_REQUEST['time1'];
   	  $date2=$_REQUEST['date2'];
   	  $time2=$_REQUEST['time2'];
   	  $wtype=$_REQUEST['wtype'];
   	  $vnp=$_REQUEST['vnp'];
   	  $ins="insert into booking(date1,time1,date2,vnp) values ('$date1','$time1','$date2','$time2','$vnp')";
   		 $exe=$conn->query($ins);
    	if($exe)
    	{
        	echo "insert success";
   	    }
    	else
    	{
        	echo "not suceess";
    	}
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
</div> 
<div class="container">
<div class="albums">

	<h3 class="agile-title">Book Your Parking Space</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<?php
					if(isset($_REQUEST['id']))
						{
						 $bid=$_REQUEST['id'];
						}
									    $sql="SELECT * FROM client_reg where cid='$bid'";
										$exe=$conn->query($sql);
										while($fetch=$exe->fetch_object())
										{
										?>
			<div class="container">
		
		<div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
			<div class="container">
			<div class="single_w3_profile">
			<div class="col-md-12 agileits-w3layouts">
					
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Field</th>
								<th>Discription</th>
							</tr>
						</thead>
					<tbody>
							<tr>
								<td>Name</td>
								<td><?php echo $fetch->cname;?></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><?php echo $fetch->address;?></td>
							</tr>
							<tr>
								<td>Phone</td>
								<td><?php echo $fetch->phone;?></td>
							</tr>
							
						</tbody>
					</table>                    
			</div>
		</div>

					</div>
					

			</div>
		</div>
	    
			<?php } ?>
</div>	
</div>
<section class="contact-w3ls">
	<div class="container">
		
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				
				<form action="#" method="post" name="myform">
					<div class="control-group form-group">
                        <div class="controls">
                        	<div>
                        	<label class="contact-p1"><h2>When would you like to park?:</h2></label>
                        	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            <label class="contact-p1">Arriving Time:</label>
                     		<input type="date" type="date" value="mm/dd/yyyy" name="date1" required="required">
                     		</div>
                     	</div>
                    </div>
					<div>
					<div class="control-group form-group">
                    <div class="controls">
					<label for="vtypes" class="contact-p1">Which vehicle will you be parking?</label>
                    	<select name="vtype" id="vtype">
                    				
									<option value="c">Car</option>
									<option value="t">Two-wheeler</option>	
							</select>	
							<p class="help-block"></p>
  					</div>
  					</div>
  					</div>
					<div class="control-group form-group">
                        <div class="controls">
                            <div id="cartype">
                            	<label for="selectcartype" class="contact-p1">Booking Period</label>
								<select name="vtype" id="selectcartype">
									<option value="price1">1 hour</option>	
									<option value="price8">8 hour</option>
									<option value="price16">16 hour</option>
									<option value="price24">24 hour</option>
									<option value="priced2">2 Days</option>
									<option value="priced3">3 Days</option>
									<option value="priced4">4 Days</option>
									<option value="priced5">5 Days</option>
									<option value="priced6">6 Days</option>
									<option value="priced7">7 Days</option>
									
								</select>	
							</div>
							
  					    </div>
                    </div>
                    
                    

                    <br>
  					<div class="control-group form-group">
                        <div class="controls">

                            <label class="contact-p1">Vehicle Num Plate:</label>                           
                            <input type="text" class="form-control" name="vnp" id="name" Placeholder="Enter vehicle Num Plate" >
                            
                        </div>
                    </div>
                    
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="book" class="btn btn-primary">Book</button>	
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