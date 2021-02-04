
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?=@$page_title?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/user/user_list">Member List</a></li>
              <li class="breadcrumb-item active"><?=@$page_title?></li>
            </ol>
          </div><!-- /.col -->  
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      <?php
      echo form_open_multipart('admin/user/insert_user');?>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
          <div class="card">
        <div class="row" style="padding:2%">
           <div class="col-lg-6">
            <?php echo form_label('First Name');?> <span style="color: red">*</span>
             <input type="text" value="<?=@$_POST['first_name']?>" name="first_name" class="form-control ">
			 <?php echo form_error('first_name', '<div class="error" style="color:red">', '</div>'); ?>
            </div>
           <div class="col-lg-6">
            <?php echo form_label('Last Name');?> <span style="color: red">*</span>
            <input type="text" value="<?=@$_POST['last_name']?>" name="last_name" class="form-control ">
			<?php echo form_error('last_name', '<div class="error" style="color:red">', '</div>'); ?>
			</div>
		   
			<div class="col-lg-6">
            <?php echo form_label('Phone');?> <span style="color: red">*</span>
            <input type="text" value="<?=@$_POST['phone']?>" maxlength="10" id="is_num_exist" name="phone" class="form-control onlynum">
			<?php echo form_error('phone', '<div  class="error" style="color:red">', '</div>'); ?>
			
			</div>
			
			<div class="col-lg-6">
            <?php echo form_label('Email');?> <span style="color: red">*</span>
            <input type="text" value="<?=@$_POST['email']?>" name="email" class="form-control ">
			<?php echo form_error('email', '<div class="error" style="color:red">', '</div>'); ?>
			</div>
			<div class="col-lg-6">
            <?php echo form_label('Password');?> <span style="color: red">*</span>
            <input type="text" value="<?=@$_POST['password']?>" name="password" class="form-control ">
			<?php echo form_error('password', '<div class="error" style="color:red">', '</div>'); ?>
			</div>
			<div class="col-lg-6">
            <?php echo form_label('Profile Picture');?> <span style="color: red"></span>
            <input type="file"  name="profile_pic" class="form-control ">
			</div>
			
          
          <!-- ./col -->
         
          <div class="col-lg-12" style="margin-top: 2%">
            <input type="submit" value="submit" class="btn btn-primary" style="float: right;">
          </div>
          <!-- ./col -->
        </div>
        </div>
       </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 