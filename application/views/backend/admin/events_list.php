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
                                                onClick="modal_form('events_add','1')">
                            <i class="entypo-user-add"></i> Create Events</button>
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
										
										<th>Title</th>
										<th>Event Type</th>
										<th>Venue</th>
										<th class="min-w-td text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($events as $row)
										{ 
									?>
									<tr>
										<td><?php echo $row['title'];?></td>
										<td><?php echo $this->crud_model->get_type_name_by_id('event_type', $row['event_type']); ?></td>
										<td class="min-w-td"><?php echo $row['venue'];?></td>
										
										</td>
										<td class="min-w-td text-center">
											<a class="btn btn-sm btn-trans btn-icon btn-hover-success fa fa-pencil add-tooltip" href="#" 
												data-original-title="Edit" data-target="#demo-lg-modal" data-toggle="modal" onClick="modal_form('events_edit',<?php echo $row['events_id']; ?>)">
											</a>
											<a class="btn btn-sm btn-trans btn-icon btn-hover-danger fa fa-times add-tooltip" onclick="return confirm('Are you sure?');"
												href="<?php echo base_url();?>index.php/admin/events/delete/<?php echo $row['events_id']; ?>" data-original-title="Delete">
											</a>
											<a class="btn btn-sm btn-trans btn-icon btn-hover-warning fa fa-lock add-tooltip"
												href="#" data-original-title="View" data-target="#demo-lg-modal" data-toggle="modal" 
                                                        onClick="modal_form('events_view',<?php echo $row['events_id']; ?>)" >
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