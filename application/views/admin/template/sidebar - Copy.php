  <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
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
        
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Members
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
             <!--<li class="nav-item">
                <a href="<?php echo base_url();?>admin/user/create_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Member</p>
                </a>  
                
              </li>-->
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/user/user_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member List</p>
                </a>  
               
              </li>
            </ul>
          </li>
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Manage Categories 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
             <li class="nav-item">
                <a href="<?php echo base_url();?>admin/category/create_category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Category</p>
                </a>  
                
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/category/category_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>  
              </li>
            </ul>
          </li>
		  
		 
		  <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Manage Products 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
             <li class="nav-item">
                <a href="<?php echo base_url();?>admin/product/create_product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Product</p>
                </a>  
                
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/product/product_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>  
              </li>
            </ul>
          </li>
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Manage City & Area 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
             <li class="nav-item">
                <a href="<?php echo base_url();?>admin/userdeatils/create_city" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New City</p>
                </a>  
                
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/userdeatils/city_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>City List</p>
                </a>  
              </li>
            </ul>
			<ul class="nav nav-treeview">  
             <li class="nav-item">
                <a href="<?php echo base_url();?>admin/userdeatils/create_area" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Area</p>
                </a>  
                
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/userdeatils/area_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Area List</p>
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
                <a href="<?php echo base_url();?>admin/setting/change_password" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a> 
				<a href="<?php echo base_url();?>admin/setting/edit_profile" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Profile</p>
                </a>

              </li>   
            </ul>
          </li>  
        </ul>
      </nav>
     </div>
    </aside>
