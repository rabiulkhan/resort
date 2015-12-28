<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create Food Item</h3></center>
                </div>
                <!--Form for Accountant-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/food_item/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    <div class="panel-body">
					
                        <!--Name--------->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="name" name="name" 
                                class="form-control input-sm" id="name">
                            </div>
                        </div>
						
						<!--Food Item Category--------->
						<div class="form-group">
                            <label class="col-sm-3 control-label">Food Item Category</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Food Item Category..." name="food_item_category" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Food Item Category...</option>
                                    <?php
                                        $food_item_category = $this->db->get('food_item_category')->result_array();
                                        foreach($food_item_category as $row){
                                    ?>
                                    <option value="<?php echo $row['food_item_category_id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
						
						<!--Food Picture-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Food Photo</label>
                            <div class="col-sm-6">
                               <span class="pull-left btn btn-default btn-file">
                                    Choose your photo <input type="file" name="image">
                                </span>
                            </div>
                        </div>
						
						<!--Description-->
						<div class="form-group">
                            <label for="demo-textarea-input" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea placeholder="Description" rows="6" class="form-control" name="description"></textarea>
                            </div>
                        </div>
						
						<!--Made By--------->
                        <div class="form-group">
                            <label for="email_set" class="col-sm-3 control-label">Made By</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Made By" name="made_by" 
                                    class="form-control input-lg" 
                                        id="email_set" >
                            </div>
                        </div>
						
						<!--Price--------->
                        <div class="form-group">
                            <label for="email_set" class="col-sm-3 control-label">Price</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Price" name="price" 
                                    class="form-control input-lg" 
                                        id="email_set" >
                            </div>
                        </div>
						
						<!--Availability--------->
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Availability</h3>
								</div>
					
								<div class="panel-body">
									<div class="pad-ver">
										<label class="form-radio form-normal"><input type="radio" value="yes" name="availability">Yes</label>
										<label class="form-radio form-normal"><input type="radio" value="no" name="availability">No</label>
										</div>
								</div>
							</div>
						
                    </div>
                        
                        <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success btn-labeled fa fa-user fa-lg" 
                                type="submit">Creat Food Item</button>
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