
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
           <a href="<?php echo base_url('admin/import_leads'); ?>" class="btn btn-info mright5 test pull-left ">Import Leads</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>                  
                  <th>Name</th> 
                  <th>Company</th> 
                  <th>Email</th>    
                  <th>Phone</th> 
                  <th>Lead Value</th> 
                  <th>Tag</th>                    
                  <th>Assigned</th>
                  <th>Status</th>
                  <th>Source</th>
                  <th>Last Contact</th>
                  <th>Created</th>
                  <th>Action</th>                  
                </tr>
                </thead>
                <tbody>
                  <?php $sr=1; foreach ($records as $key => $value) { ?>
                   <?php //echo"<pre>" ; print_r($user_list); echo"<pre>"; die;?>
                <tr>
				          <td><?=$sr++;?></td>
                  <td><?php echo $value->name ?></td>
                  <td><?php echo $value->company; ?></td>
                  <td><?php echo $value->email; ?></td>
                  <td><?php echo $value->phonenumber; ?></td>
                  <td><?php echo $value->lead_value; ?></td>
                  <td></td>
                  <td><?php echo $value->lead_value; ?></td>
                  <td></td>
                  <td></td>
                  <td><?php echo $value->status; ?></td>
                  <td><?php echo $value->source; ?></td>
                  <!--<td>
                    <?php if($value->status=='1'){ ?>
                      <a href="<?php echo base_url();?>admin/user/user_deactive/<?=$value->id?>" class="btn-success btn btn-sm">Active</a>
                    <?php }else{ ?>
                       <a href="<?php echo base_url();?>admin/user/user_active/<?=$value->id?>" class="btn-danger btn btn-sm">Deactive</a>
                    <?php } ?>
                  </td>-->
                  <td>
                     <a href="<?php echo base_url();?>admin/show_lead/<?php echo $value->id; ?>" class="btn btn-info btn-sm"><i class="bx bxs-pencil"></i></a> 
                   <a href="<?php echo base_url();?>admin/edit_lead/<?php echo $value->id; ?>" class="btn btn-primary btn-sm"><i class="bx bxs-pencil"></i></a> 
                  <a onclick="return confirm('Are you sure delete this record ?..')" href="<?php echo base_url();?>admin/leads/delete_source/<?php echo $value->id; ?>" class="btn btn-danger btn-sm"><i class="bx bx-trash-alt"></i></td>
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
 