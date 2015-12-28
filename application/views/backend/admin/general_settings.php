<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">General Settings</h3>
                    </div>
					<?php 
							$val = $this->db->get_where('general_settings')->result_array();
							foreach($val as $row){
					   ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/general_settings/do_update" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--System Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">System Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="System Name" name="system_name" value="<?php echo $row['system_name'];?>"
                                    class="form-control input-sm" id="name">
                                </div>
                            </div>
                            
                            <!--System Email--------->
                            <div class="form-group">
                                <label for="email_set" class="col-sm-3 control-label">System Email</label>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="System Email" name="system_email" value="<?php echo $row['system_email'];?>"
                                    	class="form-control input-lg" 
                                        	id="email_set" >
                                </div>
                            </div>
                            
                           <!--System Title--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">System Title</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="system_title" value="<?php echo $row['system_title'];?>"
                                    placeholder="System Title">
                                </div>
                            </div>
							
							  <!--Currency--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Currency</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="currency" value="<?php echo $row['currency'];?>"
                                    placeholder="Currency">
                                </div>
                            </div>
                            
                             <!--Language-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Language</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Room Category..." name="language" id="chosen_select" tabindex="2">
                                    <option value="English">English</option>
									<option value="Bangali">Bangali</option>
                                    
                                </select>
                            </div>
                        </div>
						<!--Google Ad Client Id--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Google Ad Client Id</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="google_ad" value="<?php echo $row['google_ad'];?>"
                                    placeholder="Google Ad Client Id">
                                </div>
                            </div>
						<!--Google Box Ad Slot--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Google Box Ad Slot</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="google_box" value="<?php echo $row['google_box'];?>"
                                    placeholder="Google Box Ad Slot">
                                </div>
                            </div>
						<!--Google Wide Ad Slot--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Google Wide Ad Slot</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="google_wide" value="<?php echo $row['google_wide'];?>"
                                    placeholder="Google Wide Ad Slot">
                                </div>
                            </div>	
						<!--Meta Tag--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Meta Tag</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="meta_tags" value="<?php echo $row['meta_tags'];?>"
                                    placeholder="Meta Tag">
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