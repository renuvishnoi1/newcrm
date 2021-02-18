
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
            <a href="<?php echo base_url('admin/invoice_items/export_csv'); ?>" class="btn btn-success mright5  pull-left ">Download Sample</a>  
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>             
                   <th>Description</th>
                   <th>Long Description</th>
                   <th>Rate</th>
                   <th>Tax 1</th>
                   <th>Tax 2</th>
                   <th>Unit</th>
                   <th>Group Name</th>
                   <th>Options</th>             
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
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <div class="row">
            <form action="<?php echo base_url('admin/invoice_items/import_csv'); ?>" method="post" enctype="multipart/form-data" id="import_form">
             <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
             <div class="col-lg-6">
              <fieldset class="form-group">
                <label for="basicInput">Choose CSV File</label>
                <input type="file" name="file" style="display:inline-block;" />
                <span class="text-danger"><?php echo form_error('file'); ?></span>

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
