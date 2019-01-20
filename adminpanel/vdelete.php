<?php
include('conn.php');
?>
<?php
if(isset($_REQUEST['dvendorid']))
		{
			$dvendorid=$_REQUEST['dvendorid'];

			$del="delete from vendor where vendorid='$dvendorid'";
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