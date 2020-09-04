<?php
    include_once "user.php";
    include_once "files\database\config.php";
    
    $notice=$_POST['notice'];
    $description=$_POST['description'];
   


    $sql="insert into notice(notice,description) values('$notice','$description')";

    $r= mysqli_query($con,$sql);
    
    if($r>0)
    {
         header("location:notice2.php");
    }
  

?>
