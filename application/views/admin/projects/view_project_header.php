 

 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/pages/page-users.css">

<!-- BEGIN: Content-->

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row ">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0"><?php echo $project->name; ?>-</h5>
                           <!--  <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tabs
                                    </li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users view start -->
                  <!-- Nav Justified Starts -->
               <?php $this->load->view('admin/projects/view_project_tabs'); ?>
                <!-- Nav Justified Ends -->
                <section class="users-view">
                   
                    <!-- users view card data start -->
                    <div class="card">
                        <div class="card-header">               
              </div>
                        <div class="card-content">
                            <div class="card-body">