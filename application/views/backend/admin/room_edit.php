<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Room</h3></center>
                    </div>
					<?php 
					$room = $this->db->get_where('rooms',array('rooms_id' => $id))->result_array();
					foreach($room as $row)
                        { 
                    ?>
                  
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/room/do_update/<?php echo $row['rooms_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                      <div class="panel-body">
                        <!--Branch-->
							<div class="form-group">
								<label class="col-sm-3 control-label">Branch</label>
								<div class="col-sm-6">
									<select data-placeholder="Choose a Branch..." name="branch" id="demo-chosen-select2" tabindex="2">
										<option value="">Choose a Branch...</option>
										<?php
											$branch = $this->db->get('branch')->result_array();
											foreach($branch as $row1){
										?>
										<option value="<?php echo $row1['branch_id']; ?>" <?php if($row1['branch_id'] == $row['branch']){echo 'selected';} ?>><?php echo $row1['name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
					
					    <!--Floor---------> 
							<div class="form-group">
								<label class="col-sm-3 control-label">Floor</label>
								<div class="col-sm-6">
									<select data-placeholder="Choose a Floor..." name="floor" id="demo-chosen-select" tabindex="2">
										<option value="">Choose a floor...</option>
										<?php
											$floor = $this->db->get('floors')->result_array();
											foreach($floor as $row2){
										?>
										<option value="<?php echo $row2['floors_id']; ?>" <?php if($row2['floors_id'] == $row['floor']){echo 'selected'; }?>><?php echo $row2['name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						
						<!--Room type-->
						<div class="form-group">
                            <label class="col-sm-3 control-label">Room Category</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Room Category..." name="room_type" id="demo-chosen-select3" tabindex="2">
                                    <option value="">Choose a Room Category...</option>
                                    <?php
                                        $room_type = $this->db->get('room_type')->result_array();
                                        foreach($room_type as $row3){
                                    ?>
                                    <option value="<?php echo $row3['room_type_id']; ?>" <?php if($row3['room_type_id'] == $row['room_type']){echo 'selected';} ?>><?php echo $row3['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
					
                        <!--Rent per night-->
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Rate per night</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" value="<?php echo $row['rent_per_night'];?>" class="form-control" 
                                placeholder="" name="rent_per_night">
                            </div>
						 </div>
						
                       	<!--Description-->
						<div class="form-group">
                            <label for="demo-textarea-input" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea placeholder="Description" rows="6" 
								class="form-control" name="description"> <?php echo $row['description'];?> </textarea>
                            </div>
                        </div>
						
                       	<!--Room size-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Room Size</label>
                            <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" value="<?php echo $row['room_size'];?>" class="form-control" 
                                placeholder="" name="room_size">
                            </div>
						 </div>
                        
						 <!--Adult-->
						 <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Adult</label>
                            <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" class="form-control" 
                                placeholder="" name="adult" value="<?php echo $row['adult'];?>">
                            </div>
                         </div>
						
						 <!--Children-->
						 <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Children</label>
                            <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" class="form-control" 
                                placeholder="" name="children" value="<?php echo $row['children'];?>">
                            </div>
                         </div>
						
						<!--Bathroom-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Bathroom</label>
                            <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" class="form-control" 
                                placeholder="" name="bathroom" value="<?php echo $row['bathroom'];?>">
                            </div>
                        </div>
						<!--Packages-->
						<div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">Packages</label>
                            <div class="col-sm-6">
                                <select class="selectpicker" 
                                    title="Choose one of the following..." data-width="100%" 
                                    style="display: none;"
                                    name="packages" value="<?php echo $row['packages'];?>">
                                    <option value="">Select One</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
						
						<!--Room Picture-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Room Picture</label>
                            <div class="col-sm-6">
                               <span class="pull-left btn btn-default btn-file">
                                    Choose your photo <input type="file" name="image">
                                </span>
                            </div>
                        </div>
						
						<!--Creation date-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Creation Date</label>
                            <div class="col-sm-6">
                                <div id="demo-dp-component">
                                    <div class="input-group date">
                                        <input type="text" class="form-control" name="creation_date" value="<?php echo $row['creation_date'];?>">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                                    </div>
                                    <small class="text-muted">Auto close on select</small>
                                </div>
                            </div>
                        </div>
						
						<!--Garage-->
						<div class="form-group">
								<label class="col-md-3 control-label">Garage</label>
								<div class="col-md-9">
									<div class="radio" name="garage">
										<label class="form-radio form-normal active"><input type="radio" value="<?php echo $row['garage'];?>" name="garage">Yes</label>
										<label class="form-radio form-normal"><input type="radio" value="<?php echo $row['garage'];?>" name="garage">No</label>
									</div>
								</div>
						 </div>
						
						<!--Bed-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Bed</label>
                            <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" class="form-control" 
                                placeholder="" name="bed" value="<?php echo $row['bed'];?>">
                            </div>
                        </div>
						
						<!--Room service-->
                        <div class="form-group">
								<label class="col-md-3 control-label">Room Service</label>
								<div class="col-md-9">
									<div class="radio" name="room_service">
										<label class="form-radio form-normal active"><input type="radio" value="<?php echo $row['room_service'];?>" name="room_service">Yes</label>
										<label class="form-radio form-normal"><input type="radio" value="<?php echo $row['room_service'];?>" name="room_service">No</label>
									</div>
								</div>
						 </div> 
						   
                        
                        
                        </div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Room</button>
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