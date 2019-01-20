<?php
include('conn.php');
?>
<?php
if(isset($_REQUEST['dpdatailid']))
		{
			$dpdatailid=$_REQUEST['dpdatailid'];

			$del="delete from parkdetail where pdatailid='$dpdatailid'";
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