
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
            <a href="<?php echo base_url('admin/add_lead'); ?>" class="btn btn-info mright5 test pull-left "> New Lead</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="lead_data" class="table table-bordered table-striped">  
                     <thead>  
                          <tr>  
                               <th width="10%">Id</th>  
                               <th width="35%">Name</th>  
                               <th width="35%">Company</th>  
                               <th width="10%">Edit</th>  
                               <th width="10%">Delete</th>  
                          </tr>  
                     </thead>  
                </table> 

          </div>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 