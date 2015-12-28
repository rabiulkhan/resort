<!--CONTENT CONTAINER-->
<div id="content-container">
    <!--Page Title-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Tables</h1>

        <!--Searchbox-->
        <div class="searchbox">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search..">
                <span class="input-group-btn">
                    <button class="text-muted" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    </div>
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <button class="btn btn-dark" 
                                style="border-radius:3px !important;margin-top:10px !important;" 
                                        class="btn btn-warning" 
                                            data-target="#demo-lg-modal" data-toggle="modal" 
                                                onClick="modal_form('blog_add','1')">
                            <i class="entypo-user-add"></i> Create News</button>
                        </div>
                        <h3 class="panel-title">With variety of components</h3>
                    </div>
        
                    <!-- Striped Table -->
                    <!--===================================================-->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-vcenter">
								<thead>
									<tr>
										<th class="min-w-td">HeadLine</th>
										<th class="min-w-td">Date</th>
										<th class="min-w-td">Time</th>
										<th class="min-w-td">Writter</th>
										<th class="min-w-td">Status</th>
										
										<th class="min-w-td text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($blog as $row)
										{ 
									?>
									<tr>
										<td><?php echo $row['headline'];?></td>
										<td><?php echo $row['date'];?></td>
										<td><?php echo $row['time'];?></td>
										<td><?php echo $row['writter'];?></td>
										<td><?php echo $row['publication'];?></td>
										
										<td class="min-w-td text-center">
											<a class="btn btn-sm btn-trans btn-icon btn-hover-success fa fa-pencil add-tooltip" href="#" 
												data-original-title="Edit" data-target="#demo-lg-modal" data-toggle="modal" onClick="modal_form('blog_edit',<?php echo $row['news_id']; ?>)">
											</a>
											<a class="btn btn-sm btn-trans btn-icon btn-hover-danger fa fa-times add-tooltip" onclick="return confirm('Are you sure?');"
												href="<?php echo base_url();?>index.php/admin/blog/delete/<?php echo $row['news_id']; ?>" data-original-title="Delete">
											</a>
											<a class="btn btn-sm btn-trans btn-icon btn-hover-warning fa fa-lock add-tooltip"
												href="#" data-original-title="View" data-target="#demo-lg-modal" data-toggle="modal" 
                                                        onClick="modal_form('blog_view',<?php echo $row['news_id']; ?>)" >
											</a>
										</td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
                        </div>
                    </div>
                    <!--===================================================-->
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->