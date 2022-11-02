<?php
$tittle = "Edit Reports";
include('header.php');
?>
 <div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Edit Reports</h4>
<form class="needs-validation" novalidate="" method="POST" action="function.php" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-4 mb-3">
<?php

                            require('config.php');
                            if(isset($_GET['id'])){
                              $id=$_GET['id'];
                            $query = "SELECT * from  reports where r_id = '$id'";
                            if ($result = $mysqli->query($query)) {
                                while ($row = $result->fetch_object()) { ?>
<label for="validationCustom01">Report Number</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="..."  required="" name="num" value="<?php echo $row->r_number ;?>"  >
<input type="hidden" class="form-control" id="validationCustom01" placeholder="..."  required="" name="id" value="<?php echo $row->r_id ;?>"  >
<div class="valid-feedback">
Looks good!
</div>
</div> 

  <div class="col-md-3 mb-3">
 <label for="validationCustom05">Date of Test done</label>
 <input type="date" class="form-control" id="validationCustom05" placeholder="....." required name ="date" value="<?php echo $row->r_date ;?>">
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
  <input type="text" class="form-control" id="validationCustom05" placeholder="....." required name ="name" value="<?php echo $row->r_name;?>">
 <div class="invalid-feedback">
 Please provide
  </div>
  </div>
  <div class="col-md-3 mb-3">
 <label for="validationCustom05">Current Report</label>
  <input type="text" class="form-control" id="validationCustom05" placeholder="....." required name ="current" value="<?php echo $row->r_report;?>">
 <div class="invalid-feedback">
 Please provide
  </div>
  </div>
  <div class="col-md-3 mb-3">
 <label for="validationCustom05">Upload File</label>
  <input type="file" class="form-control" id="validationCustom05" placeholder="....."  name ="file" >
  <input type="hidden" class="form-control" id="validationCustom05" placeholder="....."  name ="oldfile" value="<?php echo $row->r_report;?>" >
 <div class="invalid-feedback">
 Please provide
  </div>
  </div>
                                            

  
  </div>
</div>
  <div class="col-md-4"><button class="btn btn-primary" type="submit" name ="upr">Update Report</button></div>                                          

<?php  }}} ?>

</form>
</div></div>
</div>




<?php
include('footer.php');
?>