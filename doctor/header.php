<?php
$tittle;
session_start();
if(!isset($_SESSION['did'])){

    header('location:index.php?msg= "you should log in first"');
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php if (isset($tittle))echo $tittle;
    else{echo "medi-care";} ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
  
    
</head>

<body class="body-bg">
  
    <!-- preloader area start -->

    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="col-md-12">
                        <b><h4><a href="dashboard.php">Medi-care Doctor </a></h4>  </b> 
                        
                        <!-- <a href="index.html"><img src="assets/images/icon/logo2.png" alt="logo"></a> -->
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                                <li class="dropdown">
                                    <!-- <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span>2</span>
                                    </i> -->

                                </li>
                              
                            </ul>
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="../admin/<?php  if(isset($_SESSION['dpic'])){echo $_SESSION['dpic'];} ?>" alt="" height="50px" width="50px">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Doctor<?php  if(isset($_SESSION['dusername'])){echo $_SESSION['dusername'];} ?><i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <!-- <a class="dropdown-item" href="#">Message</a> -->
                                    <?php
require('config.php');
$id = $_SESSION['did'];
    $query = "SELECT * from  doctor where doc_id =$id ";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
                                    
                                    <a class="" href="profile.php?id=<?php  echo $row->doc_id;?>">My Profile</a>
                                    <?php
    }}
                                    ?>
                                    <a class="" href="logout.php">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                <li>
                                        <a href="doctordashboard.php"><span>Dashboard</span></a>
                                    </li>
                                    <li>
                                        <a href="viewapp2.php?id=<?php echo $_SESSION['did'];?>"><span>Appointments</span></a>
                                      
                                    </li>
                                    <li>
                                        <a href="feedback.php"><span>Feedbacks</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- nav and search button -->
                    <div class="col-lg-3 clearfix">
                        <div class="search-box">
                            <!-- <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form> -->
                        </div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->



       