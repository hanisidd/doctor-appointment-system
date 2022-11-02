<?php
$tittle = " Users";
include('header.php');
?>

<div class="col-lg-12 mt-5 ">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Registered users</h4>

            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center" style="overflow-x: auto;">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">DOB</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('config.php');
                            $query = "SELECT * from  patient ";
                            if ($result = $mysqli->query($query)) {
                                while ($row = $result->fetch_object()) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $row->P_name; ?></th>
                                        <td><?php echo $row->p_lname; ?></td>
                                        <td><?php echo $row->p_email; ?></td>
                                        <td><?php echo $row->p_address; ?></td>
                                        <td><?php echo $row->p_contact; ?></td>
                                        <td><?php echo $row->p_dob; ?></td>
                                       

                                    </tr>

                            <?php
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