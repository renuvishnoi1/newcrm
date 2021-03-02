
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
            <a href="<?php echo base_url('admin/clients/add_group') ?>" class="btn mr-1 mb-1 btn-info ">
            Add Group</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table zero-configuration">
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
                  <td><?php echo $value->name; ?></td>
                  
                  <td>
                   <a href="<?php echo base_url();?>admin/clients/edit_group/<?php echo $value->id; ?>" class="btn btn-icon btn-primary glow mr-1 mb-1"><i class="bx bxs-pencil"></i></a> 
                   <a onclick="return confirm('Are you sure delete this record ?..')" href="<?php echo base_url();?>admin/clients/delete_group/<?php echo $value->id; ?>" class="btn btn-icon btn-danger glow mr-1 mb-1"><i class="bx bx-trash-alt"></i></td>
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
 