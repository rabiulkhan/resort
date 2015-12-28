<!--CONTENT CONTAINER-->
<div id="content-container" style="padding-top: 15px !important;">
	<!--Page content-->
    <div id="page-content">
        <div class="row">
        	<div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">General Settings</h3>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/ui_home/do_update" method="post" id="demo-bv-bsc-tabs" target="_top"  enctype="multipart/form-data">
                    
                        <div class="panel-body">
                            <!--Meta Tag--------->
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">ROOMS & SUITS</label>
                                <div class="col-sm-6">
                                    <input class="demo-sw-checkstate" type="checkbox" name="manu_status_1" value="ok" <?php if($manu_status_1 == 'ok')echo 'checked'; ?> >
                                    <span class="demo-sw-checkstate-field label label-info"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Meeting & Events</label>
                                <div class="col-sm-6">
                                    <input class="demo-sw-checkstate" type="checkbox"  name="manu_status_2" value="ok" <?php if($manu_status_2 == 'ok')echo 'checked'; ?> >
                                    <span class="demo-sw-checkstate-field label label-info"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Resturent & Cafe</label>
                                <div class="col-sm-6">
                                    <input class="demo-sw-checkstate" type="checkbox"  name="manu_status_3" value="ok" <?php if($manu_status_3 == 'ok')echo 'checked'; ?> >
                                    <span class="demo-sw-checkstate-field label label-info"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="demo-is-inputlarge" class="col-sm-3 control-label">Facility</label>
                                <div class="col-sm-6">
                                    <input class="demo-sw-checkstate" type="checkbox"  name="manu_status_4" value="ok" <?php if($manu_status_4 == 'ok')echo 'checked'; ?> >
                                    <span class="demo-sw-checkstate-field label label-info"></span>
                                </div>
                            </div> 
                            
                            <div class="panel-footer" style="">
                                <div class="row">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button class="btn btn-success btn-labeled fa fa-wrench fa-lg" 
                                        type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                            
                       </div>
                    </form>
                    
                    <!--===================================================-->
            </div>
        </div>
        </div>
	</div>
</div>
    
				<!--===================================================-->
				<!--End page content-->

			<!--===================================================-->
			<!--END CONTENT CONTAINER-->
            
<script>


$(document).ready(function() {
	
	var changeCheckbox = document.getElementsByClassName('demo-sw-checkstate');
	var changeField = document.getElementsByClassName('demo-sw-checkstate-field');
	var result = '';
	var i = 0;
	//$('.demo-sw-checkstate').each(function() {
		new Switchery(changeCheckbox[i])
		changeField[i].innerHTML = changeCheckbox[i].checked;
		changeCheckbox[i].onchange = function() {
			if(changeCheckbox[i].checked == true){
				result = 'Show';
			} else {
				result = 'Hide';
			}
			changeField[i].innerHTML = result;
		};
		
		new Switchery(changeCheckbox[1])
		changeField[1].innerHTML = changeCheckbox[1].checked;
		changeCheckbox[1].onchange = function() {
			if(changeCheckbox[1].checked == true){
				result = 'Show';
			} else {
				result = 'Hide';
			}
			changeField[1].innerHTML = result;
		};
		
		
		new Switchery(changeCheckbox[2])
		changeField[2].innerHTML = changeCheckbox[2].checked;
		changeCheckbox[2].onchange = function() {
			if(changeCheckbox[2].checked == true){
				result = 'Show';
			} else {
				result = 'Hide';
			}
			changeField[2].innerHTML = result;
		};
		
		
		new Switchery(changeCheckbox[3])
		changeField[3].innerHTML = changeCheckbox[3].checked;
		changeCheckbox[3].onchange = function() {
			if(changeCheckbox[3].checked == true){
				result = 'Show';
			} else {
				result = 'Hide';
			}
			changeField[3].innerHTML = result;
		};
		
		//i++;
	//});
});

</script>