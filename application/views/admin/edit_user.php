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
      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>admin/user/update_user/<?=$edit_user->id?>">
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
          <input type="hidden" value="<?=@$edit_user->image;?>" name="profile_pic" class="form-control ">
		  <div class="card">
        <div class="row" style="padding:2%">
           <div class="col-lg-6">
            <?php echo form_label('First Name');?> <span style="color: red">*</span>
             <input type="text" value="<?=@$edit_user->first_name?>" name="first_name" class="form-control ">
            </div>
           <div class="col-lg-6">
            <?php echo form_label('Last Name');?> <span style="color: red">*</span>
            <input type="text" value="<?=@$edit_user->last_name?>" name="last_name" class="form-control ">
			</div>
		   
			<div class="col-lg-6">
            <?php echo form_label('Phone');?> <span style="color: red">*</span>
            <input type="text" value="<?=@$edit_user->phone?>" maxlength="10"  name="phone" id="is_num_exist" class="form-control onlynum" readonly>
			</div>
			
			<div class="col-lg-6">
            <?php echo form_label('Email');?> <span style="color: red">*</span>
            <input type="text" value="<?=@$edit_user->email?>" name="email" class="form-control ">
			</div>
			<div class="col-lg-6">
			<?php if($edit_user->image){?>
			<br>
			<img width="170px" height="150px" class="img-thumbnail" src="<?= base_url();?>assets/bacend/user_images/<?php echo $edit_user->image;?>"><br>
			<?php } ?>
            <?php echo form_label('Profile Picture');?> <span style="color: red"></span>
            <input type="file"  name="profile_pic" class="form-control ">
			</div>
			
          
          <!-- ./col -->
         
          <div class="col-lg-12" style="margin-top: 2%">
			 <input type="submit" value="Update" class="btn btn-primary" style="float: right;">
          </div>
          <!-- ./col -->
        </div>
        </div>
       </form>
      </div><!-- /.container-fluid -->
    </section>
  </div>
 