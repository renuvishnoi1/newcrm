
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
     <!--    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact List</li>
            </ol>
          </div>
        </div> -->
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h4><?php echo $contact->firstname." ".$contact->lastname; ?></h4>
          <h6><?php echo $contact->company; ?></h6>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="<?php echo base_url('admin/update_contact'); ?>" method="POST" enctype="multipart/form-data">
           <div class="row">          
              <div class="col-md-6">
                 <div class="form-group">
                  <label>Profile Image</label>
               <input type="file" name="image" class="form-control">
               </div>
                <div class="form-group">
                  <label>First Name</label>
               <input type="text" name="firstname" class="form-control" value="<?php echo $contact->firstname; ?>">
               <span class="text-danger"><?php echo form_error('firstname'); ?></span>
                </div>
                <div class="form-group">
                  <label>Position</label>
               <input type="text" name="title" class="form-control" value="<?php echo $contact->title; ?>">
               <span class="text-danger"><?php echo form_error('title'); ?></span>
                </div>
                 <div class="form-group">
                  <label>Phone</label>
               <input type="text" name="phonenumber" class="form-control" value="<?php echo $contact->phonenumber; ?>">
               <span class="text-danger"><?php echo form_error('phonenumber'); ?></span>               
              </div>
              <div class="form-group"> <button class="btn btn-info only-save customer-form-submiter">
            Save </button>
              </div>
            </div>
              <div class="col-md-6">
                 <div class="form-group">
                  <label>Last Name</label>
               <input type="text" name="lastname" class="form-control" value="<?php echo $contact->lastname; ?>">
               <span class="text-danger"><?php echo form_error('lastname'); ?></span>
                </div>
                <div class="form-group">
                  <label>Email</label>
               <input type="text" name="email" class="form-control" value="<?php echo $contact->email; ?>">
               <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                 <div class="form-group">
                  <label>Direction</label>
                  <select name="direction" class="form-control">
                <option value=""></option>
                <option value="ltr" <?php if(isset($contact) && $contact->direction == 'ltr'){echo 'selected';} ?>>LTR</option>
                <option value="rtl" <?php if(isset($contact) && $contact->direction == 'rtl'){echo 'selected';} ?>>RTL</option>
                </select>
               <span class="text-danger"><?php echo form_error('direction'); ?></span>
                </div>
                    <div class="form-group">
                  <label>Password</label>
               <input type="text" name="password" class="form-control" >
               <span class="text-danger"><?php echo form_error('password'); ?></span>
               <input type="hidden" name="id" value="<?php echo $contact->id; ?>">
               <input type="hidden" name="userid" value="<?php echo $contact->userid; ?>"> 
              </div>
              </div>
         
    </div>
   
  </form>
      </div>
       <div class="card-footer">
                 <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
               
                </div>
    </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
 


 <script type="text/javascript">
        $(document).ready(function() {
            $('.group').select2();
        });

    </script>