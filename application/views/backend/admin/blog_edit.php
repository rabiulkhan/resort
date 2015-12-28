<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
			
                <div class="panel">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Edit News</h3></center>
                    </div>
					<?php 
					$news = $this->db->get_where('news',array('news_id' => $id))->result_array();
					foreach($news as $row)
                        { 
                    ?>
                    <!--Form for Accountant-->
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/blog/do_update/<?php echo $row['news_id'] ?>" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                        <div class="panel-body">
                            <!--HeadLine--------->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Headline</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="HeadLine" name="headline" 
                                    class="form-control input-sm" id="headline" value="<?php echo $row['headline'];?>">
                                </div>
                            </div>
							<!--News Picture-->
							<div class="form-group">
								<label for="demo-is-inputlarge" class="col-sm-3 control-label">News Picture</label>
								<div class="col-sm-6">
								   <span class="pull-left btn btn-default btn-file">
										Choose your photo <input type="file" name="image">
									</span>
								</div>
							</div>
							<!--Summery--------->
							<div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Summery</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Venue" name="summery" 
                                    class="form-control input-sm" id="summery" value="<?php echo $row['summery'];?>">
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
							<!--Tag--------->
							<div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Tag</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Tag" name="tag" 
                                    class="form-control input-sm" id="tag" value="<?php echo $row['tag'];?>">
                                </div>
                            </div>
							<!--Date--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">Date</label>
                                <div class="col-sm-6">
                                    <input type="date" id="demo-msk-phone" class="form-control" name="date"
                                    placeholder="Date" value="<?php echo $row['date'];?>">
                                </div>
                            </div>
							<!--Time--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" 
                                class="col-sm-3 control-label">Time</label>
                                <div class="col-sm-6">
                                    <input type="time" id="demo-msk-phone" class="form-control" name="time"
                                    placeholder="Time" value="<?php echo $row['time'];?>">
                                </div>
                            </div>
							<!--Writter--------->
							<div class="form-group">
                                <label class="col-sm-3 control-label" for="name">Writter</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Writter" name="writter" 
                                    class="form-control input-sm" id="tag" value="<?php echo $row['writter'];?>">
                                </div>
                            </div>
							<!--Status-->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Status</h3>
								</div>
								<div class="panel-body">
									<div class="btn-group">
										<label class="form-radio form-icon btn btn-labeled btn-purple active"><input type="radio" name="publication" value="published" <?php if($row['publication']=='published') echo 'checked';?> >Published</label>
										<label class="form-radio form-icon btn btn-labeled btn-purple"><input type="radio" name="publication" value="unpublished" <?php if($row['publication']=='unpublished') echo 'checked';?> >Unpublished</label>
									</div>
								</div>
							</div>
							
							
							
                    </div>
                            
                            <div class="panel-footer" style="">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                    type="submit">Edit News</button>
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