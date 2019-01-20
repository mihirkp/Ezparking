<?php
include('conn.php');
session_start();
if(isset($_REQUEST['book']))
    {
        $vehicle_type=$_REQUEST['vehicle_type'];
        $nplate=$_REQUEST['nplate'];
        $start_time=$_REQUEST['start_time'];
        $end_time=$_REQUEST['end_time'];
        $priceee=$_REQUEST['calculated_hour'];
        $parkid=$_REQUEST['pname'];
        $uid=$_SESSION['usid'];

    
    $ins="insert into book(uid,parkid,vehicle_type,nplate,start_time,end_time,priceee) values('$uid','$parkid','$vehicle_type','$nplate','$start_time','$end_time','$priceee')";
    $exe=$conn->query($ins);
    if($exe)
    {
        header('location:index.php');
    }
    else
    {
        echo "not suceess";
    }
	}
?>