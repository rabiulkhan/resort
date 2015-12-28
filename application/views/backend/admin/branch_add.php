<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create Branch</h3></center>
                </div>
                <!--Form for Accountant-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/branch/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
                        <!--Name--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="name" name="name" 
                                class="form-control input-sm" id="name">
                            </div>
                        </div>
                       
                        <!--Email--------->
                        <div class="form-group">
                            <label for="email_set" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" placeholder="Email" name="email" 
                                    class="form-control input-lg" 
                                        id="email_set" >
                            </div>
                        </div>
                        
						<!--Phone Number--------->
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Phone Number</label>
                            <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" class="form-control" 
                                placeholder="(999) 999-9999" name="phone_number">
                            </div>
                        </div>
                        
                        <!--Division--------->
                        <div class="form-group">
                            <label for="demo-textarea-input" class="col-sm-3 control-label">Division</label>
                            <div class="col-sm-6">
                                <textarea placeholder="Division" rows="6" class="form-control" name="division"></textarea>
                            </div>
                        </div>
						
						<!--Address--------->
                        <div class="form-group">
                            <label for="demo-textarea-input" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-6">
                                <textarea placeholder="Address" rows="6" class="form-control" name="address"></textarea>
                            </div>
                        </div>
                        
                    </div>
                        
                        <div class="panel-footer" style="">
							<div class="row">
								<div class="col-sm-9 col-sm-offset-3">
									<button class="btn btn-success btn-labeled fa fa-user fa-lg" 
									type="submit">Creat Branch</button>
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