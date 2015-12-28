<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Employee</h3></center>
                    </div>
					<?php 
					$employee = $this->db->get_where('employee',array('employee_id' => $id))->result_array();
					foreach($employee as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/employee/do_update/<?php echo $row['employee_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                                
							<!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Name" name="name" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['name'];?>">
                                </div>
                            </div>
							<!--Employee Type--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Employee Type</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Employee Type" name="employee_type" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['employee_type'];?>">
                                </div>
                            </div>
							<!--Email--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="Email" name="email" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['email'];?>">
                                </div>
                            </div>
                            
                         <!--Address--------->
							<div class="form-group">
								<label for="demo-textarea-input" 
								class="col-sm-3 control-label">Address</label>
								<div class="col-sm-6">
									<textarea placeholder="Description" rows="6" class="form-control" name="address" value=""><?php echo $row['address'];?></textarea>
								</div>
							</div>
                          <!--Others--------->
							<div class="form-group">
								<label for="demo-textarea-input" 
								class="col-sm-3 control-label">Others</label>
								<div class="col-sm-6">
									<textarea placeholder="Others" rows="6" class="form-control" name="others" value=""><?php echo $row['others'];?></textarea>
								</div>
							</div>
							<!--Facebook--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Facebook</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Facebook" name="facebook" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['facebook'];?>">
                                </div>
                            </div>
							<!--Twitter--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Twitter</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Twitter" name="twitter" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['twitter'];?>">
                                </div>
                            </div>
							<!--Google Plus--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Google Plus</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Google Plus" name="google_plus" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['google_plus'];?>">
                                </div>
                            </div>
							<!--Photo--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Photo</label>
                                <div class="col-sm-6">
                                   <span class="pull-left btn btn-default btn-file">
										Choose your photo <input type="file" name="image" value="<?php echo base_url(); ?>upload/employee_image/employee_<?php echo $row['employee_id']; ?>.jpg">
									</span>
                                </div>
                            </div>
							
                    </div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Employee</button>
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