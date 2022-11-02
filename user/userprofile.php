<?php
$tittle ="User Profile";
include('header.php');
?>
<?php
require('config.php');
$id = $_SESSION['pid'];
    $query = "SELECT * from  patient where P_id ='$id'";
    if($result=$mysqli->query($query)){
        while($row=$result->fetch_object()){?>

<div class="container profile " >
<div class="cardp">
<form action="function.php" method="POST" enctype="multipart/form-data" >
        <div class="img">
          <img src="images/user.png" class="imgp">
        </div>
        <div class="infosp">
          <div class="namep">
            <h2><?php  echo $row->P_name;?>&nbsp;<?php  echo $row->p_lname;?></h2>
            <h4><?php  echo $row->p_email;?></h4>
            <h4><?php  echo $row->p_contact;?></h4>
          </div>
          <p class="textp">
          <?php  echo $row->p_address;?>
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
          <a href="setting.php?id=<?php echo $row->P_id ?>" class=" btn btn-primary"> Settings</a>
           <a href="logout.php"  class="btn btn-info"> Log Out</a>
          </div>
        </div>
        </form> 
      </div>
     
      </div>
<?php } }?>


<?php
include('footer.php');
?>