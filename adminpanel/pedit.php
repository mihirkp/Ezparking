<?php
include('conn.php');

if(isset($_REQUEST['eparkid']))
{
    $eparkid=$_REQUEST['eparkid'];
    $sel="select * from parkinglot where parkid='$eparkid'";
    $exe=$conn->query($sel);
    $fetch=$exe->fetch_object();
}
if(isset($_REQUEST['update']))
{
    $parkingname=$_REQUEST['parkingname'];
    $vendorid=$_REQUEST['vendorid'];
    $paddress=$_REQUEST['paddress'];
    $areaid=$_REQUEST['areaid'];
    $cityid=$_REQUEST['cityid'];
    $phone=$_REQUEST['phone'];

    $img=$_FILES['file1']['name'];
    $path="upload/".$img;
    $tmp_name=$_FILES['file1']['tmp_name'];
    move_uploaded_file($tmp_name,$path);
   
    $upd="update parkinglot set parkingname='$parkingname',vendorid='$vendorid',paddress='$paddress',areaid='$areaid',cityid='$cityid',phone='$phone',file1='$img' where parkid='$eparkid'";
    $exe=$conn->query($upd);
    if($upd)
    {
        header('location:manageclient.php');
    }
    else
    {
        echo "not update";
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
                <h1><a class="logo" href="index.html"><i class="fa fa-plane" aria-hidden="true"></i>E-Parking</a></h1>
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
    </div>  
    <!-- //header -->
</div> 

<section class="contact-w3ls">
    <div class="container">
        <h3 class="agile-title">Parkinglot Detail</h3>
        <div class="w3layouts_header">
            <p><span><i class="fa  fa-chevron-circle-up sub-w3l" aria-hidden="true"></i></span></p>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
            <div class="contact-agileits">
                
                <form action="#" method="post" name="myform" id="myform">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">parking Name:</label> 
                            <input type="text" class="form-control" name="parkingname" id="name" value="<?php echo $fetch->parkingname; ?>" Placeholder="Enter name" data-bValidator="required,alpha"Data>
                            <p class="help-block"></p>
                        </div>
                    </div>  
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Vendor Name:</label><br>
                                <select name="vendorid">
                                <?php
                                $sel="select * from vendor";
                                $exe=$conn->query($sel);
                                while($fe=$exe->fetch_object())
                                {
                                    if($fe->vendorid==$fetch->vendorid)
                                    {
                                ?>  
                                    <option value="<?php echo $fe->vendorid;?>" selected="selected">
                                                    <?php echo $fe->vendorname;?>
                                    </option>
                                <?php
                                    }
                                    else
                                    {
                                ?>  
                                <option value="<?php echo $fe->vendorid;?>">
                                                <?php echo $fe->vendorname;?>
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
                            <label class="contact-p1">Address:</label> 
                            <input type="text" class="form-control" name="paddress" id="name" value="<?php echo $fetch->paddress; ?>" Placeholder="Enter parkinglot address" >
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Area:</label><br>
                                <select name="areaid">
                                <?php
                                $sele="select * from area";
                                $exec=$conn->query($sele);
                                while($fetc=$exec->fetch_object())
                                {
                                    if($fetc->areaid==$fetch->areaid)
                                    {
                                ?>  
                                    <option value="<?php echo $fetc->areaid;?>" selected="selected">
                                                    <?php echo $fetc->areaname;?>
                                    </option>
                                <?php
                                    }
                                    else
                                    {
                                ?>  
                                <option value="<?php echo $fetc->areaid;?>">
                                                <?php echo $fetc->areaname;?>
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
                            <label class="contact-p1">City:</label><br>
                                <select name="cityid">
                                <?php
                                $selec="select * from city";
                                $execu=$conn->query($selec);
                                while($fetche=$execu->fetch_object())
                                {
                                    if($fetche->cityid==$fetch->cityid)
                                    {
                                ?>  
                                    <option value="<?php echo $fetche->cityid;?>" selected="selected">
                                                    <?php echo $fetche->cityname;?>
                                    </option>
                                <?php
                                    }
                                    else
                                    {
                                ?>  
                                <option value="<?php echo $fetche->cityid;?>">
                                                <?php echo $fetche->cityname;?>
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
                            <label class="contact-p1">Parking Lot Phone Number:</label> 
                            <input type="tel" class="form-control" name="phone" id="name" value="<?php echo $fetch->phone; ?>" Placeholder="Enter phone number" >
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Image:</label> 
                            <input type="file" name="file1" value="<?php echo $fetch->file1;?>"><img src="upload/<?php echo $fetch->file1;?>" height="50px" width="50px">
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