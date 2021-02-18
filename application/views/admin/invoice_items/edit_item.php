 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                           <!--  <h5 class="content-header-title float-left pr-1 mb-0">Input</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Form Elements</a>
                                    </li>
                                    <li class="breadcrumb-item active">Input
                                    </li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Item</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('admin/invoice_items/update_item'); ?>" method="POST">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                        <div class="row">                                            
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Decription</label>
                                                    <input type="text" class="form-control" id="basicInput" name="description" value="<?php echo $items->description; ?>">
                                                     <input type="hidden" name="id" value="<?php echo $items->itemid; ?>">
                                                     <span class="text-danger"><?php echo form_error('description'); ?></span>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="helpInputTop"> Rate - USD (Base Currency)</label>
                                                    <input type="number" class="form-control" id="helpInputTop" name="rate" value="<?php echo $items->rate; ?>">
                                                </fieldset>

                                                <fieldset class="form-group">
                                                    <label for="helperText">Tax 1</label>
                                                    <select class="form-control" name="tax">
                                                        <option value=""></option>
                                                        <?php foreach ($tax as $key => $value) {
                                                            if($items->taxid == $value['id']){
                                                               $selected = 'selected';
                                                            }else{
                                                                $selected ='';
                                                            } 

                                                       ?>
                                                        <option value="<?php echo $value['id'] ?>" <?php echo $selected; ?>><?php echo $value['taxrate'] ?></option>
                                                        <?php 
                                                    } ?>
                                                    </select>                                                   
                                                </fieldset>
                                                 <fieldset class="form-group">
                                                    <label for="helperText">Unit</label>                                                   
                                                    <input type="text" class="form-control" id="basicInput" name="unit" value="<?php echo $items->unit; ?>">
                                                </fieldset>
                                            </div> 
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="disabledInput">Long Description</label>
                                                   <textarea class="form-control" id="horizontalTextarea" rows="5" name="long_description"><?php echo $items->long_description; ?></textarea>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="disabledInput">Tax 2</label>
                                                    <select class="form-control"  name="tax2">
                                                        <option value=""></option>
                                                        <?php foreach ($tax as $key => $value) {
                                                             if($items->taxid_2 == $value['id']){
                                                               $selected = 'selected';
                                                            }else{
                                                                $selected ='';
                                                            } 
                                                       ?>
                                                        <option value="<?php echo $value['id'] ?>" <?php echo $selected; ?>><?php echo $value['taxrate'] ?></option>
                                                        <?php 
                                                    } ?>
                                                    </select> 
                                                </fieldset>

                                               <fieldset class="form-group">
                                                    <label for="helperText">Group</label>
                                                  <select class="select2 form-control" name="group_id">
                                                    <?php foreach ($group as $key => $value) {
                                                        if($items->group_id == $value['id']){
                                                               $selected = 'selected';
                                                            }else{
                                                                $selected ='';
                                                            } 
                                                       ?>
                                                        <option value="<?php echo $value['id'] ?>" <?php echo $selected; ?>><?php echo $value['name'] ?></option>
                                                        <?php 
                                                    } ?>
                                                    </select>                                                   
                                                   
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12">
                                                <a href="<?php echo base_url('admin/invoice_items'); ?>" type="button" class="btn btn-light ">Back</a>

                                                 <button class="btn btn-info" type="submit">Save</button>
                                                       
                                            </div>

                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->

          
            
            </div>
        </div>
    </div>
    <!-- END: Content-->