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
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="accordion" id="accordionMain">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <a href="#!" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Analytic
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class=" card-body collapse show" aria-labelledby="headingOne" data-parent="#accordionMain">
                                    <div class="row">
                                        <div class="col-md-5 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-4">Leave vs Absence Days</h4>
                                                    <div class="chart-container doughnut">
                                                        <canvas id="doughnutChart" height="250" width="250"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mb-4">
                                            <div class="row">
                                                <div class="col-md-6 col-xl-6 mb-3">
                                                    <div class="card">
                                                        <div class="card-block ticket-visitor">
                                                            <h3 class="mb-2">0</h3>
                                                            <h5 class="text-muted f-w-300 mb-4">Approved</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 0%;height:13px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-6 mb-3">
                                                    <div class="card">
                                                        <div class="card-block ticket-visitor">
                                                            <h3 class="mb-2">0</h3>
                                                            <h5 class="text-muted f-w-300 mb-4">Not Approved</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 0%;height:13px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-6">
                                                    <div class="card">
                                                        <div class="card-block ticket-visitor">
                                                            <h3 class="mb-2">0</h3>
                                                            <h5 class="text-muted f-w-300 mb-4">Paid</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 0%;height:13px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-6">
                                                    <div class="card">
                                                        <div class="card-block ticket-visitor">
                                                            <h3 class="mb-2">0</h3>
                                                            <h5 class="text-muted f-w-300 mb-4">Not Paid</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 0%;height:13px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
              
                <div class="page-header">
                    <div class="page-block">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="dropdown d-inline">
                                    <button class="btn drp-icon btn-rounded btn-primary" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-grid"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <h6 class="dropdown-header">Settings</h6>
                                        <a class="dropdown-item" href="leavetype.php">Leave Type</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <form method="get" action="filterleave.php">
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2 text-sm-right">Periode</label>
                                    <div class="col-sm-6 ">
                                        <input type="month" name="Period" required class="form-control">
                                    </div>
                                    <div class="btn-group col-sm-4" role="group" aria-label="First group">
                                    <button class="btn drp-icon btn-rounded btn-primary" type="submit">

                                       <i class="mdi mdi-recycle"></i> Refresh
                                    </button>
                                    </div>
                                </div>
                            </form>    
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h3 class="m-b-10">Leave Request</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                

                            </div>

                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>List of Leave</h5>
                                        <div class="card-header-right">
                                            <div class="btn-group card-option">
                                                <form action="leaveform2.php">
                                                    <button class="btn drp-icon btn-rounded btn-primary" type="submit">
                                                        <i class="feather icon-plus" style="color:white;"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table id="grid" class="display table nowrap table-striped table-hover" style="width:100%">
                                                <thead>
                                                    <tr>
                                                       
                                                        <th width="20%">Leave</th>
                                                        <th width="15%">OnBehalf</th>
                                                        <th width="15%">Is Paid Leave?</th>
                                                        <th width="15%">From</th>
                                                        <th width="15%">To</th>
                                                        <th width="10%">Is Approved</th>
                                                    </tr>
                                                </thead>
                                                <?php 
                                                                    $sql = "select * from leave";
                                                                    $result = pg_query($con, $sql);
                                                      
                                                                    while ($row = pg_fetch_array($result))
                                                                     {
                                                                    ?>
                                                <tbody>
                                                <td><?php echo $row[0]; ?></td>
                                                <td><?php echo $row[5]; ?></td>
                                                <td><?php echo $row[3]; ?></td>
                                                <td><?php echo $row[8]; ?></td>
                                                <td><?php echo $row[4]; ?></td>
                                                <td><?php echo $row[7]; ?></td>

                                                                                
                                                </tbody>
                                                <?php
                                                                     }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title mb-4"><i class="feather icon-book md-18 mr-2 btn-outline-primary"></i> Quick Guide</h4>
                                        <blockquote class="blockquote">
                                            <p class="mb-3">
                                                Leave module will give you tools to manage and submit your leave request. After leave request submitted, then it will follow the approval mechanism to approve or not approve the request.
                                            </p>
                                            <h5 class="card-title mb-4">Leave request features:</h5>
                                            <ul class="list list-unstyled mb-3">
                                                <li><i class="feather icon-check-circle btn-outline-primary"></i> Approval</li>
                                                <li><i class="feather icon-check-circle btn-outline-primary"></i> Setup the leave dates</li>
                                                <li><i class="feather icon-check-circle btn-outline-primary"></i> Pick the leave type</li>
                                                <li><i class="feather icon-check-circle btn-outline-primary"></i> Choose paid or unpaid leave</li>
                                            </ul>
                                            <h5><i class="feather icon-zap btn-outline-warning"></i> Tips</h5>
                                            <p>
                                                Select and change period to navigate data between periods.
                                            </p>
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
                    labels: ["Sick Leave","Personal Leave","Pregnancy and Maternity Leave","Military Leave","Family and Medical Leave","Vacation Leave"],
                    datasets: [{
                        label: 'Doughnut chart',
                        data: [0,0,0,0,0,0],
                        backgroundColor: ["rgba(29, 233, 182, 0.4)","rgba(29, 196, 233, 0.5)","rgba(163, 137, 212, 0.8)","rgba(4, 169, 245, 0.6)","rgba(137, 159, 212, 0.8)","rgba(29, 233, 182, 0.4)"],
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
                location.href = '/Leave/Index?period=' + $('#Period').val();
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
