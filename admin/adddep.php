<?php
$tittle = "Add Departments";
include('header.php');
?>
 
<form class="needs-validation" novalidate="" method="POST" action="function.php">
<div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Add departments</h4>


<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">Department name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="department" required="" name="name">
<div class="valid-feedback">

</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationCustom01">Department Description</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="department" required="" name="des">
<div class="valid-feedback">

</div>
</div>
</div></div>
</div>
<div class="col-md-4"><button class="btn btn-primary" type="submit" name ="adddep">Add department</button> 
<a href="viewdep.php" class="btn btn-primary">Go to list</a>
<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
} ?>
</div>                                          
</form>





<?php
include('footer.php');
?>