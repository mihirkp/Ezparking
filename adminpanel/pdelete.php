<?php
include('conn.php');
?>
<?php
if(isset($_REQUEST['dparkid']))
		{
			$dparkid=$_REQUEST['dparkid'];

			$del="delete from parkinglot where parkid='$dparkid'";
			$exe=$conn->query($del);
			if($exe)
			{
				header('location:manageclient.php');
			}
			else
			{
				echo "delete not success";
			}
		}
?>