 

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
                                    <a href="<?php echo base_url('admin/add_contract'); ?>" type="button" class="btn btn-info mr-1 mb-1">NEW CONTRACT</a>
                                </div>
                                <hr>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">                                       
                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Subject</th>
                                                        <th>Customer</th>
                                                        <th>Contract Type</th>
                                                        <th>Contract Value</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Project</th>
                                                        <th>Signature</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($records as $key => $value) {?>
                                                        <tr>
                                                           <td><?php echo $value['id']; ?></td>
                                                           <td><?php echo $value['subject']; ?></td>
                                                           <td><?php echo $value['company']; ?></td> 
                                                           <td><?php echo $value['type_name']; ?></td>
                                                           <td>$<?php echo $value['contract_value']; ?></td>
                                                           <td><?php echo $value['datestart']; ?></td>
                                                           <td><?php echo $value['dateend']; ?></td>
                                                           <td></td>
                                                           <td> 
                                                            <a href="<?php echo base_url();?>admin/contracts/edit_type/<?php echo $value['id']; ?>" class="btn btn-light btn-sm"><i class="bx bx-show"></i></a> 
                                                            <a href="<?php echo base_url();?>admin/edit_contract/<?php echo $value['id']; ?>" class="btn btn-info btn-sm"><i class="bx bxs-pencil"></i></a> 
                                                            <a onclick="return confirm('Are you sure delete this record ?..')" href="<?php echo base_url();?>admin/delete_contract/<?php echo $value['id']; ?>" class="btn btn-danger btn-sm"><i class="bx bx-trash-alt"></i></a></td>

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
               <!--/ Zero configuration table -->
               
           </div>
       </div>
   </div>


