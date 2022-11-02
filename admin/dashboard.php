<?php
$tittle = "admin dashboard";
include('header.php');
$database_name = "medicare" . rand(1, 99999999);
$date_string = date("Y-m-d");
exec('C:\wamp64\bin\mysql\mysql5.7.31\bin\mysqldump.exe --skip-lock-tables --user=root --password= --host=localhost medicare>' . "backup/{$date_string}_{$database_name}.sql");
?>

<!-- page title area end -->
<div class="main-content-inner">
    <div class="container">
        <div class="row">
            <!-- seo fact area start -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 mt-5 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg1">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-user"></i> Registered Users</div>
                                    <?php
include('config.php');
$query = "SELECT P_id from patient order by P_id";
$query_run = mysqli_query($mysqli,$query);
$row = mysqli_num_rows($query_run);


?>


                                    <h2><?php  echo $row; ?></h2>
                                </div>
                                <canvas id="seolinechart1" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-5 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg2">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-notepad"></i> Total Appointments</div>
                                    <?php
include('config.php');
$query = "SELECT app_id from appointments order by app_id";
$query_run = mysqli_query($mysqli,$query);
$row = mysqli_num_rows($query_run);


?>
                                    <h2><?php  echo $row; ?></h2>
                                </div>
                                <canvas id="seolinechart2" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-lg-0">
                        <div class="card">
                            <div class="seo-fact sbg3">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-pulse"></i>Total Doctors</div>
                                    <?php
include('config.php');
$query = "SELECT doc_id from doctor order by doc_id";
$query_run = mysqli_query($mysqli,$query);
$row = mysqli_num_rows($query_run);


?>
                                    <h2><?php  echo $row; ?></h2>

                                </div>
                                <canvas id="seolinechart3" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="seo-fact sbg4">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-support"></i>Total Departments</div>
                                    <?php
include('config.php');
$query = "SELECT dep_id from departments order by dep_id";
$query_run = mysqli_query($mysqli,$query);
$row = mysqli_num_rows($query_run);


?>
                                    <h2><?php  echo $row; ?></h2>

                                </div>
                                <canvas id="seolinechart4" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- seo fact area end -->
            <!-- Social Campain area start -->
            <div class="col-lg-4 mt-5">
                <div class="card">
                    <div class="seo-fact sbg1">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-write"></i>Total Reports</div>
                            <?php
include('config.php');
$query = "SELECT r_id from reports order by r_id";
$query_run = mysqli_query($mysqli,$query);
$row = mysqli_num_rows($query_run);


?>
                            <h2><?php  echo $row; ?></h2>

                        </div>
                        <canvas id="seolinechart5" height="60"></canvas>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="seo-fact sbg3">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-comments"></i>Number of feedbacks</div>
                            <?php
include('config.php');
$query = "SELECT f_id from feedback order by f_id";
$query_run = mysqli_query($mysqli,$query);
$row = mysqli_num_rows($query_run);


?>
                            <h2><?php  echo $row; ?></h2>

                        </div>
                        <canvas id="seolinechart6" height="60"></canvas>
                    </div>
                </div>

            </div>
            <!-- Social Campain area end -->
            <!-- Statistics area start -->
            
            <!-- testimonial area end -->
        </div>
    </div>
</div>
<!-- main content area end -->


<?php
include('footer.php');
?>