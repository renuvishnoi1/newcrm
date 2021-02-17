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
                                      <div class="row">
                                            <div class="col-md-6 mb-1">
                                                <form action="<?php echo base_url('admin/invoice_items/add_item_group'); ?>" method="POST">
                                                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Group Name" aria-describedby="button-addon2">

                                                        <div class="input-group-append" id="button-addon2">
                                                            <button class="btn btn-primary" type="submit">New Group</button>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                                </fieldset>
                                                </form>
                                            </div>
                                         
                                        </div>
                                     
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
                                                        <th>Id</th>                                                       
                                                        <th>Group Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($records as $value) {
                                                      ?>
                                                    <tr>
                                                        <td><?php echo $value['id']; ?></td>
                                                        <td><?php echo $value['name']; ?></td>                                                        
                                                    </tr> 
                                                    <?php 
                                                    } ?>                                                
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Id</th>                                                       
                                                        <th>Group Name</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                     <div class="card-footer border-top p-1">
                       <a href="<?php echo base_url('admin/invoice_items'); ?>" type="button" class="btn btn-light mr-1 mb-1">Back</a>
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