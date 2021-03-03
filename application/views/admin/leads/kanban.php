
     <!-- BEGIN: Vendor CSS-->
   <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/vendors.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/jkanban/jkanban.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- END: Vendor CSS-->

    

    <!-- BEGIN: Page CSS-->
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/pages/app-kanban.css">
    <!-- END: Page CSS-->

   
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Basic Kanban App -->
                <div class="kanban-overlay"></div>
                <section id="kanban-wrapper">
                    <div class="row">
                        <div class="col-4">
                            <!-- <button type="button" class="btn btn-primary mb-1" id="add-kanban">
                                <i class='bx bx-add-to-queue mr-50'></i> Add New Board
                            </button> -->
                            <div id="kanban-app"></div>
                        </div>
                    </div>

                    <!-- User new mail right area -->
                    <div class="kanban-sidebar">
                        <div class="card shadow-none quill-wrapper">
                            <div class="card-header d-flex justify-content-between align-items-center border-bottom px-2 py-1">
                                <h3 class="card-title">UI Design</h3>
                                <button type="button" class="close close-icon">
                                    <i class="bx bx-x"></i>
                                </button>
                            </div>
                            <!-- form start -->
                            <form class="edit-kanban-item">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Card Title</label>
                                            <input type="text" class="form-control edit-kanban-item-title" placeholder="kanban Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Due Date</label>
                                            <input type="text" class="form-control edit-kanban-item-date" placeholder="21 August, 2019">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                
                                            </div><input type="hidden" id="base" value="<?php echo base_url('admin/LeadsController/getKanbanData'); ?>">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Member</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar m-0 mr-1">
                                                            <img src="<?php echo base_url();?>assets/backend/app-assets/images/portrait/small/avatar-s-20.jpg" height="36" width="36" alt="avtar img holder">
                                                        </div>
                                                        <div class="badge-circle badge-circle-light-secondary">
                                                            <i class="bx bx-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Attachment</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="emailAttach">
                                                <label class="custom-file-label" for="emailAttach">Attach file</label>
                                            </div>
                                        </div>
                                        <!-- Compose mail Quill editor -->
                                        <div class="form-group">
                                            <label>Comment</label>
                                            <div class="snow-container border rounded p-1">
                                                <div class="compose-editor"></div>
                                                <div class="d-flex justify-content-end">
                                                    <div class="compose-quill-toolbar">
                                                        <span class="ql-formats mr-0">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-image"></button>
                                                            <button class="btn btn-sm btn-primary btn-comment ml-25">Comment</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <button type="reset" class="btn btn-light-danger delete-kanban-item d-flex align-items-center mr-1">
                                        <i class='bx bx-trash mr-50'></i>
                                        <span>Delete</span>
                                    </button>
                                    <button class="btn btn-primary glow update-kanban-item d-flex align-items-center">
                                        <i class='bx bx-send mr-50'></i>
                                        <span>Save</span>
                                    </button>
                                </div>
                            </form>
                            <!-- form start end-->
                        </div>
                    </div>
                    <!--/ User Chat profile right area -->
                </section>
                <!--/ Sample Project kanban -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
     <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/vendors.min.js"></script>
  

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/jkanban/jkanban.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <!-- END: Page Vendor JS-->

   

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/pages/app-kanban.js"></script>
    <!-- END: Page JS-->

  