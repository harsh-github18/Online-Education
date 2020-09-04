
<?php
session_start();
if(isset($_SESSION["id"])){
    header("location.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In | Student</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicon icon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->

    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\style2.css">

   

</head>

<body>
    <div class="auth-wrapper">

        <div class="auth-content subscribe">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4 col-lg-6 d-none d-md-flex d-lg-flex theme-bg align-items-center justify-content-center">
                        <img src="files\assets\images\user-2.png" alt="lock images" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <div class="card-body text-center">
                            <div class="row justify-content-center">
                                <div class="col-sm-10">
                                      <form id="account" method="post" action="login3.php">
                                        <div class="text-danger validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>                                 
                                        <h3 class="mb-4">Student Login</h3>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" required placeholder="Email" value="samplestudent@mail.com" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is required." id="Input_Email"  name="email">
                                        </div>
                                        <div class="input-group mb-4">
                                            <input type="password"  class="form-control" placeholder="password" value="123456" required data-val="true" data-val-required="The Password field is required." id="Input_Password"  name="password">
                                        </div>
                                        <div class="form-group text-left">
                                            <div class="checkbox checkbox-fill d-inline">
                                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="" data-val="true" data-val-required="The Remember me? field is required." value="true">
                                                <label for="checkbox-fill-a1" class="cr"> Save credentials</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
                                        <p class="mb-0 text-muted">Admin Login <a href="index.php">Admin Login?</a></p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Required Js -->
    <script src="/assets/js/vendor-all.min.js"></script>
    <script type="text/javascript" src="files\bower_components\bootstrap\js\bootstrap.min.js"></script>
</body>

</html>


