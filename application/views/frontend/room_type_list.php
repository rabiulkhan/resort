<section class="slice bg-white bb">
    <div class="wp-section">
        <div class="container">
            <div class="row">
            	<!-- START CATEGORY LIST PAGE : LEFT PART-->
                <div class="col-md-9">
                        <!-- PAGINATION & FILTERS -->
                    <div class="wp-block default product-list-filters light-gray">
                        <ul class="pagination pagination pull-left">
                            <li><a href="#" hidefocus="true">«</a></li>
                            <li class="active"><a href="#" hidefocus="true">1</a></li>
                            <li><a href="#" hidefocus="true">2</a></li>
                            <li><a href="#" hidefocus="true">3</a></li>
                            <li><a href="#" hidefocus="true">4</a></li>
                            <li><a href="#" hidefocus="true">5</a></li>
                            <li><a href="#" hidefocus="true">»</a></li>
                        </ul>
                        <div class="filter sort-filter pull-right">
                            <label>Sort by</label>
                            <select>
                                <option>Price low</option>
                                <option>Price high</option>
                                <option>Property type</option>
                            </select>
                        </div>
                    </div>
                        <!-- PROPERTY LISTING -->
                    <div class="row">
					<?php 
						$room_list1 = $this->db->get('rooms')->result_array();
						foreach($room_list1 as $row1)
							{ 
					?>	
                        <div class="col-md-6">
                            <div class="wp-block property grid">
							<?php 
								$room_type = $this->db->get_where('room_type',array('room_type_id'=>$row1['room_type']))->result_array();
								foreach($room_type as $row)
								{ 
							?>
                                <div class="wp-block-title">
                                    <h3><a href="<?php echo base_url();?>index.php/home/room_detail/<?php echo $row['room_type_id']?>" target="_blank"><?php echo $row['name'];?></a></h3>
                                </div>
							<?php 
                            	}
                            ?>	
                                <div class="wp-block-body">
                                    <div class="wp-block-img">
                                        <a href="<?php echo base_url();?>index.php/home/room_detail/<?php echo $row['room_type_id']?>" target="_blank">
                                            <img src="<?php echo base_url();?>upload/room_image/room_<?php echo $row1['rooms_id'];?>.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wp-block-content clearfix">
                                        <small>10 days only</small>
                                        <h4 class="content-title">Special Offer</h4>
                                        <p class="description"><?php echo $row1['description'];?></p>
                                        <span class="pull-left">
                                            <span class="price">$<?php echo $row1['rent_per_night'];?></span> 
                                            <span class="period">per Night</span>
                                        </span>
                                        <span class="pull-right">
                                            <span class="capacity">
                                                <a href="#" class="btn btn-gold">Book Now</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="wp-block-footer">
                                    <ul class="aux-info">
                                        <li><i class="fa fa-building"></i><small><?php echo $row1['room_size'];?> Sq Ft</small></li>
                                        <li><i class="fa fa-home"></i> <small><?php echo $row1['bed'];?> Bedrooms</small></li>
                                        <li><i class="fa fa-user"></i> <small><?php echo $row1['adult'];?> Adults</small></li>
                                        <li><i class="fa fa-users"></i> <small><?php echo $row1['children'];?> Children</small></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					<?php
							}
                    ?>
                    </div>
                    </div>
                <!-- START CATEGORY LIST PAGE : LEFT PART-->
                
                <!-- START CATEGORY LIST PAGE : RIGHT PART-->
                <div class="col-md-3">
                    <div class="sidebar">
                        <!-- FILTERS -->
                        <div class="panel panel-default panel-sidebar-1">
                            <div class="panel-heading"><h2>Filter by</h2></div>
                            <div class="panel-body">
                                <form class="form-light" role="form">
                                    <div class="form-group">
                                        <label>Search for properties</label>
                                        <input type="text" class="form-control" placeholder="I want to find..." hidefocus="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control">
                                            <option>Phones</option>
                                            <option>Laptops</option>
                                            <option>Cameras</option>
                                            <option>Tablets</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <select class="form-control">
                                            <option>Phones</option>
                                            <option>Laptops</option>
                                            <option>Cameras</option>
                                            <option>Tablets</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control">
                                            <option>Phones</option>
                                            <option>Laptops</option>
                                            <option>Cameras</option>
                                            <option>Tablets</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Min Rooms</label>
                                                <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Max Rooms</label>
                                                <select class="form-control">
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Min area</label>
                                                <input type="text" class="form-control" placeholder="" hidefocus="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Max area</label>
                                                <input type="text" class="form-control" placeholder="" hidefocus="true">
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-block btn-base btn-icon btn-icon-right btn-search">
                                                <span>Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- RECENTLY VIEWED -->
                        <div class="panel panel-default panel-sidebar-1">
                            <div class="panel-heading"><h2>Recently viewed</h2></div>
                            <div class="panel-body">
                                <ul class="featured featured-vertical">
                                    <li>
                                        <img src="<?php echo base_url();?>template/front/images/prv/estate/item-1.jpg" alt="">
                                        <div class="featured-content">
                                            <h3 class="title">
                                                <a href="#" hidefocus="true">3015 Grand Avenue, CocoWalk</a>
                                            </h3>
                                            <span class="star-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-full"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <div class="table no-margin">
                                                <div class="price-wr width-50">
                                                    <span class="price">$2300</span>
                                                    <span class="period">per month</span>
                                                </div>
                                                <div class="">
                                                    <span class="capacity">
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url();?>template/front/images/prv/estate/item-2.jpg" alt="">
                                        <div class="featured-content">
                                            <h3 class="title">
                                                <a href="#" hidefocus="true">3015 Grand Avenue, CocoWalk</a>
                                            </h3>
                                            <span class="star-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-full"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <div class="table no-margin">
                                                <div class="price-wr width-50">
                                                    <span class="price">$2300</span>
                                                    <span class="period">per month</span>
                                                </div>
                                                <div class="">
                                                    <span class="capacity">
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url();?>template/front/images/prv/estate/item-3.jpg" alt="">
                                        <div class="featured-content">
                                            <h3 class="title">
                                                <a href="#" hidefocus="true">3015 Grand Avenue, CocoWalk</a>
                                            </h3>
                                            <span class="star-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-full"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <div class="table no-margin">
                                                <div class="price-wr width-50">
                                                    <span class="price">$2300</span>
                                                    <span class="period">per month</span>
                                                </div>
                                                <div class="">
                                                    <span class="capacity">
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CATEGORY LIST PAGE : RIGHT PART-->
            </div>
        </div>
    </div>
</section>