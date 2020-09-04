<?php
include_once "user.php";
include_once "files\database\config.php";


$name=$_POST['LeaveName'];
$description=$_POST['Description'];
$type=$_POST['LeaveTypeId'];
$paid=$_POST['leavepaid'];
$fdate=$_POST['FromDate'];
$tdate=$_POST['ToDate'];
$behalf=$_POST['OnBehalfId'];
$call=$_POST['EmergencyCall'];
$approved=$_POST['leaveapp'];

$sql = "insert into leave(name, description, type,paidleave, fdate, tdate,behalf,call,approved) values('$name','$description','$type','$paid','$fdate','$tdate','$behalf','$call','$approved')";
$result = pg_query($con, $sql);
if($result){
    echo("<script type='text/javascript'>alert('You Profile has been Updated');</script>");
 header("location:leave.php");

} 





?>