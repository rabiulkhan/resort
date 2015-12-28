<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create Booking</h3></center>
                </div>
                <!--Form for Accountant-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/booking/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
                        <!--Branch--------->
						<div class="form-group">
                            <label class="col-sm-3 control-label">Branch</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Branch..." name="branch" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Branch...</option>
                                    <?php
                                        $branch = $this->db->get('branch')->result_array();
                                        foreach($branch as $row){
                                    ?>
                                    <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['name']; ?></option>
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
                                        foreach($room_type as $row){
                                    ?>
                                    <option value="<?php echo $row['room_type_id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                             </div>
                         </div>
                        
						 <!--Start Date-->
						 <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Start Date</label>
                            <div class="col-sm-6">
                                <input type="date" id="demo-msk-phone" class="form-control" 
                                placeholder="Start Date" name="start_date">
                            </div>
                         </div>
                         <!--End Date--> 
                         <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">End Date</label>
                            <div class="col-sm-6">
                                <input type="date" id="demo-msk-phone" class="form-control" 
                                placeholder="End Date" name="end_date">
                            </div>
                         </div>
						
						 <!--Current State-->
                         <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Current State</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="Current State" name="current_state">
                            </div>
                         </div>
                         <!--Cost-->
                         <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Cost</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="Cost" name="cost">
                            </div>
                         </div>
						 <!--Payment-->
                         <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Payment</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="Payment" name="payment_state">
                            </div>
                         </div>
                        
                         </div>
                        
                         <div class="panel-footer" style="">
							<div class="row">
								<div class="col-sm-9 col-sm-offset-3">
									<button class="btn btn-success btn-labeled fa fa-user fa-lg" 
									type="submit">Booking</button>
								</div>
                            </div>
                         </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>

<script>
	// FORM VALIDATION ON TABS
	// =================================================================
	$('#demo-bv-bsc-tabs').bootstrapValidator({
		excluded: [':disabled'],
		feedbackIcons: faIcon,
		fields: {
			name: {
				validators: {
					notEmpty: {
						message: 'The full name is required'
					}
				}
			}
		}
	}).on('status.field.bv', function(e, data) {
		var $form     = $(e.target),
		validator = data.bv,
		$tabPane  = data.element.parents('.tab-pane'),
		tabId     = $tabPane.attr('id');

		if (tabId) {
			var $icon = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent().find('i');
	
			// Add custom class to tab containing the field
			if (data.status == validator.STATUS_INVALID) {
				$icon.removeClass(faIcon.valid).addClass(faIcon.invalid);
			} else if (data.status == validator.STATUS_VALID) {
				var isValidTab = validator.isValidContainer($tabPane);
				$icon.removeClass(faIcon.valid).addClass(isValidTab ? faIcon.valid : faIcon.invalid);
			}
		}
	});

</script>