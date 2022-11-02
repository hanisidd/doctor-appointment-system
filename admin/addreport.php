<?php
$tittle = "Add Reports";
include('header.php');
?>
 <div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Add Reports</h4>
<form class="needs-validation" novalidate="" method="POST" action="function.php" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">Report Number</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="..."  required="" name="num">
<div class="valid-feedback">
Looks good!
</div>
</div> 

  <div class="col-md-3 mb-3">
 <label for="validationCustom05">Date of Test done</label>
 <input type="date" class="form-control" id="validationCustom05" placeholder="....." required name ="date">
 <div class="invalid-feedback">
        Please provide
 </div>
  </div>  
  <div class="col-md-3 mb-3">
 <label for="validationCustom05">Today Date</label>
  <input type="text" class="form-control" id="validationCustom05" placeholder="....." required name ="tdate" value="<?php echo date("Y/m/d"); ?>">
 <div class="invalid-feedback">
 Please provide
  </div>
  </div>                                   
<div class="col-md-3 mb-3">
 <label for="validationCustom05">Patient Name</label>
  <input type="text" class="form-control" id="validationCustom05" placeholder="....." required name ="name">
 <div class="invalid-feedback">
 Please provide
  </div>
  </div>
  <div class="col-md-3 mb-3">
 <label for="validationCustom05">Upload File</label>
  <input type="file" class="form-control" id="validationCustom05" placeholder="....." required name ="file">
 <div class="invalid-feedback">
 Please provide
  </div>
  </div>
                                            

  
  </div>
</div>
  <div class="col-md-4"><button class="btn btn-primary" type="submit" name ="addr">Add Report</button></div>                                          



</form>
</div></div>
</div>




<?php
include('footer.php');
?>