<?php
$tittle = "Search Reports";
include('header.php'); ?>
<div id="main-content" class="site-main-content">
    <section class="site-content-area">

        <div class="uni-banner-default uni-background-1">
            <div class="container">
                <!-- Page title -->
                <div class="page-title">
                    <div class="page-title-inner">
                        <h1>Reports</h1>


                    </div>
                </div>

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

    </section>

</div>
<br><br><br><br>
<div class="single-table ">
    <div class="table-responsive">
        <?php
        require('config.php');
        if (isset($_POST['submit'])) {
            $search = $_POST['search'];
            $query = "SELECT * from  reports where r_number = '$search'";
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_object()) { ?>
    <div class="uni-home-title">
                            <h3>Your Report</h3>
                            <div class="uni-underline"></div>
                        </div>
                    <table class="table " style="overflow-x: auto;">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">Report Number</th>
                                <th scope="col">Date of Test</th>
                                <th scope="col">Date of Upload</th>
                                <th scope="col">Patient Name</th>
                                <!-- <th scope="col">Report</th> -->
                                <th scope="col">View</th>
                                <th scope="col">Download</th>
                                <th scope="col">Save</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $row->r_number; ?></th>
                                <td><?php echo $row->r_date; ?></td>
                                <td><?php echo $row->r_udate; ?></td>
                                <td><?php echo $row->r_name; ?></td>
                                <!-- <td><?php echo $row->r_report; ?></td> -->
                                <td><a href="../admin/<?php  echo $row->r_report;?>" class="btn btn-primary" target="_blank"> View</a></td>
                                <td><a href="downloadrep.php?file=<?php  echo $row->r_report;?>" class="btn btn-danger">  Download</a></td>
                                <td><a href="function.php?id=<?php  echo $row->r_id;?>&& rep=<?php  echo $row->r_report;?>" class="btn btn-info" name ="saver" >save</a></td>
                               
                                
                                
                            </tr>
                        </tbody>
                    </table>
            <?php
                }
            }
        } 
     
//        elseif ($search!=$query) {
            
// echo "not found";
                  
            
         //}   
         else { ?> <div class="uni-hơm-1-department" id="dep">
                <div class="container" id="dep">
                    <div class="uni-home-title">
                        <h3>Kindly search your reports first by your report number.....</h3>
                        <div class="uni-underline"></div>

                    </div>
<?php } ?>
               

                </div>
            </div>












            <?php
            include('footer.php');
            ?>