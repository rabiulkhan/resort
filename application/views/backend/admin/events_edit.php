<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit Event</h3></center>
                    </div>
					<?php 
					$events = $this->db->get_where('events',array('events_id' => $id))->result_array();
					foreach($events as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/events/do_update/<?php echo $row['events_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--Name--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Title</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Title" name="title" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['title'];?>">
                                </div>
                            </div>
                            
                         
                            
                            <!--Event Type-->
							<div class="form-group">
								<label class="col-sm-3 control-label">Event Type</label>
								<div class="col-sm-6">
									<select data-placeholder="Choose a Event Type..." name="event_type" id="demo-chosen-select" tabindex="2">
										<option value="">Choose a Event Type...</option>
										<?php
											$event_type = $this->db->get('event_type')->result_array();
											foreach($event_type as $row1){
										?>
										<option value="<?php echo $row1['event_type_id']; ?>" <?php if($row1['event_type_id'] == $row['event_type']){ echo 'selected';} ?>><?php echo $row1['name'];?></option>
										<?php 
											}
										?>
									</select>
								</div>
							 </div>
                            
							<!--Room Picture-->
							<div class="form-group">
								<label for="demo-is-inputlarge" class="col-sm-3 control-label">Event Picture</label>
								<div class="col-sm-6">
								   <span class="pull-left btn btn-default btn-file">
										Choose your photo <input type="file" name="image">
									</span>
								</div>
							</div>
							
                           <!--Start Time--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">Start Time</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="start_time"
                                    placeholder="Start Time" value="<?php echo $row['start_time'];?>">
                                </div>
                            </div>
							
							<!--End Time--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">End Time</label>
                                <div class="col-sm-6">
                                    <input type="text" id="demo-msk-phone" class="form-control" name="end_time"
                                    placeholder="END Time" value="<?php echo $row['end_time'];?>">
                                </div>
                            </div>
							<!--Venue--------->
							<div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Venue</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Venue" name="venue" 
                                    class="form-control input-sm" id="name" value="<?php echo $row['venue'];?>">
                                </div>
                            </div>
							<!--Description--------->
							<div class="form-group">
								<label for="demo-textarea-input" 
								class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea placeholder="Description" rows="6" class="form-control" name="description" ><?php echo $row['description'];?></textarea>
								</div>
							</div>
							
							
                    </div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit Event</button>
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