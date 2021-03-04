  <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Profile</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="<?php site_url();?>"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php site_url();?>">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"><?=$title;?>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
               

                <!-- Form wizard with icon tabs section start -->
                <section id="info-tabs-">
                    <div class="row">
                        <div class="col-12">
                            <div class="card icon-tab">
                                <div class="card-header">
                                    <h4 class="card-title">Amin Details</h4>
                                </div>
                                <div class="card-content mt-2">
                                    <div class="card-body">
                                        <!--<form action="#" class="wizard-horizontal">-->
										<?php echo form_open_multipart('admin/setting/update_profile','name="edit_profile" class="wizard-horizontal" id="edit-profile"');?>
                                         <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
   
                                            <h6>
                                                <i class="step-icon"></i>
                                                <span class="fonticon-wrap">
                                                    <i class="livicon-evo" data-options="name:user.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                                </span>
                                                <span>Basic Details</span>
                                            </h6>
                                      
                                            <fieldset>
                                                <div class="row">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                           <?php echo form_label('First Name');?> <span style="color: red">*</span>
                                                            <input type="text" name="firstname" value="<?=@$edit_profile->firstname?>" class="form-control" placeholder="Enter Your First name">
															 <?php echo form_error('firstname', '<div class="error" style="color:red">', '</div>'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                           <?php echo form_label('Last Name');?> <span style="color: red">*</span>
                                                            <input type="text" name="lastname" value="<?=@$edit_profile->lastname?>" class="form-control" placeholder="Enter Your Last name">
                                                             <?php echo form_error('lasttname', '<div class="error" style="color:red">', '</div>'); ?>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            
															<?php echo form_label('Email');?> <span style="color: red">*</span>
                                                            <input type="email"  name="email" value="<?=@$edit_profile->email?>" class="form-control" placeholder="Enter Your Email" readonly>
															<?php echo form_error('email', '<div class="error" style="color:red">', '</div>'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                           
															<?php echo form_label('Phone');?> <span style="color: red">*</span>
                                                           <input type="number"  name="phonenumber" value="<?=@$edit_profile->phonenumber?>" class="form-control" >
														   <?php echo form_error('phonenumber', '<div class="error" style="color:red">', '</div>'); ?>
                                                        </div>
                                                    </div>
													
													 <div class="col-sm-6">
                                                        <div class="form-group">
                                                           
															<?php echo form_label('Profile Image');?> 
                                                          <div class="custom-file">
                                                                <input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
													
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h6 class="py-50">Other Details</h6>
                                                    </div>
                                                    
                                                   
													<div class="col-md-4">
                                                        <div class="form-group">
                                            
															<?php echo form_label('Facebook Link');?> 
                                                            <input type="text"  name="facebook" value="<?=@$edit_profile->facebook?>" class="form-control" placeholder="Enter Your Facebook Profile Link">
                                                        </div>
                                                    </div>
													<div class="col-md-4">
                                                        <div class="form-group">
                                                            
															<?php echo form_label('Linkedin Link');?> 
                                                            <input type="text"  name="linkedin" value="<?=@$edit_profile->linkedin?>" class="form-control" placeholder="Enter Your Linkedin Profile Link">
                                                        </div>
                                                    </div>
													<div class="col-md-4">
                                                        <div class="form-group">
                                                            
															<?php echo form_label('Skype Link');?> 
                                                            <input type="text"  name="skype" value="<?=@$edit_profile->skype?>" class="form-control" placeholder="Enter Your Skype Profile Link">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                                                    </div>
												   
                                                </div>
                                            </fieldset>
                                         
                                        <!--</form>-->
										<?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with icon tabs section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->