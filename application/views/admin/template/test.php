   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">+
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url();?>assets/backend/html/ltr/vertical-menu-template-semi-dark/index.html">
                        <div class="brand-logo"><img class="logo" src="<?php echo base_url();?>assets/backend/app-assets/images/logo/logo.png" /></div>
                        <h2 class="brand-text mb-0">CRM</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary toggle-color" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>

        <div class="proSection">
            <div class="pro_aria">
                <div class="pro_img"><img class="round" src="http://admincrm.flyinfare.com/assets/backend/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></div>
                <div class="pro_tittle">
                    <h3>John Deo <span><i class="fa fa-power-off log" aria-hidden="true"></i></span> </h3>
                    <small><i class="fa fa-circle circle_point" aria-hidden="true"></i> Online</small>
                </div>
            </div>
        </div>

        <div class="total_item">
            <div class="total_itemBox">
                <div class="total_box">
                    <h4>786</h4>
                    <p>sales</p>
                </div>
                <div class="total_box">
                    <h4>1,236</h4>
                    <p>orders</p>
                </div>
                <div class="total_box">
                    <h4>$900</h4>
                    <p>revenue</p>
                </div>
            </div>
        </div>

        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" nav-item"><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
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
                  <li class="nav-item"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i><span class="menu-title" data-i18n="Invoice">Customers</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/clients'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Customers</span></a>
                        </li>
                        <li><a href="<?php echo base_url('admin/clients/groups'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Groups</span></a>
                        </li>
                        
                        
                    </ul>
                </li>
                 <li class="nav-item"><a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i><span class="menu-title" data-i18n="Invoice">Sales</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/proposals'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Proposals</span></a>
                        </li>
                        <li><a href="<?php echo base_url('admin/invoice_items'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Items</span></a>
                        </li>
                        <li><a href="<?php echo base_url('admin/invoices'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Invoices</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i><span class="menu-title" data-i18n="Invoice">FINANCE</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/taxes'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Tax</span></a>
                        </li>
                         <li><a href="<?php echo base_url('admin/paymentmodes'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Payment Modes</span></a>
                        </li>
                    </ul>
                </li>
               <!--  <li class=" nav-item"><a href="<?php echo base_url('admin/clients'); ?>"><i class="" data-icon="envelope-pull"></i><span class="menu-title" data-i18n="Email">Customers</span></a>
                </li> -->
             <!--    <li class=" nav-item"><a href="#"><i class="" data-icon="comments"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="" data-icon="check-alt"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="" data-icon="calendar"></i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="" data-icon="grid"></i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
                </li> -->
                <li class="nav-item"><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="menu-title" data-i18n="Invoice">Leads</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/leads/sources'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Sources</span></a>
                        </li>
                       <li><a href="<?php  echo base_url('admin/leads/statuses'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice">Statuses</span></a>
                        </li> 
                        <li><a href="<?php echo base_url('admin/leads'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Leads</span></a>
                        </li>
                        
                        
                    </ul>
                </li>
                   <li class=" nav-item"><a href="<?php echo base_url('admin/calender'); ?>"><i class="fa fa-calendar" aria-hidden="true"></i><span class="menu-title" data-i18n="Email">Calender</span></a>
              
 <li class="nav-item"><a href="#"><i class="fa fa-sticky-note-o" aria-hidden="true"></i><span class="menu-title" data-i18n="Invoice">CONTRACTS</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url('admin/contracts/types'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Contract Types</span></a>
                        </li>
                        <li><a href="<?php echo base_url('admin/contracts'); ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Contract</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->