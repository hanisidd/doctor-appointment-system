<?php
$tittle;
session_start();
if (!isset($_SESSION['pid'])) {
    header('location:index.php?msg= "you should log in first"');
}
?>

<!doctype html>
<html lang="en">

<!--   [XR&CO'2014], Tue, 22 Oct  -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if (isset($tittle)) echo $tittle;
            else {
                echo "medi-care";
            } ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="fonts/poppins/poppins.css">
    <link rel="stylesheet" href="plugin/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugin/process-bar/tox-progress.css">
    <link rel="stylesheet" href="plugin/owl-carouse/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owl-carouse/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugin/animsition/css/animate.css">
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugin/mediaelement/mediaelementplayer.css">
    <link rel="stylesheet" href="plugin/datetimepicker/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="plugin/datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="plugin/lightgallery/lightgallery.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
<link rel="stylesheet" href="css/user.css">

</head>

<body>

    <!--load page-->
    <div class="load-page">
        <div class="sk-wave">
            <div class="sk-rect sk-rect1"></div>
            <div class="sk-rect sk-rect2"></div>
            <div class="sk-rect sk-rect3"></div>
            <div class="sk-rect sk-rect4"></div>
            <div class="sk-rect sk-rect5"></div>
        </div>
    </div>

    <!-- Mobile nav -->
    <nav class="visible-sm visible-xs mobile-menu-container mobile-nav">
        <div class="menu-mobile-nav navbar-toggle">
            <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
        <div id="cssmenu" class="animated">
            <div class="uni-icons-close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <ul>
            <li><a href="home.php">Home</a> </li>
                                                    <li class="has-sub"><a href="">Appointment</a>
                                                        <ul>

                                                            <li><a href='myappointment.php'>My Appointments</a> </li>

                                                            <li><a href='bookapp.php'>Book Appointment</a> </li>

                                                        </ul>


                                                    </li>
                                                    <li class="has-sub"><a href="">Reports</a>
                                                        <ul>

                                                        <li><a href='reports.php'>Lab Reports</a> </li>

                                                            <li><a href='savedrep.php'>Saved Reports</a> </li>

                                                        </ul>


                                                    </li>
                                                    <li><a href="doctor.php">Doctors</a></li>
                                                   
                                                    <li class="has-sub"><a href='#'>Other Services</a>
                                                        <ul>

                                                        <li><a href='department.php'>Departments</a></li>
                                                            <li><a href='commondisease.php'>Common Diseases</a> </li>
                                                            <li><a href='contactus.php'>Contact Us</a> </li>
                                                            <li><a href='about.php'>About</a> </li>

                                                        </ul>
                                                    </li>
                                                    <?php
                                            require('config.php');
                                            $id = $_SESSION['pid'];
                                            $query = "SELECT * from  patient where P_id =$id ";
                                            if ($result = $mysqli->query($query)) {
                                                while ($row = $result->fetch_object()) { ?>

                                                    <li class="uni-btn-appointment">
                                                        <a href="userprofile.php?id=<?php echo $row->P_id; ?>">My Profile</a> <?php }
                                                                                                                        } ?>
                                                    </li>


                    </ul>
                </li>

            </ul>


            <div class="clearfix"></div>
        </div>
    </nav>
    <!-- <-- End mobile menu -->

    <div class="uni-home-1">
        <div id="wrapper-container" class="site-wrapper-container">
            <header>
                <div class="uni-medicare-header sticky-menu">
                    <div class="container">
                        <div class="uni-medicare-header-main">
                            <div class="row">
                                <div class="col-md-2">
                                    <!--LOGO-->
                                    <div class="wrapper-logo">
                                        <a class="logo-default" href="#"><img src="images/logo.png" alt="" class="img-responsive"></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <!--MENU TEXT-->
                                    <div class="uni-main-menu">
                                        <nav class="main-navigation uni-menu-text">
                                            <div class="cssmenu">
                                                <ul>
                                                    <li><a href="home.php">Home</a> </li>
                                                    <li class="has-sub"><a href="">Appointment</a>
                                                        <ul>

                                                            <li><a href='myappointment.php'>My Appointments</a> </li>

                                                            <li><a href='bookapp.php'>Book Appointment</a> </li>

                                                        </ul>


                                                    </li>
                                                    <li class="has-sub"><a href="">Reports</a>
                                                        <ul>

                                                        <li><a href='reports.php'>Lab Reports</a> </li>

                                                            <li><a href='savedrep.php'>Saved Reports</a> </li>

                                                        </ul>


                                                    </li>
                                                    <li><a href="doctor.php">Doctors</a></li>
                                                   
                                                    <li class="has-sub"><a href='#'>Other Services</a>
                                                        <ul>

                                                        <li><a href='department.php'>Departments</a></li>
                                                            <li><a href='commondisease.php'>Common Diseases</a> </li>
                                                            <li><a href='contactus.php'>Contact Us</a> </li>
                                                            <li><a href='about.php'>About</a> </li>

                                                        </ul>
                                                    </li>

                                                </ul>

                                            </div>
                                        </nav>
                                    </div>

                                    <!--SEARCH AND APPOINTMENT-->
                                    <div class="uni-search-appointment">
                                        <ul>

                                            <!-- <li class="un-btn-search">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </li> -->

                                            <?php
                                            require('config.php');
                                            $id = $_SESSION['pid'];
                                            $query = "SELECT * from  patient where P_id =$id ";
                                            if ($result = $mysqli->query($query)) {
                                                while ($row = $result->fetch_object()) { ?>

                                                    <li class="uni-btn-appointment">
                                                        <a href="userprofile.php?id=<?php echo $row->P_id; ?>">My Profile</a> <?php }
                                                                                                                        } ?>
                                                    </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <!--FORM SEARCH-->
                            <!-- <div class="uni-form-search-header">
                                <div class="box-search-header collapse" id="box-search-header">
                                    <div class="uni-input-group">
                                        <input type="text" name="key" placeholder="Search" class="form-control">
                                        <button class="uni-btn btn-search">
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </header>