<?php
    include_once "user.php";
    include_once "files\database\config.php";

    $id=$_POST['id'];
    $name=$_POST['name'];
    $stream=$_POST['stream'];
    $gender=$_POST['gender'];
    $class=$_POST['class'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $doj=$_POST['doj'];
    $fees=$_POST['fees'];
    $phone=$_POST['phone'];


   
    $sql="update student set name='$name',stream='$stream',gender='$gender',class='$class',age='$age',email='$email',dob='$dob',doj='$doj',fee='$fees',phone='$phone' where student_id=$id";
    $r= mysqli_query($con,$sql);
    
    if($r>0)
    {
         header("location:students.php");
    }
  

?>
