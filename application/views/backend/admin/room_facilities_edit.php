<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Room Category </h3></center>
                    </div>
					<?php 
					$room_type = $this->db->get_where('room_type',array('room_type_id' => $id))->result_array();
					foreach($room_type as $row)
                        { 
                    ?>
                    
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/room_type/do_update/<?php echo $row['room_type_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="name" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['name'];?>">
                                </div>
                            </div>
                            
                            <!--Floor--------->
						    <div class="form-group">
                              <label class="col-sm-3 control-label" for="demo-is-inputsmall">Floor</label>
                              <div class="col-sm-6">
                                 <select class="selectpicker" 
                                     title="Choose one of the following..." data-width="100%" 
                                     style="display: none;"
                                     name="floor" value="<?php echo $row['floor'];?>">
                                     <option value="">Select One</option>
                                     <option value=""></option>
                                     <option value=""></option>
                                 </select>
                              </div>
                            </div>	  
                        
						    <!--Branch--------->
                            <div class="form-group">
                               <label class="col-sm-3 control-label" for="demo-is-inputsmall">Branch</label>
                               <div class="col-sm-6">
                                 <select class="selectpicker" 
                                     title="Choose one of the following..." data-width="100%" 
                                     style="display: none;"
                                     name="branch" value="<?php echo $row['branch'];?>">
                                     <option value="">Select One</option>
                                     <option value=""></option>
                                     <option value=""></option>
                                 </select>
                               </div>
                            </div>
                        
						    <!--Facilities--------->
                             <div class="form-group">
								<label class="col-md-3 control-label">Fecilities</label>
								<div class="col-md-9">
									<div class="radio" name="facilities" value="<?php echo $row['facilities'];?>">
										<label class="form-radio form-normal active"><input type="radio" checked="" name="children_room">Children room</label>
										<label class="form-radio form-normal"><input type="radio" name="living_room">Living room</label>
										<label class="form-radio form-normal"><input type="radio" name="dining_room">Dining room</label>
										<label class="form-radio form-normal"><input type="radio" name="tv">TV</label>
										<label class="form-radio form-normal"><input type="radio" name="complimentory_tea">Complimentory tea & coffee</label>
										<label class="form-radio form-normal"><input type="radio" name="air_condition">Air-Condition System</label>
										<label class="form-radio form-normal"><input type="radio" name="balconies">Balconies</label>
									 </div>
								</div>
						    </div>
                        
                    </div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Category</button>
                                </div>
                            </div>
                        </div>
                        </div>  
                    </form>
					<?php 
						}
					?>
                </div>
            </div>
        </div>
</div>
    
				<!--===================================================-->
				<!--End page content-->

			<!--===================================================-->
			<!--END CONTENT CONTAINER-->