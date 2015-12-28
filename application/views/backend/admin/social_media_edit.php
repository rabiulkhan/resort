<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Social Media</h3></center>
                    </div>
					
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/social_media/do_update/" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Facebook--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Facebook</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="facebook" 
                                    class="form-control input-sm" id="name" >
                                </div>
                            </div>
							<!--Twitter--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Twitter</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="twitter" 
                                    class="form-control input-sm" id="name">
                                </div>
                            </div>
							<!--Google Plus--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Google Plus</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="google_plus" 
                                    class="form-control input-sm" id="name">
                                </div>
                            </div>
							<!--LinkedIn--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">LinkedIn</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="linkedin" 
                                    class="form-control input-sm" id="name">
                                </div>
                            </div>
                            
                         
                            
                            
                    </div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Social Media Info</button>
                                </div>
                            </div>
                        </div>
                        </div>  
                    </form>
					
                </div>
            </div>
        </div>
</div>
    
				<!--===================================================-->
				<!--End page content-->

			<!--===================================================-->
			<!--END CONTENT CONTAINER-->