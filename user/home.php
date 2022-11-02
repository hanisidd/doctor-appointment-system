<?php
$d = "";
$dr = "";
$tittle = "Home";
include('header.php');
?>


<div id="main-content" class="site-main-content">
    <section class="site-content-area">

        <!--BANNER-->
        <div class="uni-banner">
            <div class="uni-owl-one-item owl-carousel owl-theme">
                <div class="item">
                    <div class="uni-banner-img uni-background-5"></div>
                    <div class="content animated" data-animation="flipInX" data-delay="0.9s">
                        <div class="container">
                            <div class="caption">
                                <h1>Let us protect your health</h1>
                                <p>
                                                Our specialized doctors and other staff  will protect your health manually!!
                                                    <br>
                                                    Feel free to contact Medi-Care.
                                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="uni-banner-img uni-background-6"></div>
                    <div class="content animated" data-animation="flipInX" data-delay="0.9s">
                        <div class="container">
                            <div class="caption">
                                <h1>Let us protect your health</h1>
                                <p>
                                                Our specialized doctors and other staff  will protect your health manually!!
                                                    <br>
                                                    Feel free to contact Medi-Care.
                                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="uni-banner-img uni-background-7"></div>
                    <div class="content animated" data-animation="flipInX" data-delay="0.9s">
                        <div class="container">
                            <div class="caption">
                                <h1>Let us protect your health</h1>
                                <p>
                                                Our specialized doctors and other staff  will protect your health manually!!
                                                    <br>
                                                    Feel free to contact Medi-Care.
                                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--OPENING HOURS AND BOOK APPOINTMENT-->
        <div class="uni-home-opening-book">
            <div class="container">
                <div class="uni-home-opening-book-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="uni-services-opinging-hours">
                                <div class="uni-services-opinging-hours-title">
                                    <div class="icon">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    </div>
                                    <h4>opening hours</h4>
                                </div>
                                <div class="uni-services-opinging-hours-content">
                                    <table class="table">
                                        <tr>
                                            <td>monday</td>
                                            <td>8:00 - 17:00</td>
                                        </tr>
                                        <tr>
                                            <td>tuesday</td>
                                            <td>8:00 - 17:00</td>
                                        </tr>
                                        <tr>
                                            <td>wednesday</td>
                                            <td>8:00 - 17:00</td>
                                        </tr>
                                        <tr>
                                            <td>thursday</td>
                                            <td>8:00 - 17:00</td>
                                        </tr>
                                        <tr>
                                            <td>friday</td>
                                            <td>8:00 - 17:00</td>
                                        </tr>
                                        <tr>
                                            <td>saturday</td>
                                            <td>8:00 - 17:00</td>
                                        </tr>
                                        <tr>
                                            <td>sunday</td>
                                            <td>8:00 - 17:00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 " id="app">
                            <div class="uni-single-department-appointment-form">

                                <div class="uni-home-title">
                                    <h3>Book your Appointment Now..</h3>
                                    <div class="uni-underline"></div>
                                </div>
                                <?php
                                // $d = $dr = '';
                                // if (isset($_POST['book'])) {
                                //     if ($_POST['d'] != '') {
                                //         $d = $_POST['d'];
                                //         $ey = date('Y', strtotime($_POST['d']));
                                //         $em = date('m', strtotime($_POST['d']));
                                //         $ed = date('d', strtotime($_POST['d']));
                                //         $edays = ($ey - 1) + 365 + ($em - 1) * 30 + $ed;
                                //         $sy = date('Y');
                                //         $sm = date('m');
                                //         $sd = date('d');
                                //         $sdays = ($sy - 1) + 365 + ($sm - 1) * 30 + $sd;
                                //         $diff = ($edays - $sdays);
                                //         if ($diff > 0 && $diff <= 30) {
                                //             // $dr = 'date of booking is right' . $d;
                                //             $name = $_POST['name'];
                                //             $phone = $_POST['phone'];
                                //             $email = $_POST['email'];
                                //             $d = $_POST['d'];
                                //             $cur_date = $_POST['c'];
                                //             $doc_id = $_POST['doc'];
                                //             $note = $_POST['note'];
                                //             $pat_id = $_POST['pid'];




                                //             $query = "insert into appointments(patient_id,doctor_id,app_date,app_createiondate,doc_remarks,name,phone,email) values ('$pat_id','$doc_id','$d','$cur_date','$note','$name','$phone','$email')";
                                //             if ($mysqli->query($query) == true) {


                                //                 $_SESSION['alert'] = "Appointment request has been sent successfull soon you will recieve your recipt via email..";
                                //                 $_SESSION['alert_code'] = "success";
                                //                 header('location:bookapp.php?msg="succesfully"');
                                //             } else {
                                //                 echo $mysqli->error;
                                //                 // $_SESSION['alert'] ="choose date between 30 days";
                                //                 // $_SESSION['alert_code'] ="error";
                                //                 // header('location:bookapp.php?msg="not done"');
                                //             }
                                //         } else {

                                //             $_SESSION['alert'] = "Choose date between 30 days from now";
                                //             $_SESSION['alert_code'] = "warning";
                                //         }
                                //     } else {
                                //         $dr = "enter any date";
                                //     }
                                // }
                                ?>
                                <form action="function.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="input-group form-group">
                                                <?php
                                                $id = $_SESSION['pid'];
                                                require('config.php');
                                                $query = "SELECT * from patient where P_id ='$id'";
                                                if ($result = $mysqli->query($query)) {
                                                    while ($row = $result->fetch_object()) { ?>

                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="name" value="" placeholder="your name">
                                                        <input type="hidden" class="form-control" name="pid" value="<?php echo $row->P_id;  ?>" placeholder="your name">
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                <input type="tel" class="form-control" name="phone" value="" placeholder="phone number">
                                            </div>
                                            <div class="input-group form-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                <input type="email" class="form-control" name="email" value="" placeholder="email">
                                            </div> <?php }
                                                } ?>
                                    <div class="input-group form-group">
                                        <div class="input-group date date-check-in" data-date="12-02-2017" data-date-format="mm-dd-yyyy">
                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            <span><?php echo $dr; ?></span>
                                            <input name="d" class="form-control" type="date" value="<?php echo $d;  ?>">
                                            <input name="c" class="form-control" type="hidden" value="<?php echo date("Y/m/d");  ?>">

                                            <span class="input-group-addon btn"><i class="fa fa-calendar" id="ti-calendar1" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group form-group">

                                                <select name="doc" class="form-control" id="validationCustom05" required>
                                                    <option value="select department">select department</option>
                                                    <?php
                                                    require('config.php');
                                                    $query = "SELECT d.*,dp.dep_name as dpname from doctor d inner join departments dp on d.doc_depid=dp.dep_id";
                                                    //$query = "SELECT * from doctor";
                                                    if ($result = $mysqli->query($query)) {
                                                        while ($row = $result->fetch_object()) { ?>


                                                            <option value=" <?php echo  $row->doc_id;  ?>"><?php echo $row->doc_name;
                                                                                                            echo '&nbsp';
                                                                                                            echo "(dep:";
                                                                                                            echo $row->dpname . ')'; ?> </option><?php }
                                                                                                                                            } ?>


                                                </select>
                                                <textarea id="message" name="note" class="form-control" placeholder="note"></textarea>
                                            </div>
                                            <button class="vk-btn vk-btn-send" type="submit" name="bookh">Book</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>

        <!-- services -->
        <!--Icon box 3-->
        <div class="uni-home-title">
            <h3 id="about">Our Services</h3>
            <div class="uni-underline"></div>
        </div>
        <div class="uni-shortcode-icons-box-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="uni-shortcode-icons-box-3-default">
                            <div class="item-icons">
                                <i class="fa fa-user-md" aria-hidden="true"></i>
                            </div>
                            <div class="item-caption">
                                <h4>Qualified Doctors</h4>
                                <div class="uni-line"></div>
                                <p>
                                                    We Have Qualified and specialized Doctors who have so much experience in
                                                    their respectives Fields with so many good qualities.
                                                    
                                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="uni-shortcode-icons-box-3-default">
                            <div class="item-icons">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div class="item-caption">
                                <h4>
                                   24 Hours Service
                                </h4>
                                <div class="uni-line"></div>
                                <p>
                                                    Our Hospital is open 24 hours for their patients. You can easily be come there 
                                                    and do your check up in opd.our other staff available all  time.
                                                   
                                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="uni-shortcode-icons-box-3-default">
                            <div class="item-icons">
                                <i class="fa fa-hospital-o" aria-hidden="true"></i>
                            </div>
                            <div class="item-caption">
                            <h4>
                                                    Dpeartments
                                                </h4>
                                                <div class="uni-line"></div>
                                                <p>
                                                    We have specialized Departments for every
                                                    kind of disease and for their cure with their imported equipments, to cure pateints.
                                                   
                                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="uni-shortcode-icons-box-3-default">
                            <div class="item-icons">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="item-caption">
                            <h4>
                                                   Online Reports
                                                </h4>
                                                <div class="uni-line"></div>
                                                <p>
                                                    You don't have to worry about your reports
                                                    You can search your reports by report number here in our website.
                                                   
                                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="uni-shortcode-icons-box-3-default">
                            <div class="item-icons">
                                <i class="fa fa-ambulance" aria-hidden="true"></i>
                            </div>
                            <div class="item-caption">
                            <h4>
                                                    call in 10 minutes
                                                </h4>
                                                <div class="uni-line"></div>
                                                <p>
                                                    Just call us on (+92)3126238275 so you can get ambulance with first Aid in just 10 minutes.
                                                   
                                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="uni-shortcode-icons-box-3-default">
                            <div class="item-icons">
                                <i class="fa fa-commenting" aria-hidden="true"></i>
                            </div>
                            <div class="item-caption">
                            <h4>
                                                    user feedback support
                                                </h4>
                                                <div class="uni-line"></div>
                                                <p>
                                                    You can give us feedback and also you can contact us here we will surely response you 
                                                    and will try to solve your problems ASAP.
                                                    
                                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--DEPARTMENT-->
        <div class="uni-hơm-1-department" id="dep">
            <div class="container" id="dep">
                <div class="uni-home-title">
                    <h3>Department</h3>
                    <div class="uni-underline"></div>
                </div>

                <?php
                require('config.php');
                $query = "SELECT * from  departments";
                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_object()) { ?>
                        <div class="uni-shortcode-icon-box-1">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icon-box-1-default uni-shortcode-icons-box-2-default uni-background-blue">
                                        <div class="item-icons">
                                            <!-- <img src="" alt="" > -->
                                            <i class="fa fa-hospital-o" aria-hidden="true" class="img-responsive"></i>
                                        </div>

                                        <div class="item-caption">
                                            <h4><?php echo $row->dep_name; ?></h4>
                                            <p><?php echo $row->dep_description;  ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php
                    }
                } ?>

                            </div>
                        </div>
                        <!-- </div>
                    </div> -->

                        <!--OUR DOCTOR-->
                        <div id="main-content" class="site-main-content">
                            <section class="site-content-area">
                                <div class="uni-hơm-1-department">
                                    <div class="container" id="doctors">
                                        <!-- <div class="uni-banner-default uni-background-1">
                    <div class="container" id="doc"> -->
                                        <div class="uni-home-title">
                                            <h3>Our Doctors</h3>
                                            <div class="uni-underline"></div>
                                        </div>
                                        <!-- Page title -->
                                        <!-- <div class="page-title">
                            <div class="page-title-inner">
                                <h1>our doctor</h1>
                            </div>
                        </div> -->
                                        <!--                        
                  </div>
                </div> -->
                                        <div class="uni-our-doctor-body">
                                            <div class="container">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_default_1">
                                                        <div class="row">

                                                            <?php
                                                            require('config.php');
                                                            $query = "SELECT d.*,dp.dep_name as dpname from doctor d inner join departments dp on d.doc_depid=dp.dep_id";
                                                            //$query = "SELECT * from doctor";
                                                            if ($result = $mysqli->query($query)) {
                                                                while ($row = $result->fetch_object()) { ?>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="uni-our-doctor-item-default">
                                                                            <div class="item-img">
                                                                                <a href="#"><img src="../admin/<?php echo $row->doc_pic; ?>" alt="" class="img-responsive" style="height: 270px; width: 270px;"></a>
                                                                            </div>
                                                                            <div class="item-caption">
                                                                                <div class="item-caption-head">
                                                                                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                                                                                        <div class="item-icons">
                                                                                            <img src="images/icons_box/icon_4/icon-3.png" alt="">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                                                                                        <div class="item-title">
                                                                                            <h4><?php echo $row->doc_name;
                                                                                                echo $row->doc_lname;  ?></h4>
                                                                                            <span><?php echo $row->dpname; ?></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item-caption-info">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <td>Email</td>
                                                                                                <td> <?php echo $row->doc_email; ?></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Contact</td>
                                                                                                <td><?php echo $row->doc_contact; ?></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Status</td>
                                                                                                <td><?php echo $row->doc_status; ?></td>
                                                                                                <input type="hidden" value="doc_id;">
                                                                                            </tr>
                                                                                        </thead>




                                                                                        <tfoot>
                                                                                            <tr>
                                                                                                <td colspan="2">
                                                                                                    <ul>
                                                                                                        <a href="docdetails.php?did=<?php echo $row->doc_id; ?>"><Button name="learnmore" class="vk-btn  vk-btn-xs vk-btn-default text-uppercase "> Learn more </Button></a>

                                                                                                    </ul>
                                                                                                    <div class="row">

                                                                                                </td>
                                                                                            </tr>
                                                                                        </tfoot>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                            <?php
                                                                }
                                                            } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </section>
                        </div>







                        <!--Diseses-->
                        <div class="uni-home-our-services" id="dis">
                            <div class="uni-shortcode-icons-box-5">
                                <div class="container" id="ser">

                                    <div class="uni-home-title">
                                        <h3>Some Information About Common Diseases</h3>
                                        <div class="uni-underline"></div>
                                    </div>


                                    <?php
                                    require('config.php');
                                    $query = "SELECT * from  disease";
                                    if ($result = $mysqli->query($query)) {
                                        while ($row = $result->fetch_object()) { ?>
                                            <div class="uni-shortcode-accordion-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="accordion-default">
                                                            <div class="col-md-6">
                                                                <div class="accordion-icons-img">
                                                                    <div class="accordion">
                                                                        <div class="accordion-item">
                                                                            <div class="accordion-toggle">
                                                                                <div class="accordion-icosn">
                                                                                    <img src="../admin/<?php echo $row->dis_pic; ?>" alt="">
                                                                                </div>
                                                                                <h4><?php echo $row->dis_name; ?></h4>
                                                                            </div>
                                                                            <div class="accordion-content">
                                                                                <h5>Description</h5>
                                                                                <p>

                                                                                    <?php echo $row->dis_description; ?>
                                                                                </p>
                                                                                <h5>Preventions</h5>
                                                                                <p>

                                                                                    <?php echo $row->dis_prevention; ?>
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <?php }
                                            } ?>

    </section>
</div>
</div>
</div>
</div>
<!-- disease end -->

<!--MAP-->
<div class="uni-home-map">
    <div class="uni-about-map">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.355677596112!2d-0.13052618407551403!3d50.82457546821709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875859878db2cc7%3A0xff129250121f260d!2s45+Queen's+Park+Rd%2C+Brighton+BN2+0GJ%2C+V%C6%B0%C6%A1ng+Qu%E1%BB%91c+Anh!5e0!3m2!1svi!2s!4v1514436176997" height="700" style="border:0"></iframe>
    </div>
</div>

<?php
include('footer.php')

?>