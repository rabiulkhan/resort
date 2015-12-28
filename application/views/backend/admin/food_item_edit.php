<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Food Item</h3></center>
                    </div>
					<?php 
					$food_item = $this->db->get_where('food_item',array('food_item_id' => $id))->result_array();
					foreach($food_item as $row)
                        { 
                    ?>
                    <!--Form for Food Item-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/food_item/do_update/<?php echo $row['food_item_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
						
                            <!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="name" name="name" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['name'];?>">
                                </div>
                            </div>
							
							<!--Food Item Category-->
							<div class="form-group">
								<label class="col-sm-3 control-label">Food Item Category</label>
								<div class="col-sm-6">
									<select data-placeholder="Choose a Food Item Category..." name="food_item_category" id="demo-chosen-select" tabindex="2">
										<option value="">Choose a Food Item Category...</option>
										<?php
											$food_item_category = $this->db->get('food_item_category')->result_array();
											foreach($food_item_category as $row1){
										?>
										<option value="<?php echo $row1['food_item_category_id']; ?>" <?php if($row1['food_item_category_id'] == $row['food_item_category']){ echo 'selected';} ?>><?php echo $row1['name'];?></option>
										<?php 
											}
										?>
									</select>
								</div>
							</div>
							
							<!--Photo--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Photo</label>
                                <div class="col-sm-6">
                                   <span class="pull-left btn btn-default btn-file">
										Choose your photo <input type="file" name="image" value="<?php echo base_url(); ?>upload/food_item_image/food_item_<?php echo $row['food_item_id']; ?>.jpg">
									</span>
                                </div>
                            </div>
							
							<!--Description-->
							<div class="form-group">
								<label for="demo-textarea-input" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea placeholder="Description" rows="6" 
									class="form-control" name="description"> <?php echo $row['description'];?> </textarea>
								</div>
							</div>
							
							<!--Made By--------->
                            <div class="form-group">
                                <label for="email_set" class="col-sm-3 control-label">Made By</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Made By" name="made_by" 
                                    	class="form-control input-lg" 
                                        	id="email_set" value="<?php echo $row['made_by']; ?>">
                                </div>
                            </div>
							<!--Price--------->
							<div class="form-group">
								<label class="col-sm-3 control-label" for="name">Price</label>
								<div class="col-sm-6">
									<input type="text" placeholder="Price" name="price" 
									class="form-control input-sm" id="price" value="<?php echo $row['price']?>">
								</div>
							</div>
							<!--Availability--------->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Availability</h3>
								</div>
					
								<div class="panel-body">
									<div class="pad-ver">
									
										<label class="form-radio form-normal"><input type="radio" value="<?php echo $row['availability']?>" name="availability">Yes</label>
										<label class="form-radio form-normal"><input type="radio" value="<?php echo $row['availability']?>" name="availability">No</label>
										</div>
								</div>
							</div>
						</div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Food Item</button>
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