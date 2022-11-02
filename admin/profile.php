<?php
$tittle = "My Profile";
include('header.php');
?>



<?php
require('config.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * from  admin where admin_id = $id";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
<div class="container profile " >
<div class="cardp">
<form action="function.php" method="POST" enctype="multipart/form-data" >
        <div class="img">
          <img src="<?php echo $row->admin_pic ?>" class="imgp">
        </div>
        <div class="infosp">
          <div class="namep">
            <h2><?php  echo $row->admin_name; ?></h2>
            <h4><?php  echo $row->admin_email;?></h4>
            <h4><?php  echo $row->admin_contact;?></h4>
          </div>
          <p class="textp">
            Here is the admin of medi-care website . admin can do alot of task here you can update your profilr info also.
          </p>
          <!-- <ul class="statsp" style="list-style: none;">
            <li>
              <h3>15K</h3>
              <h4>Views</h4>
            </li>
            <li>
              <h3>82</h3>
              <h4>Projects</h4>
            </li>
            <li>
              <h3>1.3M</h3>
              <h4>Followers</h4>
            </li>
          </ul> -->
          <div class="linksp">
            <!-- <button class="followp">Follow</button> -->
           <a href="editprofile.php?id=<?php  echo $row->admin_id;?>" class="btn btn-info" >Edit profile <i class="ti-pencil"></i> </a>
          </div>
        </div>
        </form> 
      </div>
     
      </div>

<!-- <?php

    }}}
?> -->


<?php
include('footer.php');
?>