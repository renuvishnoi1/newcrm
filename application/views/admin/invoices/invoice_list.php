
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/pages/app-invoice.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- invoice list -->
                <section class="invoice-list-wrapper">
                    <!-- create invoice button-->
                    <div class="invoice-create-btn mb-1">
                        <a href="<?php echo base_url('admin/add_invoices'); ?>" class="btn btn-primary glow invoice-create" role="button" aria-pressed="true">Create
                            Invoice</a>
                    </div>
               
                    <div class="table-responsive">
                        <table class="table invoice-data-table dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="align-middle">Invoice#</span>
                                    </th>
                                    <th>Amount</th>
                                    <th>Total Tax</th>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th> Project</th>
                                    <th>Tag</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   
                                    <td>
                                        <a href="app-invoice.html">INV-00956</a>
                                    </td>
                                    <td><span class="invoice-amount">$459.30</span></td>
                                    <th></th>
                                    
                                    <td><span class="invoice-customer">Pixinvent PVT. LTD</span></td>
                                    <td>
                                        <span class="bullet bullet-success bullet-sm"></span>
                                        <small class="text-muted">Technology</small>
                                    </td>
                                    <td></td>
                                    <td>
                                       <!--  <div class="invoice-action">
                                            <a href="app-invoice.html" class="invoice-action-view mr-1">
                                                <i class="bx bx-show-alt"></i>
                                            </a>
                                            <a href="app-invoice-edit.html" class="invoice-action-edit cursor-pointer">
                                                <i class="bx bx-edit"></i>
                                            </a>
                                        </div> -->
                                    </td><td><small class="text-muted">12-08-19</small></td>
                                    <td><span class="badge badge-light-danger badge-pill">UNPAID</span></td>
                                </tr>
                      
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/pages/app-invoice.js"></script>
    <!-- END: Page JS-->
