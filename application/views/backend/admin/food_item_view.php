<!--CONTENT CONTAINER-->
<?php 
		$food_item   = $this->db->get_where('food_item',array('food_item_id' => $id))->result_array();
		foreach($food_item as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title">Profile of <?php echo $row['name'];?></h4>
<hr style="margin-top: 10px !important;">
    <div class="text-center pad-all">
        <div class="pad-ver">
            <img src="<?php echo base_url(); ?>upload/food_item_image/food_item_<?php echo $row['food_item_id'];?>.jpg"  class="img-md img-border img-circle" alt="Profile Picture">
        </div>
        <h4 class="text-lg text-overflow mar-no"><?php echo $row['name']?></h4>
        <p class="text-sm">Digital Marketing Director</p>
        <div class="pad-ver btn-group">
            <a href="#" class="btn btn-icon btn-hover-primary fa fa-facebook icon-lg"></a>
            <a href="#" class="btn btn-icon btn-hover-info fa fa-twitter icon-lg"></a>
            <a href="#" class="btn btn-icon btn-hover-danger fa fa-google-plus icon-lg"></a>
            <a href="#" class="btn btn-icon btn-hover-mint fa fa-envelope icon-lg"></a>
        </div>
        <hr>
    </div>


<div class="row">
    <div class="col-sm-12">
        <div class="panel-body">
		
            <table class="table table-striped" style="border-radius:3px;">
                <tr>
                    <th class="custom_td">Name</th>
                    <td class="custom_td"><?php echo $row['name']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Food Item Category</th>
                    <td class="custom_td"><?php echo $this->crud_model->get_type_name_by_id('food_item_category', $row['food_item_category']);?></td>
                </tr>
				<tr>
                    <th class="custom_td">Description</th>
                    <td class="custom_td"><?php echo $row['description']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Made By</th>
                    <td class="custom_td"><?php echo $row['made_by']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Price</th>
                    <td class="custom_td"><?php echo $row['price']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Availability</th>
                    <td class="custom_td"><?php echo $row['availability']?></td>
                </tr>
                
                
            </table>
			
          </div>
		  
            <!--===================================================-->
            <!--End Hover Rows-->

        </div>
    </div>					
</div>					
</div>
</div>
<?php 
				}
			?>
            
<style>
.custom_td{
border-left: 1px solid #ddd;
border-right: 1px solid #ddd;
border-bottom: 1px solid #ddd;
}
</style>