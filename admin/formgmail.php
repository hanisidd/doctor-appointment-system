<?php
$tittle = "send Mail";
include('header.php');
?>

<form class="needs-validation" novalidate="" method="POST" action="sendmail.php">
    
    <div class="col-12">
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="header-title">Send Mail</h4>


                <div class="form-row">
                    <div class="col-md-4 mb-3">

                    <?php
                      require('config.php');
                   
                         if($_GET['id']){
                          $id = $_GET['id'];
                          $query = "select doc_name,name,phone,email,app_date,app_createiondate,doc_remarks,app_status,app_id from doctor d INNER JOIN appointments ap ON d.doc_id=ap.doctor_id where app_id = '$id'";
                         // $query = "SELECT * from  appointments where app_id = '$id' ";
                          if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_object()) {


?>
                        <label for="validationCustom01">Email</label>
                        <input type="text" class="form-control" id="validationCustom01" required="" name="email" value="<?php  echo $row->email;?>">
                        <input type="hidden" class="form-control" id="validationCustom01" required="" name="doc" value="<?php  echo $row->doc_name;?>">                     
                        
                        <div class="valid-feedback">

                        </div>
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
                    <!-- <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Recipt</label>
                        <input type="file" class="form-control" id="validationCustom01"  name="recipt">
                        <div class="valid-feedback">

                        </div>
                    </div> -->
             
                </div>
                <h1 class="m-4">Create Recipt</h1>
				<div class="row mb-2">
					<div class="col-lg-6">
                    <input type="Text" class="form-control" id="validationCustom01" required="" name="name" value="<?php  echo $row->name;?>">
					</div>
					<div class="col-lg-6">
                    <input type="date" class="form-control" id="validationCustom01" required="" name="date" value="<?php  echo $row->app_date;?>">
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-lg-6">
						<input type="time" name="time" placeholder="time" class="form-control" required>
					</div>
					<div class="col-lg-6">
						<input type="tel" name="phone" placeholder="Phone" class="form-control" required  value="<?php  echo $row->phone;?>"><?php  }}}?>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-lg-12">
						<textarea name="note" placeholder="Your Message" class="form-control"></textarea>
					</div>
				</div>
            </div>
        </div>
        <div class="col-md-4"><button class="btn btn-primary" type="submit" name="send">send</button>

        </div>
</form>





<?php
include('footer.php');
?>