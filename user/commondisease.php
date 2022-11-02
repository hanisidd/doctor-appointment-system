<?php
$tittle ="Common Disease";
include('header.php'); ?>
<div id="main-content" class="site-main-content">
    <section class="site-content-area">

        <div class="uni-banner-default uni-background-1">
            <div class="container">
                <!-- Page title -->
                <div class="page-title">
                    <div class="page-title-inner">
                        <h1>Diseases</h1>


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

        <!--Diseses-->
        <div class="uni-home-our-services" id="dis">
            <div class="uni-shortcode-icons-box-5">
                <div class="container" id="ser">

                    <div class="uni-home-title">
                        <h3>Some Information About Common Diseases</h3>
                        <div class="uni-underline"></div>
                    </div>


                    <?php
                    require('config.php');
                    if(isset($_POST['submit'])){
                        $search = $_POST['search'];
                        $query = "SELECT * from  disease where dis_name  LIKE '%$search%'";
                    }
                    else{ $query = "SELECT * from  disease";}
                   
                    if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_object()) { ?>
                            <div class="uni-shortcode-accordion-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="accordion-default">
                                            <div class="col-md-6">
                                                <div class="accordion-icons-img">
                                                    <div class="accordion">
                                                        <div class="accordion-item">
                                                            <div class="accordion-toggle">
                                                                <div class="accordion-icosn">
                                                                    <img src="../admin/<?php echo $row->dis_pic; ?>" alt="">
                                                                </div>
                                                                <h4><?php echo $row->dis_name; ?></h4>
                                                            </div>
                                                            <div class="accordion-content">
                                                                <h5>Description</h5>
                                                                <p>

                                                                    <?php echo $row->dis_description; ?>
                                                                </p>
                                                                <h5>Preventions</h5>
                                                                <p>

                                                                    <?php echo $row->dis_prevention; ?>
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <?php }
                            } ?>

    </section>
</div>
</div>
</div>
</div>



<?php
include('footer.php'); ?>