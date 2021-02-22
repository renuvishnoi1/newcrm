<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/pages/app-invoice.css">
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- app invoice View Page -->
                <section class="invoice-edit-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <div class="col-xl-8 col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add New Project</h4>
                                </div>
                                <div class="card-content">
                                     
                                    <div class="card-body">
                                      <form action="<?php echo base_url('admin/leads/insert_status'); ?>" method="POST">
                                         <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Project Name</label>
                                                    <input type="text" name="name" class="form-control" id="basicInput" placeholder="Enter Lead Status Name">
                                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                                </fieldset>
                                               
                                                 <fieldset class="form-group">
                                                    <label for="basicInput">Customer</label>
                                                    <input type="number" name="statusorder" class="form-control" id="basicInput" placeholder="">
                                                    <span class="text-danger"><?php echo form_error('statusorder'); ?></span>
                                                </fieldset>
                                                 <fieldset class="form-group">                                                   
                                                    <input type="checkbox" id="yourBox" />
                                                   <label for="basicInput">Calculate progress through tasks</label>
                                                </fieldset>
                                                 <fieldset class="form-group">                                                   
                                                     <input type="text" id="yourText" disabled />                                                  
                                                </fieldset>
                                            </div>
                                            <div class="col-md-4">
                                                <fieldset class="form-group">
                                                    <label>* Billing Type</label>
                                                 <select id="dropdown" class="form-control" >
                                                  <option value=""></option>
                                                  <option value="text">Fixed Rate</option>
                                                  <option value="text">Project Hours</option>
                                                  <option value="text">Task Hours</option>
                                                  <option value="text">5</option>
                                                </select>
                                               
                                                </fieldset>
                                                <fieldset class="form-group" id="fixed">                                                   
                                                   
                                                   <label for="basicInput">Total Rate</label>
                                                    <input type="text" class="form-control" name="" id="total_rate" />
                                                </fieldset>
                                            </div>
                                         
                                        </div>
                                        </form>
                                    </div>
                              
                                  
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-4 col-md-8 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body pb-0 mx-25">
                                      <!--  -->
                                      
                                       
                                        
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <!-- invoice action  -->
                         
                          <!-- invoice view page -->
                     
                        <!-- invoice action  -->
               
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <!-- END: Page Vendor JS-->

 

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/pages/app-invoice.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $( "#dropdown" ).on( "change", function() {
              var val = $('#dropdown option:selected').text();
              alert(val);
              $('#fixed').hide();
              if(val == 'Fixed Rate'){   
                $('#fixed').show();
                //$("#dropdown").hide('slow');
              }
            });
                </script>