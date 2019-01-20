<?php
include('conn.php');
if(isset($_REQUEST['ecid']))
{
	$ecid=$_REQUEST['ecid'];
    $sel="select * from client_reg where cid='$ecid'";
    $exe=$conn->query($sel);
    $fetch=$exe->fetch_object();
    $f=$fetch->file1;

if(isset($_REQUEST['update']))
{
		$cname=$_REQUEST['cname'];
        $password=$_REQUEST['password'];
        $phone=$_REQUEST['phone'];
        $email=$_REQUEST['email'];
        $address=$_REQUEST['address'];
        $cityid=$_REQUEST['cityid'];
        $state=$_REQUEST['state'];
        $carcapacity=$_REQUEST['carcapacity'];
        $twowheelercapacity=$_REQUEST['twowheelercapacity'];

        // this is for images 
    
        $img=$_FILES['file1']['name'];
        $path="upload/".$img;
        $tmp_name=$_FILES['file1']['tmp_name'];
        move_uploaded_file($tmp_name,$path);
        
        if($_FILES['file1']['name']>0)
        {
        $upd="update client_reg set cname='$cname',password='$password',phone='$phone',email='$email',address='$address',cityid='$cityid',state='$state',carcapacity='$carcapacity',twowheelercapacity='$twowheelercapacity',file1='$img' where cid='$ecid'";
        $exe=$conn->query($upd);
    	if($upd)
    		{
                unlink('upload/'.$f);
        		header('location:manageclient.php');
    		}
        }
    	else
    	{
         $upd="update client_reg set cname='$cname',password='$password',phone='$phone',email='$email',address='$address',cityid='$cityid',state='$state',carcapacity='$carcapacity',twowheelercapacity='$twowheelercapacity' where cid='$ecid'";
        $exe=$conn->query($upd);
        if($upd)
            {
                header('location:manageclient.php');
            }   
        }	
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
					<li class=""><a href="index.php">Home</a></li>
					
					<?php
							$sel="select * from client_reg join city on client_reg.cityid=city.cityid";
							$exe=$conn->query($sel);
							while($fetch=$exe->fetch_object())
							{
						?>
					<li><a class="" href="editprofile.php ? ecid=<?php echo $fetch->cid; ?>">Edit Profile</a></li>
					<?php
						}
						?>	
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
<section class="contact-w3ls">
    <div class="container">
        <h3 class="agile-title">Client Registration Detail</h3>
        <div class="w3layouts_header">
            <p><span><i class="fa  fa-chevron-circle-up sub-w3l" aria-hidden="true"></i></span></p>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
            <div class="contact-agileits">
                
                <form action="#" method="post" name="myform" id="myform" enctype="multipart/form-data">
                	<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Parking lot Name:</label> 
                            <input type="text" class="form-control" name="cname" id="name" value="<?php echo $fetch->cname; ?>" Placeholder="Enter name" data-bValidator="required,alpha"Data>
                            <p class="help-block"></p>
                        </div>
                    </div>	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Password:</label> 
                            <input type="text" class="form-control" name="password" id="name" value="<?php echo $fetch->password; ?>" Placeholder="Enter password" data-bValidator="required,maxlength[8],minlength[3]"Data>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" Placeholder="Enter Mobile Number" value="<?php echo $fetch->phone; ?>" data-bValidator="required,number"Data  >
							<p class="help-block"></p>
						</div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" Placeholder="Enter E-mail Address" value="<?php echo $fetch->email; ?>" data-bValidator="required,email"Data >
							<p class="help-block"></p>
						</div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">address:</label> 
                            <input type="text" class="form-control" name="address" id="name" value="<?php echo $fetch->address; ?>" Placeholder="Enter plot address" >
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">city:</label> 
                            <select name="cityid">
                                <?php 
                                $sel="select * from city";
                                $exe=$conn->query($sel);
                                while($fe=$exe->fetch_object())
                                {
                                    if($fe->cityid==$fetch->cityid)
                                    {
                                 ?>
                                    <option value="<?php echo $fe->cityid;?>" selected="selected">
                                                     <?php echo $fe->city;?>
                                    </option>
                                <?php
                                }
                                    else
                                    {
                                ?>
                                    <option value="<?php echo $fe->cityid;?>">
                                                     <?php echo $fe->city;?>
                                    </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">state:</label> 
                            <input type="text" class="form-control" name="state" id="name" value="<?php echo $fetch->state; ?>" Placeholder="Enter state" data-bValidator="required,alpha"Data>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Car capacity:</label> 
                            <input type="text" class="form-control" name="carcapacity" id="name" value="<?php echo $fetch->carcapacity; ?>" Placeholder="Enter Car capacity" >
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Two-wheeler capacity:</label> 
                            <input type="text" class="form-control" name="twowheelercapacity" id="name" value="<?php echo $fetch->twowheelercapacity; ?>" Placeholder="Enter Two-wheeler capacity" >
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">image</label> 
                            <input type="file" name="file1" value="<?php echo $fetch->file1;?>"><img src="upload/<?php echo $fetch->file1;?>" height="50px" width="70px">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="update" value="Register" class="btn btn-primary">update</button>    
                </form>            
            </div>
        </div>
        
</section>

</body>
</html>