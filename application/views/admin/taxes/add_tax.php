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
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Tax</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('admin/insert_tax'); ?>" method="POST">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                        <div class="row">                                            
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput"> Tax Name</label>
                                                    <input type="text" class="form-control" id="basicInput" name="name">
                                                     <span class="text-danger"><?php echo form_error('name'); ?></span>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="helpInputTop">Tax Rate (percent)</label>
                                                    <input type="number" class="form-control "  name="taxrate">
                                                </fieldset>
                                            </div> 
                                        
                                            <div class="col-md-12">
                                                <a href="<?php echo base_url('admin/taxes'); ?>" type="button" class="btn btn-light ">Back</a>

                                                 <button class="btn btn-info" type="submit">Save</button>
                                                       
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