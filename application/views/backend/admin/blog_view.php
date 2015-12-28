<!--CONTENT CONTAINER-->
<?php 
		$news   = $this->db->get_where('news',array('news_id' => $id))->result_array();
		foreach($news as $row)
        { 
?>
<div id="content-container" style="padding-top:0px !important;">
<h4 class="modal-title"><?php echo $row['headline']?></h4>
<hr style="margin-top: 10px !important;">
    <div class="text-center pad-all">
       <div class="pad-ver">
            <img src="<?php echo base_url(); ?>upload/blog_image/blog_<?php echo $row['news_id'];?>.jpg"  class="img-md img-border img-circle" alt="Profile Picture">
        </div> 
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
                    <th class="custom_td">Summery</th>
                    <td class="custom_td"><?php echo $row['summery']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Description</th>
                    <td class="custom_td"><?php echo $row['description']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Tag</th>
                    <td class="custom_td"><?php echo $row['tag']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Date</th>
                    <td class="custom_td"><?php echo $row['date']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Time</th>
                    <td class="custom_td"><?php echo $row['time']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Writter</th>
                    <td class="custom_td"><?php echo $row['writter']?></td>
                </tr>
				<tr>
                    <th class="custom_td">Status</th>
                    <td class="custom_td"><?php echo $row['publication']?></td>
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