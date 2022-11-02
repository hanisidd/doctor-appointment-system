<?php
$tittle = "Admin";
include('header.php');
?>

<div class="col-lg-12 mt-5 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">ADMINS</h4>
                               
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center" style="overflow-x: auto;">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">contact</th>
                                                    <th scope="col">password</th>
                                                    <th scope="col">picture</th>
                
                                                    <th scope="col">actions</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
require('config.php');
    $id =$_SESSION['id'];
    $query = "SELECT * from  Admin where admin_id != $id ";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
                                                    <tr>
                                                  <th scope="row"><?php  echo $row->admin_id; ?></th>
                                                    <td><?php  echo $row->admin_name; ?></td>
                                                    <td><?php  echo $row->admin_email; ?></td>
                                                    <td><?php  echo $row->admin_contact; ?></td>
                                                    <td><?php  echo $row->admin_password; ?></td>
                                                    <td><img src="<?php  echo $row->admin_pic; ?>" alt="" height="50px" width="30px"></td>
                                                
                                                    <td>
                                                    <a href="function.php?adminid=<?php echo  $row->admin_id; ?>"><i class="ti-trash"></i></a>
                                                    
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