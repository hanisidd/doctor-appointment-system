<?php
$tittle = "Diseases";
include('header.php');
?>

<div class="col-lg-8 mt-5 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">DISEASES</h4>
                               
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center" style="overflow-x: auto;">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Description </th>
                                                    <th scope="col">Prevention</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">actions</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
require('config.php');
    $query = "SELECT * from  disease";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
                                                    <tr>
                                                  <th scope="row"><?php  echo $row->dis_id; ?></th>
                                                    <td><?php  echo $row->dis_name; ?></td>
                                                    <td><?php  echo $row->dis_description; ?></td>
                                                    <td><?php  echo $row->dis_prevention; ?></td>
                                                    <td><img src="<?php  echo $row->dis_pic; ?>" alt="" height="50px" width="30px"></td>
                                                
                                                    <td>
                                                    <a href="function.php?disid=<?php echo  $row->dis_id; ?>"><i class="ti-trash"></i></a>
                                                   
                                                    <a href="editdisease.php?id=<?php echo  $row->dis_id; ?>"><i class="ti-pencil"></i></a>
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