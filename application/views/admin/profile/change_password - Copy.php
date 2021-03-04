
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
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/setting/change_password">Driver List</a></li>
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
      
         <div class="row justify-content-center">
    <div class="col-6">
       
        <?php echo form_open('admin/setting/change_password', array('id' => 'passwordForm'))?>
		
		<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
		
            <div class="form-group">
			     <?php echo form_label('Old Password');?> <span style="color: red">*</span>
                <input type="password" name="old_password" value="<?=@$_POST['old_password']?>" class="form-control" />
                <?php echo form_error('old_password', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
			    <?php echo form_label('New Password');?> <span style="color: red">*</span>
                <input type="password" name="new_password" value="<?=@$_POST['new_password']?>" class="form-control" />
             
            </div>
            <div class="form-group">
			    <?php echo form_label('Conform Password');?> <span style="color: red">*</span>
                <input type="password" name="conform_pass" value="<?=@$_POST['conform_pass']?>" class="form-control" />
                <?php echo form_error('conform_pass', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Change Password</button>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>
          <!-- ./col -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 