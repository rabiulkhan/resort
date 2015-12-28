<section class="slice bg-white"> 
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
			<?php
				$news = $this->db->get('news')->result_array();
					foreach($news as $row){
						if($row['publication'] == 'published'){
			?>
                    <ul class="list-listings-2">
                        <li>
                            <div class="listing-image">
                                <img src="<?php echo base_url();?>upload/blog_image/blog_<?php echo $row['news_id'];?>.jpg" class="img-responsive" alt="">
                                <a href="<?php echo base_url();?>index.php/home/blog_detail/<?php echo $row['news_id']?>" target="_blank"; class="btn btn-lg btn-square btn-gold btn-block-bm btn-icon btn-icon-go">See more</a>
                            </div>
                            <div class="cell">
                                <div class="listing-body clearfix">
                                    <h3><a href="<?php echo base_url();?>index.php/home/blog_detail/<?php echo $row['news_id']?>" target="_blank";><?php echo $row['headline'];?></a></h3>
                                    <p>
										<?php echo $row['summery'];?>
                                    </p>
                                </div>
                                <div class="listing-footer">
                                    <ul class="aux-info">
                                        <li><i class="fa fa-calendar"></i><strong>Date:</strong> <?php echo $row['date'];?></li>
                                        <li><i class="fa fa-user"></i><strong>Time:</strong> <?php echo $row['time'];?></li>
                                        <li><i class="fa fa-globe"></i><strong>City:</strong> London</li>
                                    </ul>
                                </div>
                            </div> 
                        </li>
                    </ul>
				<?php
						}
					}
				?>
                </div>

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
            </div>
        </div>
    </div>
</section>