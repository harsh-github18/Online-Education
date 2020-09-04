<?php
    include_once "user.php";
    include_once "files\database\config.php";
    
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
    $password=$_POST['password'];


    $sql="insert into student(name,stream,gender,class,age,email,dob,doj,fee,phone,password) values('$name','$stream','$gender','$class','$age','$email','$dob','$doj','$fees','$phone','$password')";

    $r= mysqli_query($con,$sql);
    
    if($r>0)
    {
         header("location:students.php");
    }
  

?>
