<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Member</h3></center>
                    </div>
					<?php 
					$member = $this->db->get_where('member',array('member_id' => $id))->result_array();
					foreach($member as $row)
                        { 
                    ?>
                    <!--Form for Member-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/member/do_update/<?php echo $row['member_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="name" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['name'];?>">
                                </div>
                            </div>
							<!--Photo--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Photo</label>
                                <div class="col-sm-6">
                                   <span class="pull-left btn btn-default btn-file">
										Choose your photo <input type="file" name="image" value="<?php echo base_url(); ?>upload/member_image/member_<?php echo $row['member_id']; ?>.jpg">
									</span>
                                </div>
                            </div>
							<!--Address--------->
                            <div class="form-group">
                                <label for="demo-textarea-input" 
                                class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-6">
                                    <textarea placeholder="Address" rows="6" class="form-control" name="address" value="<?php echo $row['address']; ?>"></textarea>
                                </div>
                            </div>
							<!--Email--------->
                            <div class="form-group">
                                <label for="email_set" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="Email" name="email" 
                                    	class="form-control input-lg" 
                                        	id="email_set" value="<?php echo $row['email']; ?>">
                                </div>
                            </div>
							
							<!--Phone Number--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">Phone Number</label>
                                <div class="col-sm-6">
                                    <input type="number" id="demo-msk-phone" class="form-control" 
                                    placeholder="(999) 999-9999" name="phone_number" value="<?php echo $row['phone_number']; ?>">
                                </div>
                            </div>
							<!--Skype--------->
							<div class="form-group">
								<label class="col-sm-3 control-label" for="name">Skype</label>
								<div class="col-sm-6">
									<input type="text" placeholder="skype" name="skype" 
									class="form-control input-sm" id="skype" value="<?php echo $row['skype']?>">
								</div>
							</div>
							<!--Facebook--------->
							<div class="form-group">
								<label class="col-sm-3 control-label" for="name">Facebook</label>
								<div class="col-sm-6">
									<input type="text" placeholder="facebook link" name="facebook" 
									class="form-control input-sm" id="facebook" value="<?php echo $row['facebook']?>">
								</div>
							</div>
							<!--Google Plus--------->
							<div class="form-group">
								<label class="col-sm-3 control-label" for="name">Google Plus</label>
								<div class="col-sm-6">
									<input type="text" placeholder="google plus link" name="google_plus" 
									class="form-control input-sm" id="google_plus" value="<?php echo $row['google_plus']?>">
								</div>
							</div>
							<!--Member Type-->
							<div class="form-group">
								<label class="col-sm-3 control-label">Member Type</label>
								<div class="col-sm-6">
									<select data-placeholder="Choose a Member Type..." name="member_type" id="demo-chosen-select" tabindex="2">
										<option value="">Choose a Member Type...</option>
										<?php
											$member_type = $this->db->get('member_type')->result_array();
											foreach($member_type as $row1){
										?>
										<option value="<?php echo $row1['member_type_id']; ?>" <?php if($row1['member_type_id'] == $row['member_type']){ echo 'selected';} ?>><?php echo $row1['name'];?></option>
										<?php 
											}
										?>
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
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Member Type</button>
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