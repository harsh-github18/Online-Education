



<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(!isset($_SESSION["id"]));
{
     header("location.php");
}
$e=$_SESSION["id"];

?>

<head>
    <title>Student | Profile </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="files\assets\css\jquery.mCustomScrollbar.css">

</head>
<style>
    .h{
        color:white;
    }
    .m{
        margin-top: 15px;
        padding:10px;
    }
    </style>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo header-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="new2.php" class="b-brand">
          <div class="b-bg">
            <i class="feather icon-radio"></i>
          </div>
          <span class="b-title">Online Education</span>
        </a>

                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control" placeholder="search..">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                           
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span><?php  echo $e; ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        
                                        <li>
                                            <a href="new2.php">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="changepass.php">
                                                <i class="feather icon-settings"></i> Change Password
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="logout.php">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            
            
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu m">
                        <?php
                        include "sidenav3.php";
                        ?>
                         
                            
                           
                        </div>
                    </nav>
                    



                    <section class="pcoded-main-container">
                        <div class="pcoded-wrapper">
                          <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                              <!-- [ breadcrumb ] start -->
                              <div class="page-header">
                                <div class="page-block">
                                  <div class="row align-items-center">
                                    <div class="col-md-12">
                                      <div class="page-header-title">
                                      <br>
                                        <h3 class="m-b-5">&nbsp;&nbsp;&nbsp;&nbsp;Student|Profile</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- [ breadcrumb ] end -->
                              <div class="main-body">
                                <div class="page-wrapper">
                                  <!-- [ Main Content ] start -->
                                  <div class="row">
                                    <div class="col-sm-12">
                                    </div>
                                    <!-- [ Form Validation ] start -->
                                    <div class="col-sm-12">
                                      <div class="card">
                                        <div class="card-header">
                                          <h5>Basic Profile</h5>
                                        </div>
                                        <div class="card-block">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <form id="profile-form" method="post" action="profile.php">
                                                <div class="form-group">
                                                  <label for="Username">Username</label>
                                                  <input class="form-control" disabled type="text" id="Username" name="Username"
                                                    value="<?php  echo $e; ?>" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="Input_Email">Email</label>
                                                  <div class="input-group">
                                                    <input class="form-control" type="email" data-val="true"
                                                      data-val-email="The Email field is not a valid e-mail address."
                                                      data-val-required="The Email field is required." id="Input_Email" name="email"
                                                      value="<?php  echo $e; ?>" />
                                                    <span class="input-group-addon" aria-hidden="true"><span
                                                        class="glyphicon glyphicon-ok text-success"></span></span>
                                                  </div>
                                                  <span class="text-danger field-validation-valid" data-valmsg-for="Input.Email"
                                                    data-valmsg-replace="true"></span>
                                                </div>
                                                <div class="form-group">
                                                  <label for="Input_PhoneNumber">Phone number</label>
                                                  <input class="form-control" type="tel" data-val="true"
                                                    data-val-phone="The Phone number field is not a valid phone number."
                                                    id="Input_PhoneNumber" name="phone" pattern="[6-9]{1}[0-9]{9}" required />
                                                  <span class="text-danger field-validation-valid" data-valmsg-for="Input.PhoneNumber"
                                                    data-valmsg-replace="true"></span>
                                                </div>
                                                <button id="update-profile-button" type="submit" class="btn btn-primary">Save</button>
                                                <input name="__RequestVerificationToken" type="hidden"
                                                  value="CfDJ8GNmIqGKUIhGjR2rrHjndk7eom5BbQWOrfPF4a10WGTL6UJpZLfFOnR5gFPHYDd7vGLieDlJB2fo0sIKgNPd2AZ-vCdmdo5zTAU6CKf2Xy6lukKQTwHDMlaXOagGnzDnsjhOuI9_HuLsrlvSTEsGqseFqZVrq7jrHYdI6C6mCF0nBLS0eY_AqikERoeJJGl6PQ" />
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- [ Form Validation ] end -->
                                  </div>
                                  <!-- [ Main Content ] end -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script data-cfasync="false" src="cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script><script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="files\bower_components\modernizr\js\modernizr.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="files\bower_components\chart.js\js\Chart.js"></script>
    <!-- amchart js -->
    <script src="files\assets\pages\widget\amchart\amcharts.js"></script>
    <script src="files\assets\pages\widget\amchart\serial.js"></script>
    <script src="files\assets\pages\widget\amchart\light.js"></script>
    <script src="files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files\assets\js\SmoothScroll.js"></script>
    <script src="files\assets\js\pcoded.min.js"></script>
    <!-- custom js -->
    <script src="files\assets\js\vartical-layout.min.js"></script>
    <script type="text/javascript" src="files\assets\pages\dashboard\custom-dashboard.js"></script>
    <script type="text/javascript" src="files\assets\js\script.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
