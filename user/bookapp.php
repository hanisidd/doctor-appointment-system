<?php
$d = "";
$dr = "";
$tittle = "Book Appointment";
include('header.php');
?>
<div id="main-content" class="site-main-content">
    <section class="site-content-area">



        <!--DEPARTMENT-->

        <div class="uni-hơm-1-department" id="dep">
            <div class="container" id="dep">
                <div class="uni-home-title">
                    <h3>Booking</h3>
                    <div class="uni-underline"></div>

                </div>

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
                                                    <button class="vk-btn vk-btn-send" type="submit" name="book">Book</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>

    </section>

</div>

<?php
include('footer.php');
?>