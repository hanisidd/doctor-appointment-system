<?php
$tittle ="Doctors";
include('header.php'); ?>
<div id="main-content" class="site-main-content">
    <section class="site-content-area">

        <div class="uni-banner-default uni-background-1">
            <div class="container">
                <!-- Page title -->
                <div class="page-title">
                    <div class="page-title-inner">
                        <h1>Doctors</h1>


                    </div>
                </div>
                <!-- End page title -->


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

        <!--OUR DOCTOR-->
        <div id="main-content" class="site-main-content">
            <section class="site-content-area">
                <div class="uni-hơm-1-department">
                    <div class="container" id="doctors">
                        <!-- <div class="uni-banner-default uni-background-1">
                    <div class="container" id="doc"> -->
                        <div class="uni-home-title">
                            <h3>Our Doctors</h3>
                            <div class="uni-underline"></div>
                        </div>
                        
                        <div class="uni-our-doctor-body">
                            <div class="container">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_default_1">
                                        <div class="row">

                                            <?php
                                            require('config.php');
                                            if(isset($_POST['submit'])){
                                                $search = $_POST['search'];
                                                $query = "SELECT d.*,dp.dep_name as dpname from doctor d inner join departments dp on d.doc_depid=dp.dep_id where doc_name LIKE '%$search%'";
                                            }
                                            else{ $query = "SELECT d.*,dp.dep_name as dpname from doctor d inner join departments dp on d.doc_depid=dp.dep_id";}
                                           
                                            //$query = "SELECT * from doctor";
                                            if ($result = $mysqli->query($query)) {
                                                while ($row = $result->fetch_object()) { ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="uni-our-doctor-item-default">
                                                            <div class="item-img">
                                                                <a href="#"><img src="../admin/<?php echo $row->doc_pic; ?>" alt="" class="img-responsive" style="height: 270px; width: 270px;"></a>
                                                            </div>
                                                            <div class="item-caption">
                                                                <div class="item-caption-head">
                                                                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                                                                        <div class="item-icons">
                                                                            <img src="images/icons_box/icon_4/icon-3.png" alt="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                                                                        <div class="item-title">
                                                                            <h4><?php echo $row->doc_name;
                                                                                echo $row->doc_lname;  ?></h4>
                                                                            <span><?php echo $row->dpname; ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-caption-info">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <td>Email</td>
                                                                                <td> <?php echo $row->doc_email; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contact</td>
                                                                                <td><?php echo $row->doc_contact; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Status</td>
                                                                                <td><?php echo $row->doc_status; ?></td>
                                                                                <input type="hidden" value="doc_id;">
                                                                            </tr>
                                                                        </thead>




                                                                        <tfoot>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <ul>
                                                                                        <a href="docdetails.php?did=<?php echo $row->doc_id ;?>"><Button name="learnmore" class="vk-btn  vk-btn-xs vk-btn-default text-uppercase "> Learn more </Button></a>

                                                                                    </ul>
                                                                                    <div class="row">

                                                                                </td>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                            <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </div>



        <?php
        include('footer.php'); ?>