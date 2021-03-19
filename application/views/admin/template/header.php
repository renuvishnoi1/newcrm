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
}*,
*:before,
*:after {
  box-sizing: border-box;
}
/*html,
body {
  background: #ecf0f1;
  color: #444;
  font-family: 'Lato', Tahoma, Geneva, sans-serif;
  font-size: 16px;
  padding: 10px;
}*/
.set-size {
  font-size: 10em;
}
/*.charts-container:after {
  clear: both;
  content: "";
  display: table;
}*/
.pie-wrapper {
  height: 1em;
  width: 1em;
  float: left;
  margin: 15px;
  position: relative;
}
.pie-wrapper:nth-child(3n+1) {
  clear: both;
}
.pie-wrapper .pie {
  height: 100%;
  width: 100%;
  clip: rect(0, 1em, 1em, 0.5em);
  left: 0;
  position: absolute;
  top: 0;
}
.pie-wrapper .pie .half-circle {
  height: 100%;
  width: 100%;
  border: 0.1em solid #3498db;
  border-radius: 50%;
  clip: rect(0, 0.5em, 1em, 0);
  left: 0;
  position: absolute;
  top: 0;
}
.pie-wrapper .label {
  background: #34495e;
  border-radius: 50%;
  bottom: 0.4em;
  color: #ecf0f1;
  cursor: default;
  display: block;
  font-size: 0.25em;
  left: 0.4em;
  line-height: 2.6em;
  position: absolute;
  right: 0.4em;
  text-align: center;
  top: 0.4em;
}
.pie-wrapper .label .smaller {
  color: #bdc3c7;
  font-size: .45em;
  padding-bottom: 20px;
  vertical-align: super;
}
.pie-wrapper .shadow {
  height: 100%;
  width: 100%;
  border: 0.1em solid #bdc3c7;
  border-radius: 50%;
}
.pie-wrapper.style-2 .label {
  background: none;
  color: #7f8c8d;
}
.pie-wrapper.style-2 .label .smaller {
  color: #bdc3c7;
}
.pie-wrapper.progress-45 .pie .half-circle {
  border-color: #1abc9c;
}
.pie-wrapper.progress-45 .pie .left-side {
  transform: rotate(162deg);
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
                      <li><?php //echo $this->lang->line('name'); ?>
                        <select onchange="javascript:window.location.href='<?php echo base_url(); ?>admin/LanguageSwitcher/switchLang/'+this.value;" class="nav-link">
                                <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                                <!-- <option value="spanish" <?php if($this->session->userdata('site_lang') == 'spanish') echo 'selected="selected"'; ?>>spanish</option>
                               <option value="swedish" <?php if($this->session->userdata('site_lang') == 'swedish') echo 'selected="selected"'; ?>>swedish</option>
                                <option value="turkish" <?php if($this->session->userdata('site_lang') == 'turkish') echo 'selected="selected"'; ?>>turkish</option> --> 
                                 <option value="french" <?php if($this->session->userdata('site_lang') == 'french') echo 'selected="selected"'; ?>>french</option> 
                            </select>
                      </li>
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