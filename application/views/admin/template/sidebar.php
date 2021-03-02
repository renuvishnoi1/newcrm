    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url();?>assets/backend/html/ltr/vertical-menu-template-semi-dark/index.html">
                        <div class="brand-logo"><img class="logo" src="<?php echo base_url();?>assets/backend/app-assets/images/logo/logo.png" /></div>
                        <h2 class="brand-text mb-0">CRM</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" nav-item"><a href="#"><i class="ficon bx bx-envelope" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                    <!-- <span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span> -->
                </a>
                   <!--  <ul class="menu-content">
                        <li class="active"><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                        <li><a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                    </ul> -->
                </li>
                <!-- <li class=" navigation-header"><span>Apps</span>
                </li> -->
                  <li class="nav-item"><a href="#"><i class="" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">Customers</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/clients'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Customers</span></a>
                        </li>
                        <li><a href="<?php echo base_url('admin/clients/groups'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Groups</span></a>
                        </li>
                        
                        
                    </ul>
                </li>
                 <li class="nav-item"><a href="#"><i class="" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">Sales</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/proposals'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Proposals</span></a>
                        </li>
                        <li><a href="<?php echo base_url('admin/estimates'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Estimates</span></a>
                        </li>
                        <li><a href="<?php echo base_url('admin/invoice_items'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Items</span></a> 
                        </li>
                        <li><a href="<?php echo base_url('admin/invoices'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Invoices</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#"><i class="" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">FINANCE</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/taxes'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Tax</span></a>
                        </li>
                        <li><a href="<?php echo base_url('admin/paymentmodes'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Payment Modes</span></a>
                        </li>
                    </ul>
                </li>
             
                <li class="nav-item"><a href="#"><i class="" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">Leads</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/leads/sources'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Sources</span></a>
                        </li>
                       <li><a href="<?php  echo base_url('admin/leads/statuses'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice">Status</span></a>
                        </li> 
                        <li><a href="<?php echo base_url('admin/leads'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Leads</span></a>
                        </li>
                        
                        
                    </ul>
                </li>
                   <li class=" nav-item"><a href="<?php echo base_url('admin/calender'); ?>"><i class="" data-icon="envelope-pull"></i><span class="menu-title" data-i18n="Email">Calender</span></a></li>
                   <li class="nav-item"><a href="#"><i class="" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">CONTRACTS</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/contracts/types'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Contract Types</span></a>
                        </li>
                        <li><a href="<?php echo base_url('admin/contracts'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Contract</span></a>
                        </li>
                    </ul>
                </li>
                   <li class=" nav-item "><a href="<?php echo base_url('admin/projects'); ?>"><i class="" data-icon="envelope-pull"></i><span class="menu-title" data-i18n="Email">Project</span></a></li>
                   <li class=" nav-item "><a href="<?php echo base_url('admin/tasks'); ?>"><i class="" data-icon="envelope-pull"></i><span class="menu-title" data-i18n="Email">Tasks</span></a></li>
              
          
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->