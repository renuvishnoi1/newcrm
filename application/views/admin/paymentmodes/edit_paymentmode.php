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
                                    <h4 class="card-title">Add New Payment Mode</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                      <form action="<?php echo base_url('admin/update_paymentmode'); ?>" method="POST">
                                         <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Payment Mode Name</label>

                                                    <input type="text" name="name" class="form-control" id="basicInput" value="<?php echo $paymentmode->name; ?>">
                                                    <input type="hidden" name="id" value="<?php echo $paymentmode->id; ?>">
                                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                                </fieldset>
                                                 <fieldset class="form-group">
                                                    <label for="basicInput">Bank Accounts / Description</label>
                                                    <textarea id="w3review" class="form-control" name="description"><?php echo $paymentmode->description; ?></textarea>
                                                </fieldset>
                                                <hr>
                                                <fieldset class="form-group">
                                                
                                                <input type="hidden" name="active" value="0">
                                                <input type="checkbox" name="active" id="tag_1" value="1" <?php echo ($paymentmode->active==1 ? 'checked' : '');?>>
                                           
                                                   <label for="checkboxsmall">Active</label>
                                               </fieldset>
                                               <fieldset class="form-group">                                             
                                                <input type="hidden" name="show_on_pdf" value="0">
                                                <input type="checkbox" name="show_on_pdf" id="tag_1" value="1" <?php echo ($paymentmode->show_on_pdf==1 ? 'checked' : '');?>>
                                           
                                                   <label for="checkboxsmall">Show Bank Accounts / Description on Invoice PDF</label>
                                               </fieldset>
                                               <fieldset class="form-group">
                                                
                                                <input type="hidden" name="selected_by_default" value="0">
                                                <input type="checkbox" name="selected_by_default" id="tag_1" value="1" <?php echo ($paymentmode->selected_by_default==1 ? 'checked' : '');?>>
                                            
                                                   <label for="checkboxsmall">Selected by default on invoice</label>
                                               </fieldset>
                                               <hr>
                                               <fieldset class="form-group">
                                                
                                                <input type="hidden" name="invoices_only" value="0">
                                                <input type="checkbox" name="invoices_only" id="tag_1" value="1" <?php echo ($paymentmode->invoices_only==1 ? 'checked' : '');?>>
                                           
                                                   <label for="checkboxsmall">Invoices Only</label>
                                               </fieldset>
                                               <fieldset class="form-group">

                                                <input type="hidden" name="expenses_only" value="0">
                                                <input type="checkbox" name="expenses_only" id="tag_1" value="1" <?php echo ($paymentmode->expenses_only==1 ? 'checked' : '');?>>
                                           
                                                   <label for="checkboxsmall">Expenses Only</label>
                                               </fieldset>
                                                <fieldset class="form-group">
                                                    <button class="btn btn-primary mr-1 mb-1" type="submit">Submit</button>                                                    
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                              
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