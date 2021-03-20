 <?php $this->load->view('admin/projects/view_project_header'); ?>
 <div class="row "  >
    <div class=" col-md-6 border-right">
        <div class="col-md-12">
            <p class="project-info bold font-size-14"> Overview</p>
        </div>
        <div class="row ">
            <div class="col-md-7 " >
                <table class="table table-stripe">
                    <tbody>
                        <tr>
                            <td>Project </td>
                            <td><?php echo $project->name; ?></td>
                        </tr>
                        <tr>
                            <td>Customer</td>
                            <td ></td>
                        </tr>
                        <tr>
                            <td>Billing Type</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td ><?php echo $project->status; ?></td>
                        </tr>
                        <tr>
                            <td>Date Created</td>
                            <td><?php echo $project->project_created; ?></td>
                        </tr>
                        <tr>
                            <td>Start Date</td>
                            <td><?php echo $project->start_date; ?></td>
                        </tr>
                        <tr>
                            <td>Deadline</td>
                            <td><?php echo $project->deadline; ?></td>
                        </tr>
                        <tr>
                            <td>Total Logged Hours</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">
                <div class="set-size charts-container">
                  <div class="pie-wrapper progress-45 style-2">
                    <span class="label"><?php echo $project->progress; ?><span class="smaller">%</span></span>
                    <div class="pie">
                      <div class="left-side half-circle"></div>
                      <div class="right-side half-circle"></div>
                  </div>
                  <div class="shadow"></div>
              </div></div>
          </div>
      </div><hr>
      <div ><i class="bx bx-tag"></i><b>Tag</b>
         <?php foreach ($tag as $key => $value) {
            ?>
            <p></p>
        <?php } ?>
    </div>
    <hr>
    <div ><b>DESCRIPTION</b>
        <p><?php echo $project->description; ?></p>
    </div>
    <hr>
    <div><b>MEMBERS</b>
        <table><tr><td></td></tr></table>
        <?php foreach ($prject_member as $key => $value) {
            ?><div class="media-list">
                <div class="media">

                    <a class="pr-1" href="#">
                        <img class="round" src="<?=base_url()."assets/backend/profile_images/" ?><?php echo $value['profile_image']; ?>" alt="avatar" height="40" width="40" />
                    </a>
                    <div class="media-body"> 
                      <?php echo $value['email']; ?>
                  </div>
              </div>
              
              </div><?php
                                            # code...
          } ?> 
      </div>
  </div>
  
  <div class=" col-md-6">
     <div class="row">
         <div class="col-md-6">
            <div class="row">
                <div class="col-md-9"><p>Open Tasks</p></div>
                <div class="col-md-3"><i class="ficon bx bxs-check-circle" data-icon="calendar"></i></div>
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-9">
                  
                </div>
                <div class="col-md-3"><i class="ficon bx bx-calendar" data-icon="calendar"></i></div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view('admin/projects/view_project_footer'); ?>
