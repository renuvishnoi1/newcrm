
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
                      
                            <div class="col-md-5 left-column">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Contract</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form action="<?php echo base_url('admin/update_contract'); ?>" method="POST">
                                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                                <div class="row">                                            
                                                    <div class="col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput"> Customer</label>
                                                            <select class="select2 form-control" name="client">
                                                                <option value=""></option>
                                                                <?php foreach ($customer as $key => $value) {
                                                                 if($value['userid'] == $contracts->client){
                                                                    $selected = 'selected';
                                                                }else{
                                                                    $selected ='';
                                                                }
                                                                ?>
                                                                ?>
                                                                <option value="<?php echo $value['userid']; ?>" <?php echo $selected; ?>><?php echo $value['company']; ?></option>
                                                                <?php 
                                                            } ?>
                                                        </select>
                                                        <span class="text-danger"><?php echo form_error('client'); ?></span>
                                                    </fieldset>
                                                     <input type="hidden" class="form-control" id="basicInput" name="id" value="<?php echo $contracts->id; ?>">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"> Subject</label>
                                                        <input type="text" class="form-control" id="basicInput" name="subject" value="<?php echo $contracts->subject; ?>">
                                                        <span class="text-danger"><?php echo form_error('subject'); ?></span>
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"> Contract Value</label>
                                                        <input type="text" class="form-control" id="basicInput" name="contract_value" value="<?php echo $contracts->contract_value; ?>">

                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"> Contract Type</label>
                                                        <select class="select2 form-control" name="contract_type">
                                                            <option value=""></option>
                                                            <?php foreach ($contract_type as $key => $value) {
                                                                if($value['id'] == $contracts->contract_type){
                                                                    $selected = 'selected';
                                                                }else{
                                                                    $selected ='';
                                                                }
                                                                ?>
                                                                <option value="<?php echo $value['id']; ?>" <?php echo $selected; ?>><?php echo $value['name']; ?></option>
                                                                <?php 
                                                            } ?>
                                                        </select>
                                                    </fieldset >

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="basicInput">Start Date</label>
                                                    <fieldset class="form-group ">
                                                        <input type="date" name="datestart" class="form-control " value="<?php echo $contracts->datestart; ?>">

                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="basicInput">End Date</label>
                                                    <fieldset class="form-group ">
                                                        <input type="date" class="form-control " name="dateend" value="<?php echo $contracts->dateend; ?>">

                                                    </fieldset>
                                                </div>  
                                                <div class="col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"> Description</label>
                                                        <textarea class="form-control" name="description" id="basicTextarea" placeholder="Textarea" rows="3"><?php echo $contracts->description; ?></textarea>
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
                        <div class="col-md-7 right-column">
                            <section id="nav-justified">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo $contracts->subject; ?></h4>
                                        <a href="">view Contracts</a>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                          <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active"  id="home-tab-justified" data-toggle="tab" href="#contract-just" role="tab" aria-controls="home-just" aria-selected="true">
                                                    Contract
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#attachment-just" role="tab" aria-controls="profile-just" aria-selected="false">
                                                    Attachment
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#comment-just" role="tab" aria-controls="messages-just" aria-selected="false">
                                                    Comments
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="renewable-tab-justified" data-toggle="tab" href="#renewable-just" role="tab" aria-controls="settings-just" aria-selected="false">
                                                    Contract Renewable History
                                                </a>
                                            </li>
                                             <li class="nav-item">
                                                <a class="nav-link" id="renewable-tab-justified" data-toggle="tab" href="#tasks-just" role="tab" aria-controls="settings-just" aria-selected="false">
                                                    Tasks
                                                </a>
                                            </li>
                                             <li class="nav-item">
                                                <a class="nav-link" id="notes-tab-justified" data-toggle="tab" href="#notes-just" role="tab" aria-controls="settings-just" aria-selected="false">
                                                    Notes
                                                </a>
                                            </li>
                                             <li class="nav-item">
                                                <a class="nav-link" id="templates-tab-justified"  data-toggle="tab" href="#templates-just" role="tab" aria-controls="settings-just" aria-selected="false">
                                                    Templates
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content pt-1">
                                            <div class="tab-pane active" id="contract-just" role="tabpanel" aria-labelledby="home-tab-justified">
                                                <p>
                                                    Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake powder
                                                    pudding pastry.
                                                </p>
                                                <p>
                                                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                                                    gummi
                                                    bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love caramels
                                                    powder.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="attachment-just" role="tabpanel" aria-labelledby="profile-tab-justified">
                                                <p>
                                                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                                                    gummi
                                                    bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love caramels
                                                    powder.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="comment-just" role="tabpanel" aria-labelledby="messages-tab-justified">
                                                <p>
                                                    Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake powder
                                                    pudding pastry.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="renewable-just" role="tabpanel" aria-labelledby="settings-tab-justified">
                                                <p>
                                                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                                                    gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                                    caramels powder.
                                                </p>
                                            </div>
                                             <div class="tab-pane" id="tasks-just" role="tabpanel" aria-labelledby="settings-tab-justified">
                                                <section id="basic-datatable">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title"></h4>
                                                  
                                                   <a href="javascript:void(0);" class="btn btn-success btn-sm" data-type="add" data-toggle="modal" data-target="#modalUserAddEdit"><i class="plus"></i> Add</a>
                                                </div>
                                                 <hr>
                                                <div class="card-content">
                                                    <div class="card-body card-dashboard">
                                                        <!-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to
                                                            use it with your own tables is to call the construction function: $().DataTable();.</p> -->
                                                        <div class="table-responsive">
                                                            <table class="table zero-configuration" >
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Status</th>
                                                                        <th>Start Date</th>
                                                                       <th>Due Date</th>
                                                                       <th>Assigned to</th>
                                                                       <th>Tags</th>
                                                                       <th>Priority</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                   
                                                                    <tr>
                                                                        <td></td>
                                                                         <td></td>
                                                                         <td></td>
                                                                         <td></td>
                                                                         <td></td>
                                                                         <td></td>
                                                                         <td></td>
                                                                         
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                            </div>
                                             <div class="tab-pane" id="notes-just" role="tabpanel" aria-labelledby="settings-tab-justified">
                                                <p>
                                                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                                                    gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                                    caramels powder.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="templates-just" role="tabpanel" aria-labelledby="settings-tab-justified">                                              
                                          <section id="basic-datatable">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title"></h4>
                                                    <a href="javascript:void(0);" class="btn btn-info btn-sm" data-type="add" data-toggle="modal" data-target="#modalUserAddEdit1"><i class="plus"></i> Add</a>
                                                </div>
                                                 <hr>
                                                <div class="card-content">
                                                    <div class="card-body card-dashboard">
                                                        <!-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to
                                                            use it with your own tables is to call the construction function: $().DataTable();.</p> -->
                                                        <div class="table-responsive">
                                                            <table class="table zero-configuration" id="product_list">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Template Title</th>
                                                                        <th>Options</th>
                                                                       
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($template as $key => $value) { ?>
                                                                    <tr>
                                                                        <td><?php echo $value['name']; ?></td>
                                                                         <td></td>
                                                                    </tr>
                                                                     <?php 
                                                                       
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                               
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div></div></section>
                        </div>


                    

                </div>
            </section>
            <!-- Basic Inputs end -->



        </div>
    </div>
</div>
<!-- END: Content-->

 
<!-- Modal Add and Edit Form -->
<div class="modal fade" id="modalUserAddEdit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><span id="hlabel">Add New</span> Member</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="statusMsg"></div>
                <form role="form">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name" >
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" >
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="gender1" name="gender" class="custom-control-input" value="Male" checked="checked" >
                            <label class="custom-control-label" for="gender1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="gender2" name="gender" class="custom-control-input" value="Female" >
                            <label class="custom-control-label" for="gender2">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country" >
                    </div>
                    <input type="hidden" class="form-control" name="id" id="id"/>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="userSubmit">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#saveEmpForm').submit('click',function(){
        var empName = $('#name').val();
        var empAge = $('#age').val();
        var empDesignation = $('#designation').val();
        var empSkills = $('#skills').val();
        var empAddress = $('#address').val();
        $.ajax({
            type : "POST",
            url  : "emp/save",
            dataType : "JSON",
            data : {name:empName, age:empAge, designation:empDesignation, skills:empSkills, address:empAddress},
            success: function(data){
                $('#name').val("");
                $('#skills').val("");
                $('#address').val("");
                $('#addEmpModal').modal('hide');
                listEmployee();
            }
        });
        return false;
    });
</script>