<?php
    include_once "user.php";
    include_once "files\database\config.php";
    
    $subjectname=$_POST['subjectname'];
    $chapternumber=$_POST['chapternumber'];
    $chaptername=$_POST['chaptername'];
    $englishlink=$_POST['englishlink'];
    $hindilink=$_POST['hindilink'];
 


    $sql="insert into studymaterial(subjectname,chapternumber,chaptername,englishlink,hindilink) values('$subjectname','$chapternumber','$chaptername','$englishlink','$hindilink')";

    $r= mysqli_query($con,$sql);
    
    if($r>0)
    {
         header("location:studymaterial2.php");
    }


?>
