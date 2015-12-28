<!DOCTYPE html>
<html>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title><?php echo $system_name;?></title>

    <!-- Essential styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>template/front/assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>template/front/font-awesome/css/font-awesome.min.css" type="text/css"> 
    <link rel="stylesheet" href="<?php echo base_url();?>template/front/assets/fancybox/jquery.fancybox.css?v=2.1.5" media="screen"> 
     
    <!-- Boomerang styles -->
        <link id="wpStylesheet" type="text/css" href="<?php echo base_url();?>template/front/css/global-style.css" rel="stylesheet" media="screen">
        

    <!-- Favicon -->
    <link href="<?php echo base_url();  ?>template/front/images/favicon.png" rel="icon" type="image/png">

    <!-- Assets -->
    <link rel="stylesheet" href="<?php echo base_url();?>template/front/assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>template/front/assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>template/front/assets/sky-forms/css/sky-forms.css"> 


	<!--Bootstrap Datepicker [ OPTIONAL ]-->
	<link href="<?php echo base_url();  ?>template/front/css/bootstrap-datepicker.css" rel="stylesheet">



   
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="<?php echo base_url();?>template/front/assets/sky-forms/css/sky-forms-ie8.css">
    <![endif]-->

    <!-- Required JS -->
    <script src="<?php echo base_url();?>template/front/js/jquery.js"></script>
    <script src="<?php echo base_url();  ?>template/front/js/jquery-ui.min.js"></script>

    <!-- Page scripts -->
    

	<!-- LayerSlider stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url();?>template/front/layerslider/css/layerslider.css" type="text/css">
	<!-- External libraries: jQuery & GreenSock -->
	<script src="<?php echo base_url();?>template/front/layerslider/js/greensock.js" type="text/javascript"></script>
	<!-- LayerSlider script files -->
	<script src="<?php echo base_url();?>template/front/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>template/front/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

	
	<style>

		/*
			You can add your custom layer styles
			in the style attribute of the layer,
			to a style element or
			to an external css file
		*/

		#layerslider * {
			font-family: Lato, 'Open Sans', sans-serif;
		}

	</style>
</head>
<body>
<!-- MODALS -->

<!-- MOBILE MENU - Option 2 -->
<section id="navMobile" class="aside-menu left">
    <form class="form-horizontal form-search">
        <div class="input-group">
            <span class="input-group-btn">
                <button id="btnHideMobileNav" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>
            </span>
        </div>
    </form>
</section> 

<!-- SLIDEBAR -->


<!-- MAIN WRAPPER -->
<div class="body-wrap">
<!-- HEADER -->
        <div id="divHeaderWrapper">
            <header class="header-standard-2">     
    <!-- MAIN NAV -->
    <div class="navbar navbar-wp navbar-arrow mega-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars icon-custom"></i>
                </button>

                <a class="navbar-brand" href="<?php echo base_url();?>index.php/home" title="Boomerang | One template. Infinite solutions">
                    <img src="<?php echo base_url();?>template/front/images/front_logo.png" alt="Boomerang | One template. Infinite solutions">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-md hidden-lg">
                        <div class="bg-light-gray">
                            <form class="form-horizontal form-light p-15" role="form">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="I want to find ...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-white" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!--HOME-->
                    <li class="dropdown dropdown-meganav mega-dropdown-fluid">
                        <a href="<?php echo base_url();?>index.php/home">Home</a>
                    </li>
                    <!--ABOUT US-->
                    <li class="dropdown dropdown-meganav mega-dropdown-fluid">
                        <a href="<?php echo base_url();?>index.php/home/about_us">About us</a>
                    </li>
                    
                    <?php
                    	if($this->db->get_where('ui_home',array('ui_home_id'=>'1'))->row()->status == 'ok'){
					?>
                    <!--Rooms & Suits-->
                    <li class="<?php if ($page_name == 'room_detail') echo 'active';?> dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Rooms & Suits</a>
                            <ul class="dropdown-menu">
							<?php
                                $rooms_type=$this->db->get('room_type')->result_array();
                                foreach($rooms_type as $row)
                                {
                            ?>
                                <li><a href="<?php echo base_url();?>index.php/home/room_detail/<?php echo $row['room_type_id'];?>"><?php echo $row['name'];?></a></li>
							<?php
                                }
                            ?>
                            </ul>
                    </li>
                    <?php
						}
                    	if($this->db->get_where('ui_home',array('ui_home_id'=>'2'))->row()->status == 'ok'){
					?>
                    <!--Meeting & Events-->
                    <li class="<?php if ($page_name == 'event_detail') echo 'active';?> dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Meeting & Events</a>
                            <ul class="dropdown-menu">
                            <?php
                                $events=$this->db->get('events')->result_array();
                                foreach($events as $row1)
                                {
                            ?>
                                <li><a href=""><?php echo $row1['title'];?></a></li>
                             <?php
								}
							 ?>   
                            </ul>
                    </li>
                    
                    <?php
						}
                    	if($this->db->get_where('ui_home',array('ui_home_id'=>'3'))->row()->status == 'ok'){
					?>
                    <!--Resturent & Cafe-->
                    <li class="<?php if ($page_name == 'food_detail') echo 'active';?> dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Resturent & Cafe</a>
                            <ul class="dropdown-menu">
                            <?php
                                $food_item_category=$this->db->get('food_item_category')->result_array();
                                foreach($food_item_category as $row1)
                                {
                            ?>
                                <li><a href=""><?php echo $row1['name'];?></a></li>
                             <?php
								}
							 ?>   
                            </ul>
                    </li>
                    
                    <?php
						}
                    	if($this->db->get_where('ui_home',array('ui_home_id'=>'4'))->row()->status == 'ok'){
					?>
                    <!--FACILITY-->
                    <li class="<?php if ($page_name == 'facility_detail') echo 'active';?> dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Facility</a>
                            <ul class="dropdown-menu">
                            <?php
                                $extra_facility=$this->db->get('extra_facility')->result_array();
                                foreach($extra_facility as $row1)
                                {
                            ?>
                                <li><a href=""><?php echo $row1['name'];?></a></li>
                             <?php
								}
							 ?>   
                            </ul>
                    </li>
                    
                    <?php
						}
					?>
                    <!--CONTACT-->
                    <li class="dropdown dropdown-meganav mega-dropdown-fluid">
                        <a href="">Contact</a>  
                    </li>
                </ul>
               
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>        </div>

        <!-- Optional header components (ex: slider) -->
            