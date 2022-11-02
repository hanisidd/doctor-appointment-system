<?php
$tittle = "Edit Departments";
include('header.php');
?>
 
<form class="needs-validation" novalidate="" method="POST" action="function.php">
<div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Edit departments</h4>

<?php
require('config.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * from  departments where dep_id = $id";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
<div class="form-row">
<div class="col-md-4 mb-3">
<label for="validationCustom01">Department name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="department" required="" name="name" value="<?php echo $row->dep_name;  ?>">
<input type="hidden" class="form-control" id="validationCustom01" placeholder="department" required="" name="id" value="<?php echo $row->dep_id;  ?>">
<div class="valid-feedback">

</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationCustom01">Department Description</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="department" required="" name="des" value="<?php echo $row->dep_description;  ?>">

<div class="valid-feedback">

</div>
</div>
</div></div>
</div>
<?php
 } }}

?>
<div class="col-md-4"><button class="btn btn-primary" type="submit" name ="updep">update department</button> 
<a href="viewdep.php"  class="btn btn-primary">Cancel</a>

</div>                                          
</form>





<?php
include('footer.php');
?>