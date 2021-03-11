 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/pages/page-users.css">
<!-- BEGIN: Content-->

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users view start -->
                <section class="users-view">
                   
                    <!-- users view card data start -->
                    <div class="card">
                        <div class="card-header">
               
              </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-md-6 border-right">
                                        <div class="col-md-12">
                                            <p class="project-info bold font-size-14"> Overview</p>
                                        </div>
                                        <div class="row ">
                                        <div class="col-md-7 " >
                                        <table class="table table-stripe">
                                            <tbody>
                                                <tr>
                                                    <td>Project </td>
                                                    <td><?php echo $project->name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Customer</td>
                                                    <td ></td>
                                                </tr>
                                                <tr>
                                                    <td>Billing Type</td>
                                                    <td ></td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td ></td>
                                                </tr>
                                                <tr>
                                                    <td>Date Created</td>
                                                    <td></td>
                                                </tr>
                                                 <tr>
                                                    <td>Start Date</td>
                                                    <td></td>
                                                </tr>
                                                 <tr>
                                                    <td>Deadline</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Logged Hours</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="set-size charts-container">
                                              <div class="pie-wrapper progress-45 style-2">
                                                <span class="label"><?php echo $project->progress; ?><span class="smaller">%</span></span>
                                                <div class="pie">
                                                  <div class="left-side half-circle"></div>
                                                  <div class="right-side half-circle"></div>
                                                </div>
                                                <div class="shadow"></div>
                                              </div></div>
                                        </div>
                                    </div><hr>
                                    <div ><b>Tag</b>
                                        <p></p>
                                    </div>
                                    <hr>
                                    <div ><b>DESCRIPTION</b>
                                        <p></p>
                                    </div>
                                    <hr>
                                    <div><b>MEMBERS</b>
                                        <p></p>
                                    </div>
                                    </div>
                                   
                                    <div class=" col-md-6">
                                       <div class="row">
                                           <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-9"><p>Open Tasks</p></div>
                                               <div class="col-md-3"><i class="ficon bx bxs-check-circle" data-icon="calendar"></i></div>
                                            </div>
                                               
                                           </div>
                                           <div class="col-md-6">
                                                <div class="row">
                                                <div class="col-md-9">
                                                  
                                                </div>
                                               <div class="col-md-3"><i class="ficon bx bx-calendar" data-icon="calendar"></i></div>
                                            </div>
                                           </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- users view card data ends -->
                   

                </section>
                <!-- users view ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
       <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/pages/page-users.js"></script>