<?php
include('conn.php');

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
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>
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
					<li><a class="active" href="manageuser.php">manage user</a></li>
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

<div class="bs-docs-example">
				<table id="table_id" class="display" class="table table-striped">
					<thead>
						<tr>
							<th>user id</th>
							<th>Full Name:</th>
							<th>Password:</th>
							<th>Phone Number:</th>
							<th>Email Address:</th>
							
							<th>action</th>
						</tr>
					</thead>

					<tbody>
						<?php
							$sel="select * from registration";
							$exe=$conn->query($sel);
							while($fetch=$exe->fetch_object())
							{
						?>
						<tr>
							<td><?php echo $fetch->uid; ?></td>
							<td><?php echo $fetch->name; ?></td>
							<td><?php echo $fetch->password; ?></td>
							<td><?php echo $fetch->phone; ?></td>
							<td><?php echo $fetch->email; ?></td>
						
							<td><a href="delete.php ? duid=<?php echo $fetch->uid; ?>">Delete&nbsp&nbsp</a>
							<a href="cedit.php ? euid=<?php echo $fetch->uid; ?>">update&nbsp&nbsp</a>
							<a href="block.php ? buid=<?php echo $fetch->uid; ?>">
							<?php
							echo $fetch->status;
							?>
							</a></td>
						</tr>
						<?php
						}
						?>	
					</tbody>
					
				</table>
				

				
				
			</div>

</body>
</html>