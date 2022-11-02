<?php
$tittle ="Doctor Details";
include('header.php');
?>

<div class="uni-doctor-details-body">
    <div class="container">
        <div class="row">
        <?php
require('config.php');
if(isset($_GET['did'])){
    $id = $_GET['did'];
    $query = "SELECT * from doctor where doc_id='$id'";
    if($result=$mysqli->query($query)){
    while($row=$result->fetch_object()){?>          
            <div class="col-md-4">
                <div class="uni-our-doctor-item-default">
                    <div class="item-img">
                        <img src="../admin/<?php echo $row->doc_pic?>" alt="" class="img-responsive" >
                    </div>
                    <div class="item-caption">
                        <div class="item-caption-head">
                            <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                                <div class="item-icons">
                                    <img src="images/icons_box/icon_4/icon-3.png" alt="" style="height: 50px; width:20px;"> 
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                                <div class="item-title">
                                    <h4>adam jonson</h4>
                                    <span>Cardiologist</span>
                                </div>
                            </div>
                        </div>
                      <div class="item-caption-info">
                             <!--  <table class="table">
                                <thead>
                                    <tr>
                                        <td>Degrees</td>
                                        <td>M.D. of Medicine</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mon - fri</td>
                                        <td>8:00 am - 17:00 pm</td>
                                    </tr>
                                    <tr>
                                        <td>saturday</td>
                                        <td>10:00 am - 15:00 pm</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>8:00 am - 12:00 pm</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>-->

                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-8">
                <div class="uni-doctor-details-right">

                    <!--SUMMARY-->
                    <div class="uni-doctor-details-summary">
                        <div class="uni-doctor-details-title">
                            <h3>Summary</h3>
                            <div class="uni-divider"></div>
                        </div>
                        <p>
                           <?php echo $row->doc_description;?>
                        </p>
                    </div>

                
                    <!--CONTACT-->
                    <div class="uni-doctor-details-contact">
                        <div class="uni-doctor-details-title">
                            <h3>Contact</h3>
                            <div class="uni-divider"></div>
                        </div>
                        <ul>
                            <li> <i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $row->doc_email;?></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $row->doc_contact;?></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php

    }}}
    ?>
</section>
</div>






<?php
include('footer.php');
?>