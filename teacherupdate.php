<?php
    include_once "user.php";
    include_once "files\database\config.php";
    
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $type=$_POST['type'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];


    $sql="insert into teacher(name,subject,type,gender,age,email,phone,password) values('$name','$subject','$type','$gender','$age','$email','$phone','$password')";

    $r= mysqli_query($con,$sql);
    
    if($r>0)
    {
         header("location:teachers.php");
    }


?>
