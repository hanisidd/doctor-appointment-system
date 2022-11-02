<?php
$tittle = "Saved Reports";
include('header.php'); ?>
<div id="main-content" class="site-main-content">
    <section class="site-content-area">

        <div class="uni-banner-default uni-background-1">
            <div class="container">
                <!-- Page title -->
                <div class="page-title">
                    <div class="page-title-inner">
                        <h1>Saved Reports</h1>


                    </div>
                </div>

                <!-- <div class="col-md-4">
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
                </div> -->
            </div>
        </div>

        <!--DEPARTMENT-->

    </section>

</div>
<br><br><br><br>
<div class="single-table  ">
    <div class="table-responsive">
        <div class="uni-home-title">
            <h3>Your saved Report</h3>
            <div class="uni-underline"></div>
        </div>
        <div class="container  col-md-7  " style="padding-left: 500px;">
            <table class="table" style="overflow-x: auto;">
                <thead class="text-uppercase bg-primary ">
                    <tr class="text-white">

                        <!-- <th scope="col">Report</th> -->
                        <th scope="col">Name</th>
                        <th scope="col">View</th>
                        <th scope="col">Download</th>
                        <th scope="col">Un Save</th>

                    </tr>
                </thead>
                <?php
                require('config.php');
                $id = $_SESSION['pid'];

                $query = "select r_name,s_rep,save_id from reports r INNER JOIN saved_reports sr ON r.r_id=sr.rep_id where patient_id = $id";
                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_object()) { ?>

                        <tbody>
                            <tr>
                                
                                <!-- 
$query="select r_name,s_rep from reports r INNER JOIN saved_reports sr ON r.r_id=sr.rep_id where patient_id = $id"; -->


                                <th scope="col"><?php echo $row->r_name;  ?></th>
                                <td><a href="../admin/<?php echo $row->s_rep; ?>" class="btn btn-primary" target="_blank"> View</a></td>
                                <td><a href="downloadrep.php?file=<?php echo $row->s_rep; ?>" class="btn btn-danger"> Download</a></td>
                                <td><a href="function.php?sid=<?php echo $row->save_id; ?>" class="btn btn-info" name="unsave">un save</a></td>



                            </tr>
                        </tbody>

                <?php
                    }
                }


                //        elseif ($search!=$query) {

                // echo "not found";


                //}   
                ?>


            </table>
        </div>
    </div>
</div>












<?php
include('footer.php');
?>