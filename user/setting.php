<?php
$tittle ="Settings";
include('header.php');
?>


<div class="container">
    <div class="col-md-8">
        <div class="uni-single-department-appointment-form">

            <div class="uni-home-title">
                <h3>Update Your Information</h3>
                <div class="uni-underline"></div>
            </div>

            <form action="function.php" method="POST">
<?php
require('config.php');
$id = $_SESSION['pid'];
    $query = "SELECT * from  patient where P_id ='$id'";
    if($result=$mysqli->query($query)){
        while($row=$result->fetch_object()){?>
                <div class="row">
                    <div class="col-md-5">
                        <div class="input-group form-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" value="<?php  echo $row->P_name;?>" placeholder="your name">
                            <input type="hidden" class="form-control" name="id" value="<?php  echo $row->P_id;?>" placeholder="your name">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="tel" class="form-control" name="lname" value="<?php  echo $row->p_lname;?>" placeholder="Last Name">
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input type="email" class="form-control" name="email" value="<?php  echo $row->p_email;?>" placeholder="email">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group date date-check-in" data-date="12-02-2017" data-date-format="mm-dd-yyyy">
                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <input name="dob" class="form-control" type="date" value="<?php  echo $row->p_dob;?>">
                                <span class="input-group-addon btn"><i class="fa fa-calendar" id="ti-calendar1" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group form-group">
                            <div class="input-group form-group">
                                <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="address" value="<?php  echo $row->p_address;?>" placeholder="address">
                            </div>
                            <div class="input-group form-group">
                                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="pass" value="<?php  echo $row->p_password;?>" placeholder="Password">
                            </div>
                            <div class="input-group form-group">
                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="contact" value="<?php  echo $row->p_contact;?>" placeholder="Contact">
                            </div>
                        </div>
<?php }}?>
                        <button class="vk-btn vk-btn-send" name="update">Update</button>
                        <button class="vk-btn vk-btn-send" name="update">  <a href="userprofile.php">Cancel</a> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
include('footer.php');
?>