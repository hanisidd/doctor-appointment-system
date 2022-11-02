<?php
$tittle = "Add Admin";
include('header.php');

?>
 <div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Add admin</h4>
<form class="needs-validation" novalidate="" method="POST" action="function.php" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">Name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required="" name="name">
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
                                            

</div>
   <div class="col-md-4"><button class="btn btn-primary" type="submit" name ="addadmin">Add admin</button></div>                                         

<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
} ?>
</form>
</div></div>
</div>




<?php
include('footer.php');
?>