<section class="slice bg-white">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
				<?php
					foreach($news as $row)
					{
				?>
                    <div class="post-item">
                    	<h2 class="post-title"><a href="#" hidefocus="true" style="outline: none;"><?php echo $row['headline'];?></a></h2>
                        <div class="post-meta-top">
                            <div class="post-image">
                                <a href="<?php echo base_url();?>upload/blog_image/blog_<?php echo $row['news_id'];?>.jpg" class="theater" title="Shoreline">
                                    <img src="<?php echo base_url();?>upload/blog_image/blog_<?php echo $row['news_id'];?>.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-content">
                            <span class="post-author">WRITTEN BY <a href="#" hidefocus="true" style="outline: none;"><?php echo $row['writter'];?></a></span>
                            <div class="post-tags"><i class="fa fa-calendar"></i> <a href="#" hidefocus="true" style="outline: none;"><?php echo $row['date'];?> <i class="fa fa-clock-o"></i> <?php echo $row['time'];?></div>
                            <div class="clearfix"></div>
                            <div class="post-desc">
                                <p>
									<?php echo $row['description'];?>
                                </p>
                            </div>
                        </div>
                        <hr>

                    </div>
					<?php
						}
					?>
                </div>
                <div class="col-md-3">
                    <!-- SIDEBAR - BLOG -->
                    <div class="sidebar">
                    <!-- Search blog -->
                        <div class="section-title-wr">
                        <h3 class="section-title left"><span>Search our blog</span></h3>
                        </div>
                        <div class="widget">
                            <form class="form-light form-horizontal" role="form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search blog...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-gold" type="button">Go</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    
                    
                        <!-- LATEST BLOG -->
                        <div class="section-title-wr">
                            <h3 class="section-title left"><span>Latest Blog</span></h3>
                        </div>
                        <div class="widget-container widget-recent widget-recent-boxed widget-recent-comments">
                            <div class="inner">
                                <ul>
                                    <li class="clearfix">
                                        <a href="#" class="post-thumb" hidefocus="true">
                                            <img src="<?php echo base_url();?>template/front/images/temp/thumb-6.jpg">
                                        </a>
                                        <span class="comment-author"><a href="#" hidefocus="true">GECHI CHAN</a> commented</span>
                                        <span class="comment-entry">Sed molestie augue sit amet leo consequat posuere. Estibu lum ante ipsum primis in faucibus</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
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
                                            <button type="submit" class="btn btn-block btn-gold btn-icon btn-icon-right btn-search">
                                                <span>Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                    
				</div>
            </div>
        </div>
    </div>
</section>