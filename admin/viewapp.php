<?php
$tittle = "All Appointments";
include('header.php');
?>

<div class="col-lg-12 mt-5 ">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">All Appointments</h4>
            <form action="" method="post" >
                <label for="sorting">Search Appointments By  &nbsp;</label>
                <select name="fetch" id="fetchval" class="btn btn-primary text-light">
                    <option value="all">all</option>
                    <option value="Approved">Approved</option>
                    <option value="Pending">Pending</option>
                    <option value="Canceled">Canceled</option>
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
                                <th scope="col">Name</th>
                                <th scope="col">Phone </th>
                                <th scope="col">Email </th>
                                <th scope="col">Appointmen Date</th>
                                <th scope="col">Booking Date</th>
                                <th scope="col">Note</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Status</th>
                                <th scope="col">Send Mail</th>

                                <th scope="col">Status change</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('config.php');
                           
                            if (isset($_POST['se'])) {
                                $fetch = $_POST['fetch'];

                                if ($fetch == 'Approved') {
                                    $query = "SELECT * from  appointments  where app_status ='Approved' ";
                                } elseif ($fetch == 'Pending') {
                                    $query = "SELECT * from  appointments  where app_status ='Pending' ";
                                } elseif ($fetch == 'Canceled') {
                                    $query = "SELECT * from  appointments  where app_status ='Canceled' ";
                                } elseif ($fetch == 'all') {
                                    $query = "SELECT * from  appointments  ORDER BY app_createiondate DESC ";
                                }elseif ($fetch == 'Newest') {
                                    $query = "SELECT * from  appointments  ORDER BY app_createiondate DESC LIMIT 5";
                                }elseif ($fetch == 'Oldest') {
                                    $query = "SELECT * from  appointments  ORDER BY app_createiondate ASC LIMIT 5";
                                }
                                
                                else {
                                    echo "No Record Found!!";
                                }
                                if ($result = $mysqli->query($query)) {
                                    while ($row = $result->fetch_object()) { ?>
                                        <tr>
                                            <td><?php echo $row->name;  ?></td>
                                            <td><?php echo $row->phone;  ?></td>
                                            <td><?php echo $row->email;  ?></td>
                                            <td><?php echo $row->app_date;  ?></td>
                                            <td><?php echo $row->app_createiondate;  ?></td>
                                            <td><?php echo $row->doc_remarks;  ?></td>


                                            <td><?php echo $row->name;  ?></td>
                                            <td><?php echo $row->app_status;  ?></td>
                                            <td><a href="formgmail.php?id=<?php echo $row->app_id;  ?>"><button class="btn btn-primary">Send Mail</button></a> </td>

                                            <td>
                                                <form action="function.php" method='post'>
                                                    <select class="form-control bg-success text-light" name="app_status" onchange="this.form.submit()">
                                                        <option value="<?php echo $row->app_status;  ?>"><?php echo $row->app_status;  ?></option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Canceled">Canceled</option>

                                                        <option value="Approved">Approved</option>
                                                    </select>

                                                    <input type="hidden" name="id" value='<?php echo $row->app_id; ?>' />

                                                </form>
                                            </td>





                                            <td> <a href="function.php?appdid=<?php echo  $row->app_id; ?>"><i class="ti-trash"></i></a> </td>


                                        </tr>

                            <?php

                                    }
                                }
                            }
else{
    require('config.php');
                           
    
    $query = "select doc_name,name,phone,email,app_date,app_createiondate,doc_remarks,app_status,app_id from doctor d INNER JOIN appointments ap ON d.doc_id=ap.doctor_id ORDER BY app_createiondate DESC";
       
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_object()) { ?>
                <tr>
                    <td><?php echo $row->name;  ?></td>
                    <td><?php echo $row->phone;  ?></td>
                    <td><?php echo $row->email;  ?></td>
                    <td><?php echo $row->app_date;  ?></td>
                    <td><?php echo $row->app_createiondate;  ?></td>
                    <td><?php echo $row->doc_remarks;  ?></td>


                    <td><?php echo $row->doc_name;  ?></td>
                    <td><?php echo $row->app_status;  ?></td>
                    <td><a href="formgmail.php?id=<?php echo $row->app_id;  ?>"><button class="btn btn-primary">Send Mail</button></a> </td>

                    <td>
                        <form action="function.php" method='post'>
                            <select class="form-control bg-success text-light" name="app_status" onchange="this.form.submit()">
                                <option value="<?php echo $row->app_status;  ?>"><?php echo $row->app_status;  ?></option>
                                <option value="Pending">Pending</option>
                                <option value="Canceled">Canceled</option>

                                <option value="Approved">Approved</option>
                            </select>

                            <input type="hidden" name="id" value='<?php echo $row->app_id; ?>' />

                        </form>
                    </td>





                    <td> <a href="function.php?appdid=<?php echo  $row->app_id; ?>"><i class="ti-trash"></i></a> </td>


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


<?php
include('footer.php');
?>