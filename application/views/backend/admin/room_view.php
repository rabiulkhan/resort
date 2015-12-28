<!--CONTENT CONTAINER-->
<?php 
		$room   = $this->db->get_where('rooms',array('rooms_id' => $id))->result_array();
		foreach($room as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title">Profile of Room</h4>
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
                    <th class="custom_td">Branch</th>
                    <td class="custom_td"><?php echo $this->crud_model->get_type_name_by_id('branch', $row['branch']); ?></td>
                </tr>
				<tr>
                    <th class="custom_td">Floor</th>
                    <td class="custom_td"><?php echo $this->crud_model->get_type_name_by_id('floors', $row['floor']); ?></td>
                </tr>
				<tr>
                    <th class="custom_td">Room Type</th>
                    <td class="custom_td"><?php echo $row['room_type']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Rent Per Night</th>
                    <td class="custom_td"><?php echo $row['rent_per_night']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Description</th>
                    <td class="custom_td"><?php echo $row['description']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Room Size</th>
                    <td class="custom_td"><?php echo $row['room_size']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Adult</th>
                    <td class="custom_td"><?php echo $row['adult']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Children</th>
                    <td class="custom_td"><?php echo $row['children']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Bathroom</th>
                    <td class="custom_td"><?php echo $row['bathroom']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Packages</th>
                    <td class="custom_td"><?php echo $row['packages']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Room Picture</th>
                    <td class="custom_td"><img src="<?php echo base_url(); ?>upload/room_image/room_<?php echo $row['rooms_id'];?>.jpg"  class="img-md img-border img-circle" alt="Profile Picture"></td>
                </tr>
                <tr>
                    <th class="custom_td">Creation Date</th>
                    <td class="custom_td"><?php echo $row['creation_date']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Garage</th>
                    <td class="custom_td"><?php echo $row['garage']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Bed</th>
                    <td class="custom_td"><?php echo $row['bed']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Room Service</th>
                    <td class="custom_td"><?php echo $row['room_service']?></td>
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