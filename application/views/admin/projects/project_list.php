<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <!-- <h5 class="content-header-title float-left pr-1 mb-0">DataTables</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Datatable
                                    </li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                  <!--   <div class="col-12">
                        <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
                    </div> -->
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                     <a href="<?php echo base_url('admin/add_projects'); ?>" type="button" class="btn btn-info mr-1 mb-1">New Project</a>
                                     
                                </div>
                                 <hr>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h4>Projects Summary</h4>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th> Project Name</th>
                                                        <th>Customer</th>                                                       
                                                        <th>Tags</th>
                                                        <th>Start Date</th>
                                                        <th>Deadline</th>
                                                        <th>Members</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($records as $key => $value) { ?>
                                                    <tr>
                                                        <td><?php echo $value->id; ?></td>
                                                        <td><?php echo $value->name; ?></td>
                                                        <td><?php echo $value->company; ?></td>
                                                        <td><?php foreach ($tag as $key => $tags) {
                                                          if (($tags->rel_id == $value->id) && ($tags->rel_type == 'project' )) { 
                                                            ?>
                                                          <span><?php echo $tags->tag_name; ?></span>
                                                           <?php 
                                                          }
                                                        } ?></td> 
                                                        <td><?php echo $value->start_date; ?></td>
                                                        <td><?php echo $value->deadline; ?></td> 
                                                        <td>
                                                            <?php foreach ($members as $key => $member) {
                                                                # code...
                                                             if($value->id == $member->project_id){
                                                                ?><a href=""><img class="round" src="<?=base_url()."assets/backend/profile_images/" ?><?php echo $member->profile_image; ?>" alt="avatar" height="40" width="40"></a>
                                                                <?php

                                                            }} ?></td>
                                                        <td><?php echo $value->status; ?></td> 
                                                        <td>
                                                            <a href="<?php echo base_url();?>admin/view_project/<?php echo $value->id; ?>" class="btn btn-icon btn-light glow mr-1 mb-1"><i class="bx bxs-show"></i></a> 
                   <a href="<?php echo base_url();?>admin/edit_project/<?php echo $value->id; ?>" class="btn btn-icon btn-primary mr-1 mb-1"><i class="bx bxs-pencil"></i></a> 
                  <a onclick="return confirm('Are you sure delete this record ?..')" href="<?php echo base_url();?>admin/delete_project/<?php echo $value->id; ?>" class="btn btn-icon btn-danger mr-1 mb-1"><i class="bx bx-trash-alt"></i></a>
              </td>                                                      
                                                    </tr> 
                                                    <?php 
                                                      
                                                    } ?>                                                
                                                </tbody>
                                               
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
               
            </div>
        </div>
    </div>