<?php
include('conn.php');

if(isset($_REQUEST['submit']))
    {
        $parkingname=$_REQUEST['parkingname'];
        $vendorid=$_REQUEST['vendorid'];
        $paddress=$_REQUEST['paddress'];
        $areaid=$_REQUEST['areaid'];
        $cityid=$_REQUEST['cityid'];
        $phone=$_REQUEST['phone'];

        // this is for images 
    
        $img=$_FILES['file1']['name'];
        $filetype=$_FILES['file1']['type'];
        $filesize=$_FILES['file1']['size'];
        $path="upload/".$img;
        $tmp_name=$_FILES['file1']['tmp_name'];

        if($tmp_name == "")
        {
            echo "please select a photo";
        }
        else
        {
            if($filesize > 2097152)
            {
                echo "photo > 2mb";
            }
            else
            {
                if($filetype != "image/jpeg" && $filetype != "image/png")
                {
                    echo "please upload jpg/png";
                }
                else
                {
                move_uploaded_file($tmp_name, $path);
		        $ins="insert into parkinglot(parkingname,vendorid,paddress,areaid,cityid,phone,file1) values('$parkingname','$vendorid','$paddress','$areaid','$cityid','$phone','$img')";
            	$exe=$conn->query($ins);
                }
            }
        }
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
		<h3 class="agile-title">Parking lot Registration Form</h3>
		<div class="w3layouts_header">
			<p><span><i class="fa  fa-chevron-circle-up sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				
				<form action="#" method="post" name="myform" id="myform" enctype="multipart/form-data">
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Parkinglot Name:</label> 
                            <input type="text" class="form-control" name="parkingname" id="name" Placeholder="Enter name">
                            <p class="help-block"></p>
                        </div>
                    </div>	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Vendor Name:</label> <br>
                            <select name="vendorid">
                            <?php 
                             $select="select * from vendor";
                             $ex=$conn->query($select);
                             while($fet=$ex->fetch_object())
                             {
                             ?>
                                 <option value="<?php echo $fet->vendorid;?>">
                                 <?php echo $fet->vendorname;?>
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
                            <label class="contact-p1">Parkinglot Address:</label>
                            <input type="text" class="form-control" name="paddress" id="name" Placeholder="Enter Address">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Area:</label><br> 
                            <select name="areaid">
                            <?php 
                             $se="select * from area";
                             $execu=$conn->query($se);
                             while($fetc=$execu->fetch_object())
                             {
                             ?>
                                 <option value="<?php echo $fetc->areaid;?>">
                                 <?php echo $fetc->areaname;?>
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
                            <label class="contact-p1">City:</label> <br>
                            <select name="cityid">
                            <?php 
                             $sel="select * from city";
                             $exe=$conn->query($sel);
                             while($fe=$exe->fetch_object())
                             {
                             ?>
                                 <option value="<?php echo $fe->cityid;?>">
                                 <?php echo $fe->cityname;?>
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
                            <label class="contact-p1">Parking Lot Phone Number:</label> 
                            <input type="tel" class="form-control" name="phone" id="name" Placeholder="Enter phone number">
                            <p class="help-block"></p>
                        </div>
                    </div>  
                    <div class="control-group form-group">
                        <div class="controls">
                        <label class="contact-p1">Image:</label> 
                        <input type="file" name="file1">
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