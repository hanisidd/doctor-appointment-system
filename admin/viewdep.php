<?php
$tittle = "Department";
include('header.php');
?>

<div class="col-lg-6 mt-5 offset-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">DEPARTMENTS</h4>
                               
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center" style="overflow-x: auto;">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">actions</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
require('config.php');
    $query = "SELECT * from  departments";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
                                                    <tr>
                                                  <th scope="row"><?php  echo $row->dep_id; ?></th>
                                                    <td><?php  echo $row->dep_name; ?></td>
                                                    <td><?php  echo $row->dep_description; ?></td>
                                                
                                                    <td>
                                                    
                                                    
                                                    <a href="editdep.php?id=<?php echo  $row->dep_id; ?>"><i class="ti-pencil"></i></a>
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