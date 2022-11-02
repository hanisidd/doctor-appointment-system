<?php
$tittle = "Edit Doctor";
include('header.php');
?>




<?php
require('config.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * from  doctor where doc_id = $id";
  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_object()) { ?>
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-body">
            <h4 class="header-title">Edit Doctor</h4>
            <form class="needs-validation" novalidate="" method="POST" action="function.php" enctype="multipart/form-data">
              <input type="hidden" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo $row->doc_id;  ?>" required="" name="id">
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02"> First name</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo $row->doc_name;  ?>" required="" name="name">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="<?php echo $row->doc_lname;  ?>" required="" name="lname">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustomUsername">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>

                      <input type="email" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" value="<?php echo $row->doc_email;  ?>" required="" name="email">
                      <div class="invalid-feedback">
                        Please write a email.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Address</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Address" value="<?php echo $row->doc_address; ?>" required="" name="add">
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Contact</label>
                    <input type="text" class="form-control" id="validationCustom04" value="<?php echo $row->doc_contact;  ?>" placeholder="Contact" required="" name="contact">
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Password</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="....." value="<?php echo $row->doc_password;  ?>" required="" name="pass">
                    <div class="invalid-feedback">
                      Please provide
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <img src="<?php echo $row->doc_pic;  ?>" alt="" height="50px" width="50px">
                    <input type="hidden" class="form-control" id="validationCustom05" placeholder="....." value="<?php echo $row->doc_pic;  ?>" name="oldpic">

                    <label for="validationCustom05">picture</label>
                    <input type="file" class="form-control" id="validationCustom05" value="" placeholder="....." name="img">
                    <div class="invalid-feedback">
                      Please provide
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <label for="validationCustom05">description</label>
                    <input type="text" class="form-control" id="validationCustom05" value="<?php echo $row->doc_description;  ?>" placeholder="....." required name="des">
                    <div class="invalid-feedback">
                      Please provide
                    </div>
                  </div>
                
                </div>

          <?php
        }
      }
    }

          ?>
          <div class="col-md-4"><button class="btn btn-primary" type="submit" name="updoc">update doctor</button>
            <a href="viewdoc.php" class="btn btn-primary">Cancel</a>


            </form>
          </div>




          <?php
          include('footer.php');
          ?>