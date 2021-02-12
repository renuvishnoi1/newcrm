
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
            <!--<li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/settings/add_user">Add User</a></li>-->
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
      <div class="row">

        <div class="col-md-12">
          <div class="card">
           <div class="card-header">
            <a href="<?php echo base_url('admin/export_leads_csv'); ?>" class="btn btn-success mright5  pull-left ">Download Sample</a>  
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>             
                    <th>Name</th> 
                    <th>Position</th> 
                    <th>Company</th>    
                    <th>Description</th> 
                    <th>Country</th> 
                    <th>Zip</th>                    
                    <th>City</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Phonenumber</th>   
                    <th>Lead value</th> 
                    <th>Tags</th>              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>test@example.com</td>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>Sample Data</td>
                    <td>tag1,tag2</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br>
            <div class="row">
              <form action="<?php echo base_url('admin/import_leads_csv'); ?>" method="post" enctype="multipart/form-data" id="import_form">
               <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
               <div class="col-lg-6">
                <fieldset class="form-group">
                  <label for="basicInput">Choose CSV File</label>
                  <input type="file" name="file" style="display:inline-block;" />
                </fieldset>
                <fieldset class="form-group">
                  <label for="country">Status</label>
                  <select name="status" class="form-control">
                    <option value="">Select status</option>
                    <?php foreach ($status as $value) {
                      ?>
                      <?php                       
                    } ?>
                  </select>
                  <span class="text-danger"><?php echo form_error('status'); ?></span>
                </fieldset>
                <fieldset class="form-group">
                  <label for="country">Source</label>
                  <select name="source" class="form-control">
                    <option value="">select Source</option>
                    <?php foreach ($source as $value) {
                      ?>
                      <option value="<?php echo $value->id;  ?>"> <?php echo $value->name; ?></option>
                      <?php 
                                                            # code...
                    } ?>
                  </select>
                  <span class="text-danger"><?php echo form_error('source'); ?></span>
                </fieldset>
                <fieldset class="form-group">
                  <label for="country">Responsible (Assignee)</label>
                  <select name="assigned" class="form-control">
                    <option value="">select Assigned</option>
                    <?php foreach ($assign as $value) {
                      ?>

                      <option value="<?php echo $value->staffid;  ?>"> <?php echo $value->firstname." ".$value->lastname; ?></option>
                      <?php 

                    } ?>
                  </select>

                </fieldset>

                <fieldset class="form-group">
                 <input type="submit" class="btn btn-primary" name="importBtn" value="IMPORT">
               </fieldset>

             </div>
           </form>

         </div>
       </div>
     </div>
   </div>
 </div>
</div>
 <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
