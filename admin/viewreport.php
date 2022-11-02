<?php
$tittle = "View Reports";
include('header.php');
?>

<div class="col-lg-12 mt-5 ">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">View Reports</h4>
            <form action="" method="post" >
                <label for="sorting">Search Reports By  &nbsp;</label>
                <select name="fetch" id="fetchval" class="btn btn-primary text-light">
                    <option value="all">all</option>
                    <option value="Newest">Newest</option>
                    <option value="Oldest">Oldest</option>
                    
                </select>
             <button name="se" type="submit" class="btn btn-danger">search</button> 

            </form>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center" style="overflow-x: auto;">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">Report Number</th>
                                <th scope="col">Date of Test</th>
                                <th scope="col">Date of Upload</th>
                                <th scope="col">Patient Name</th>
                                <th scope="col">Report</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('config.php');
                            if (isset($_POST['se'])) {
                                $fetch = $_POST['fetch'];
                        
                            if ($fetch == 'all') {
                                $query = "SELECT * from  reports  ORDER BY r_udate DESC ";
                            }elseif ($fetch == 'Newest') {
                                $query = "SELECT * from   reports  ORDER BY r_udate DESC LIMIT 5";
                            }elseif ($fetch == 'Oldest') {
                                $query = "SELECT * from   reports  ORDER BY r_udate ASC LIMIT 5";
                            }
                            
                            else {
                                echo "No Record Found!!";
                            }
                            if ($result = $mysqli->query($query)) {
                                while ($row = $result->fetch_object()) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $row->r_number; ?></th>
                                        <td><?php echo $row->r_date; ?></td>
                                        <td><?php echo $row->r_udate; ?></td>
                                        <td><?php echo $row->r_name; ?></td>
                                        <td><?php echo $row->r_report; ?></td>


                                        <td>
                                            <a href="function.php?rid=<?php echo  $row->r_id; ?>"><i class="ti-trash"></i></a>     </td>

                                            <td>
                                            <a href="editreport.php?id=<?php echo  $row->r_id; ?>"><i class="ti-pencil"></i></a>
                                        </td>

                                    </tr>

                            <?php
                                }
                            }

                        }
                        else{
                            require('config.php');
                           
                            $query = "SELECT * from  reports";
                            
                            if ($result = $mysqli->query($query)) {
                                while ($row = $result->fetch_object()) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $row->r_number; ?></th>
                                        <td><?php echo $row->r_date; ?></td>
                                        <td><?php echo $row->r_udate; ?></td>
                                        <td><?php echo $row->r_name; ?></td>
                                        <td><?php echo $row->r_report; ?></td>


                                        <td>
                                            <a href="function.php?rid=<?php echo  $row->r_id; ?>"><i class="ti-trash"></i></a>     </td>

                                            <td>
                                            <a href="editreport.php?id=<?php echo  $row->r_id; ?>"><i class="ti-pencil"></i></a>
                                        </td>

                                    </tr>

<?php







                        }}}
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- table danger end -->



<?php
include('footer.php');
?>