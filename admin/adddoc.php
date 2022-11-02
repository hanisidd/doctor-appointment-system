<?php
$tittle = "Add Doctors";
include('header.php');
?>
 <div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Add doctor</h4>
<form class="needs-validation" novalidate="" method="POST" action="function.php" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">First name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required="" name="name">
<div class="valid-feedback">
Looks good!
</div>
</div>
 <div class="col-md-4 mb-3">
<label for="validationCustom02">Last name</label>
 <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required="" name ="lname">
<div class="valid-feedback">
Looks good!
 </div>
 </div>
 <div class="col-md-4 mb-3">
 <label for="validationCustomUsername">Email</label>
 <div class="input-group">
 <div class="input-group-prepend">
 <span class="input-group-text" id="inputGroupPrepend">@</span>
  </div>
 <input type="email" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required="" name ="email">
 <div class="invalid-feedback">
   Please write a email.
  </div>
 </div>
   </div>
   </div>
 <div class="form-row">
 <div class="col-md-6 mb-3">
 <label for="validationCustom03">Address</label>
<input type="text" class="form-control" id="validationCustom03" placeholder="Address" required="" name ="add">
<div class="invalid-feedback">
 Please provide a valid city.
</div>
  </div>
  <div class="col-md-3 mb-3">
   <label for="validationCustom04">Contact</label>
  <input type="text" class="form-control" id="validationCustom04" placeholder="Contact" required="" name ="contact">
  <div class="invalid-feedback">
 Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
 <label for="validationCustom05">Password</label>
 <input type="text" class="form-control" id="validationCustom05" placeholder="....." required="" name ="pass">
 <div class="invalid-feedback">
Please provide
</div>
</div>
                                            
<div class="col-md-3 mb-3">
 <label for="validationCustom05">picture</label>
  <input type="file" class="form-control" id="validationCustom05" placeholder="....." required name ="img">
 <div class="invalid-feedback">
 Please provide
  </div>
  </div>
                                            
<div class="col-md-3 mb-3">
 <label for="validationCustom05">description</label>
 <input type="text" class="form-control" id="validationCustom05" placeholder="....." required name ="des">
 <div class="invalid-feedback">
        Please provide
 </div>
  </div>
  <div class="col-md-3 mb-3">
 <label for="validationCustom05">department</label>
 <select name="dep" class="form-control" id="validationCustom05">
     <option value="">select department</option>
     <?php
require('config.php');
$query = "SELECT * from departments";
if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){
?>
<option value="<?php echo $row->dep_id;   ?>"><?php echo $row->dep_name;   ?></option>
<?php
 }
}
?>
 </select>
 <div class="invalid-feedback">
        Please provide
 </div>
  </div>
</div>
                                            
<button class="btn btn-primary" type="submit" name ="adddoc">Add Doctor</button>
<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
} ?>
</form>
</div>




<?php
include('footer.php');
?>