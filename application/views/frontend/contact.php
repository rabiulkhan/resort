    <!-- MAIN CONTENT -->
        <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contact us</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Contact us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="slice no-padding">
        <div id="mapCanvas" class="map-canvas no-margin"></div>
    </section>

    <section class="slice bg-white">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title-wr">
                            <h3 class="section-title left"><span>Contact us</span></h3>
                        </div>
                        <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        
                        <form class="form-light mt-20" role="form">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="Phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="reset" class="btn btn-light">Reset</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-base btn-icon btn-icon-right btn-fly pull-right">
                                        <span>Send message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title-wr">
                                    <h3 class="section-title left"><span>Business info</span></h3>
                                </div>
								<?php
									$contact = $this->db->get('contact')->result_array();
										foreach($contact as $row){
								?>
                                <div class="contact-info">
                                    <h5><i class="fa fa-map-marker"></i> Address</h5>
                                    <p><?php echo $row['address']?></p>
                                    
                                    <h5><i class="fa fa-envelope"></i> Email</h5>
                                    <p><?php echo $row['email']?></p>
                                    
                                    <h5><i class="fa fa-phone"></i> Phone</h5>
                                    <p><?php echo $row['phone_number']?></p>
                                </div>
								<?php
									}
								?>
                            </div>
                            <div class="col-md-6">
                                <div class="section-title-wr">
                                    <h3 class="section-title left"><span>Program</span></h3>
                                </div>
                                <div class="contact-info">
                                    <h5><i class="fa fa-check"></i> Monday - Friday</h5>
                                    <p>10:00 AM - 6:00 PM</p>
                                    
                                    <h5><i class="fa fa-times"></i> Saturday</h5>
                                    <p>Closed</p>
                                    
                                    <h5><i class="fa fa-times"></i> Sunday</h5>
                                    <p>Closed</p>
                                </div>
                            </div>
                        </div>

                        <div class="section-title-wr">
                            <h3 class="section-title left"><span>Stay connected</span></h3>
                        </div>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur acing elit. Aenean esrsel piesn qersl ioinm sersoe non urna dolor aecena.
                        </p>
                        <div class="social-media">
                            <a href="#"><i class="fa fa-facebook facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus google"></i></a>
                            <a href="#"><i class="fa fa-twitter twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

