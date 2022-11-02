<?php
$tittle = "FeedBacks";
include('header.php');
?>

<div class="col-lg-6 mt-5 offset-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">FEEDBACKS</h4>
                               
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">User ID</th>
                                                    <th scope="col">Comment</th>
                                                    
                                                    <th scope="col">actions</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
require('config.php');
    $query = "SELECT * from  feedback";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
                                                    <tr>
                                                  <th scope="row"><?php  echo $row->pat_id; ?></th>
                                                    <td><?php  echo $row->feedback; ?></td>
                                                    
                                                
                                                    <td>
                                                    <a href="function.php?delid=<?php echo  $row->f_id; ?>"><i class="ti-trash"></i></a>
                                                    
                                                    
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