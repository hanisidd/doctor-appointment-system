<?php
$tittle = "Edit Disease";
include('header.php');
?>
 
<form class="needs-validation" novalidate="" method="POST" action="function.php" enctype="multipart/form-data">
<div class="col-12">
 <div class="card mt-5">
<div class="card-body">
<h4 class="header-title">Edit Diseases</h4>

<?php
require('config.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * from  disease where dis_id = $id";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo $row->dis_name;  ?>" required="" name="name">
<input type="hidden" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo $row->dis_id;  ?>" required="" name="id">
</div> 

  <div class="col-md-3 mb-3">
 <label for="validationCustom05">description</label>
 <input type="text" class="form-control" id="validationCustom05" placeholder="....." value="<?php echo $row->dis_description;  ?>" required name ="des">

  </div>  
  <div class="col-md-3 mb-3">
 <label for="validationCustom05">prevention</label>
  <input type="text" class="form-control" id="validationCustom05" placeholder="....." value="<?php echo $row->dis_prevention;  ?>" required name ="pre">

  </div>                                   
<div class="col-md-3 mb-3">
  <img src="<?php echo $row->dis_pic;  ?>" alt="" height = "50px" width = "50px">
 <label for="validationCustom05">picture</label>
  <input type="file" class="form-control" id="validationCustom05" placeholder="....."  name ="img">
  <input type="hidden" class="form-control" id="validationCustom05" placeholder="....." value="<?php echo $row->dis_pic;  ?>"  name ="oldpic">
 
  </div>
                                            

  

</div>
</div>
</div></div>
</div>
<?php
 } }}

?>
<div class="col-md-4"><button class="btn btn-primary" type="submit" name ="updis">update dissease</button> 
<a href="viewdisease.php"  class="btn btn-primary">Cancel</a>

</div>                                          
</form>





<?php
include('footer.php');
?>
 