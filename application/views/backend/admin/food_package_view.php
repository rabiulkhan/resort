<!--CONTENT CONTAINER-->
<?php 
		$food_package   = $this->db->get_where('food_package',array('food_package_id' => $id))->result_array();
		foreach($food_package as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title">Profile of Food Package</h4>
<hr style="margin-top: 10px !important;">
    <div class="text-center pad-all">
        
        <h4 class="text-lg text-overflow mar-no"></h4>
        <p class="text-sm">Digital Marketing Director</p>
        <div class="pad-ver btn-group">
            <a href="" class="btn btn-icon btn-hover-primary fa fa-facebook icon-lg"></a>
            <a href="" class="btn btn-icon btn-hover-info fa fa-twitter icon-lg"></a>
            <a href="" class="btn btn-icon btn-hover-danger fa fa-google-plus icon-lg"></a>
            <a href="#" class="btn btn-icon btn-hover-mint fa fa-envelope icon-lg"></a>
        </div>
        <hr>
    </div>


<div class="row">
    <div class="col-sm-12">
        <div class="panel-body">
		
            <table class="table table-striped" style="border-radius:3px;">
				<tr>
					
                    <th class="custom_td">Food Item</th>
                    <td class="custom_td">
						<?php echo $this->crud_model->get_type_name_by_id('food_item', $row['food_item']); ?>
					</td>
                </tr>
                <tr>
                    <th class="custom_td">Quantity</th>
                    <td class="custom_td"><?php echo $row['quantity']?></td>
                </tr>
                
               <tr>
                    <th class="custom_td">Price</th>
                    <td class="custom_td"><?php echo $row['price']?></td>
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