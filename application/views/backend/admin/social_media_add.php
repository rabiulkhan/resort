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
				
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/social_media/do_update/" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
                       
					   <?php 
							$val = $this->db->get_where('social_media')->result_array();
							foreach($val as $row){
					   ?>
                       
                        <div class="form-group">
                            <label for="email_set" class="col-sm-3 control-label"><?php echo $row['media'];?></label>
                            <div class="col-sm-6">
                                <input type="text" value="<?php echo $row['link'];?>" name="social_<?php echo $row['social_media_id'];?>" 
                                    class="form-control input-lg" 
                                        id="email_set" >
                            </div>					
                        </div>
                        
						<?php
							}
						?>
                        <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Save</button>
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