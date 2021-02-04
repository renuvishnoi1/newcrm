
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="row">
         
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=count($company_list)?></h3>

                <p>Total Members</p>
              </div>
             <!--<?php echo base_url();?>admin/company/company_list-->
              <a href="#" class="small-box-footer">More info </a>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=count($total_subscribers);?></h3>

                <p>Total Subscriber</p>
              </div>
             
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
	
        </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <h3 style="padding-left: 2%">Member List</h3>
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
                  
                </tr>
                </thead>
                <tbody>
                  <?php $sr=1; foreach ($user_list as $key => $value) { ?>
       
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
                  
                </tr>
                <?php } ?>
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
 