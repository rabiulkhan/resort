<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Package</h3></center>
                    </div>
					<?php 
					$packages = $this->db->get_where('packages',array('packages_id' => $id))->result_array();
					foreach($packages as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/packages/do_update/<?php echo $row['packages_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                                
							<!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Name" name="quantity" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['name'];?>">
                                </div>
                            </div>
                            
                         <!--Description--------->
							<div class="form-group">
								<label for="demo-textarea-input" 
								class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea placeholder="Description" rows="6" class="form-control" name="description" value=""><?php echo $row['description'];?></textarea>
								</div>
							</div>
                            
                        
                            
                           <!--Cost--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">Cost</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="cost"
                                    placeholder="price" value="<?php echo $row['cost'];?>">
                                </div>
                            </div>
							
							
                    </div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Food Package</button>
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