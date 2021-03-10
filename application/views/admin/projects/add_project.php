
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
                  <form action="<?php echo base_url('admin/save_project'); ?>" method="POST">
                   <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                   <div class="row">
                    <div class="col-md-12">
                      <fieldset class="form-group">
                        <label for="basicInput">Project Name</label>
                        <input type="text" name="name" class="form-control" id="basicInput" placeholder="Enter Project Name">
                        <span class="text-danger"><?php echo form_error('name'); ?></span>
                      </fieldset>                                               
                      <fieldset class="form-group">
                        <label for="basicInput">Customer</label>
                        <select class="select2 form-control" name="customer">
                          <option></option>
                          <?php foreach ($clients as $key => $value) {
                           ?><option value="<?php  echo $value['userid']; ?>"><?php echo $value['company']; ?>></option><?php 
                         } ?>
                       </select>
                       <span class="text-danger"><?php echo form_error('customer'); ?></span>
                     </fieldset>
                     <fieldset class="form-group">                                                   
                      <input type="checkbox" checked id="progress_from_tasks" />
                      <label for="basicInput">Calculate progress through tasks</label>
                    </fieldset>
                    <fieldset class="form-group">
                      <label>Progress <span id="slider_value">0</span></label>   
                      <br />                     
                      <input type="range" name="progress" id="slider" value="0" min="1" max="100" step="1" disabled="" class="form-control" /> 
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                 <div class="col-md-6">
                  <fieldset class="form-group">
                    <label>* Billing Type</label>
                    <select id="billing_type" name="billing_type" class="form-control" >
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
                   <select class="form-control" name="status">
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
            <fieldset class="form-group">
             <label for="basicInput">Members</label>
             <select class="select2 form-control" name="member"  multiple="multiple">
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
            <input type="date" name="start_date" class="form-control">
          </fieldset>                                               
        </div>
        <div class="col-md-6"> 
          <fieldset class="form-group">
           <label for="basicInput">Deadline</label>
           <input type="date" name="deadline" class="form-control">
         </fieldset>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6">
        <fieldset class="form-group">
          <label>Tags</label>
          <select class="form-control" name="tag_id">
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
        <textarea name="deditor1" ></textarea>
      </fieldset>
    </div>
  </div>
  <div class="row">
   <div class="col-md-12">
     <fieldset class="form-group">
      <input type="checkbox" name="send_mail">
      <label for="basicInput">Send project created email</label>
    </fieldset>
  </div>
</div>

</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-8 col-12">
  <div class="card">
   <div class="card-header">
    <h4 class="card-title">Project settings</h4>
  </div>
  <hr>
  <div class="card-content">
    <div class="card-body pb-0 mx-25" id="project-settings-area">
      <div class="row">
        <div class="col-md-12">
         <fieldset class="form-group">
          <label for="">Visible Tabs</label>
          <select class="select2 form-control" multiple="multiple" id="available_features">
            <option value="project_tasks">Task</option>
            <option value="project_timesheets" >Timesheets</option>
            <option value="project_milestones">Milestones</option>
            <option value="project_files">Files</option>
            <option value="project_discussion">Discussion</option>
            <option value="project_gants" >Gants</option>
            <option value="project_tickets">Tickets</option>
            <option value="project_contracts">Contracts</option>
            <hr>
            <optgroup label="Sales">
              <option value="project_invoices">Invoices</option>
              <option value="project_estimates">Estimates</option>
              <option value="project_expenses" >Expenses</option>
              <option value="project_credit_notes">Credit Notes</option>
              <option value="project_subscription">Subscription</option>
            </optgroup>
            <option value="project_notes">Notes</option>
            <option value="project_activity">Activity</option>
          </select>

        </fieldset>
        <div >
          <fieldset class="form-group">                                                   
            <input type="checkbox" id="view_tasks" name="settings[view_tasks]" checked/>
            <label for="basicInput">Allow customer to view tasks</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[create_tasks]" id="create_tasks" checked/>
            <label for="basicInput">Allow customer to create tasks</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[edit_tasks]" id="edit_tasks" checked/>
            <label for="basicInput">Allow customer to edit tasks (only tasks created from contact)</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_task_comments]" id="view_task_comments" checked/>
            <label for="basicInput">Allow customer to comment on project tasks</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[comment_on_tasks]" id="comment_on_tasks" checked/>
            <label for="basicInput">Allow customer to view task comments</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_task_attachments]" id="view_task_attachments" checked/>
            <label for="basicInput">Allow customer to view task attachments</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_task_checklist_items]" id="view_task_checklist_items" checked/>
            <label for="basicInput">Allow customer to view task checklist items</label>
          </fieldset> 
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[upload_on_tasks]" id="upload_on_tasks" checked/>
            <label for="basicInput">Allow customer to upload attachments on tasks</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_task_total_logged_time]" id="view_task_total_logged_time" checked/>
            <label for="basicInput">Allow customer to view task total logged time</label>
          </fieldset> 
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_finance_overview]" id="view_finance_overview" checked/>
            <label for="basicInput">Allow customer to view finance overview</label>
          </fieldset> 
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[upload_files]" id="upload_files" checked/>
            <label for="basicInput">Allow customer to upload files</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[open_discussions]" id="open_discussions" checked/>
            <label for="basicInput">Allow customer to open discussions</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_milestones]" id="view_milestones" checked/>
            <label for="basicInput">Allow customer to view milestones</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_gantt]" id="view_gantt" checked/>
            <label for="basicInput">Allow customer to view Gantt</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_timesheets]" id="view_timesheets" checked/>
            <label for="basicInput">Allow customer to view timesheets</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_activity_log]" id="view_activity_log" checked/>
            <label for="basicInput">Allow customer to view activity log</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[view_team_members]" id="view_team_members" checked/>
            <label for="basicInput">Allow customer to view team members</label>
          </fieldset>
          <hr>
          <fieldset class="form-group">                                                   
            <input type="checkbox" name="settings[hide_tasks_on_main_tasks_table]" id="hide_tasks_on_main_tasks_table" />
            <label for="basicInput">Hide project tasks on main tasks table (admin area)</label>
          </fieldset>

        </div>
      </div>
    </div>


  </div>

</div>
</div>
</div>
</div>
</section>

</div>
<div class="card-footer border-top p-1">
 <div class="btn-bottom-toolbar btn-toolbar-container-out text-right">
  <button class="btn btn-info only-save customer-form-submiter">Save </button>

</div>            
</div></form>
</div>
</div>
<!-- END: Content-->


<!-- BEGIN: Page JS-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script> -->
<!--  <script  src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

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


      // checkbox select unselect code
      $('#project-settings-area input').on('change',function(){

  //var id = $(this).attr('id') ;
   //alert(id);
   if($(this).attr('id') == 'view_tasks' && $(this).prop('checked') == false){

    $('#create_tasks').prop('checked',false).prop('disabled',true);
    $('#edit_tasks').prop('checked',false).prop('disabled',true);
    $('#view_task_comments').prop('checked',false).prop('disabled',true);
    $('#comment_on_tasks').prop('checked',false).prop('disabled',true);
    $('#view_task_attachments').prop('checked',false).prop('disabled',true);
    $('#view_task_checklist_items').prop('checked',false).prop('disabled',true);
    $('#upload_on_tasks').prop('checked',false).prop('disabled',true);
    $('#view_task_total_logged_time').prop('checked',false).prop('disabled',true);
  } else if($(this).attr('id') == 'view_tasks' && $(this).prop('checked') == true){
    $('#create_tasks').prop('disabled',false);
    $('#edit_tasks').prop('disabled',false);
    $('#view_task_comments').prop('disabled',false);
    $('#comment_on_tasks').prop('disabled',false);
    $('#view_task_attachments').prop('disabled',false);
    $('#view_task_checklist_items').prop('disabled',false);
    $('#upload_on_tasks').prop('disabled',false);
    $('#view_task_total_logged_time').prop('disabled',false);
  }
});
      $('#available_features').on('change',function(){
        $("#available_features option").each(function(){
         if($(this).data('linked-customer-option') && !$(this).is(':selected')) {
          var opts = $(this).data('linked-customer-option').split(',');
          for(var i = 0; i<opts.length;i++) {
            var project_option = $('#'+opts[i]);
            project_option.prop('checked',false);
            if(opts[i] == 'view_tasks') {
              project_option.trigger('change');
            }
          }
        }
      });
      });
        //on checkbox unselect disable progress
        $(function() {

          $('#progress_from_tasks').click(function() {
            if(!$('#progress_from_tasks').is(':checked')){
          //alert('unchecked');
          $('#slider').removeAttr('disabled');
        }else if ($('#progress_from_tasks').is(':checked')) {
          $('#slider').attr('disabled', 'disabled');
        }
      });
        });
      // progress slider code
      $(document).on('input', '#slider', function() {
        $('#slider_value').html( $(this).val()+'%' );

      });


    </script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js">

    </script>
    <script>

      CKEDITOR.replace( 'deditor1' );
    </script>
