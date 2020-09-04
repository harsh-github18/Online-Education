<?php
    include_once "user.php";
    include_once "files\database\config.php";
    
    $subjectname=$_POST['subjectname'];
    $behalf=$_POST['behalf'];
    $studentname=$_POST['studentname'];
    $status=$_POST['status'];
    $date=$_POST['date'];
  


    //$sql="insert into student(name,stream,gender,class,age,email,dob,doj,fee,phone) values('$name','$stream','$gender','$class','$age','$email','$dob','$doj','$fees','$phone')";
    $sql="select * from student where name='$studentname'";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($result)) { 
        $student_id=$row["student_id"];
        $stream=$row["stream"];
        $class=$row["class"];
        
    }

    $sql2="insert into attendance(subjectname,behalf,studentname,student_id,stream,class,status,date) values('$subjectname','$behalf','$studentname','$student_id','$stream','$class','$status','$date')";
    $r = mysqli_query($con, $sql2);

    if($r>0)
    {
         header("location:attendance2.php");
    }
    else{
        echo"s";
        
    }
  

?>
