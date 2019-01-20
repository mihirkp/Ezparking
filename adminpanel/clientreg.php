<?php
include('conn.php');

if(isset($_REQUEST['submit']))
    {
        $cname=$_REQUEST['cname'];
        $password=$_REQUEST['password'];
        $phone=$_REQUEST['phone'];
        $email=$_REQUEST['email'];
        $address=$_REQUEST['address'];
        $areaid=$_REQUEST['areaid'];
        $cityid=$_REQUEST['cityid'];
        $state=$_REQUEST['state'];
        $carcapacity=$_REQUEST['carcapacity'];
        $twowheelercapacity=$_REQUEST['twowheelercapacity'];
        $c8hr=$_REQUEST['c8hr'];
        $c12hr=$_REQUEST['c12hr'];
        $c24hr=$_REQUEST['c24hr'];
        $c1day=$_REQUEST['c1day'];
        $t8hr=$_REQUEST['t8hr'];
        $t12hr=$_REQUEST['t12hr'];
        $t24hr=$_REQUEST['t24hr'];
        $t1day=$_REQUEST['t1day'];


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
   	 			$ins="insert into client_reg(cname,password,phone,email,address,areaid,cityid,state,carcapacity,twowheelercapacity,c8hr,c12hr,c24hr,c1day,t8hr,t12hr,t24hr,t1day,file1) values('$cname','$password','$phone','$email','$address','$areaid','$cityid','$state','$carcapacity','$twowheelercapacity','$c8hr','$c12hr','$c24hr','$c1day','$t8hr','$t12hr','$t24hr','$t1day','$img')";
    			$exe=$conn->query($ins);
    			}
			}
		}

		
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
<script src="jquery-3.2.1.min (1).js" type="text/javascript"></script>
<script src="jquery.bvalidator.js" type="text/javascript"></script>
<link href="bvalidator.css" type="text/css" rel="stylesheet" />


<script type="text/javascript"> 

    $(document).ready(function () {
	
        $('#myform').bValidator();
    });
</script> 
<script> 
// now fore direct validation from above file u take data-bvalidator="" from the file "jquery.bvalidator.js"

// allways take <form id=""  in jquery with #name
</script>
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
		<h3 class="agile-title">Client Registration Form</h3>
		<div class="w3layouts_header">
			<p><span><i class="fa  fa-chevron-circle-up sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				
				<form action="#" method="post" name="myform" id="myform" enctype="multipart/form-data">
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Parking lot Name:</label> 
                            <input type="text" class="form-control" name="cname" id="name" Placeholder="Enter name" data-bValidator="required,alpha"Data>
                            <p class="help-block"></p>
                        </div>
                    </div>	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" Placeholder="Enter E-mail Address" data-bValidator="required,email"Data >
							<p class="help-block"></p>
						</div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Password:</label> 
                            <input type="text" class="form-control" name="password" id="password" Placeholder="Enter password" data-bValidator="required,maxlength[8],minlength[3]"Data>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Confirm Password:</label> 
                            <input type="text" class="form-control" name="cpassword" id="name" Placeholder="Re-Enter password" data-bValidator="required,equalto[password]"Data>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" Placeholder="Enter Mobile Number" data-bValidator="required,number"Data  >
							<p class="help-block"></p>
						</div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">address:</label> 
                            <input type="text" class="form-control" name="address" id="name" Placeholder="Enter plot address" >
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Area:</label> 
                            <select name="areaid">
                            <?php 
                             $select="select * from area";
                             $exec=$conn->query($select);
                             while($fet=$exec->fetch_object())
                             {
                             ?>
                                 <option value="<?php echo $fet->areaid;?>">
                                 <?php echo $fet->areaname;?>
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
                            <label class="contact-p1">City:</label> 
                            <select name="cityid">
                            <?php 
                             $sel="select * from city";
                             $exe=$conn->query($sel);
                             while($fe=$exe->fetch_object())
                             {
                             ?>
                                 <option value="<?php echo $fe->cityid;?>">
                                 <?php echo $fe->city;?>
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
                            <label class="contact-p1">state:</label> 
                            <input type="text" class="form-control" name="state" id="name" Placeholder="Enter state" data-bValidator="required,alpha"Data>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">car price 8 hour:</label>
                            <input type="tel" class="form-control" name="c8hr" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">car price 12 hour:</label>
                            <input type="tel" class="form-control" name="c12hr" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">car price 24 hour:</label>
                            <input type="tel" class="form-control" name="c24hr" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">car price per day:</label>
                            <input type="tel" class="form-control" name="c1day" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">2 Wheeler price 8 hour:</label>
                            <input type="tel" class="form-control" name="t8hr" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">2 Wheeler price 12 hour:</label>
                            <input type="tel" class="form-control" name="t12hr" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">2 Wheeler price 24 hour:</label>
                            <input type="tel" class="form-control" name="t24hr" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">2 Wheeler price per day:</label>
                            <input type="tel" class="form-control" name="t1day" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Car capacity:</label> 
                            <input type="text" class="form-control" name="carcapacity" id="name" Placeholder="Enter Car capacity" >
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Two-wheeler capacity:</label> 
                            <input type="text" class="form-control" name="twowheelercapacity" id="name" Placeholder="Enter Two-wheeler capacity" >
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