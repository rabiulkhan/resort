<!--CONTENT CONTAINER-->
<?php 
		$logo   = $this->db->get_where('logo',array('logo_id' => $id))->result_array();
		foreach($logo as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title">Profile of <?php echo $row['name'];?></h4>
<hr style="margin-top: 10px !important;">
    <div class="text-center pad-all">
        <div class="pad-ver">
            
        </div>
        <h4 class="text-lg text-overflow mar-no"></h4>
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
                    <th class="custom_td">Logo</th>
                    <td class="custom_td"><img src="<?php echo base_url(); ?>upload/logo_image/logo_<?php echo $row['logo_id'];?>.jpg"  class="img-md img-border img-circle" alt="Profile Picture"></td>
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