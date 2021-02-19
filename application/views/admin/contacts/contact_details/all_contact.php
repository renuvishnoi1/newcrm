
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                           <!--  <h5 class="content-header-title float-left pr-1 mb-0">Input</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Form Elements</a>
                                    </li>
                                    <li class="breadcrumb-item active">Input
                                    </li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
       <div class="card">
       
        <!-- /.card-header -->
         <div class="card-body">
                   <br>
                   <div class="table-responsive">
                    <table id="book-table" class="table zero-configuration">
                     <thead>
                       <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Position</th>
                        <th>Last Login</th>
                        <th>Active</th>
                        <th>Action</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($records as $value){
                       ?>
                       <tr>
                        <td>
                          <?php if($value['profile_image'] !=''){
                            ?> <img src="<?php echo base_url('assets/uploads/profile_image/thumbnail/'); ?><?php echo $value['profile_image']; ?>" alt="profile image"  width="40" height="40" class="rounded-circle"><?php 
                          }else{?>
                            <img src="" alt="profile image"  width="40" height="40" class="rounded-circle">
                         <?php  } ?>
                         
                          <a href="<?php echo base_url('admin/edit_contact/') ?><?php echo $value['id']; ?>"><?php echo $value['firstname']; ?></a>
                        </td>
                        <td><?php echo $value['lastname']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['phonenumber']; ?></td>                        
                        <td><?php echo $value['title']; ?></td>

                        <td>
                          <?php echo $value['last_login']; ?></td>
                          <td></td>
                          <td>
                            <a href="<?php echo base_url('admin/edit_contact/') ?><?php echo $value['id']; ?>" title="show">
                              Edit
                            </a>
                            <a href="<?php echo base_url('admin/delete_contact/') ?><?php echo $value['userid']; ?>/<?php echo $value['id']; ?>" title="show" class="">delete</a>
                          </td>
                        </tr>
                        <?php 
                        
                      } ?>
                    </tbody>
                  </table> 
                </div>     
              </div>
       <div class="card-footer">
                 <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
               
                </div>
    </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->

              

            </div>
        </div>
    </div>
   
        <script type="text/javascript">
          $(document).ready(function() {
            $('#book-table').DataTable();
          });
        </script>

