<?php
    include_once "user.php";
    include_once "files\database\config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> </title>
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
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="files\assets\images\favicon.ico" type="image/x-icon">
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
    .h {
        color: white;
    }
    .fd{
        color:black!important;
    }
    .m {
        margin-top: 15px;
        padding: 10px;
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
                                        <span class="input-group-addon search-close"><i
                                                class="feather icon-x"></i></span>
                                        <input type="text" class="form-control" placeholder="search..">
                                        <span class="input-group-addon search-btn"><i
                                                class="feather icon-search"></i></span>
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
                                        <img src="files\assets\images\avatar-4.jpg" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span><?php echo $e;?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

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
                        include "sidenav.php";
                        ?>

                        </div>
                    </nav>

                    <section class="pcoded-main-container">
                        <div class="pcoded-wrapper">
                            <div class="pcoded-content">
                                <div class="pcoded-inner-content">
                                    <div class="main-body">
                                        <div class="page-wrapper">
                                            <h5 class="font-weight-bold">Online Education Management</h5>
                                            <br>
                                            <div class="accordion" id="accordionMain">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <a href="#!" data-toggle="collapse"
                                                                data-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Analytic of Students and Teachers Registered vs Year
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class=" card-body collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordionMain">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">
                                                                <div class="card">
                                                                    <canvas id="lineChart"></canvas>
                                                                    <br>
                                                                    <p class="font-weight-bold text-center">Student
                                                                        Registered vs Calender Year </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-4">
                                                                <div class="card">
                                                                    <canvas id="lineChart2"></canvas>
                                                                    <br>
                                                                    <p class="font-weight-bold text-center">Teachers
                                                                        Registered vs Calender Year </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pcoded-content">
                                <div class="pcoded-inner-content">


                                    <div class="main-body">

                                        <div class="page-wrapper">
                                            <!-- [ Main Content ] start -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="card">
                                                        <br>
                                                        <table>
                                                        <?php 
                                                                    $sql = "select count(teacher_id) as a from teacher";
                                                                    $result = mysqli_query($con, $sql);
                                                                    $row = mysqli_fetch_array($result)
                                                                   ?>
                                                        <tr>
                                                        <td><h4 class="font-weight-bold">&nbsp;&nbsp;Teacher's</h4></td>
                                                        <td><h4><?php echo $row["a"];?></h4></td>
                                                        </tr>
                                                        </table>
                                                        <h4 class="font-weight-bold ml-3"><a href="teachers.php">(View)</a></h4>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="card">
                                                    <br>
                                                    <table>
                                                        <?php 
                                                                    $sql = "select count(student_id) as a from student";
                                                                    $result = mysqli_query($con, $sql);
                                                                    $row = mysqli_fetch_array($result)
                                                                   ?>
                                                        <tr>
                                                        <td><h4 class="font-weight-bold">&nbsp;&nbsp;Student's</h4></td>
                                                        <td><h4><?php echo $row["a"];?></h4></td>
                                                        </tr>
                                                        </table>
                                                        <h4 class="font-weight-bold ml-3"><a href="students.php">(View)</a></h4>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                <div class="card">
                                                <br>
                                                    <table>
                                                        <?php 
                                                                    $sql = "select count(subject_id) as a from subject";
                                                                    $result = mysqli_query($con, $sql);
                                                                    $row = mysqli_fetch_array($result)
                                                                   ?>
                                                        <tr>
                                                        <td><h4 class="font-weight-bold">&nbsp;&nbsp;Subject's</h4></td>
                                                        <td><h4><?php echo $row["a"];?></h4></td>
                                                        </tr>
                                                        </table>
                                                        <h4 class="font-weight-bold ml-3"><a href="subject.php">(View)</a></h4>

                                                </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="card">
                                                    <br>
                                                    <table>
                                                       
                                                        <tr>
                                                        <td><h4 class="font-weight-bold">&nbsp;&nbsp;Classes</h4></td>
                                                        <td><h4>2</h4></td>
                                                        </tr>
                                                        </table>
                                                        <h4 class="font-weight-bold ml-3"><a href="class.php">(View)</a></h4>


                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="card">
                                                    <br>
                                                    <table>
                                                        <?php 
                                                                    $sql = "select count(id) as a from notice";
                                                                    $result = mysqli_query($con, $sql);
                                                                    $row = mysqli_fetch_array($result)
                                                                   ?>
                                                        <tr>
                                                        <td><h4 class="font-weight-bold">&nbsp;&nbsp;Notice</h4></td>
                                                        <td><h4><?php echo $row["a"];?></h4></td>
                                                        </tr>
                                                        </table>
                                                        <h4 class="font-weight-bold ml-3"><a href="notice.php">(View)</a></h4>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                <div class="card">
                                                <br>
                                                    <table>
                                                       
                                                        <tr>
                                                        <td><h4 class="font-weight-bold">&nbsp;&nbsp;Streams</h4></td>
                                                        <td><h4>3</h4></td>
                                                        </tr>
                                                        </table>
                                                        <h4 class="font-weight-bold ml-3"><a href="##">(View)</a></h4>


                                                </div>
                                                </div>
                                            </div>
                                           

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pcoded-content">
                                <div class="pcoded-inner-content">


                                    <div class="main-body">
                                        <div class="page-wrapper">
                                            <!-- [ Main Content ] start -->
                                            <div class="row">


                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-block">
                                                            <h4 class="card-title mb-4"><i
                                                                    class="feather icon-book md-18 mr-2 btn-outline-primary"></i>
                                                                Quick Guide</h4>
                                                            <blockquote class="blockquote">
                                                                <p class="mb-3">
                                                                    Dashboard module will give you tools to manage and
                                                                    all the records for example teachers and students record etc. It contains the graphical analytic of students and teachers registered.
                                                                </p>
                                                                <h5 class="card-title mb-4">Dashboard features:</h5>
                                                                <ul class="list list-unstyled mb-3">
                                                                    <li><i
                                                                            class="feather icon-check-circle btn-outline-primary"></i>
                                                                        Students and Teachers Registered</li>
                                                                    <li><i
                                                                            class="feather icon-check-circle btn-outline-primary"></i>
                                                                        Classes</li>
                                                                    <li><i
                                                                            class="feather icon-check-circle btn-outline-primary"></i>
                                                                        Subjects</li>
                                                                    <li><i
                                                                            class="feather icon-check-circle btn-outline-primary"></i>
                                                                        Notices</li>
                                                                </ul>
                                                                              </blockquote>

                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <!-- [ Main Content ] end -->
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </section>
                    <!-- [ Main Content ] end -->







                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
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
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script type="text/javascript">

        function notify(message, type) {
            $.growl({
                message: message
            }, {
                type: type,
                allow_dismiss: false,
                label: 'Cancel',
                className: 'btn-xs btn-inverse',
                placement: {
                    from: 'bottom',
                    align: 'right'
                },
                delay: 5000,
                animate: {
                    enter: 'animated fadeInRight',
                    exit: 'animated fadeOutRight'
                },
                offset: {
                    x: 30,
                    y: 30
                }
            });
        };

        // Generate Chart
        function chart(id, type, data, options) {
            var canvas = document.getElementById(id);
            var ctx = canvas.getContext('2d');
            new Chart(ctx, {
                type: type,
                data: data,
                options: options
            });
        }

        $(document).ready(function () {

            var mainTable;

            mainTable = $('#grid').DataTable({
                lengthChange: false,
                info: false,
                searching: true,
                dom: 'lrtip',
                scrollX: false,
                pageLength: 5,
            });

            $('#m-search').keyup(function () {
                mainTable.search($(this).val()).draw();
            })

            //initiate all select2 class
            $('.select2').select2({
                allowClear: true,
                placeholder: "Select"
            });

            //initiate all datepicker class
            $('.datepicker').datepicker({
                todayHighlight: true,
                format: 'yyyy-mm-dd',
                autoclose: true
            });

            //initiate all datepickeryearmonth class
            $('.datepickeryearmonth').datepicker({
                startView: "months",
                format: "yyyy-mm",
                minViewMode: "months",
                autoclose: true
            });


            var message = $("#StatusMessage").text();
            if (message) {
                if (message.includes("Error")) {
                    //error
                    notify(message, 'danger');
                } else {
                    //success
                    notify(message, 'success');
                }
            }
        });
    </script>


    <script type="text/javascript">

        //line
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["2012", "2013", "2014", "2015", "2016", "2018"],
                datasets: [
                    {
                        label: "Students Registered",
                        data: [8, 5, 8, 9, 9, 17],
                        backgroundColor: [
                            'rgba(2, 117, 216, .2)',
                        ],
                        borderColor: [
                            'rgba(0, 10, 130, .7)',
                        ],
                        borderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true
            }
        });

        var ctxL = document.getElementById("lineChart2").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["2012", "2013", "2014", "2015", "2016", "2018"],
                datasets: [
                    {
                        label: "Teachers Registered",
                        data: [11, 13, 14, 12, 18, 15],
                        backgroundColor: [
                            'rgba(125, 65, 15, .4)',
                        ],
                        borderColor: [
                            'rgba((125, 65, 15, .9)',
                        ],
                        borderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true
            }
        });


    </script>
    <script type="text/javascript">
        $(document).ready(function () {


            $('.metismenu li:nth-child(2)').addClass('active');


        });
    </script>

</body>

</html>