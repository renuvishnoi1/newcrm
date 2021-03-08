<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>CRM - <?php echo $title; ?></title>
     <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/backend/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/backend/app-assets/images/ico/favicon.ico"> 
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/pages/dashboard-ecommerce.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/assets/css/style.css">
    <!-- END: Custom CSS-->

     <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/vendors.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- select 2 cdn -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/vendors/css/forms/select/select2.min.css">


<!-- select 2 cdn -->
<!--  -->
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>"> -->

<style type="text/css">
    #ex1Slider .slider-selection {
    background: #BABABA;
}
</style>
  
    
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                        </ul>
               
                    </div>
                    <ul class="nav navbar-nav float-right">
                     
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name"><?php echo $this->session->userdata('sessiondata')['name']; ?></span><span class="user-status text-muted">Available</span></div><span><img class="round" src="<?=base_url()."assets/backend/profile_images/".$this->session->userdata('sessiondata')['pic'];?>" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="<?=base_url();?>admin/setting/edit_profile"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                                <!-- <a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a>
                                <a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a>
                                <a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a> -->
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="<?php echo base_url('admin/auth/logout');?> "><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->