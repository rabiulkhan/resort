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
					foreach($room_type as $row1)
                        { 
                    ?>
                    
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/room_type/do_update/<?php echo $row1['room_type_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="name" 
                                    class="form-control input-sm" id="name" value="<?php echo $row1['name'];?>">
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
											foreach($floor as $row){
										?>
										<option value="<?php echo $row['floors_id']; ?>" <?php if($row['floors_id'] == $row1['floor']){echo 'selected';}?>><?php echo $row['name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>	  
							
								<!--Branch-->
							<div class="form-group">
								<label class="col-sm-3 control-label">Branch</label>
								<div class="col-sm-6">
									<select data-placeholder="Choose a Branch..." name="branch" id="demo-chosen-select2" tabindex="2">
										<option value="">Choose a Branch...</option>
										<?php
											$branch = $this->db->get('branch')->result_array();
											foreach($branch as $row){
										?>
										<option value="<?php echo $row['branch_id']; ?>" <?php if($row['branch_id'] == $row1['branch']){ echo 'selected';} ?>><?php echo $row['name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
                        
						    <!--Facilities--------->
                             <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Facilities</h3>
								</div>
								<div class="panel-body">
										<?php 
											$facilities = explode(',',$row1['facilities']);
												
										?>
										<!--Checkboxes labeled-->
										<label class="form-checkbox form-normal"><input type="checkbox" name = "facilities[]" <?php if (in_array('Children room', $facilities, true)) { echo 'checked';} ?> value = "Children room">Children room</label>
										<label class="form-checkbox form-normal"><input type="checkbox" name = "facilities[]" <?php if (in_array('Living room', $facilities, true)) { echo 'checked';} ?> value = "Living room">Living room</label>
										<label class="form-checkbox form-normal"><input type="checkbox" name = "facilities[]" <?php if (in_array('TV', $facilities, true)) { echo 'checked';} ?> value = "TV">TV</label>
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