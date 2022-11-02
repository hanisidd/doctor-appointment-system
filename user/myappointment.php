<?php
$tittle = "My appointments";
include('header.php');
?>


<div id="main-content" class="site-main-content">
    <section class="site-content-area">

        <div class="uni-banner-default uni-background-1">
            <div class="container">
                <!-- Page title -->
                <div class="page-title">
                    <div class="page-title-inner">
                        <h1>Appointments</h1>

                    </div>
                </div>
                <!-- End page title -->

                <!-- Breadcrumbs -->
                <!-- <ul class="breadcrumbs">
                            <li><a href="#">home</a></li>
                            <li><a href="#">departments</a></li>
                        </ul> -->

                <!-- End breadcrumbs -->
                <!-- <div class="col-md-4">
                    <div class="uni-blog-list-right">
                        <aside id="secondary" class="widget-area">
                            <aside class="widget">
                                <div class="widget-content">
                                    <div class="uni-search-sidebar">
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="vk-newlist-banner-test-search">
                                                <input type="text" name="search" placeholder="Search by date you book">
                                                <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </aside>
                        </aside>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="uni-hơm-1-department" id="dep">
            <div class="container" id="dep">
                <div class="uni-home-title">
                    <h3>My Appointments</h3>
                    <div class="uni-underline"></div>
                    <Button name="bookapp" class="vk-btn  vk-btn-xs vk-btn-default text-uppercase " style="float: right;"> <a href="bookapp.php"> Book Appointment</a></Button>

                </div>
                <!--DEPARTMENT-->
                <table class="table" style="overflow-x: auto;">
                    <thead class="thead-secondary bg-primary">
                        <tr>
                            <th scope="col">Patient Name</th>

                            <th scope="col">Appointment Date</th>
                            <th scope="col">Date of Session</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <?php
                    require('config.php');
                    if (isset($_POST['submit'])) {
                        $search = $_POST['search'];
                        $id = $_SESSION['pid'];
                        $query = "SELECT * from  appointments where patient_id = '$id' AND app_createiondate LIKE '%$search%' ";
                    } else {
                        $query = "SELECT * from  appointments where patient_id = '$id' ORDER BY app_date DESC ";
                    }
                    if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_object()) { ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $row->name; ?></th>


                                    <td><?php echo $row->app_date; ?></td>
                                    <td><?php echo $row->app_createiondate; ?></td>
                                    <td><?php echo $row->app_status; ?></td>

                                </tr>

                            </tbody>
                    <?php }
                    }

                    ?>
                </table>

    </section>

</div>


<?php
include('footer.php');
?>