<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <!-- <h5 class="content-header-title float-left pr-1 mb-0">DataTables</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Datatable
                                    </li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                  <!--   <div class="col-12">
                        <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
                    </div> -->
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                     <a href="<?php echo base_url('admin/add_quote'); ?>" type="button" class="btn btn-info mr-1 mb-1">New Quote</a>
                                      
                                </div>
                                 <hr>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <!-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to
                                            use it with your own tables is to call the construction function: $().DataTable();.</p> -->
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Quote</th>
                                                        <th>Subject</th>
                                                        <th>Rate</th>
                                                        <th>to</th>
                                                        <th>Total</th>
                                                        <th>Date</th>
                                                        <th>Open till</th>
                                                        <th>Tags</th>
                                                        <th>Date Created</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="proposalTable">
                                                  <?php foreach ($quote as $key => $value) {
                                                   
                                                    ?>
                                                   <tr>
                                                    <td></td>
                                                     <td><?php echo $value['subject']; ?></td>
                                                   <td><?php echo $value['proposal_to']; ?></td>
                                                   <td></td>
                                                   <td><?php echo $value['total']; ?></td>
                                                   <td><?php echo $value['date']; ?></td>
                                                   <td><?php echo $value['open_till']; ?></td>
                                                   <td></td>
                                                   <td></td>
                                                   <?php if($value['status'] == 1){
                                                    $status = "Open";
                                                   }else if($value['status'] == 2){
                                                    $status = "Declined";
                                                   } else if($value['status'] == 3){
                                                    $status = "Accepted";
                                                   }else if($value['status'] == 4){
                                                    $status = "Sent";
                                                   }else if($value['status'] == 5){
                                                    $status = "Revised";
                                                   }
                                                   else if($value['status'] == 6){
                                                    $status = "Draft";
                                                   }else{
                                                    $status = '';
                                                   }
                                                    ?>
                                                   <td> <?php echo $status; ?></td>
                                                    <td> <a href="<?php echo base_url() ?><?php echo $value["id"]; ?>" class="btn btn-icon btn-light glow mr-1 mb-1" title="Show"><i class="bx bxs-show"></i></a>
          <a href="<?php echo base_url('admin/edit_quote/') ?><?php echo $value["id"]; ?>" class="btn btn-icon btn-primary mr-1 mb-1" title="Edit Contact"><i class="bx bxs-pencil"></i></a>
          </td>
                                                   </tr>
                                                   <?php
                                                 }
                                                   ?>
                                                </tbody>
                                               
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
               
            </div>
        </div>
    </div>
 