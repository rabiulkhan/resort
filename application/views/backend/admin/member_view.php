<!--CONTENT CONTAINER-->
<?php 
		$member   = $this->db->get_where('member',array('member_id' => $id))->result_array();
		foreach($member as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title">Profile of <?php echo $row['name'];?></h4>
<hr style="margin-top: 10px !important;">
    <div class="text-center pad-all">
        <div class="pad-ver">
            <img src="<?php echo base_url(); ?>upload/member_image/member_<?php echo $row['member_id'];?>.jpg"  class="img-md img-border img-circle" alt="Profile Picture">
        </div>
        <h4 class="text-lg text-overflow mar-no"><?php echo $row['name']?></h4>
        <p class="text-sm">Digital Marketing Director</p>
        <div class="pad-ver btn-group">
            <a href="<?php echo $row['facebook'];?>" target="_blank" class="btn btn-icon btn-hover-primary fa fa-facebook icon-lg"></a>
            <a href="<?php echo $row['skype'];?>" target="_blank" class="btn btn-icon btn-hover-info fa fa-twitter icon-lg"></a>
            <a href="<?php echo $row['google_plus'];?>" target="_blank" class="btn btn-icon btn-hover-danger fa fa-google-plus icon-lg"></a>
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
                    <th class="custom_td">Address</th>
                    <td class="custom_td"><?php echo $row['address']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Email</th>
                    <td class="custom_td"><?php echo $row['email']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Phone Number</th>
                    <td class="custom_td"><?php echo $row['phone_number']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Skype</th>
                    <td class="custom_td"><?php echo $row['skype']?></td>
                </tr>
                
                <tr>
                    <th class="custom_td">facebook</th>
                    <td class="custom_td"><?php echo $row['facebook']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Google Plus</th>
                    <td class="custom_td"><?php echo $row['google_plus']?></td>
                </tr>
                
                
				<tr>
                    <th class="custom_td">Member Type</th>
                    <td class="custom_td"><?php echo $row['member_type']?></td>
                </tr>
                <tr>
                    <th class="custom_td">Creation Date</th>
                    <td class="custom_td"><?php echo $row['creation_date']?></td>
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