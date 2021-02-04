
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
            
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>City</th>
                  <th>Area</th>
                  <th>Address</th>
                  <th>Is Online</th>
                  <th>Is Referred</th>             
                  <th>Requested Date</th>             
                  <th>Created Date</th>             
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php $sr=1; foreach ($user_list as $key => $value) { ?>
                   <?php //echo"<pre>" ; print_r($user_list); echo"<pre>"; die;?>
                <tr>
				   <td><?=$sr++;?></td>
                  <td><?=$value->name?></td>
                  <td><?=$value->email?></td>
                 <td><?=$value->phone?></td>
                 <td><?=$value->city_id?></td>
                 <td><?=$value->area?></td>
                 <td><?=$value->address?></td>
                 <td><?=$value->is_online?></td>
                 <td><?=$value->is_referred?></td>
                 <td><?=$value->date?></td>
                 <td><?=$value->created_date?></td>
                  <!--<td>
                    <?php if($value->status=='1'){ ?>
                      <a href="<?php echo base_url();?>admin/user/user_deactive/<?=$value->id?>" class="btn-success btn btn-sm">Active</a>
                    <?php }else{ ?>
                       <a href="<?php echo base_url();?>admin/user/user_active/<?=$value->id?>" class="btn-danger btn btn-sm">Deactive</a>
                    <?php } ?>
                  </td>-->
                  <td><!--<a href="<?php echo base_url();?>admin/user/edit_user/<?=$value->id?>" class="btn btn-primary btn-sm">Edit</a> --><a onclick="return confirm('Are you sure delete this record ?..')" href="<?php echo base_url();?>admin/user/user_delete/<?=$value->id?>" class="btn btn-danger btn-sm">Delete</td>
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
 