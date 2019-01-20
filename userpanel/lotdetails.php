<?php
include('conn.php');
session_start();
if (!(isset($_SESSION['name']))) 
{
	header('location:index.php');
}
$_SESSION['usid'];
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
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Coda:400,800&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
<br>
<br>


<div class="container">

	<h3 class="agile-title">Parking Lot Info</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-car sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<?php 
			if(isset($_GET['lot_id']))
				{
				$uid=$_GET['lot_id'];
			    $sql=mysqli_query($conn,"SELECT * FROM parkinglot where parkid=".$uid);
                $row = mysqli_fetch_assoc($sql);
                $parkid=$row['parkid'];
                

        ?>
					<div class="container">		
						<div class="single_w3_profile" align="center">
								<img src="/Ezparking/adminpanel/upload/<?php echo $row['file1'];?>" class="prf-img img-responsive" height="600px" width="700px">
									<br><br>										
								<div class="clearfix"></div>
							
						</div>
					</div>		
						<div class="container">		
							<div class="row clearfix1">	
								<div class="span_44 column">			
					           	 	<div class="w3layouts_details" style="text-align: left; width: 600px" >
										
												<table class="table table-bordered">
												<thead>
													<tr>
														<th style="color: black;">Field</th>
														<th style="color: black;">Discription</th>
													</tr>
												</thead>
												<tbody>
														<tr>
															<td style="color: black;">Name</td>
															<td style="color: black;"><?php echo $row['parkingname'];?></td>
														</tr>
														<tr>
															<td style="color: black;">Address</td>
															<td style="color: black;"><?php echo $row['paddress'];?></td>
														</tr>
														<tr>
															<td style="color: black;">Phone</td>
															<td style="color: black;"><?php echo $row['phone'];?></td>
														</tr>
														<tr>
															<td style="color: black;">Price</td>
															<td style="color: black;">
														<?php 
															if(isset($_GET['lot_id']))
																{
																$uid=$_GET['lot_id'];
															    $sql="SELECT * FROM parkdetail a INNER JOIN vehicle_type b ON a.vehid=b.vehid where parkid=".$uid;
												               $exec=$conn->query($sql);
																while($fe=$exec->fetch_object())
																{
														?>
			                                 						<div class="cprice">
                                                                    <?php if($fe->timeperiod != 'day'){
																	 echo $fe->vehicletype; ?> : 
																	 Price <?php echo $fe->price;?> per <?php echo $fe->hour;?> Hour  <br>
																	 <?php } ?>
																	</div>
															<?php } } ?>
															</td>
														</tr>
													</tbody>
												</table>                    
										    
									</div>
								</div>		
								<form action="book_redirect.php">							
								<div class="span_44 column">
									<div class="control-group form-group">
						                <div class="controls">
											<label for="vtypes" class="contact-p1">Which vehicle will you be parking?</label>
						                    	<select name="vehicle_type" class="vehicletype">
													<option value="">Select Vehicle type</option>															<?php
				    										$sel="select * from vehicle_type";
															$exe=$conn->query($sel);
															while($fetc=$exe->fetch_object()){ 
														?>
															<option value="<?php echo $fetc->vehid; ?>">
															 <?php echo $fetc->vehicletype; ?>
															</option>
														<?php } ?>		
												</select>	
												<p class="help-block"></p>
								  		</div>
							  		</div>
							  		<input type="hidden" name="pname" value="<?php echo  $parkid; ?>">
							  		<div class="control-group form-group">
							            <div class="controls">
					                        <label class="contact-p1">Number Plate:</label> 
					                            <input type="text" class="form-control" name="nplate" id="name" Placeholder="Enter Number Plate" style="height: 30px; width: 250px ">
				                            <p class="help-block"></p>
							            </div>
							        </div>
									<div class="control-group form-group">                        
						             	<div class="control-group">
										    <label class="control-label">Arriving Time:</label>
											    <div class="controls input-append date start_datetime" data-date="2017-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
													<input size="16" name="start_time" type="text" value="" readonly style="height: 30px">
												        <span class="add-on" style="height: 30px"><i class="icon-remove"></i></span>
														<span class="add-on" style="height: 30px"><i class="icon-th"></i></span>
											    </div>
													<input type="hidden" id="dtp_input1" value="" /><br/>
										</div>
										<div class="control-group">
										    <label class="control-label">Leavings Time:</label>
											    <div class="controls input-append date end_datetime" data-date="2017-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input2">
											        <input size="16" name="end_time" type="text" value="" readonly style="height: 30px">
												        <span class="add-on" style="height: 30px"><i class="icon-remove"></i></span>
														<span class="add-on" style="height: 30px"><i class="icon-th"></i></span>
												</div>
													<input type="hidden" id="dtp_input2" value="" /><br/>
										</div>
										
										<div>
											<label class="control-label">Parking Price :
												<div id="calculated_hour" type="hidden">
													
												</div>
											</label>
										</div>
										
										<input type="hidden" name="calculated_hour" id="total_price" >
									</div> 
											 	
								</div>

							</div>
							<br><br>
						<div align="center">
							<a  href="booking.php?id=<?php echo $fetch->cid;?>">
							 <input type="submit" name="book" value="Book" class="btn btn-success" style="height: 40px; width: 250px;">
							</a>
						</div>
					</form>
						</div>
					
	<?php    } ?>

</div>	
<br>
<br>			
			        
        

<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
		<h3 class="agile-title">About me</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-car sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<?php
		if(isset($_GET['lot_id']))
			{
			 $uid=$_GET['lot_id'];				
		    $sql="SELECT * FROM client_reg where cid=".$uid;
			$exe=$conn->query($sql);
			while($fetch=$exe->fetch_object())
			{
			?>
			<div class="grid_3 grid_5 agile">
				<div class="well" style="font-size: 20px">
						Our parking service provides automated as well as manual parking. A user can book a parking slot on the go with help of website. The website analyzes the available parking slots with possible time duartions and provides the slots for booking.
				</div>
		    </div>
		<?php } }?>
	</div>
</div>
</div>
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
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- Easy Responsivetabs -->
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript">
			 
		$('.start_datetime').datetimepicker({
	        //language:  'fr',
	        format: 'yyyy-mm-dd hh:ii',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			forceParse: 0,
	        showMeridian: 1,
	        autoclose : true,
	    });
	    $('.end_datetime').datetimepicker({
	        //language:  'fr',
	        format: 'yyyy-mm-dd hh:ii',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			forceParse: 0,
	        showMeridian: 1
	    });

	    $( ".end_datetime" ).change(function() {
	    	var start_datetime = $("#dtp_input1").val();
	    	var end_datetime = $("#dtp_input2").val();
	    	var vehicle_type = $('.vehicletype').val();
	    	
	    	
			  $.ajax({
		        url: "book_cal.php",
		        type: "post",
		        data: {'start_date':start_datetime,'end_date':end_datetime,'park_id':<?php echo $_GET['lot_id']; ?>,'vehicle_type':vehicle_type} ,
		        success: function (data) {
		        	$json = JSON.parse(data);
		        	$("#calculated_hour").html(data);
		        	$("#total_price").val(data);
		        },
		        error: function(data) {
		          
		        }
		    });
		});
</script>
    
	<!-- //Easy Responsivetabs -->
	<!-- strat-date-piker -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	  <script>
			  $(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			  });
	  </script>
	<!-- //End-date-piker -->
	<!-- Numscroller -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Numscroller -->
<!-- //js-scripts -->
</body>
</html>

