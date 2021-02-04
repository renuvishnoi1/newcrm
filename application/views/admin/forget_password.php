<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bacend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bacend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bacend/plugins/toastr/toastr.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bacend/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
  <div class="content-wrapper" style="margin-left: 0px;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?=@$page_title?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"></li>
              <li class="breadcrumb-item"></li>
              <li class="breadcrumb-item active"><?=@$page_title?></li>
            </ol>
          </div><!-- /.col -->  
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
         <div class="row justify-content-center">
    <div class="col-6">
       
	   
	   <?php echo form_open('admin/auth/doforget', array('id' => 'passwordForm','onsubmit' =>'return validate()'))?>
<div class="form-group">
<?php if($this->session->flashdata('message')) {?>
 <label><span style="color: #CC6633"><?php echo $this->session->flashdata('message');?><span></label>
<?php }?>

</div>
<h4>Forget pasword</h4>
<div class="form-group">
    <label for="txtLoginid">Email Id</label>
     <input name="emailid" type="email2" size="25" placeholder="Enter email" class="form-control" value="<?php echo set_value('emailid');?>" />
	 <span style="color:red"><?php echo form_error('emailid');?></span>
	 
     </div>
      
  <button type="submit" class="btn btn-primary">Submit</button>
   <?php echo form_close(); ?>
    </div>
</div>
          <!-- ./col -->
       
      </div>           
    </section>
<!-- jQuery -->
<script src="<?php echo base_url();?>assets/bacend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/bacend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/bacend/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/bacend/dist/js/adminlte.min.js"></script>
<script type="text/javascript">
   $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('#loginform').submit(function(e){
      e.preventDefault();
     var formdata=new FormData(this);
     $.ajax({
          url:'<?php echo base_url();?>admin/auth/login',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            if(data=='error'){
              toastr.error('Required Email and Password...');
            }else if(data=='success'){
              toastr.success('Login Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }else{
              toastr.error('Wrong Email and Password...');
            }
          }
     });
    });
</script>
<?php if($this->session->flashdata('success')){ ?>
<script type="text/javascript">
  var msg='<?php echo $this->session->flashdata("success");?>';
  toastr.success(msg);
</script>
<?php } ?>
</div >
</html>
