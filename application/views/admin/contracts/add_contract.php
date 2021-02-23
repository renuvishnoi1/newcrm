
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
                            <div class="col-xl-6 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Contract</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('admin/save_contract'); ?>" method="POST">
                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                            <div class="row">                                            
                                                <div class="col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"> Customer</label>
                                                        <select class="select2 form-control" name="client">
                                                        <option value=""></option>
                                                        <?php foreach ($customer as $key => $value) {
                                                            ?>
                                                            <option value="<?php echo $value['userid']; ?>"><?php echo $value['company']; ?></option>
                                                            <?php 
                                                            } ?>
                                                       </select>
                                                        <span class="text-danger"><?php echo form_error('client'); ?></span>
                                                    </fieldset>
                                                     <fieldset class="form-group">
                                                        <label for="basicInput"> Subject</label>
                                                        <input type="text" class="form-control" id="basicInput" name="subject">
                                                        <span class="text-danger"><?php echo form_error('subject'); ?></span>
                                                    </fieldset>
                                                     <fieldset class="form-group">
                                                        <label for="basicInput"> Contract Value</label>
                                                        <input type="text" class="form-control" id="basicInput" name="contract_value">
                                                       
                                                    </fieldset>
                                                     <fieldset class="form-group">
                                                        <label for="basicInput"> Contract Type</label>
                                                       <select class="select2 form-control" name="contract_type">
                                                        <option value=""></option>
                                                        <?php foreach ($contract_type as $key => $value) {
                                                            ?>
                                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                                            <?php 
                                                        } ?>
                                                       </select>
                                                    </fieldset >

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="basicInput">Start Date</label>
                                                   <fieldset class="form-group ">
                                            <input type="date" name="datestart" class="form-control ">
                                           
                                        </fieldset>
                                                </div>
                                                 <div class="col-md-6">
                                                    <label for="basicInput">End Date</label>
                                                         <fieldset class="form-group ">
                                            <input type="date" class="form-control " name="dateend">
                                            
                                        </fieldset>
                                                </div>  
                                                <div class="col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"> Description</label>
                                                        <textarea class="form-control" name="description" id="basicTextarea" placeholder="Textarea" rows="3"></textarea>
                                                        <span class="text-danger"><?php echo form_error('description'); ?></span>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="<?php echo base_url('admin/contracts'); ?>" type="button" class="btn btn-light ">Back</a>

                                                    <button class="btn btn-info" type="submit">Save</button>
                                                    
                                                </div>

                                            </div>
                                        </form>
                                    </div>
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
