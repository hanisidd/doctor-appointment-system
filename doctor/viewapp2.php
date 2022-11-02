<?php
$tittle = "All Appointments";
include('header.php');
?>

<div class="col-lg-12 mt-5 ">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">All Appointments</h4>

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
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('config.php');

                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                            $query = "SELECT * from  appointments  where doctor_id = '$id'";

                            if ($result = $mysqli->query($query)) {
                                while ($row = $result->fetch_object()) { ?>
                                    <tr>
                                        <td><?php echo $row->name;  ?></td>
                                        <td><?php echo $row->phone;  ?></td>
                                        <td><?php echo $row->email;  ?></td>
                                        <td><?php echo $row->app_date;  ?></td>
                                        <td><?php echo $row->app_createiondate;  ?></td>
                                        <td><?php echo $row->doc_remarks;  ?></td>
                                        <td><?php echo $row->app_status;  ?></td>                                     
                                        <td>
                                                <form action="function.php" method='post'>
                                                    <select class="form-control bg-success text-light" name="app_status2" onchange="this.form.submit()">
                                                        <option value="<?php echo $row->app_status;  ?>"><?php echo $row->app_status;  ?></option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Canceled">Canceled</option>

                                                        <option value="Approved">Approved</option>
                                                    </select>

                                                    <input type="hidden" name="id2" value='<?php echo $row->app_id; ?>' />

                                                </form>
                                            </td>
                                    </tr>

                            <?php

                                }
                            }
                        }

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