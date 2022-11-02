<?php
$tittle = "Doctors";
include('header.php');
?>

<div class="col-lg-12  ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">DOCTORS</h4>
                        
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center" style="overflow-x: auto;">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Last Name </th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Contact</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Discription</th>
                                                    <th scope="col">Password</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Images</th>
                                                    <th scope="col">Actions</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
require('config.php');
     $query = "SELECT d.*,dp.dep_name as dpname from doctor d inner join departments dp on d.doc_depid=dp.dep_id";
    //$query = "SELECT * from doctor";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
                                                    <tr>
                                                  <th scope="row"><?php  echo $row->doc_id; ?></th>
                                                  <td><?php  echo $row->doc_name; ?></td>
                                                  <td><?php  echo $row->doc_lname; ?></td>
                                                    <td><?php  echo $row->doc_email; ?></td>
                                                    <td><?php  echo $row->doc_address; ?></td>
                                                    <td><?php  echo $row->doc_contact; ?></td>
                                                    <td><?php  echo $row->dpname; ?></td>
                                                    <td><?php  echo $row->doc_description; ?></td>
                                                    <td><?php  echo $row->doc_password; ?></td>
                                                    <td><?php  echo $row->doc_status; ?></td>
                                                   
                                                    <td><img src="<?php  echo $row->doc_pic; ?>" alt=""  height="50px" width="30px"></td>
                                                    
                                                
                                                    <td>
                                                    <a href="function.php?doc_id=<?php echo  $row->doc_id; ?>&doc_status=<?php echo  $row->doc_status; ?>"><i class="ti-pin"></i></a>
                                                    
                                                    <a href="editdoc.php?id=<?php echo  $row->doc_id; ?>"><i class="ti-pencil"></i></a>
                                                    <a href="changedocdep.php?id=<?php echo  $row->doc_id; ?>"><i class="ti-home"></i></a>
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