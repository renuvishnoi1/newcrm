 <!-- BEGIN: Content-->
 <div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <!-- <h5 class="content-header-title float-left pr-1 mb-0">Input</h5> -->
                           <!--  <div class="breadcrumb-wrapper col-12">
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
                                <div class="card-header">
                                  <h4 class="card-title">#<?php echo $leads->id."-".$leads->name; ?></h4>
                                </div>
                                <div class="card-content">
                                  <div class="card-body">
                                    <form action="<?php echo base_url('admin/update_lead'); ?>" method="POST">
                                     <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                     <div class="row">
                                      <div class="col-md-4"><h4>Lead Information</h4>

                                        <b>Name</b>
                                        <p><?php if($leads->name != ''){ echo $leads->name;} else{ echo "-";}?></p>
                                        <b>Position</b>
                                         <p><?php if($leads->title != ''){ echo $leads->title;} else{ echo "-";}?></p>
                                         <b>Email Address</b>
                                         <p><?php if($leads->email != ''){ echo $leads->email;} else{ echo "-";}?></p>
                                         <b>Website</b>
                                         <p><?php if($leads->website != ''){ echo $leads->website;} else{ echo "-";}?></p>
                                         <b>Phone</b>
                                         <p><?php if($leads->phonenumber != ''){ echo $leads->phonenumber;} else{ echo "-";}?></p>
                                         <b>Lead value</b>
                                         <p><?php if($leads->lead_value != ''){ echo $leads->lead_value;} else{ echo "-";} ?></p>
                                         <b>Company</b>
                                         <p><?php if($leads->company != ''){ echo $leads->company;} else{ echo "-";} ?></p>
                                         <b>Address</b>
                                         <p><?php if($leads->address != ''){ echo $leads->address;} else{ echo "-";} ?></p>
                                         <b>City</b>
                                         <p><?php if($leads->city != ''){ echo $leads->city;} else{ echo "-";} ?></p>
                                         <b>State</b>
                                         <p><?php if($leads->state != ''){ echo $leads->state;} else{ echo "-";} ?></p>
                                         <b>Country</b>
                                         <p><?php if($leads->country != ''){ echo $leads->country;} else{ echo "-";} ?></p>
                                         <b>Zip Code</b>
                                         <p><?php if($leads->zip != ''){ echo $leads->zip;} else{ echo "-";} ?></p>
                                         <b>Description</b>
                                         <p><?php if($leads->description != ''){ echo $leads->description;} else{ echo "-";} ?></p>
                                      </div>
                                      <div class="col-md-4">
                                        <h4>General Information</h4>                                        
                                        <b>Status</b>
                                        <p></p>                                        
                                        <b>Source</b>
                                        <p></p>                                       
                                        <b>Default Language</b>
                                         <p></p>                                        
                                        <b>Assigned</b>
                                        <p></p>
                                         <b>Tags</b>
                                        <p></p>
                                       <b>Created</b>
                                        <p></p>
                                        <b>Last Contact</b>
                                        <p></p>
                                        <b>Public</b>
                                        <p></p>
                                        
                                      </div>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Basic Inputs end -->




      </div>
    </div>
  </div>
  <!-- END: Content-->
