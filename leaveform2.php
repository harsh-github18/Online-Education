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
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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
          <span class="b-title">ONLINE EDUCATION</span>
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
                                        <span><?php echo $e;?></span>
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
                        <ul class="pcoded-item pcoded-left-item">
                            

                            <li class="nav-item pcoded-menu-caption h">
                                <label class="m-t-10" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello <?php echo $e;?></label>
                              </li>
                              <!--self service-->
                              
                              <li class="nav-item" >
                                <a href="service.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-airplay"></i>
                                  </span><span class="pcoded-mtext">Self Service</span>
                                </a>
                              </li>
                              <!--employee-->
                              <li class="nav-item  ">
                                <a href="employee.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-user-check"></i>
                                  </span><span class="pcoded-mtext">Employee</span>
                                </a>
                              </li>
                              <!--Todo: Recruitment for another version-->
                              <li hidden class="nav-item ">
                                <a href="recruit.html" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-award"></i>
                                  </span><span class="pcoded-mtext">Recruitment</span>
                                </a>
                              </li>
                              <!--Attendance-->
                              <li class="nav-item ">
                                <a href="attendance.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-clock"></i>
                                  </span><span class="pcoded-mtext">Attendance</span>
                                </a>
                              </li>
                              <!--Leave-->
                              <li class="nav-item  active">
                                <a href="leave2.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-briefcase"></i>
                                  </span><span class="pcoded-mtext">Leave</span>
                                </a>
                              </li>
                              <!--Award-->
                              <li class="nav-item ">
                                <a href="award.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-award"></i>
                                  </span><span class="pcoded-mtext">Award</span>
                                </a>
                              </li>
                              <!--Information-->
                              <li class="nav-item ">
                                <a href="info.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-message-circle"></i>
                                  </span><span class="pcoded-mtext">Information</span>
                                </a>
                              </li>
                              <!--Asset-->
                              <li class="nav-item ">
                                <a href="#" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-package"></i>
                                  </span><span class="pcoded-mtext">Asset</span>
                                </a>
                              </li>
                              <!--Expense-->
                              <li class="nav-item  ">
                                <a href="expense2.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-layers"></i>
                                  </span><span class="pcoded-mtext">Expense</span>
                                </a>
                              </li>
                              <!--Payroll-->
                              <li class="nav-item ">
                                <a href="payroll.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-star"></i>
                                  </span><span class="pcoded-mtext">Payroll</span>
                                </a>
                              </li>
                              <!--Appraisal-->
                              <li class="nav-item ">
                                <a href="appraisal.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-sunrise"></i>
                                  </span><span class="pcoded-mtext">Appraisal</span>
                                </a>
                              </li>
                              <!--Ticket-->
                              <li class="nav-item  ">
                                <a href="ticket2.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-flag"></i>
                                  </span><span class="pcoded-mtext">Ticket</span>
                                </a>
                              </li>
                              <!--Todo-->
                              <li class="nav-item ">
                                <a href="todo.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-calendar"></i>
                                  </span>
                                  <span class="pcoded-mtext">Todo</span>
                                </a>
                              </li>
                              <!--Todo: Settings for another version-->
                              <li hidden class="nav-item ">
                                <a href="/Settings/Index?period=2020-06" class="nav-link">
                                  <span class="pcoded-micon"><i class="feather icon-file-plus"></i></span>
                                  <span class="pcoded-mtext">Settings</span>
                                </a>
                              </li>
                              <!--Membership-->
                              <li class="nav-item ">
                                <a href="membership.php" class="nav-link">
                                  <span class="pcoded-micon"><i class="feather icon-user-plus"></i></span>
                                  <span class="pcoded-mtext">Membership</span>
                                </a>
                              </li>
                              <!--Role-->
                              <li class="nav-item ">
                                <a href="role.php" class="nav-link">
                                  <span class="pcoded-micon">
                                    <i class="feather icon-unlock"></i>
                                  </span><span class="pcoded-mtext">Role</span>
                                </a>
                              </li>

                        </ul>
                          
                         
                            
                           
                        </div>
                    </nav>
     
                    <section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="leave2.php" class="btn drp-icon btn-rounded btn-primary">
                                    <i class="feather icon-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h3 class="m-b-10">SelfService | Leave Request</h3>
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
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form method="post" action="leaveupdate2.php">
                                    <article class="card mb-4">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Create or edit existing Leave item</h4>
                                        </div>
                                        <div class="card-body">
                                           <div class="form-group">
                                                <label for="LeaveName">Leave Name</label>
                                                <input  class="form-control" required type="text" id="LeaveName" name="LeaveName" value="" />
                                                <span class="text-danger field-validation-valid" data-valmsg-for="LeaveName" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="Description">Description</label>
                                                <input class="form-control" required type="text" data-val="true" data-val-required="The Description field is required." id="Description" name="Description" value="" />
                                                <span class="text-danger field-validation-valid" data-valmsg-for="Description" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="LeaveTypeId">Leave Type</label>
                                                <select class="select2 form-control"  required data-val="true" data-val-required="The Leave Type field is required." id="LeaveTypeId" name="LeaveTypeId">
                                                <?php 
                                                                    $sql = "select * from leavetype";
                                                                    $result = pg_query($con, $sql);
                                                                   
                                                                    while ($row = pg_fetch_array($result))
                                                                     {
                                                                    ?>
                                       <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
                                       <?php } ?>
</select>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="LeaveTypeId" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Is Paid Leave?</label>
                                                <div class="input-group">
                                                <input type="checkbox" name="leavepaid">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="FromDate">From Date</label>
                                                <div class="input-group">
                                                    <input type="date" required id="FromDate" name="FromDate" value="2020-07-01" class="datepicker form-control" data-val="true" data-val-required="The FromDate field is required.">
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="FromDate" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="ToDate">To Date</label>
                                                <div class="input-group">
                                                    <input type="date"required id="ToDate" name="ToDate" value="2020-07-01" class="datepicker form-control" data-val="true" data-val-required="The ToDate field is required.">
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="ToDate" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="OnBehalfId">OnBehalf</label>
                                                <div class="input-group">
                                                    <select  class="select2 form-control" id="OnBehalfId" name="OnBehalfId">
                                                    <?php 
                                                                    $sql = "select * from employee";
                                                                    $result = pg_query($con, $sql);
                                                                   
                                                                    while ($row = pg_fetch_array($result))
                                                                     {
                                                                    ?>
                                       <option value="<?php echo $row[1];echo" ";echo $row[2]; ?>"><?php echo $row[1];echo" ";echo $row[2]; ?></option>
                                       <?php } ?>

</select>
                                                    <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="OnBehalfId" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="EmergencyCall">Emergency Call</label>
                                                <div class="input-group">
                                                    <input class="form-control" required type="text" data-val="true" data-val-required="The Emergency Call field is required." id="EmergencyCall" name="EmergencyCall" value="" />
                                                    <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="EmergencyCall" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Is Approved</label>
                                                <div class="input-group">
                                                <input type="checkbox" name="leaveapp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>

                                        </div>
                                    </article>
                                    </form>
                                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8GNmIqGKUIhGjR2rrHjndk7yF4m1YcCI2L-7oHTDvbpF8PFmF13dK6O9oNlSu9_RfO81blUYiaWEzr8HAlLk7aw5AcK94Z_i2ZzP0RTsRpWxo0KpxNbGDNpM-tYzjB1gu2jvsGZdRYijUJyihSdU7-40z9KJnstkmlVa-YvzqqPJBk2HqhFFcS-oMruHzbtEQg" /><input name="IsPaidLeave" type="hidden" value="false"><input name="IsApproved" type="hidden" value="false"></form>
                            </div>
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

    <!-- Required Jquery -->
    <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script><script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
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
        $(document).ready(function () {

        });

       //Doughnut Chart
        $(function () {
            var doughnutChart = {
                data: {
                    labels: ["Leave","Absence"],
                    datasets: [{
                        label: 'Doughnut chart',
                        data: [0,22],
                        backgroundColor: ["rgba(29, 233, 182, 0.4)","rgba(29, 196, 233, 0.5)"],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "top"
                    },
                    cutoutPercentage: 50
                }
            }
            chart("doughnutChart", "doughnut", doughnutChart.data, doughnutChart.options);
        });

        function onRefresh() {
            if ($('#Period').val() !== '') {
                location.href = '/SelfService/Leave?period=' + $('#Period').val();
            } else {
                notify('Please select period first!', 'danger');
            }

        }

    </script>



<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
