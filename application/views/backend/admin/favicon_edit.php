<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Favicon</h3></center>
                    </div>
					<?php 
					$favicon = $this->db->get_where('favicon',array('favicon_id' => $id))->result_array();
					foreach($favicon as $row)
                        { 
                    ?>
                    <!--Form for Member-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/favicon/do_update/<?php echo $row['favicon_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            
							<!--Logo--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Favicon</label>
                                <div class="col-sm-6">
                                   <span class="pull-left btn btn-default btn-file">
										Choose your photo <input type="file" name="image" value="<?php echo base_url(); ?>upload/favicon_image/favicon_<?php echo $row['favicon_id']; ?>.jpg">
									</span>
                                </div>
                            </div>
							
                           
						</div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Favicon</button>
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