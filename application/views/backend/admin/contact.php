<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact</h3>
                    </div>
					<?php 
							$val = $this->db->get_where('contact')->result_array();
							foreach($val as $row){
					   ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/contact/do_update" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Address--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Address</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="" name="address" value="<?php echo $row['address'];?>"
                                    class="form-control input-sm" id="name">
                                </div>
                            </div>
                            
                            <!--Email--------->
                            <div class="form-group">
                                <label for="email_set" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="" name="email" value="<?php echo $row['email'];?>"
                                    	class="form-control input-lg" 
                                        	id="email_set" >
                                </div>
                            </div>
                            
                           <!--Phone Number--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Phone Number</label>
                                <div class="col-sm-6">
                                    <input type="number" id="demo-msk-phone" class="form-control" name="phone_number" value="<?php echo $row['phone_number'];?>"
                                    placeholder="">
                                </div>
                            </div>	
							
						</div>
                            
                            <div class="panel-footer" style="">
								<div class="row">
									<div class="col-sm-9 col-sm-offset-3">
										<button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
										type="submit">Save</button>
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