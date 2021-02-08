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
                                    <h4 class="card-title">New Lead Status</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                      <form action="<?php echo base_url('admin/leads/insert_status'); ?>" method="POST">
                                         <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Status Name</label>
                                                    <input type="text" name="name" class="form-control" id="basicInput" placeholder="Enter Lead Status Name">
                                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                                </fieldset>
                                                 <fieldset class="form-group">
                                                    <label for="basicInput">Color</label>
                                                    <input type="color" id="favcolor" name="color" value="#ff0000">
                                                    <span class="text-danger"><?php echo form_error('color'); ?></span>
                                                </fieldset>
                                                 <fieldset class="form-group">
                                                    <label for="basicInput">Order</label>
                                                    <input type="number" name="statusorder" class="form-control" id="basicInput" placeholder="">
                                                    <span class="text-danger"><?php echo form_error('statusorder'); ?></span>
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