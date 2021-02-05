
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <!-- <h5 class="content-header-title float-left pr-1 mb-0">Input</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Form Elements</a>
                                    </li>
                                    <li class="breadcrumb-item active">Input
                                    </li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
        <div class="card-header">
          <h4>Add New Contact</h4>
           <h6><?php echo $contact->company; ?></h6>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="<?php echo base_url('admin/add_contact_data'); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
           <div class="row">
            
            <div class="col-md-6">
             <div class="form-group">
              <label>Profile Image</label>
              <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="firstname" class="form-control" >
              <span class="text-danger"><?php echo form_error('firstname'); ?></span>
            </div>
            <div class="form-group">
              <label>Position</label>
              <input type="text" name="title" class="form-control" >
              <span class="text-danger"><?php echo form_error('title'); ?></span>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" name="phonenumber" class="form-control" >
              <span class="text-danger"><?php echo form_error('phonenumber'); ?></span>   
              <input type="hidden" name="userid" value="<?php echo $contact->userid; ?>">            
            </div>
            <div class="form-group"> 
              <button class="btn btn-info ">
              Save </button>
            </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lastname" class="form-control" >
            <span class="text-danger"><?php echo form_error('lastname'); ?></span>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" >
            <span class="text-danger"><?php echo form_error('email'); ?></span>
          </div>
          <div class="form-group">
            <label>Direction</label>
            <select name="direction" class="form-control">
              <option value=""></option>
              <option value="ltr" >LTR</option>
              <option value="rtl" >RTL</option>
            </select>
            <span class="text-danger"><?php echo form_error('direction'); ?></span>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control" >
            <span class="text-danger"><?php echo form_error('password'); ?></span>
            
          </div>
        </div>
        
      </div>
      
    </form>
  </div>
  <div class="card-footer">
   <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
   
 </div>
</div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->

              

            </div>
        </div>
    </div>
    <!-- END: Content