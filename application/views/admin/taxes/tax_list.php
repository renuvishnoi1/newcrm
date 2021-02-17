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
                                     <a href="<?php echo base_url('admin/add_tax'); ?>" type="button" class="btn btn-info mr-1 mb-1">New Tax</a>
                                     
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
                                                        <th>ID</th>
                                                        <th>Tax Name</th>
                                                        <th>Rate(Percent)</th>                                                       
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($records as $key => $value) {?>
                                                    <tr>
                                                        <td><?php echo $value['id']; ?></td>
                                                        <td><?php echo $value['name']; ?></td>
                                                        <td><?php echo $value['taxrate']; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url();?>admin/edit_tax/<?php echo $value['id']; ?>" class="btn btn-light btn-sm"><i class="bx bxs-pencil"></i></a> 
                                                            <a onclick="return confirm('Are you sure delete this record ?..')" href="<?php echo base_url();?>admin/delete_tax/<?php echo $value['id']; ?>" class="btn btn-danger btn-sm"><i class="bx bx-trash-alt"></i></a></td>                                                       
                                                    </tr> 
                                                    <?php 
                                                      
                                                    } ?>                                                
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Tax Name</th>
                                                        <th>Rate(Percent)</th>                                                       
                                                        <th>Options</th>
                                                    </tr>
                                                </tfoot>
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