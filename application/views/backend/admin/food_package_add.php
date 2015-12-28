<div id="content-container" style="padding-top: 15px !important;">
<!--Page content-->
<div id="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Please fill the form to create Food Package</h3></center>
                </div>
                <!--Form for Accountant-->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin/food_package/add" method="post" id="demo-bv-bsc-tabs" target="_top">
                    <div class="panel-body">
                        <!--Food Item-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Food Item</label>
                            <div class="col-sm-6">
                                <select data-placeholder="Choose a Food Item..." name="food_item" id="demo-chosen-select" tabindex="2">
                                    <option value="">Choose a Food Item...</option>
                                    <?php
                                        $food_item = $this->db->get('food_item')->result_array();
                                        foreach($food_item as $row){
                                    ?>
                                    <option value="<?php echo $row['food_item_id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
						<!--Quantity-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">Quantity</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Quantity" name="quantity" 
                                class="form-control input-sm" id="quantity">
                            </div>
                        </div>
						<!--Price-->
                        <div class="form-group">
                            <label for="demo-is-inputlarge" 
                            class="col-sm-3 control-label">Price</label>
                            <div class="col-sm-6">
                                <input type="text" id="demo-msk-phone" class="form-control" 
                                placeholder="price" name="price">
                            </div>
                        </div>
                        
                        
                        
                        </div>
                        
                        <div class="panel-footer" style="">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success btn-labeled fa fa-user fa-lg" 
                                type="submit">Create Food Package</button>
                            </div>
                        </div>
                    </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>




