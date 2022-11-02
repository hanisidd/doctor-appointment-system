<?php
$tittle = "Edit Doctor Profile";
include('header.php');
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * from  doctor where doc_id = $id";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
 <div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Edit Profile Details</h4>
<form class="needs-validation" novalidate="" method="POST" action="function.php" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">Name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="<?php  echo $row->doc_name; ?>" required="" name="name">
<div class="valid-feedback">
<input type="hidden" class="form-control" id="validationCustom01" placeholder="First name" value="<?php  echo $row->doc_id; ?>" required="" name="id"> 
Looks good!
</div>
</div>
 <div class="col-md-4 mb-3">
 <label for="validationCustomUsername">Email</label>
 <div class="input-group">
 <div class="input-group-prepend">
 <span class="input-group-text" id="inputGroupPrepend">@</span>
  </div>
 <input type="email" class="form-control" id="validationCustomUsername" placeholder="Email"  value="<?php  echo $row->doc_email; ?>"aria-describedby="inputGroupPrepend" required="" name ="email">
 <div class="invalid-feedback">
   Please write a email.
  </div>
 </div>
   </div>
   </div>

  <div class="col-md-3 mb-3">
   <label for="validationCustom04">Contact</label>
  <input type="text" class="form-control" id="validationCustom04"  value="<?php  echo $row->doc_contact; ?>"placeholder="Contact" required="" name ="contact">
  <div class="invalid-feedback">
 Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
 <label for="validationCustom05">Password</label>
 <input type="text" class="form-control" id="validationCustom05"  value="<?php  echo $row->doc_password; ?>" placeholder="....." required="" name ="pass">
 <div class="invalid-feedback">
Please provide
</div>
</div>
<div class="col-md-3 mb-3">
 <label for="validationCustom05">Address</label>
 <input type="text" class="form-control" id="validationCustom05"  value="<?php  echo $row->doc_address; ?>" placeholder="....." required="" name ="add">
 <div class="invalid-feedback">
Please provide
</div>
</div>
                                            
<div class="col-md-3 mb-3">
    <img src="../admin/<?php  echo $row->doc_pic; ?>" height ="80px"width="100"alt="">
 <label for="validationCustom05">picture</label>
  <input type="file" class="form-control" id="validationCustom05" placeholder="....." name ="img">
  <input type="hidden" class="form-control" id="validationCustom05" value="<?php  echo $row->doc_pic; ?>" required name ="oldpic">
 <div class="invalid-feedback">
 Please provide
  </div>
  </div>
                                            

</div>
   <div class="col-md-4"><button class="btn btn-primary" type="submit" name ="edit">Done</button>
<a href="doctordashboard.php" class="btn btn-primary">Cancel</a>
</div>    


<?php
}}}
if(isset($_GET['msg'])){
    echo $_GET['msg'];
} ?>
</form>
</div></div>
</div>




<?php
include('footer.php');
?>