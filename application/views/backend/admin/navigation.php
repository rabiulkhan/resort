<nav id="mainnav-container">
    <div id="mainnav">
        <!--Shortcut buttons-->
        <!--================================-->
        <div id="mainnav-shortcut">
            <ul class="list-unstyled">
                <li class="col-xs-4" data-content="Visit Home page">
                    <a id="demo-toggle-aside" class="shortcut-grid" href="<?php echo base_url();?>index.php/home">
                        <i class="fa fa-location-arrow"></i>
                    </a>
                </li>
                <li class="col-xs-4" data-content="Notification">
                    <a id="demo-alert" class="shortcut-grid" href="#">
                        <i class="fa fa-bullhorn"></i>
                    </a>
                </li>
                <li class="col-xs-4" data-content="Page Alerts">
                    <a id="demo-page-alert" class="shortcut-grid" href="#">
                        <i class="fa fa-bell"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!--================================-->
        <!--End shortcut buttons-->
        
        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">
                        <!--Dashboard----------------------------------->
                        <li class="active-link">
                            <a href="">
                                <i class="fa fa-dashboard"></i>
                                <span class="menu-title">
                                    <strong>Dashboard</strong>
                                </span>
                            </a>
                        </li>
                        
                        <!--Build your Resort----------------------------------->
                        <li class="active-link">
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Build your Resort</span>
                                <i class="fa arrow"></i>
                            </a>
                            
                            <ul class="collapse">
                                <li><a href="<?php echo base_url(); ?>index.php/admin/branch/view">Branch</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/admin/floors/view">Floors</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/admin/room_type/view">Room Category</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/admin/extra_facility/view">Extra Facility</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/admin/room/view">Rooms</a></li> 
                            </ul>
                        </li>
                        
						<!--Packages----------------------------------->
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/packages/view">
                                <i class="fa fa-lock"></i>
                                <span class="menu-title">Packages</span>
                            </a>
                        </li>
                        
						<!--Employee----------------------------------->
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/employee/view">
                                <i class="fa fa-lock"></i>
                                <span class="menu-title">Employee</span>
                            </a>
                        </li>
                        
                        <!--blog----------------------------------->
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/blog/view">
                                <i class="fa fa-lock"></i>
                                <span class="menu-title">Blog</span>
                            </a>
                        </li>
                        
                        <!--Food Facilities----------------------------------->
                        <li>
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Food & Beverage</span>
                                <i class="fa arrow"></i>
                            </a>
            
                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="<?php echo base_url(); ?>index.php/admin/food_item_category/view">Food Item Category</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/admin/food_item/view">Food Items</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/admin/food_package/view">Food Packages</a></li>
                            </ul>
                        </li>
                        
                        <!--Extra facilities----------------------------------->
                        <li>
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Extra facilities</span>
                                <i class="fa arrow"></i>
                            </a>
                            
                            <ul class="collapse">
                                <li><a href="<?php echo base_url();?>index.php/admin/swimming_pool/view">Swiming pool</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/outdoor_games/view">Outdoor Games</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/indoor_games/view">Indoor Games</a></li> 
                                <li><a href="<?php echo base_url();?>index.php/admin/library/view">Library</a></li> 
                                <li><a href="<?php echo base_url();?>index.php/admin/religion/view">Religion Place</a></li> 
                            </ul>
                        </li>
                        
                        <!--Manage Members----------------------------------->
                        <li>
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Members</span>
                                <i class="fa arrow"></i>
                            </a>
                            
                            <ul class="collapse">
                                <li><a href="<?php echo base_url();?>index.php/admin/member_type/view">Membership Type</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/member/view">Our Members</a></li>
                            </ul>
                        </li>
						
						<!--Booking----------------------------------->
                        <li>
                            <a href="<?php echo base_url();?>index.php/admin/booking/view">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Booking</span>
                            </a>
                        </li>
                        
                        <!--Manage UI Design----------------------------------->
                        <li>
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Manage UI Design</span>
                                <i class="fa arrow"></i>
                            </a>
                            
                            <ul class="collapse">
                                <li><a href="<?php echo base_url();?>index.php/admin/ui_home/view">Page : Home</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/about/view">Page : About us</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/admin/contact/view">Page : Contact</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/social_media/view">Social Media info</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/logo/view">Logo Upload</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/favicon/view">Favicon</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Meeting & Events</span>
                                <i class="fa arrow"></i>
                            </a>
                            
                            <ul class="collapse">
                                <li><a href="<?php echo base_url();?>index.php/admin/event_type/view">Event Type</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/events/view">Events</a></li>
                            </ul>
                        </li>
                        
                        <!--System Settings----------------------------------->
                        <li class="active-link">
                            <a href="<?php echo base_url();?>index.php/admin/general_settings/view">
                                <i class="fa fa-wrench"></i>
                                <span class="menu-title">System Settings</span>
                            </a>
                        </li>
                        
                        <!--Manage Profile----------------------------------->
                        <li>
                            <a href="">
                                <i class="fa fa-lock"></i>
                                <span class="menu-title">Manage Profile</span>
                            </a>
                        </li>
						
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->
    </div>
</nav>

	<style class="csscreations">/*custom fonts - Bitter, Montserrat*/
/*basic reset*/
/*nav styles*/

/*.ink styles - the elements which will create the ripple effect. The size and position of these elements will be set by the JS code. Initially these elements will be scaled down to 0% and later animated to large fading circles on user click.*/
.ink {
	display: block; position: absolute;
	background: hsl(180, 40%, 80%);
	border-radius: 100%;
	transform: scale(0);
}
/*animation effect*/
.ink.animate {-webkit-animation: ripple 0.65s linear;}
@-webkit-keyframes ripple {
	/*scale the element to 250% to safely cover the entire link and fade it out*/
	100% {opacity: 0; transform: scale(2.5);}
}
</style>

<script>//jQuery time
var parent, ink, d, x, y;
$("ul li a").click(function(e){
	parent = $(this).parent();
	//create .ink element if it doesn't exist
	if(parent.find(".ink").length == 0)
		parent.prepend("<span class='ink'></span>");
		
	ink = parent.find(".ink");
	//incase of quick double clicks stop the previous animation
	ink.removeClass("animate");
	
	//set size of .ink
	if(!ink.height() && !ink.width())
	{
		//use parent's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
		d = Math.max(parent.outerWidth(), parent.outerHeight());
		ink.css({height: d, width: d});
	}
	
	//get click coordinates
	//logic = click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center;
	x = e.pageX - parent.offset().left - ink.width()/2;
	y = e.pageY - parent.offset().top - ink.height()/2;
	
	//set the position and add class .animate
	ink.css({top: y+'px', left: x+'px'}).addClass("animate");
})
</script>