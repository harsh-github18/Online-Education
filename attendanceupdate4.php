<?php
    include_once "user.php";
    include_once "files\database\config.php";
    
    $id=$_POST['id'];
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

    $sql2="update attendance set subjectname ='$subjectname',behalf='$behalf',studentname='$studentname',student_id='$student_id',stream='$stream',class='$class',status='$status',date='$date' where id='$id'";
    $r = mysqli_query($con, $sql2);

    if($r>0)
    {
         header("location:attendance.php");
    }
    else{
        echo"s";
        
    }
  

?>
