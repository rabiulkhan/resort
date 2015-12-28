<!--CONTENT CONTAINER-->
<?php 
		$booking   = $this->db->get_where('booking',array('booking_id' => $id))->result_array();
		foreach($booking as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title">Profile of Branch</h4>
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
                    <th class="custom_td">Room</th>
                    <td class="custom_td"><?php echo $row['room_type']?></td>
                </tr>
               <tr>
                    <th class="custom_td">Start Date</th>
                    <td class="custom_td"><?php echo $row['start_date']?></td>
                </tr>
				<tr>
                    <th class="custom_td">End Date</th>
                    <td class="custom_td"><?php echo $row['end_date']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Current State</th>
                    <td class="custom_td"><?php echo $row['current_state']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Cost</th>
                    <td class="custom_td"><?php echo $row['cost']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Payment</th>
                    <td class="custom_td"><?php echo $row['payment_state']?></td>
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