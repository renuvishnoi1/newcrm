
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
            <!--   <li class="breadcrumb-item"><a href="<?php //echo base_url();?>admin">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php //echo base_url();?>admin/settings/add_user">Add User</a></li> -->
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
              <a href="<?php echo base_url('admin/leads/add_status') ?>" class="btn btn-info mright5 test pull-left ">
              Add Status</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>   
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php $sr=1; foreach ($records as $key => $value) { ?>
                   <?php //echo"<pre>" ; print_r($user_list); echo"<pre>"; die;?>
                   <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->name ?></td>
                    
                    <td>
                     <a href="<?php echo base_url();?>admin/leads/edit_status/<?php echo $value->id; ?>" class="btn btn-primary btn-sm"><i class="bx bxs-pencil"></i></a> 
                     <a onclick="return confirm('Are you sure delete this record ?..')" href="<?php echo base_url();?>admin/leads/delete_status/<?php echo $value->id; ?>" class="btn btn-danger btn-sm"><i class="bx bx-trash-alt"></i></td>
                     </tr>
                   <?php } ?>
                 </tbody>
                 
               </table>

             </div>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   