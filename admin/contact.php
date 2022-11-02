<?php
$tittle = "contactss";
include('header.php');
?>

<div class="col-lg-12 mt-5 ">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Contacts</h4>

            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center" style="overflow-x: auto;">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Response</th>
                                <th scope="col">actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('config.php');
                            $query = "SELECT * from  contact_us";
                            if ($result = $mysqli->query($query)) {
                                while ($row = $result->fetch_object()) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $row->name; ?></th>
                                     
                                        <td><?php echo $row->phone; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->message; ?></td>

                                        <td>
                                            <a href="response.php?id=<?php echo $row->con_id;   ?>"><button class="btn btn-primary"> Send response </button></a>
                                        </td>


                                        <td>
                                            <a href="function.php?cdelid=<?php echo  $row->con_id; ?>"><i class="ti-trash"></i></a>
                                        </td>

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