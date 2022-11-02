<?php
$tittle = "Edit Admin";
include('header.php');
?>
 
<form class="needs-validation" novalidate="" method="POST" action="function.php">
<div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Edit Admin</h4>

<?php
require('config.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * from  admin where admin_id = $id";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="department" required="" name="name" value="<?php echo $row->admin_name;  ?>">
<input type="hidden" class="form-control" id="validationCustom01" placeholder="department" required="" name="id" value="<?php echo $row->admin_id;  ?>">
<div class="valid-feedback">

</div>
</div>
<div class="col-md-4 mb-3">
 <label for="validationCustomUsername">Email</label>
 <div class="input-group">
 <div class="input-group-prepend">
 <span class="input-group-text" id="inputGroupPrepend">@</span>
  </div>
 <input type="email" class="form-control" id="validationCustomUsername" placeholder="Email"  value="<?php echo $row->admin_email;  ?>" aria-describedby="inputGroupPrepend="" required="" name ="email">
 <div class="invalid-feedback">
   Please write a email.
  </div>
 </div>
   </div>
   </div>

  <div class="col-md-3 mb-3">
   <label for="validationCustom04">Contact</label>
  <input type="text" class="form-control" id="validationCustom04" placeholder="Contact"  value="<?php echo $row->admin_contact;  ?> "required="" name ="contact">
  <div class="invalid-feedback">
 Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
 <label for="validationCustom05">Password</label>
 <input type="text" class="form-control" id="validationCustom05" placeholder="....."  value="<?php echo $row->admin_password;  ?>"required="" name ="pass">
 <div class="invalid-feedback">
Please provide
</div>
</div>
                                            
<div class="col-md-3 mb-3">
 <label for="validationCustom05">picture</label>
  <input type="file" class="form-control" id="validationCustom05" placeholder="....."  value="<?php echo $row->admin_pic;  ?> "name ="img">
 <div class="invalid-feedback">
 Please provide
  </div>
  </div>
                                            

</div>
</div></div>
</div>
<?php
 } }}

?>
<div class="col-md-4"><button class="btn btn-primary" type="submit" name ="upadmin">update admin</button> 
<a href="viewadmin.php"  class="btn btn-primary">Cancel</a>

</div>                                          
</form>





<?php
include('footer.php');
?>