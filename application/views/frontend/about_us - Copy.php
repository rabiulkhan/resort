<section class="slice white">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">               
                    <div class="section-title-wr">
                        <h3 class="section-title left"><span>About us</span></h3>
                    </div>
					<?php 
						$main_text = $this->db->get_where('about',array('about_id' => '1'))->result_array();
						foreach($main_text as $row){
					?>
                    <p> <?php echo $row['description'];?></p>
					<?php 
						}
					?>
                  </div>
                    
                <div class="col-md-5">
                    <div id="workCarousel" class="carousel carousel-4 slide color-two-l" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hide">
                            <li data-target="#homepageCarousel" data-slide-to="0" class="active"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item item-dark active">
                                <img src="<?php echo base_url();?>upload/about_gallary_image/about_gallary_22.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="item item-dark">
                                <img src="<?php echo base_url();?>upload/about_gallary_image/about_gallary_23.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="item item-dark">
                                <img src="<?php echo base_url();?>upload/about_gallary_image/about_gallary_24.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        
                        <!-- Controls -->
                        <a class="left carousel-control" href="#workCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#workCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="prlx-bg inset-shadow-1 p-50" data-stellar-ratio="2" style="min-height: 250px; height: auto; background-image: url(<?php echo base_url();?>upload/parallax_image/bck.jpg)">
    <!-- Section mask -->
    <div class="mask mask-1"></div>
    <div class="container">
        <div class="section-title-wr">
            <h3 class="section-title center">
                <span class="c-white">Here we are !</span>
            </h3>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="milestone-counter">
                    <div class="milestone-count c-white" data-from="0" data-to="5518" data-speed="3000" data-refresh-interval="100"></div>
                    <h4 class="milestone-info c-white">Accomodation</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="milestone-counter">
                    <div class="milestone-count c-white" data-from="0" data-to="154" data-speed="5000" data-refresh-interval="50"></div>
                    <h4 class="milestone-info c-white">Food Item</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="milestone-counter">
                    <div class="milestone-count c-white" data-from="0" data-to="430" data-speed="5000" data-refresh-interval="80"></div>
                    <h4 class="milestone-info c-white">Events</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="milestone-counter">
                    <div class="milestone-count c-white" data-from="0" data-to="1230" data-speed="5000" data-refresh-interval="80"></div>
                    <h4 class="milestone-info c-white">Packages</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice white animate-hover-slide-2">
    <div class="wp-section">
        <div class="container">
            <div class="section-title-wr">
                <h3 class="section-title left"><span>Exclusive</span></h3>
            </div>
            <div class="owl-carousel owl-carousel-4">
                <div class="item">
                    <div class="wp-block inverse">
                        <div class="figure">
                            <img alt="" src="<?php echo base_url();?>upload/exclusive_gallary_image/exclusive_gallary_1.jpg" class="img-responsive">
                            <div class="figcaption">
                                <h2>Meredith Grey<small>CEO</small></h2>
                                
                                <ul class="social-icons text-center">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="wp-block inverse">
                        <div class="figure">
                            <img alt="" src="<?php echo base_url();?>upload/exclusive_gallary_image/exclusive_gallary_2.jpg" class="img-responsive">
                            <div class="figcaption">
                                <h2>Meredith Grey<small>CEO</small></h2>
                                
                                <ul class="social-icons text-center">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="wp-block inverse">
                        <div class="figure">
                            <img alt="" src="<?php echo base_url();?>upload/exclusive_gallary_image/exclusive_gallary_3.jpg" class="img-responsive">
                            <div class="figcaption">
                                <h2>Meredith Grey<small>CEO</small></h2>
                                
                                <ul class="social-icons text-center">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="wp-block inverse">
                        <div class="figure">
                            <img alt="" src="<?php echo base_url();?>upload/exclusive_gallary_image/exclusive_gallary_4.jpg" class="img-responsive">
                            <div class="figcaption">
                                <h2>Meredith Grey<small>CEO</small></h2>
                                
                                <ul class="social-icons text-center">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="wp-block inverse">
                        <div class="figure">
                            <img alt="" src="<?php echo base_url();?>upload/exclusive_gallary_image/exclusive_gallary_5.jpg" class="img-responsive">
                            <div class="figcaption">
                                <h2>Meredith Grey<small>CEO</small></h2>
                                
                                <ul class="social-icons text-center">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  