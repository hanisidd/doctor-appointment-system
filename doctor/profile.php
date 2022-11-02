<?php
$tittle = "Doctor Profile";
include('header.php');
?>


<?php
require('config.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * from  doctor where doc_id = $id";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
    <!-- <div class="col-md-6 offset-3" style = "border: solid aqua 3px" >
<form action="function.php" method="POST" enctype="multipart/form-data" >

<div class=" col-md-6 offset-3"><img src="../admin/<?php echo $row->doc_pic ?>" alt="" height="150px" width="100px"><br>
<label for=""><p><b>Full Name:</b> <?php  echo $row->doc_name;  echo $row->doc_lname; ?></p></label> 
<br>
<label for=""><p><b> Contact:</b><?php  echo $row->doc_contact;?></p></label><br>
<label for=""><p><b>Email:</b> <?php  echo $row->doc_email;   ?></p></label> <br>

<label for=""><p><b> Address:</b><?php  echo $row->doc_address;?></p></label> 
<label for=""><p><b>Password:</b> <?php  echo $row->doc_password; ?></p></label> <br>


<a href="editprofile.php?id=<?php  echo $row->doc_id;?>"class="btn btn-primary" >Edit profile <i class="ti-pencil"></i> </a>

</div>


</form>
</div> -->
<div class="container profile " >
<div class="cardp">
<form action="function.php" method="POST" enctype="multipart/form-data" >
        <div class="img">
          <img src="../admin/<?php echo $row->doc_pic ?>" class="imgp">
        </div>
        <div class="infosp">
          <div class="namep">
            <h2><?php  echo $row->doc_name; ?></h2>
            <h4><?php  echo $row->doc_email;?></h4>
            <h4><?php  echo $row->doc_contact;?></h4>
          </div>
          <p class="textp">
          <?php  echo $row->doc_description; ?>
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
          <a href="editprofile.php?id=<?php  echo $row->doc_id;?>" class="btn btn-info" >Edit profile <i class="ti-pencil"></i> </a>
          </div>
        </div>
        </form> 
      </div>
     
      </div>



<?php

    }}}
?>


<?php
include('footer.php');
?>