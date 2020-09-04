<?php
    include_once "user.php";
    include_once "files\database\config.php";
    $id=$_POST['id'];
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $type=$_POST['type'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];


   // $sql="insert into teacher(name,subject,type,gender,age,email,phone) values('$name','$subject','$type','$gender','$age','$email','$phone')";
    $sql="update teacher set name='$name',subject='$subject',type='$type',gender='$gender',age='$age',email='$email',phone='$phone' where teacher_id=$id";
    $r= mysqli_query($con,$sql);
    
    if($r>0)
    {
         header("location:teachers.php");
    }


?>
