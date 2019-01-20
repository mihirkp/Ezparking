<?php
include('conn.php');
session_start();
 $start_date = $_POST['start_date'];
 $end_date = $_POST['end_date'];
 $park_id = $_POST['park_id'];
 $vehicle_type = $_POST['vehicle_type'];



$hourdiff = round((strtotime($end_date) - strtotime($start_date))/3600, 1);
     
$totalhr = $hourdiff;

		
if($totalhr <= 24){        

    $sql=mysqli_query($conn,"SELECT *,min(hour) FROM `parkdetail` WHERE parkid = ".$park_id." and vehid = ".$vehicle_type." and hour >= ".$totalhr." and timeperiod != 'day'");
    $row = mysqli_fetch_assoc($sql); 
     echo round($row['price']);    

}else{

    $sql=mysqli_query($conn,"SELECT * FROM `parkdetail` WHERE parkid = ".$park_id." and vehid = ".$vehicle_type." and timeperiod = 'day'");
    $row = mysqli_fetch_assoc($sql); 
     echo round($row['price'] * $totalhr);        
        
}
?>
