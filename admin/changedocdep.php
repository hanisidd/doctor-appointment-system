<?php
$tittle = "Change Doctor Department";
include('header.php');
?>

<div class="col-lg-12 ">
    <div class="card">
        <div class="card-body col-lg-4">





            <h4 class="header-title">CHANGE DOCTOR DEPARTMENT</h4>
            <div class="single-table">
                <div class="table-responsive">

<form action="function.php" method="POST">

                    <select class="form-control bg-primary text-light" name="depart">
                        <?php
                        require('config.php');
                        $query = "SELECT * from departments";
                        //$query = "SELECT * from doctor";
                        if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_object()) { ?>

                                <option value=" <?php echo $row->dep_id;  ?>"> <?php echo $row->dep_name;  ?></option><?php }
                                                                                                                } ?>

                    </select>
                    <br><br><br>
                    <button class="btn btn-success" name="updepdoc" type="submit">Update</button>
                    <a href="viewdoc.php" class="btn btn-danger">Cancel</a>



                </div>
            </div>
        </div>
    </div>
</div>
<!-- table danger end -->
<?php

                        require('config.php');
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                        //$query = "SELECT * from departments";
                        $query = "SELECT doc_id from doctor where doc_id='$id'";
                        if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_object()) { ?>
<input type="hidden" value="<?php echo $row->doc_id;  ?>" name="id"><?php  }}}?></form>

<?php
include('footer.php');
?>