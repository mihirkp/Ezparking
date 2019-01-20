<?php
include('conn.php');

if(isset($_REQUEST['submit']))
    {
        $parkid=$_REQUEST['parkid'];
        $vehid=$_REQUEST['vehid'];
        $timeperiod=$_REQUEST['timeperiod'];
        $hour=$_REQUEST['hour'];
        $price=$_REQUEST['price'];

		
   	 	$ins="insert into parkdetail(parkid,vehid,timeperiod,hour,price) values('$parkid','$vehid','$timeperiod','$hour','$price')";
    	$exe=$conn->query($ins);
    	
    if($exe)
    {
        header('location:manageclient.php');
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
			<h1><a class="logo" href="index.html"><i class="fa fa-car" aria-hidden="true"></i>E-Parking</a></h1>
		</div> 
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class=""><a href="index1.php">Home</a></li>
					<li class=""><a href="manageclient.php">manage client</a></li>
					<li><a class="" href="manageuser.php">manage user</a></li>
                    <li><a class="" href="rentdrivewayd.php">client Request</a></li>
					<li><a class="" href="viewfeedback.php">view feedback</a></li>
					<li><a class="" href="logout.php">logout</a></li>
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
		<h3 class="agile-title">Parking detail Form</h3>
		<div class="w3layouts_header">
			<p><span><i class="fa  fa-chevron-circle-up sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				
				<form action="#" method="post" name="myform" id="myform" enctype="multipart/form-data">
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Parkinglot Name:</label> 
                            <select name="parkid">
                                <option name="">Select Parkinglot Name</option>
                                    <?php 
                                     $select="select * from parkinglot";
                                     $exec=$conn->query($select);
                                     while($fet=$exec->fetch_object())
                                     {
                                     ?>
                                         <option value="<?php echo $fet->parkid;?>">
                                         <?php echo $fet->parkingname;?>
                                        </option>
                                     <?php
                                     }
                                     ?>
                            </select>
                            <p class="help-block"></p>
                        </div>
                    </div>	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Vehicle Type:</label> 
                            <select name="vehid">
                                <option name="">Select Vehicle Type</option>
                                <?php 
                                 $sel="select * from vehicle_type";
                                 $exe=$conn->query($sel);
                                 while($fe=$exe->fetch_object())
                                 {
                                 ?>
                                     <option value="<?php echo $fe->vehid;?>">
                                     <?php echo $fe->vehicletype;?>
                                    </option>
                                 <?php
                                 }
                                 ?>
                            </select>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Time Period:</label>
                            <input type="text" class="form-control" name="timeperiod" id="name" Placeholder="Enter timeperiod">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Hour:</label>
                            <input type="text" class="form-control" name="hour" id="name" Placeholder="Enter Hour">
							<p class="help-block"></p>
						</div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Price:</label>
                            <input type="text" class="form-control" name="price" id="name" Placeholder="Enter price">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" value="Register" class="btn btn-primary">Sign up</button>	
				</form>            
			</div>
		</div>
		
</section>
</body>
</html>