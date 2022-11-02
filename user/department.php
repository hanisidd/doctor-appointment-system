<?php
$tittle ="Departments";
include('header.php'); ?>
<div id="main-content" class="site-main-content">
    <section class="site-content-area">

        <div class="uni-banner-default uni-background-1">
            <div class="container">
                <!-- Page title -->
                <div class="page-title">
                    <div class="page-title-inner">
                        <h1>departments</h1>

                      
                    </div>
                </div>
                <!-- End page title -->

                <!-- Breadcrumbs -->
                <!-- <ul class="breadcrumbs">
                            <li><a href="#">home</a></li>
                            <li><a href="#">departments</a></li>
                        </ul> -->

                <!-- End breadcrumbs -->
                <div class="col-md-4">
            <div class="uni-blog-list-right">
                <aside id="secondary" class="widget-area">
                    <aside class="widget">
                        <div class="widget-content">
                            <div class="uni-search-sidebar">
                                <form action="" method="post" accept-charset="utf-8">
                                    <div class="vk-newlist-banner-test-search">
                                        <input type="text" name="search" placeholder="Search...">
                                        <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </aside>
                </aside>
            </div>
        </div>
            </div>
        </div>

        <!--DEPARTMENT-->

        <div class="uni-hơm-1-department" id="dep">
            <div class="container" id="dep">
                <div class="uni-home-title">
                    <h3>Department</h3>
                    <div class="uni-underline"></div>

                </div>

                <?php
                require('config.php');
                if(isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $query = "SELECT * from  departments where dep_name  LIKE '%$search%'";
                }
                else{$query = "SELECT * from  departments";}
                
                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_object()) { ?>
                        <div class="uni-shortcode-icon-box-1">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icon-box-1-default uni-shortcode-icons-box-2-default uni-background-blue">
                                        <div class="item-icons">
                                            <!-- <img src="" alt="" > -->
                                            <i class="fa fa-hospital-o" aria-hidden="true" class="img-responsive"></i>
                                        </div>

                                        <div class="item-caption">
                                            <h4><?php echo $row->dep_name; ?></h4>
                                            <p><?php echo $row->dep_description;  ?></p>
                                        </div>
                                    </div>
                                </div>

                        <?php
                    }
                } ?>

                            </div>

                        </div>

    </section>

</div>
<?php
include('footer.php'); ?>