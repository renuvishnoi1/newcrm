  <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--<img src="<?php echo base_url();?>assets/bacend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
          <img src="<?php echo base_url();?>assets/bacend/dist/img/<?=$this->session->userdata('sessiondata')['pic']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$this->session->userdata('sessiondata')['name']?></a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url();?>admin" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
         <!--<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                City
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
             
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/city/city_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>City List</p>
                </a>  
                <a href="<?php echo base_url();?>admin/city/city_add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add City</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Monuments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
             
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/menuments/menuments_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monuments List</p>
                </a>  
                <a href="<?php echo base_url();?>admin/menuments/add_menuments" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Monuments</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Submonuments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
             
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/submenuments/submenuments_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Submonuments List</p>
                </a>  
                <a href="<?php echo base_url();?>admin/submenuments/add_submenuments" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Submonuments</p>
                </a>
              </li>
            </ul>
          </li>-->
		 
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
             <li class="nav-item">
                <a href="<?php echo base_url();?>admin/user/create_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>  
                
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/setting/user_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>  
               
              </li>
            </ul>
          </li>
		   <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Drivers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
             <li class="nav-item">
                <a href="<?php echo base_url();?>admin/driver/create_driver" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Diver</p>
                </a>  
                
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/driver/driver_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Driver List</p>
                </a>  
                
              </li>
			  
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                General Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview"> 
              <li class="nav-item">
                <!-- <a href="<?php echo base_url();?>admin/setting/general_setting" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Setting</p>
                </a> -->
                <a href="<?php echo base_url();?>admin/setting/change_password" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a> 
				<a href="<?php echo base_url();?>admin/setting/edit_profile" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Profile</p>
                </a>
				<a href="<?php echo base_url();?>admin/setting/add_page" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add page</p>
                </a> 
                <a href="<?php echo base_url();?>admin/setting/banner_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner List</p>
                </a> 
                <a href="<?php echo base_url();?>admin/setting/page_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>  
                  <p>Page List</p>
                </a> 
                <a href="<?php echo base_url();?>admin/setting/add_notification" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>  
                  <p>Add Notification</p>
                </a>
                <a href="<?php echo base_url();?>admin/setting/feed_backlist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>  
                  <p>Feedback list</p>
                </a>
              </li>   
            </ul>
          </li>  
        </ul>
      </nav>
     </div>
    </aside>
