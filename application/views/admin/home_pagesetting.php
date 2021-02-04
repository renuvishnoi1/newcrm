
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
        <form method="post" id="update_header_logo" enctype="multipart/form-data">
         <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
          <div class="card">
        <div class="row" style="padding:2%">
          <div class="col-lg-9 col-6">
            <?php echo form_label('Header Logo');?>
           <input type="file" name="header_logo" class="form-control">
           <?php if($setting->header_logo){ ?>
            <img src="<?php echo base_url();?>uploads/logo/<?=$setting->header_logo?>" width="80px">
           <?php } ?>
         </div> <div class="col-lg-3 col-6">
           <input type="hidden" name="update_id" value="<?=$setting->id?>" >
           <input type="submit" name="submit" value="Upload" class="btn btn-primary btn-sm" style="margin-top: 11%">
         </div>
       </div>
       </div>
     </form>
     <form method="post" id="update_footer_logo" enctype="multipart/form-data">
         <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
          <div class="card">
        <div class="row" style="padding:2%">
          <div class="col-lg-9 col-6">
            <?php echo form_label('Footer Logo');?>
           <input type="file" name="footer_logo" class="form-control">
           <?php if($setting->footer_logo){ ?>
            <img src="<?php echo base_url();?>uploads/logo/<?=$setting->footer_logo?>" width="80px">
           <?php } ?>
         </div> <div class="col-lg-3 col-6">
           <input type="hidden" name="update_id" value="<?=$setting->id?>" >
           <input type="submit" name="submit" value="Upload" class="btn btn-primary btn-sm" style="margin-top: 11%">
         </div>
       </div>
       </div>
     </form>
       <form method="post" id="update_setting">
         <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
          <div class="card">
        <div class="row" style="padding:2%">
          <div class="col-lg-3 col-6">
            <?php echo form_label('Title');?>
           <input type="hidden" name="update_id" value="<?=$setting->id?>" >
           <input type="text" name="title" value="<?=$setting->title?>" placeholder="Title" class="form-control">
         </div>
          
          <div class="col-lg-3 col-6">
            <?php echo form_label('Meta Title');?>
            <input type="text" name="meta_title" value="<?=$setting->meta_title?>" placeholder="Meta Title" class="form-control"></div>
           
         
          <div class="col-lg-3 col-6">
            <?php echo form_label('Meta Keyword');?>
            <input type="text" name="meta_keyword" value="<?=$setting->meta_keyword?>" placeholder="Meta Keyword" class="form-control">
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
             <?php echo form_label('Meta Description');?>
            <input type="text" value="<?=$setting->meta_discription?>" name="meta_discription" placeholder="Meta Description" class="form-control">
          </div>
          <div class="col-lg-3">
             <?php echo form_label('Email');?>
            <input type="text" value="<?=$setting->email?>" name="email" placeholder="Email" class="form-control">
          </div> 
          <div class="col-lg-3">
             <?php echo form_label('Contact');?>
            <input type="text" value="<?=$setting->contact?>" name="contact" placeholder="Contact" class="form-control">
          </div>
          <div class="col-lg-3">
             <?php echo form_label('Address 1');?>
            <input type="text" value="<?=$setting->address1?>" name="address1" placeholder="Address" class="form-control">
          </div>
          <div class="col-lg-3">
             <?php echo form_label('Address 2');?>
            <input type="text" value="<?=$setting->address2?>" name="address2" placeholder="Address" class="form-control">
          </div>
          <div class="col-lg-3">
             <?php echo form_label('Facebook');?>
            <input type="text" value="<?=$setting->facebook?>" name="facebook" placeholder="Facebook Link" class="form-control">
          </div>
          <div class="col-lg-3">
             <?php echo form_label('Twitter');?>
            <input type="text" value="<?=$setting->twitter?>" name="twitter" placeholder="Twitter" class="form-control">
          </div>
          <div class="col-lg-3">
             <?php echo form_label('Linkedin');?>
            <input type="text" value="<?=$setting->linkedin?>" name="linkedin" placeholder="Linkedin" class="form-control">
          </div>
          <div class="col-lg-3">
             <?php echo form_label('Pinterest');?>
            <input type="text" value="<?=$setting->pinterest?>" name="pinterest" placeholder="Pinterest" class="form-control">
          </div> 
          <div class="col-lg-3">
             <?php echo form_label('Instagram');?>
            <input type="text" value="<?=$setting->instagram?>" name="instagram" placeholder="Instagram" class="form-control">
          </div>
          <div class="col-lg-12">
             <?php echo form_label('Description');?>
            <textarea class="form-control"  name="description"><?=$setting->description?></textarea>
          </div>
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
 