<html>
<style>
body{
    background-color:aqua;
}
#div1{
     background-color:white;
      width:310px;
      height:100px;
      border-radius:10px;
      margin:30px;
      padding:10px;
}
</style>

</html>

<?php

session_start();
if(!isset($_SESSION["id"])){
    header("location.php");
}

        include_once "files\database\config.php";
       $email=$_POST['email'];
       $password1=$_POST['password'];

          

           $sql="select * from teacher where email='$email' and password='$password1'";
           $result = mysqli_query($con, $sql);
           $count=  mysqli_num_rows($result);
           if($count>0){

            $_SESSION["id"]=$email;
            header("location:new3.php");
            
        }
        else{
            echo("<div id='div1' align='center'>");

            echo '<script>alert("Enter the correct Login Password");</script>';
            echo '<p><a href="index.php">Login</a> Again</p>';
            echo("</div>");
        }



?>