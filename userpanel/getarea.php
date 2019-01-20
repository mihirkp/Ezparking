
<html>
<head></head>
<body>
<option>Select Area</option>
<?php
include('conn.php');
if($_REQUEST['q'])
{
	$q=$_REQUEST['q'];
	$sel="select * from area where cityid='$q'";	
	$exe=$conn->query($sel);
	while($fetch=$exe->fetch_object())
	{
	?>
	<option value="<?php echo $fetch->areaid;?>" >
				 <?php echo $fetch->areaname;?>
	</option>
<?php
	}
}
?>

</body>
</html>