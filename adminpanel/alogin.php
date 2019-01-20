<?php
include('conn.php');

if(isset($_REQUEST['login']))
{
	$aname=$_REQUEST['aname'];
	$password=$_REQUEST['password'];
	if(isset($rm))
	{
	setcookie('aname',$aname,time()+15);
	setcookie('password',$password,time()+15);
	}
	session_start();
	$_SESSION['aname']=$aname;

	$sel="select * from admin where aname='$aname' and password='$password'";
	$exe=$conn->query($sel);
	$chk=$exe->num_rows;
	if($chk==1)
	{
		header('location:index1.php');
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
<title>Admin login page</title>
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


<section class="contact-w3ls">
	<div class="container">
		<h3 class="agile-title">Admin Login Page</h3>
		<div class="w3layouts_header">
			<p><span><i class="fa  fa-chevron-circle-up sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Name:</label> 
                            <input type="text" class="form-control" name="aname" id="name" Placeholder="Enter name" value="<?php if(isset($_COOKIE['aname']))
									{
										echo $_COOKIE['aname'];
		
									}?>">
                            <p class="help-block"></p>
                        </div>
                    </div>	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Password:</label> 
                            <input type="password" class="form-control" name="password" id="name" Placeholder="Enter password" value="<?php if(isset($_COOKIE['password']))
										{
											echo $_COOKIE['password'];
		
										}?>">
                            <input type="checkbox" checked="checked" name="rm"> Remember me<br>
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



</body>
</html>