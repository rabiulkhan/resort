<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create room category</h3></center>
                </div>
               
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/room_type/add" method="post" id="demo-bv-bsc-tabs" target="_top">
                    <div class="panel-body">
                        <!--Name--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="name" name="name" 
                                class="form-control input-sm" id="name">
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
                                    <option value="<?php echo $row['floors_id']; ?>"><?php echo $row['name']; ?></option>
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
                                    <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
						 <!--Facilities--------->
                           <!--Default checkboxes-->
							<!--===================================================-->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Facilities</h3>
								</div>
								<div class="panel-body">
										<!--Checkboxes labeled-->
										<label class="form-checkbox form-normal active"><input type="checkbox" checked></label>
										<label class="form-checkbox form-normal"><input type="checkbox"></label>
										<label class="form-checkbox form-normal"><input type="checkbox"> Option 3</label>
										<label class="form-checkbox form-normal disabled"><input type="checkbox" disabled> Disabled</label>
					
									</div>
								</div>
							</div>
                        
                        </div>
                        
                        <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success btn-labeled fa fa-user fa-lg" 
                                type="submit">Create Category</button>
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