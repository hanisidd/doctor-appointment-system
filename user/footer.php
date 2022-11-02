<footer class="site-footer footer-default">
    <div class="footer-main-content">
        <div class="container">
            <div class="row">
                <div class="footer-main-content-elements">
                    <div class="footer-main-content-element col-md-3 col-sm-6">
                        <aside class="widget">
                            <div class="widget-title uni-uppercase"><a href="#"><img src="images/logowhite.png" alt="" class="img-responsive"></a></div>
                            <div class="widget-content">
                                <p>
                                we have specialized doctors who will protect your health.
                                        That's why we have online system of appointments and reports so you don't have to worry about to go there personally.
                                </p>
                                <div class="uni-info-contact">
                                    <ul>
                                        <li> <i class="fa fa-map-marker" aria-hidden="true"></i> Hyderabad, Sindh Pakistan</li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> (+92) 3126238275</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> medicare156@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="footer-main-content-element col-md-3 col-sm-6">
                        <aside class="widget">
                            <h3 class="widget-title uni-uppercase">quick links</h3>
                            <div class="widget-content">
                                <div class="uni-quick-link">
                                    <ul>
                                        <li><a href="#"><span>+</span> Home</a></li>
                                        <li><a href="#"><span>+</span> about</a></li>
                                        <li><a href="#"><span>+</span> services</a></li>
                                        <li><a href="#"><span>+</span> timetable</a></li>
                                        <li><a href="#"><span>+</span> blog</a></li>
                                        <li><a href="#"><span>+</span> contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="footer-main-content-element col-md-3 col-sm-6">
                        <aside class="widget">
                        <h3 class="widget-title uni-uppercase">Why Us?</h3>
                                <div class="widget-content">
                                    <div class="uni-footer-latest-post">
                                        <ul>
                                            <li>
                                                <h4><a href="#">1.specialized Doctors</a></h4>
                                              
                                            </li>
                                            <li>
                                                <h4><a href="#">2.Online report System</a></h4>
                                               
                                            </li>
                                            <li>
                                                <h4><a href="#">3.Online appointment Booking System</a></h4>
                                              
                                            </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <form action="function.php" method="post">
                        <div class="footer-main-content-element col-md-3 col-sm-6">
                            <aside class="widget">
                                <h3 class="widget-title uni-uppercase">Feed<span>Back</span></h3>
                                <div class="widget-content">
                                    <div class="uni-footer-newletter">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Share Your Experience" name="feedback">
                                            <input type="hidden" class="form-control" placeholder="Share Your Experience" value="<?php echo $_SESSION['pid']; ?>" name="id">
                                            <button class="btn btn-sub" type="submit" name="feed">Send</button>
                                        </div>
                    </form>
                    <div class="uni-social">
                        <h4>Follow us</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </aside>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-content">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright-text"><a href="templateshub.net">Medi-care</a></p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="copyright-menu">
                            <li><a href="#">Term Of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="js/alerts.js"></script>
<?php

if (isset($_SESSION['alert'])) {
?> <script>
        swal({
            title: "<?php echo $_SESSION['alert']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['alert_code']; ?>",
            button: "ok",
        });
    </script> <?php
                unset($_SESSION['alert']);
            }
                ?>
<script src="plugin/jquery/jquery-2.0.2.min.js"></script>
<script src="plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="plugin/bootstrap/js/bootstrap.js"></script>
<script src="plugin/process-bar/tox-progress.js"></script>
<script src="plugin/waypoint/jquery.waypoints.min.js"></script>
<script src="plugin/counterup/jquery.counterup.min.js"></script>
<script src="plugin/owl-carouse/owl.carousel.min.js"></script>
<script src="plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="plugin/mediaelement/mediaelement-and-player.js"></script>
<script src="plugin/masonry/masonry.pkgd.min.js"></script>
<script src="plugin/datetimepicker/moment.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datepicker.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datepicker.tr.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datetimepicker.js"></script>
<script src="plugin/datetimepicker/bootstrap-datetimepicker.fr.js"></script>

<script src="plugin/lightgallery/picturefill.min.js"></script>
<script src="plugin/lightgallery/lightgallery.js"></script>
<script src="plugin/lightgallery/lg-pager.js"></script>
<script src="plugin/lightgallery/lg-autoplay.js"></script>
<script src="plugin/lightgallery/lg-fullscreen.js"></script>
<script src="plugin/lightgallery/lg-zoom.js"></script>
<script src="plugin/lightgallery/lg-hash.js"></script>
<script src="plugin/lightgallery/lg-share.js"></script>
<script src="plugin/sticky/jquery.sticky.js"></script>
<script src="css/profile.js"></script>
<script src="js/main.js"></script>
</body>

<!--   [XR&CO'2014], Tue, 22 Oct 2019 11:45:22 GMT -->

</html>