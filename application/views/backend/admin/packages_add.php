<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create Packages</h3></center>
                </div>
                <!--Form for Accountant-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/packages/add" method="post" id="demo-bv-bsc-tabs" target="_top">
                    <div class="panel-body">
                        
						<!--Name-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Name" name="name" 
                                class="form-control input-sm" id="quantity">
                            </div>
                        </div>
						<!--Description--------->
                        <div class="form-group">
                            <label for="demo-textarea-input" 
                            class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea placeholder="Description" rows="6" class="form-control" name="description"></textarea>
                            </div>
                        </div>
						<!--Cost-->
                        <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Cost</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="cost" name="cost">
                            </div>
                        </div>
                        
                        
                        
                        </div>
                        
                        <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success btn-labeled fa fa-user fa-lg" 
                                type="submit">Create Package</button>
                            </div>
                        </div>
                    </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>




