<?php
include_once "user.php";
include_once "files\database\config.php";

$id=$_GET["id"];
$sql = "delete from subject where subject_id='$id'";
$result = mysqli_query($con, $sql);
if($result>0)
{
    //echo 'data inserted';
   header("location:subject.php"); //this will open the display.php file
}

?>