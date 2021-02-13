 <!-- BEGIN: Content-->
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <!-- <h5 class="content-header-title float-left pr-1 mb-0">Input</h5> -->
                           <!--  <div class="breadcrumb-wrapper col-12">
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
                                    <h4 class="card-title">Add new lead</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                      <form action="<?php echo base_url('admin/save_lead'); ?>" method="POST">
                                       <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                       <div class="row">
                                        <div class="col-md-4">
                                            <fieldset class="form-group">
                                                <label for="country">Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="">Select status</option>
                                                    <?php foreach ($status as $value) {
                                                      
                                                        ?>
                                                        <?php 
                                                            # code...
                                                    } ?>
                                                </select>
                                                <span class="text-danger"><?php echo form_error('status'); ?></span>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                           <fieldset class="form-group">
                                            <label for="country">Source</label>
                                            <select name="source" class="form-control">
                                                <option value="">select Source</option>
                                                <?php foreach ($source as $value) {
                                                    ?>
                                                    <option value="<?php echo $value->id;  ?>"> <?php echo $value->name; ?></option>
                                                    <?php 
                                                            # code...
                                                } ?>
                                            </select>
                                            <span class="text-danger"><?php echo form_error('source'); ?></span>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                       <fieldset class="form-group">
                                        <label for="country">Assigned</label>
                                        <select name="assigned" class="form-control">
                                            <option value="">select Assigned</option>
                                            <?php foreach ($assign as $value) {
                                                ?>

                                                <option value="<?php echo $value->staffid;  ?>"> <?php echo $value->firstname." ".$value->lastname; ?></option>
                                                <?php 

                                            } ?>
                                        </select>
                                       
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                   <fieldset class="form-group">
                                    <label for="tag"><i class="bx bxs-purchase-tag"></i>Tag</label>
                                    <input type="text" name="tag" class="form-control" id="basicInput" >                                   
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="basicInput">Name</label>
                                    <input type="text" name="name" class="form-control" id="basicInput" >
                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="title">Position</label>
                                    <input type="text" name="title" class="form-control" id="basicInput" >
                                   
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="basicInput" >
                                   
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" class="form-control" id="basicInput" >
                                    
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="phonenumber">Phone</label>
                                    <input type="text" name="phonenumber" class="form-control" id="basicInput" >
                                    
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="lead_value">Lead value</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">$</span>
                                        </div>
                                        <input type="number" class="form-control"  aria-describedby="basic-addon1">
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="phonenumber">Company</label>
                                    <input type="text" name="company" class="form-control" id="basicInput" >
                                </fieldset>

                            </div>
                            <div class="col-md-6">
                              <fieldset class="form-group">
                                <label for="basicInput">Address</label>
                                <input type="text" name="address" class="form-control" id="basicInput" >
                                
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" id="basicInput" >
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control" id="basicInput" >
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="country">Country</label>
                                <select name="country" class="form-control">
                                    <option value="">select Country</option>
                                    <?php foreach ($country as $value) {

                                       
                                        ?>
                                        <option value="<?php echo $value['country_id'];  ?>"> <?php echo $value['short_name']; ?></option>
                                        <?php 
                                    } ?>
                                </select>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="zip">Zip Code</label>
                                <input type="text" name="zip" class="form-control" id="basicInput" >
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="zip">Default Language</label>
                                <select name="default_language" id="default_language" class="form-control selectpicker" >
                      
                        <?php foreach($this->app->get_available_languages() as $availableLanguage){
                           $selected = '';
                          
                           ?>
                        <option value="<?php echo $availableLanguage; ?>" <?php echo $selected; ?>><?php echo ucfirst($availableLanguage); ?></option>
                        <?php } ?>
                     </select> 
                            </fieldset>

                        </div>
                        <div class="col-md-12">
                           <fieldset class="form-group">
                            <label for="zip">Description</label>                                                   
                            <textarea id="w3review" class="form-control" name="description" >
                            </textarea>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                       <fieldset class="form-group" id="lastcontact">
                        <label for="lastcontact">Date Contacted</label>
                        <input type="datetime-local" name="lastcontact" class="form-control" id="basicInput" > 
                    </fieldset>
                </div>
                <div class="col-md-3">
                   <fieldset class="form-group">
                    <label for="public">Public</label>
                    <input type="hidden" name="is_public" value="0">
                    <input type="checkbox" name="is_public" value="1">
                </fieldset>
            </div>
                 <div class="col-md-3">
                   <fieldset class="form-group">
                     <label for="public">Contacted Today</label>
                    <input type="checkbox" name="contacted_today" id="checkbox" value="1" />  
                </fieldset>
               
            </div>
            <div class="col-md-12">
                <fieldset class="form-group">
                    <a href="<?php echo base_url('admin/leads'); ?>" class="btn btn-danger">Back</a>
                    <button class="btn btn-primary " type="submit">Submit</button>
                </fieldset>
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
