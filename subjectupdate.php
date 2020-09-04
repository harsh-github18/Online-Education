<?php
    include_once "user.php";
    include_once "files\database\config.php";
    
    $name=$_POST['name'];
    $type=$_POST['type'];
   


    $sql="insert into subject(name,type) values('$name','$type')";

    $r= mysqli_query($con,$sql);
    
    if($r>0)
    {
         header("location:subject.php");
    }
  

?>
