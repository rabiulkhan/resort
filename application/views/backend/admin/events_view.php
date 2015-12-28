<!--CONTENT CONTAINER-->
<?php 
		$events   = $this->db->get_where('events',array('events_id' => $id))->result_array();
		foreach($events as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title">Profile of events</h4>
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
                    <th class="custom_td">Title</th>
                    <td class="custom_td"><?php echo $row['title']?></td>
                </tr>
                <tr>
					
                    <th class="custom_td">Event Type</th>
                    <td class="custom_td">
						
						<?php echo $this->crud_model->get_type_name_by_id('event_type', $row['event_type']); ?>
					</td>
                </tr>
				<tr>
                    <th class="custom_td">Event Picture</th>
                    <td class="custom_td"><img src="<?php echo base_url(); ?>upload/events_image/events_<?php echo $row['events_id'];?>.jpg"  class="img-md img-border img-circle" alt="Profile Picture"></td>
                </tr>
               <tr>
                    <th class="custom_td">Start Time</th>
                    <td class="custom_td"><?php echo $row['start_time']?></td>
                </tr>
				<tr>
                    <th class="custom_td">End Time</th>
                    <td class="custom_td"><?php echo $row['end_time']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Venue</th>
                    <td class="custom_td"><?php echo $row['venue']?></td>
                </tr>
				<tr>
                    <th class="custom_td">description</th>
                    <td class="custom_td"><?php echo $row['description']?></td>
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