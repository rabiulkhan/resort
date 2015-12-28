<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create Employee</h3></center>
                </div>
                <!--Form for Accountant-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/employee/add" method="post" id="demo-bv-bsc-tabs" enctype="multipart/form-data" target="_top">
                    <div class="panel-body">
                        
						<!--Name-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Name" name="name" 
                                class="form-control input-sm" id="quantity">
                            </div>
                        </div>
						<!--Employee Type-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Employee Type</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Employee Type" name="employee_type" 
                                class="form-control input-sm" id="quantity">
                            </div>
                        </div>
						<!--Email-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Email</label>
                            <div class="col-sm-6">
                                <input type="email" placeholder="Email" name="email" 
                                class="form-control input-sm" id="quantity">
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
						<!--Others--------->
                        <div class="form-group">
                            <label for="demo-textarea-input" 
                            class="col-sm-3 control-label">Others</label>
                            <div class="col-sm-6">
                                <textarea placeholder="Others" rows="6" class="form-control" name="others"></textarea>
                            </div>
                        </div>
						<!--Facebook-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Facebook</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Facebook" name="facebook" 
                                class="form-control input-sm" id="quantity">
                            </div>
                        </div>
						<!--Twitter-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Twitter</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Twitter" name="twitter" 
                                class="form-control input-sm" id="quantity">
                            </div>
                        </div>
						
						<!--Google Plus-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Google Plus</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Google Plus" name="google_plus" 
                                class="form-control input-sm" id="quantity">
                            </div>
                        </div>
                        <!--Employee Picture-->
						<div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Employee Photo</label>
                            <div class="col-sm-6">
                               <span class="pull-left btn btn-default btn-file">
                                    Choose your photo <input type="file" name="image">
                                </span>
                            </div>
                        </div>
                        
                        
                        </div>
                        
                        <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success btn-labeled fa fa-user fa-lg" 
                                type="submit">Create Employee</button>
                            </div>
                        </div>
                    </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>




