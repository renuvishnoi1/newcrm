
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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Task</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form action="<?php echo base_url(); ?>" method="POST">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                                <div class="row">                                            
                                                    <div class="col-md-12">

                                                     <fieldset class="form-group">
                                                        <label for="basicInput"> Subject</label>
                                                        <input type="text" class="form-control" id="basicInput" name="subject">
                                                        <span class="text-danger"><?php echo form_error('subject'); ?></span>
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"> Hourly Rate</label>
                                                        <input type="text" class="form-control" id="basicInput" name="contract_value">

                                                    </fieldset>
                                                    

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="basicInput">Start Date</label>
                                                    <fieldset class="form-group ">
                                                        <input type="date" name="startdate" class="form-control ">

                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="basicInput">End Date</label>
                                                    <fieldset class="form-group ">
                                                        <input type="date" class="form-control " name="datefinished">

                                                    </fieldset>
                                                </div> 
                                                <div class="col-md-6">
                                                    <label for="basicInput">Priority</label>
                                                    <fieldset class="form-group ">
                                                       <select class="form-control " name="priority">
                                                           <option value="1">Low</option>
                                                           <option value="2">Medium</option>
                                                           <option value="3">High </option>
                                                           <option value="4">Urgent</option>
                                                       </select>

                                                   </fieldset>
                                               </div> 
                                               <div class="col-md-6">
                                                <label for="basicInput">Repeat every</label>
                                                <fieldset class="form-group ">
                                                   <select class="form-control " name="recurring_type">
                                                    <option value=""></option>
                                                    <option value="1-week" >week</option>
                                                    <option value="2-week" >2 weeks</option>
                                                    <option value="1-month" >1 month</option>
                                                    <option value="2-month" >2 months</option>
                                                    <option value="3-month" >3 months</option>
                                                    <option value="6-month" >6 months</option>
                                                    <option value="1-year">1 year</option>
                                                    <option value="custom" >Custom</option>
                                                </select>

                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="basicInput">Related To</label>
                                            <fieldset class="form-group ">
                                             <select name="rel_type" class="form-control" id="rel_type" data-width="100%" >
                                               <option value=""></option>
                                               <option value="project">Project</option>
                                               <option value="invoice">Invoice </option>
                                               <option value="customer" >Customer </option>
                                               <option value="estimate">Estimete</option>
                                               <option value="contract" >Contract</option>
                                               <option value="ticket" >Ticket </option>
                                               <option value="expense">Expense </option>
                                               <option value="lead" >Lead</option>
                                               <option value="proposal">Proposal</option>
                                           </select>
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
