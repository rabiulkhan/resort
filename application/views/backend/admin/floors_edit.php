<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit floors</h3></center>
                    </div>
					<?php 
					$floors = $this->db->get_where('floors',array('floors_id' => $id))->result_array();
					foreach($floors as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/floors/do_update/<?php echo $row['floors_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="name" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['name'];?>">
                                </div>
                            </div>
                            
                         
                            
                            <!--Branch-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Branch</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Branch..." name="branch" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Branch...</option>
                                    <?php
                                        $branch = $this->db->get('branch')->result_array();
                                        foreach($branch as $row1){
                                    ?>
                                    <option value="<?php echo $row1['branch_id']; ?>" <?php if($row1['branch_id'] == $row['branch']){ echo 'selected';} ?>><?php echo $row1['name'];?></option>
                                    <?php 
										}
									?>
                                </select>
                            </div>
                        </div>
                            
                           <!--Number--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">Number</label>
                                <div class="col-sm-6">
                                    <input type="number" id="demo-msk-phone" class="form-control" name="number"
                                    placeholder="(999) 999-9999" value="<?php echo $row['number'];?>">
                                </div>
                            </div>
							
							
                    </div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Floors</button>
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