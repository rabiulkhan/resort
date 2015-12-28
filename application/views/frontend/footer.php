<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col">
                   <h4>Contact us</h4>
				   <?php
						$contact = $this->db->get('contact')->result_array();
							foreach($contact as $row){
					?>
                   <ul>
                        <li><?php echo $row['address'];?></li>
                        <li>Phone: <?php echo $row['phone_number'];?></li>
                        <li>Email: <a href="mailto:<?php echo $row['email']?>" title="Email Us"><?php echo $row['email'];?></a></li>
                        <li>Skype: <a href="skype:my.business?call" title="Skype us">my-business</a></li>
                        <li>Creating great templates is our passion</li>
                    </ul>
					<?php } ?>
                 </div>
            </div>
            
            <div class="col-md-3">
                <div class="col">
                    <h4>Mailing list</h4>
                    <p>Sign up if you would like to receive occasional treats from us.</p>
                    <form class="form-horizontal form-light">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your email address...">
                            <span class="input-group-btn">
                                <button class="btn btn-base" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="col col-social-icons">
                    <h4>Follow us</h4>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                </div>
            </div>

             <div class="col-md-3">
                <div class="col">
                    <h4>About us</h4>
                    <p class="no-margin">
                    Boomerang MultiPurpose Template is a multi-solution product made with simplicity in mind so you can benefit as much as possible from it.
                    <br><br>
                    <a href="#" class="btn btn-block btn-base btn-icon fa-check"><span>Try it now</span></a>
                    </p>
                </div>
            </div>
        </div>
        
        <hr>
        
        <div class="row">
            <div class="col-lg-9 copyright">
                2014 © Web Pixels. All rights reserved.
                <a href="#">Terms and conditions</a>
            </div>
            <div class="col-lg-3">
                <a href="http://www.webpixels.ro" title="Made with love by Web Pixels" target="_blank" class="">
                    <img src="<?php echo base_url(); ?>template/front/images/webpixels-footer-logo.png" alt="Web Pixels - Designing Forward | Logo" class="pull-right">
                </a>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Essentials -->
<script src="<?php echo base_url(); ?>template/front/js/modernizr.custom.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="<?php echo base_url(); ?>template/front/js/jquery.easing.js"></script>
<script src="<?php echo base_url(); ?>template/front/js/jquery.metadata.js"></script>
<script src="<?php echo base_url(); ?>template/front/js/jquery.hoverup.js"></script>
<script src="<?php echo base_url(); ?>template/front/js/jquery.hoverdir.js"></script>
<script src="<?php echo base_url(); ?>template/front/js/jquery.stellar.js"></script>

<!-- Boomerang mobile nav - Optional  -->
<script src="<?php echo base_url(); ?>template/front/assets/responsive-mobile-nav/js/jquery.dlmenu.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/responsive-mobile-nav/js/jquery.dlmenu.autofill.js"></script>

<!-- Forms -->
<script src="<?php echo base_url(); ?>template/front/assets/ui-kit/js/jquery.powerful-placeholder.min.js"></script> 
<script src="<?php echo base_url(); ?>template/front/assets/ui-kit/js/cusel.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/sky-forms/js/jquery.form.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/sky-forms/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/sky-forms/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/sky-forms/js/jquery.modal.js"></script>

<!-- Assets -->
<script src="<?php echo base_url(); ?>template/front/assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/page-scroller/jquery.ui.totop.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/mixitup/jquery.mixitup.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/mixitup/jquery.mixitup.init.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="<?php echo base_url(); ?>template/front/assets/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/milestone-counter/jquery.countTo.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/easy-pie-chart/js/jquery.easypiechart.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/social-buttons/js/rrssb.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/nouislider/js/jquery.nouislider.min.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/bootstrap/js/tooltip.js"></script>
<script src="<?php echo base_url(); ?>template/front/assets/bootstrap/js/popover.js"></script>


<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>




<!-- Sripts for individual pages, depending on what plug-ins are used -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/front/js/gmaps/google-maps-default.js"></script>

<!-- Boomerang App JS -->
<script src="<?php echo base_url(); ?>template/front/js/wp.app.js"></script>

<!-- Boomerang App JS -->
<!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>template/front/js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>template/front/js/respond.min.js"></script>
<![endif]-->

<!-- Temp -- You can remove this once you started to work on your project -->
<script src="<?php echo base_url(); ?>template/front/js/jquery.cookie.js"></script>
<script src="<?php echo base_url(); ?>template/front/js/wp.switcher.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/front/js/wp.ga.js"></script>


</body>
</html>