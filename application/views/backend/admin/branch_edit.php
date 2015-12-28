<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit branch</h3></center>
                    </div>
					<?php 
					$branch = $this->db->get_where('branch',array('branch_id' => $id))->result_array();
					foreach($branch as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/branch/do_update/<?php echo $row['branch_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="name" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['name'];?>">
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
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Phone Number</label>
                                <div class="col-sm-6">
                                    <input type="number" id="demo-msk-phone" class="form-control" name="phone_number"
                                    placeholder="(999) 999-9999" value="<?php echo $row['phone_number'];?>">
                                </div>
                            </div>
							
							  <!--Division--------->
                            <div class="form-group">
                                <label for="demo-textarea-input" class="col-sm-3 control-label">Division</label>
                                <div class="col-sm-6">
                                    <input placeholder="division" rows="6" class="form-control" name="division"  value="<?php echo $row['division'];?>">
                                </div>
                            </div>
                            
                            <!--Address--------->
                            <div class="form-group">
                                <label for="demo-textarea-input" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-6">
                                    <input placeholder="Address" rows="6" class="form-control" name="address" value="<?php echo $row['address'];?>">
                                </div>
                            </div>
						</div>
                            
                            <div class="panel-footer" style="">
								<div class="row">
									<div class="col-sm-9 col-sm-offset-3">
										<button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
										type="submit">Edit Branch</button>
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