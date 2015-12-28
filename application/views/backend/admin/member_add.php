<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create Member Type</h3></center>
                </div>
                <!--Form for Accountant-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/member/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
                        <!--Name--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="name" name="name" 
                                class="form-control input-sm" id="name">
                            </div>
                        </div>
						<!--Room Picture-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Member Picture</label>
                            <div class="col-sm-6">
                               <span class="pull-left btn btn-default btn-file">
                                    Choose your photo <input type="file" name="image">
                                </span>
                            </div>
                        </div>
						<!--Address--------->
                        <div class="form-group">
                            <label for="demo-textarea-input" 
                            class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-6">
                                <textarea placeholder="Address" rows="6" class="form-control" name="address"></textarea>
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
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Phone Number</label>
                            <div class="col-sm-6">
                                <input type="number" id="demo-msk-phone" class="form-control" 
                                placeholder="(999) 999-9999" name="phone_number">
                            </div>
                        </div>
						<!--Skype--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Skype</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Skype" name="skype" 
                                class="form-control input-sm" id="skype">
                            </div>
                        </div>
						<!--Facebook--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Facebook</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="facebook" name="facebook" 
                                class="form-control input-sm" id="facebook">
                            </div>
                        </div>
						<!--Google Plus--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Google Plus</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Google Plus" name="google_plus" 
                                class="form-control input-sm" id="google_plus">
                            </div>
                        </div>
						<!--Member Type--------->
						<div class="form-group">
                            <label class="col-sm-3 control-label">Member Type</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Member Type..." name="member_type" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Member Type...</option>
                                    <?php
                                        $member_type = $this->db->get('member_type')->result_array();
                                        foreach($member_type as $row){
                                    ?>
                                    <option value="<?php echo $row['member_type_id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
						<!--Creation date-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Creation Date</label>
                            <div class="col-sm-6">
                                <div id="demo-dp-component">
                                    <div class="input-group date">
                                        <input type="text" class="form-control" name="creation_date">
                                        <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                                    </div>
                                    <small class="text-muted">Auto close on select</small>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success btn-labeled fa fa-user fa-lg" 
                                type="submit">Creat Member Type</button>
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