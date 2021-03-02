
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
            <a href="<?php echo base_url('admin/add_lead'); ?>" class="btn mr-1 mb-1 btn-info "> New Lead</a>
           <a href="<?php echo base_url('admin/import_leads'); ?>" class="btn mr-1 mb-1 btn-info ">Import Leads</a>
           <a href="<?php echo base_url('admin/leads/kanban'); ?>" class="btn mr-1 mb-1 btn-info ">Switch To Kanban</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
            <table id="example1" class="table zero-configuration">
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
                  <td><?php echo $value['lead_name']; ?></td>
                  <td><?php echo $value['company']; ?></td>
                  <td><?php echo $value['lead_email']; ?></td>
                  <td><?php echo $value['lead_phone']; ?></td>
                  <td><?php echo $value['lead_value']; ?></td>
                  <td></td>
                  <td><?php echo $value['f_name']." ".$value['l_name']; ?></td>                  
                  <td><?php echo $value['status_name']; ?></td>
                  <td><?php echo $value['source_name']; ?></td>
                  <td></td>
                  <td></td>
                  <!--<td>
                    <?php if($value->status=='1'){ ?>
                      <a href="<?php echo base_url();?>admin/user/user_deactive/<?=$value->id?>" class="btn-success btn btn-sm">Active</a>
                    <?php }else{ ?>
                       <a href="<?php echo base_url();?>admin/user/user_active/<?=$value->id?>" class="btn-danger btn btn-sm">Deactive</a>
                    <?php } ?>
                  </td>-->
                  <td>
                     <a href="<?php echo base_url();?>admin/show_lead/<?php echo $value['lead_id']; ?>" class="btn btn-icon btn-light glow mr-1 mb-1"><i class="bx bxs-show"></i></a> 
                   <a href="<?php echo base_url();?>admin/edit_lead/<?php echo $value['lead_id']; ?>" class="btn btn-icon btn-primary mr-1 mb-1"><i class="bx bxs-pencil"></i></a> 
                  <a onclick="return confirm('Are you sure delete this record ?..')" href="<?php echo base_url();?>admin/leads/delete_source/<?php echo $value['lead_id']; ?>" class="btn btn-icon btn-danger mr-1 mb-1"><i class="bx bx-trash-alt"></i></a>
                </td>
                </tr>
                <?php } ?>
                </tbody>
               
              </table>
 </div>
          </div>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 