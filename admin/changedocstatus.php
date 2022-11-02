<?php
$tittle = "Change Status";
include('header.php');
?>
 
<form class="needs-validation" novalidate="" method="get" action="function.php">
<div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Edit Doctor Status</h4>

<?php
require('config.php');
if(isset($_GET['docid'])){
    $id = $_GET['docid'];
    $query = "SELECT * from  doctor where doc_id = $id";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
<div class="form-row">
<div class="col-md-4 mb-3">
<h3><label for="validationCustom01">Doctor <?php echo $row->doc_name;  ?> Status</label></h3>
<b><h5>Currently:<?php echo $row->doc_status;?></h5></b>
<div class="col-md-6 mb-3">
 <label for="validationCustom05">Status</label>
 <select name="status" class="form-control" id="validationCustom05">
    <option value="select status">select</option>
     <option value="deactive">deactive</option>
     <option value="active">active</option>
 </select>

<input type="hidden" class="form-control" id="validationCustom01" placeholder="department" required="" name="id" value="<?php echo $row->doc_id;  ?>">
<div class="valid-feedback">

</div>
</div>
</div></div>
</div>
<?php
 } }}

?>
<div class="col-md-4"><button class="btn btn-primary" type="submit" name ="ups">update status</button> 
<a href="viewdoc.php"  class="btn btn-primary">Cancel</a>

</div>                                          
</form>





<?php
include('footer.php');
?>