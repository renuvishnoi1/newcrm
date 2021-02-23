
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
                            <div class="card">
                                    <div class="card-header">
                                        <h4><?php echo $contracts->subject; ?></h4>
                                        <a href="">view Contracts</a>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                          <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#contract-fill" role="tab" aria-controls="home-fill" aria-selected="true">
                                                    Contract
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#attachment-fill" role="tab" aria-controls="profile-fill" aria-selected="false">
                                                    Attachment
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="messages-tab-fill" data-toggle="tab" href="#comment-fill" role="tab" aria-controls="messages-fill" aria-selected="false">
                                                    Comments
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="renewable-tab-fill" data-toggle="tab" href="#settings-fill" role="tab" aria-controls="settings-fill" aria-selected="false">
                                                    Contract Renewable History
                                                </a>
                                            </li>
                                             <li class="nav-item">
                                                <a class="nav-link" id="renewable-tab-fill" data-toggle="tab" href="#tasks-fill" role="tab" aria-controls="settings-fill" aria-selected="false">
                                                    Tasks
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content pt-1">
                                            <div class="tab-pane active" id="contract-fill" role="tabpanel" aria-labelledby="home-tab-fill">
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
                                            <div class="tab-pane" id="attachment-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                                                <p>
                                                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                                                    gummi
                                                    bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love caramels
                                                    powder.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="comment-fill" role="tabpanel" aria-labelledby="messages-tab-fill">
                                                <p>
                                                    Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake powder
                                                    pudding pastry.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="renewable-tab-fill" role="tabpanel" aria-labelledby="settings-tab-fill">
                                                <p>
                                                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                                                    gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                                    caramels powder.
                                                </p>
                                            </div>
                                             <div class="tab-pane" id="tasks-tab-fill" role="tabpanel" aria-labelledby="settings-tab-fill">
                                                <p>
                                                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                                                    gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                                    caramels powder.
                                                </p>
                                            </div>
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
