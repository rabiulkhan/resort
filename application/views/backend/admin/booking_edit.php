<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Booking</h3></center>
                    </div>
					<?php 
					$booking = $this->db->get_where('booking',array('booking_id' => $id))->result_array();
					foreach($booking as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/booking/do_update/<?php echo $row['booking_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
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
                                    <option value="<?php echo $row3['room_type_id']; ?>" <?php if($row3['room_type_id'] == $row['room']){echo 'selected';} ?>><?php echo $row3['name']; ?></option>
                                    <?php } ?>
									</select>
								 </div>
							  </div>
                            
							  <!--Start Date--------->
                              <div class="form-group">
								<label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">Start Date</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="start_date"
                                    placeholder="Start Date" value="<?php echo $row['start_date'];?>">
                                </div>
							  </div>
							
						      <!--End Date--------->
                              <div class="form-group">
								<label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">End Date</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="end_date"
                                    placeholder="END Date" value="<?php echo $row['end_date'];?>">
                                </div>
                              </div>
							  <!--Current State--------->
                              <div class="form-group">
								<label class="col-sm-3 control-label" for="name">Current State</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Current State" name="current_state" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['current_state'];?>">
                                </div>
                              </div>
							  <!--Cost--------->
                              <div class="form-group">
								<label class="col-sm-3 control-label" for="name">Cost</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Cost" name="cost" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['cost'];?>">
                                </div>
                              </div>
							  <!--Payment State--------->
                              <div class="form-group">
								<label class="col-sm-3 control-label" for="name">Payment State</label>
								<div class="col-sm-6">
									<input type="text" placeholder="Payment State" name="payment_state" 
									class="form-control input-sm" id="name" value="<?php echo $row['payment_state'];?>">
								</div>
                              </div>
						  </div>
                            
                            <div class="panel-footer" style="">
								<div class="row">
									<div class="col-sm-9 col-sm-offset-3">
										<button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
										type="submit">Edit Booking</button>
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