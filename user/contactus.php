<?php
$tittle ="Contact Us";
include('header.php');
?>

<div id="main-content" class="site-main-content">
    <section class="site-content-area">

        <div class="uni-banner-default uni-background-1">
            <div class="container">
                <!-- Page title -->
                <div class="page-title">
                    <div class="page-title-inner">
                        <h1>Contact us</h1>
                    </div>
                </div>
                <!-- End page title -->

            </div>
        </div>

        <div class="uni-contact-us-body">
            <!--MAP-->
            <div class="uni-about-map">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.355677596112!2d-0.13052618407551403!3d50.82457546821709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875859878db2cc7%3A0xff129250121f260d!2s45+Queen's+Park+Rd%2C+Brighton+BN2+0GJ%2C+V%C6%B0%C6%A1ng+Qu%E1%BB%91c+Anh!5e0!3m2!1svi!2s!4v1514436176997" height="700" style="border:0"></iframe>
            </div>
<!-- php code to send meassage -->

            <div class="uni-contact-us-body-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="uni-send-a-message">
                                <div class="uni-contact-title">
                                    <h3>Send a message</h3>
                                    <div class="uni-line"></div>
                                </div>
                                <div class="uni-send-a-message-body">
                                    <form action="function.php" method="post">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" value="" placeholder="your name">
                                        </div>
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <input type="tel" class="form-control" name="phone" value="" placeholder="phone number">
                                        </div>
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="email" value="" placeholder="email">
                                        </div>
                                        <div class="input-group form-group">
                                            <textarea id="message" name="msg" class="form-control" placeholder="Message"></textarea>
                                        </div>

                                        <button class="vk-btn vk-btn-send" name="send">send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="uni-contact-info">
                                <div class="uni-contact-title">
                                    <h3>Contact us</h3>
                                    <div class="uni-line"></div>
                                </div>
                                <div class="uni-contact-info-body">
                                    <div class="item">
                                        <div class="icon-holder">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <div class="text-holder">
                                            <p>Street 45 Autobhan Road</p>
                                            <span>Latifabad Hyderabad</span>
                                        </div>
                                    </div>

                                    <!--Receive records-->
                                    <div class="uni-receive-records">
                                        <div class="uni-contact-info-title">
                                            <h4>Receive records</h4>
                                            <div class="uni-divider"></div>
                                        </div>

                                        <div class="item">
                                            <div class="icon-holder">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                            <div class="text-holder">
                                                <p>Call Us</p>
                                                <span>(+92)3126238275</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="icon-holder">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </div>
                                            <div class="text-holder">
                                                <p>Send A Message</p>
                                                <span>medicare146@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!--customer care-->
                                    <div class="uni-customer-care">
                                        <div class="uni-contact-info-title">
                                            <h4>customer care</h4>
                                            <div class="uni-divider"></div>
                                        </div>

                                        <div class="item">
                                            <div class="icon-holder">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                            <div class="text-holder">
                                                <p>Call Us</p>
                                                <span>(+92) 3126238275</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="icon-holder">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </div>
                                            <div class="text-holder">
                                                <p>Send A Message</p>
                                                <span>medicare146@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="uni-contact-us-hours">
                                <div class="uni-contact-us-title">
                                    <div class="icon">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    </div>
                                    <h4>opening hours</h4>
                                </div>
                                <div class="uni-contact-us-hours-content">
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
                                    <a href="#" class="book-appointment">Book appointments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>




<?php

include('footer.php');
?>