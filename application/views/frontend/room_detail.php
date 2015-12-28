<section class="slice white bb">
    <div class="wp-section">
        <div class="container">
            <div class="row">
			<?php			
				foreach($room_list1 as $row1)
					{ 
			?>
                <div class="col-md-6">
                    <div id="workCarousel" class="carousel carousel-4 slide color-two-l" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hide">
                            <li data-target="#homepageCarousel" data-slide-to="0" class="active"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item item-dark active">
                                <img src="<?php echo base_url();?>upload/room_image/room_<?php echo $row1['rooms_id'];?>.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        
                        <!-- Controls -->
                        <a class="left carousel-control" href="#workCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                              
                    </div>
                </div>
                <div class="col-md-6">
				<?php 
					$room_list = $this->db->get_where('room_type',array('room_type_id'=>$row1['room_type']))->result_array();
					foreach($room_list as $row)
						{ 
				?>
                    <div class="section-title-wr">
                        <h3 class="section-title left"><span><?php echo $row1['name']?></span></h3>
                    </div>
					
                    <p>
                        <?php echo $row1['description']?>
                    </p>
				<?php
					}
				?>	
                </div>
			<?php
				}
			?>
            </div>
        </div>
    </div>
</section>

<section class="slice bg-banner-2 animate-in-view">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h4><i class="fa fa-bar-chart-o fa-4x"></i></h4>
                        <h2>UI Elements and Shortcodes for a more dynamic content</h2>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="wp-block hero base no-margin">
                                    <div class="thmb-img">
                                        <i class="fa fa-lightbulb-o"></i>
                                    </div>
                                    
                                    <h2>Generating ideas</h2>
                                    <p class="text-center">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. </p>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="wp-block hero base no-margin">
                                    <div class="thmb-img">
                                        <i class="fa fa-keyboard-o"></i>
                                    </div>
                                    
                                    <h2>Prototype model</h2>
                                    <p class="text-center">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. </p>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="wp-block hero base no-margin">
                                    <div class="thmb-img">
                                        <i class="fa fa-code"></i>
                                    </div>
                                    
                                    <h2>Design and Code</h2>
                                    <p class="text-center">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. </p>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="wp-block hero base no-margin">
                                    <div class="thmb-img">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                    
                                    <h2>Launching and Monitoring</h2>
                                    <p class="text-center">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. </p>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>