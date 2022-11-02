<?php
$tittle = "Add Diseases";
include('header.php');
?>
 <div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Add disease</h4>
<form class="needs-validation" novalidate="" method="POST" action="function.php" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required="" name="name">
<div class="valid-feedback">
Looks good!
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
 <label for="validationCustom05">prevention</label>
  <input type="text" class="form-control" id="validationCustom05" placeholder="....." required name ="pre">
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
</div>
  <div class="col-md-4"><button class="btn btn-primary" type="submit" name ="adddis">Add Disease</button></div>                                          

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