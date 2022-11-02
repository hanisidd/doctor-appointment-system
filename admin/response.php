<?php
$tittle = "send response";
include('header.php');
?>

<form class="needs-validation" novalidate="" method="POST" action="responsemail.php">
    <div class="col-12">
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="header-title">Send Response</h4>


                <div class="form-row">
                    <div class="col-md-4 mb-3">

                    <?php
                      require('config.php');
                   
                         if($_GET['id']){
                          $id = $_GET['id'];
                          $query = "SELECT * from  contact_us where con_id = '$id' ";
                          if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_object()) {


?>
                        <label for="validationCustom01">Email</label>
                        <input type="text" class="form-control" id="validationCustom01" required="" name="email" value="<?php  echo $row->email;?>">
                        <input type="hidden" class="form-control" id="validationCustom01" required="" name="name" value="<?php  echo $row->name;?>">
                        <div class="valid-feedback">

                        </div><?php  }}}?>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Subject</label>
                        <input type="text" class="form-control" id="validationCustom01" required="" name="sub">
                        <div class="valid-feedback">

                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Message</label>
                        <input type="text" class="form-control" id="validationCustom01" required="" name="mes">
                        <div class="valid-feedback">

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4"><button class="btn btn-primary" type="submit" name="send2">send</button>

        </div>
</form>





<?php
include('footer.php');
?>