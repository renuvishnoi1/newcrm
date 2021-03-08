
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
                                                    <select class="select2 form-control">
                                                     <?php foreach ($clients as $key => $value) {
                                                           ?><option value="<?php  echo $value['userid']; ?>"><?php echo $value['company']; ?>></option><?php 
                                                       } ?>
                                                       </select>
                                                </fieldset>
                                                 <fieldset class="form-group">                                                   
                                                    <input type="checkbox" id="yourBox" />
                                                   <label for="basicInput">Calculate progress through tasks</label>
                                                </fieldset>
                                                <fieldset class="form-group">
                             <input id="ex1" data-slider-id='ex1Slider' type="range" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="14"/>                
                           </fieldset>
                                            </div>
                                        </div>
                                         <div class="row">
                                                 <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>* Billing Type</label>
                                                 <select id="billing_type" class="form-control" >
                                                  <option value=""></option>
                                                  <option value="1">Fixed Rate</option>
                                                  <option value="2">Project Hours</option>
                                                  <option value="3">Task Hours</option>                                                 
                                                </select>
                                                </fieldset>                                               
                                            </div>
                                            <div class="col-md-6"> 
                                              <fieldset class="form-group" id="fixed">
                                                   <label for="basicInput">Status</label>
                                                   <select class="form-control">
                                                     <option value="0"></option>
                                                     <option value="1">In Progress</option>
                                                     <option value="2">On Hold</option>
                                                     <option value="3">Cancelled</option>
                                                     <option value="4">Finished</option>
                                                   </select>
                                                </fieldset>
                                              </div>
                                            </div>
                                            <div class="row">
                                               <div class="col-md-12" id="project_cost">
                                                 <fieldset class="form-group" >
                                                    <label for="basicInput">Total Rate</label>
                                                    <input type="text" name="project_cost" class="form-control" id="project_cost" placeholder="Enter Lead Status Name">
                                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                                </fieldset>
                                               </div> 
                                               <div class="col-md-12" id="project_rate_per_hour">
                                                 <fieldset class="form-group" >
                                                    <label for="basicInput">Rate Per Hour</label>
                                                    <input type="text" name="project_rate_per_hour" class="form-control" id="project_rate_per_hour" placeholder="Enter Lead Status Name">
                                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                                </fieldset>
                                               </div>
                                            </div>
                                            <div class="row">
                                                 <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>Estimated Hours</label>
                                               <input type="number" name="estimated_hours" class="form-control">
                                                </fieldset>                                               
                                            </div>
                                            <div class="col-md-6"> 
                                              <fieldset class="form-group" id="fixed">
                                                   <label for="basicInput">Members</label>
                                                   <select class="select2 form-control"  multiple="multiple">
                                                     <option value="0"></option>
                                                      <?php foreach ($member as $key => $value) {
                                                           ?><option value="<?php  echo $value['staffid']; ?>"><?php echo $value['firstname']." ".$value['lastname']; ?>></option><?php 
                                                       } ?>
                                                   </select>
                                                </fieldset>
                                              </div>
                                            </div>
                                             <div class="row">
                                                 <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>Start Date</label>
                                               <input type="date" name="estimated_hours" class="form-control">
                                                </fieldset>                                               
                                            </div>
                                            <div class="col-md-6"> 
                                              <fieldset class="form-group" id="fixed">
                                                   <label for="basicInput">Deadline</label>
                                                   <input type="date" name="estimated_hours" class="form-control">
                                                </fieldset>
                                              </div>
                                            </div>
                                             <div class="row">
                                                 <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>Tags</label>
                                                    <select class="form-control">
                                                    <option></option>
                                               <?php foreach ($tags as $key => $value) {
                                                           ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?>></option><?php 
                                                       } ?>
                                              </select>
                                                </fieldset>                                               
                                            </div>
                                           
                                            </div>
                                             <div class="row">
                                               <div class="col-md-12">
                                                 <fieldset class="form-group">
                                                    <label for="basicInput">Description</label>
                                                    <textarea name="editor1"></textarea>
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
                               <div class="card-header">
                                    <h4 class="card-title">Project settings</h4>
                                </div>
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


    <!-- BEGIN: Page JS-->
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
  <!-- <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script> -->
    <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
    <script type="text/javascript">


// Without JQuery
// var slider = new Slider('#ex1', {
//   formatter: function(value) {
//     return 'Current value: ' + value;
//   }
// });
      $(document).ready(function (){

     $("#project_cost").hide();
       $("#project_rate_per_hour").hide();
       $("#billing_type").on("change",function(){

        var selected_option = $(this).val();
        if(selected_option == ''){
            $("#project_cost").hide();
            $("#project_rate_per_hour").hide();
        }
        else if (selected_option == 1) {
            $('#project_cost').show();
            $("#project_rate_per_hour").hide();
        }
        else if (selected_option == 2) {
           $('#project_rate_per_hour').show();
           $("#project_cost").hide();
       }else if (selected_option == 3) {
           $('#project_rate_per_hour').hide();
           $("#project_cost").hide();
       }
   });
    
        });

                </script>
                 <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js">
                   
                 </script>
                 <script>

                        CKEDITOR.replace( 'editor1' );
                </script>