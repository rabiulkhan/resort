<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        	<div class="row">
        	<div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">About Us Text</h3>
                </div>
                <!--Form for Accountant-->
            <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/about_us" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                <div class="panel-body"> 
                    <!--Meta Tag--------->
                    <div class="form-group">
                        <label for="demo-is-inputlarge" class="col-sm-2 control-label">About Us</label>
						<?php
							$main_text = $this->db->get_where('about',array('about_id' => '1'))->result_array();
							foreach($main_text as $row){
						?>
							<div class="col-sm-10">
								<textarea placeholder="Message" rows="8" class="form-control" name = "main_text"><?php echo $row['description'];?></textarea>
							</div>
						<?php
							}
						?>	
                    </div>
                    
                <!--Meta Tag--------->
                </div>
                    <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success" 
                                type="submit">save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
        <div class="row">
        	<div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Gallary</h3>
                </div>
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/gallary" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                
                    <div class="panel-body">
                        <!--Meta Tag--------->
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Gallary</label>
                            <div class="col-sm-6">
                                 <span class="pull-left btn btn-default btn-file">
                                    Upload your photo <input name="files[]" type="file" multiple />
                                </span>
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
                        
                        <div class="row">
							<?php
								$this->db->limit(6);
                                $image1 = $this->db->get('about_gallary')->result_array();
                                foreach($image1 as $row1){
                            ?>
                        	<div class="col-lg-2 col-sm-6">	
                                <div class="text-center pad-all">
                                    <img src="<?php echo base_url(); ?>upload/about_gallary_image/about_gallary_<?php echo $row1['about_gallary_id'];?>.jpg" class="img-responsive thumbnail"/>
                                    <a class="btn btn-danger btn-labeled fa fa-times-circle" onclick="return confirm('Are you sure?')" 
                                        href="<?php echo base_url();?>index.php/admin/about/delete1/<?php echo $row1['about_gallary_id']; ?>" data-original-title="Delete">Delete Image
                                </a> 
                                </div> 
                                 
                              </div>
							<?php } ?>
                          </div>
                       </div>
                </form>
                
                <!--===================================================-->
        </div>
        </div>
        </div>
        <div class="row">
       		<div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Exclusive Gallary</h3>
                </div>
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/exclusive_gallary" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                
                    <div class="panel-body">
                        <!--Meta Tag--------->
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Exclusive Gallary</label>
                            <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file">
                                    Upload your photo <input name="files[]" type="file" multiple />
                                </span>
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
                        <div class="row">
						<?php
							$this->db->limit(6);
							$image = $this->db->get('exclusive_gallary')->result_array();
								foreach($image as $row){
						?>
       						<div class="col-lg-2 col-sm-6">
								<div class="text-center pad-all">
									<img src="<?php echo base_url(); ?>upload/exclusive_gallary_image/exclusive_gallary_<?php echo $row['exclusive_gallary_id'];?>.jpg" class="img-responsive thumbnail"/>
									<a class="btn btn-danger btn-labeled fa fa-times-circle" onclick="return confirm('Are you sure?')" 
										href="<?php echo base_url();?>index.php/admin/about/delete/<?php echo $row['exclusive_gallary_id']; ?>" data-original-title="Delete">Delete Image
									</a>
								</div>
						
                        </div>
						<?php
							}
						?>
                        </div>
                   </div>
                </form>
                
                <!--===================================================-->
        </div>
        </div>
        </div>
		
		<div class="row">
        	<div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Counters</h3>
                </div>
                <!--Form for Accountant-->
            <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/counters" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                <div class="panel-body"> 
                    <!--Meta Tag--------->
					<?php
						$counter_text1 = $this->db->get_where('about',array('type' => 'counter_text1'))->row()->description;
						$counter_text2 = $this->db->get_where('about',array('type' => 'counter_text2'))->row()->description;
						$counter_text3 = $this->db->get_where('about',array('type' => 'counter_text3'))->row()->description;
						$counter_text4 = $this->db->get_where('about',array('type' => 'counter_text4'))->row()->description;
						$counter_number1 = $this->db->get_where('about',array('type' => 'counter_number1'))->row()->description;
						$counter_number2 = $this->db->get_where('about',array('type' => 'counter_number2'))->row()->description;
						$counter_number3 = $this->db->get_where('about',array('type' => 'counter_number3'))->row()->description;
						$counter_number4 = $this->db->get_where('about',array('type' => 'counter_number4'))->row()->description;
						
					?>
                    <div class="form-group">
                        <label for="demo-is-inputlarge" class="col-sm-3 control-label">
							<input type="text" placeholder="" class="form-control" name = "counter_text1" value="<?php echo $counter_text1;?>" >
						</label>
							<div class="col-sm-6">
								<input type="number" placeholder="" class="form-control" name = "counter_number1" value="<?php echo $counter_number1;?>" >
							</div>
							
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputlarge" class="col-sm-3 control-label">
							<input type="text" placeholder="" class="form-control" name = "counter_text2" value="<?php echo $counter_text2;?>" >
						</label>
							<div class="col-sm-6">
								<input type="number" placeholder="" class="form-control" name = "counter_number2" value="<?php echo $counter_number2;?>" >
							</div>
							
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputlarge" class="col-sm-3 control-label">
							<input type="text" placeholder="" class="form-control" name = "counter_text3" value="<?php echo $counter_text3;?>" >
						</label>
							<div class="col-sm-6">
								<input type="number" placeholder="" class="form-control" name = "counter_number3" value="<?php echo $counter_number3;?>" >
							</div>
							
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputlarge" class="col-sm-3 control-label">
							<input type="text" placeholder="" class="form-control" name = "counter_text4" value="<?php echo $counter_text4;?>" >
						</label>
							<div class="col-sm-6">
								<input type="number" placeholder="" class="form-control" name = "counter_number4" value="<?php echo $counter_number4;?>" >
							</div>
							
                    </div>
					
                    
                <!--Meta Tag--------->
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
			</div>
        </div>
		
		<div class="row">
       		<div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Background Image Settings</h3>
                </div>
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/about/add" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                
                    <div class="panel-body">
                        <!--Meta Tag--------->
						<tr>
							<td>
								<div class="text-center pad-all">
								<img src="<?php echo base_url(); ?>upload/parallax_image/bck.jpg" class="img-sm img-circle" width="130" />
								</div>
							</td>
						</tr>
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Upload Background Image</label>
                            <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file">
                                    Choose your photo <input type="file" name="image">
                                </span>
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
                
                <!--===================================================-->
        </div>
        </div>
        </div>
	</div>
</div>
    
				<!--===================================================-->
				<!--End page content-->

			<!--===================================================-->
			<!--END CONTENT CONTAINER-->
