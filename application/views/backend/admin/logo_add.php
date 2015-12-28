<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please Upload Logo</h3></center>
                </div>
                <!--Form for Accountant-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/logo/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
					
                        <tr>
							<td>
								<div class="text-center pad-all">
								<img src="<?php echo base_url(); ?>template/back/img/logo.png" class="img-sm img-circle" width="130" />
								</div>
							</td>
						</tr>	
						
						<!--logo-->
						<div class="form-group">
                        	<div class="row">
                                <div class="col-sm-6">
                                    <div class="text-center pad-all control-label">
                                        <label for="demo-is-inputlarge" class="col-sm-6 control-label">
                                        Upload Admin Logo</label>
                                    </div>
                                <div class="col-sm-6">
                                    <span class="pull-left btn btn-default btn-file">
                                    Choose your photo <input type="file" name="image"></span>
                                </div>
                                
                                </div>
                            <div class="text-center pad-all control-label">
                                <label for="demo-is-inputlarge" class="col-sm-6 control-label">Upload Admin Logo</label>
                                <div class="col-sm-6">
                                   <span class="pull-left btn btn-default btn-file">
                                        Choose your photo <input type="file" name="image">
                                    </span>
                                </div>
                            </div>
                        </div>
						</div>
                    </div>
                        
                        <div class="panel-footer" style="">
                        <div class="row">
                            <div class="text-center pad-all">
                                <button class="btn btn-success btn-labeled fa fa-user fa-lg" 
                                type="submit">Upload Logo</button>
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