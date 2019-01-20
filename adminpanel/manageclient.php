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
<script>
$(document).ready( function () {
    $('#table_id1').DataTable();
} );
</script>
<script>
$(document).ready( function () {
    $('#table_id2').DataTable();
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
					<li class="active"><a href="manageclient.php">manage client</a></li>
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
<br><br><br>
<div class="wthree_team_grids" >	
			<div class="col-md-4 wthree_team_grid">	
				<form method="get" action="addvendor.php">
    			<button style="height:40px;width:400px;background-color: #a3a375;" type="addvendor" name="addvendor" class="btn btn-primary" 
				 >Add vendor</button>
				</form>
			</div>
			<div class="col-md-4 wthree_team_grid">
				<form method="get" action="addparkinglot.php">
    			<button style="height:40px;width:400px;background-color: #a3a375;" type="addparkinglot" name="addparkinglot" class="btn btn-primary" 
				 >Add parkinglot</button>
				</form>
			</div>
			<div class="col-md-4 wthree_team_grid">
				<form method="get" action="addparkdetail.php">
    			<button style="height:40px;width:400px;background-color: #a3a375;" type="addparkdetail" name="addparkdetail" class="btn btn-primary" 
				 >Add parkdetail</button>
				</form>
			</div>
</div>
<br><br><br>
<div class="bs-docs-example">
	<h3 class="agile-title">Vendor Detail</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-car sub-w3l" aria-hidden="true"></i></span></p>
		</div>
			<table id="table_id" class="display" class="table table-striped">
				<thead>
					<tr>
						<th>vendorid</th> 
						<th>Vendor name:</th>
						<th>Password:</th>
						<th>Email Address:</th>
						<th>Phone Number:</th>
						<th>address:</th>
						<th>action</th>
					</tr>
				</thead>
					<tbody>
						<?php
							$sel="select * from vendor";
							$exe=$conn->query($sel);
							while($fetch=$exe->fetch_object())
							{
						?>
						<tr>
							<td><?php echo $fetch->vendorid; ?></td>
							<td><?php echo $fetch->vendorname; ?></td>
							<td><?php echo $fetch->vpassword; ?></td>
							<td><?php echo $fetch->vemail; ?></td>
							<td><?php echo $fetch->vphone; ?></td>
							<td><?php echo $fetch->vaddress; ?></td>
							<td><a href="vdelete.php ? dvendorid=<?php echo $fetch->vendorid; ?>">Delete&nbsp&nbsp</a>
							<a href="vedit.php ? evendorid=<?php echo $fetch->vendorid; ?>">update&nbsp&nbsp</a>
							</td>
						</tr>
						<?php
						}
						?>	
                 	</tbody>
                </table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="bs-docs-example">
	<h3 class="agile-title">Parking lot Detail</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-car sub-w3l" aria-hidden="true"></i></span></p>
		</div>
			<table id="table_id1" class="display" class="table table-striped">
				<thead>
					<tr>
						<th>parkid</th> 
						<th>Parking lot name:</th>
						<th>Vendor name:</th>
						<th>Address:</th>
						<th>area:</th>
						<th>city:</th>
						<th>phone:</th>
						<th>image:</th>
						<th>action</th>
					</tr>
				</thead>
					<tbody>
						<?php
							$sele="select * from parkinglot a INNER JOIN city b ON a.cityid=b.cityid INNER JOIN area c ON a.areaid=c.areaid INNER JOIN vendor d ON a.vendorid=d.vendorid";
							$exec=$conn->query($sele);
							while($fe=$exec->fetch_object())
							{
						?>
						<tr>
							<td><?php echo $fe->parkid; ?></td>
							<td><?php echo $fe->parkingname; ?></td>
							<td><?php echo $fe->vendorname; ?></td>
							<td><?php echo $fe->paddress; ?></td>
							<td><?php echo $fe->areaname; ?></td>
							<td><?php echo $fe->cityname; ?></td>
							<td><?php echo $fe->phone; ?></td>
							<td><img src="upload/<?php echo $fe->file1;?>" height="50px" width="70px"></td>
							<td><a href="pdelete.php ? dparkid=<?php echo $fe->parkid; ?>">Delete&nbsp&nbsp</a>
							<a href="pedit.php ? eparkid=<?php echo $fe->parkid; ?>">update&nbsp&nbsp</a>
							</td>
						</tr>
						<?php
						}
						?>	
                 	</tbody>
            </table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="bs-docs-example">
	<h3 class="agile-title">Parking Detail</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-car sub-w3l" aria-hidden="true"></i></span></p>
		</div>
			<table id="table_id2" class="display" class="table table-striped">
				<thead>
					<tr>
						<th>parking detail id</th> 
						<th>Parking lot name:</th>
						<th>Vehicle type:</th>
						<th>Time period:</th>
						<th>hour:</th>
						<th>price:</th>
						<th>action</th>
					</tr>
				</thead>
					<tbody>
						<?php
							$sele="select * from parkdetail a INNER JOIN parkinglot b ON a.parkid=b.parkid INNER JOIN vehicle_type c ON a.vehid=c.vehid";
							$exec=$conn->query($sele);
							while($fett=$exec->fetch_object())
							{
						?>
						<tr>
							<td><?php echo $fett->pdatailid; ?></td>
							<td><?php echo $fett->parkingname; ?></td>
							<td><?php echo $fett->vehicletype; ?></td>
							<td><?php echo $fett->timeperiod; ?></td>
							<td><?php echo $fett->hour; ?></td>
							<td><?php echo $fett->price; ?></td>
							<td><a href="pddelete.php ? dpdatailid=<?php echo $fett->pdatailid; ?>">Delete&nbsp&nbsp</a>
							<a href="pdedit.php ? epdatailid=<?php echo $fett->pdatailid; ?>">update&nbsp&nbsp</a>
							</td>
						</tr>
						<?php
						}
						?>	
                 	</tbody>
            </table>
</div>
</body>
</html>