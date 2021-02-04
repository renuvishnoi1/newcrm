<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/toastr.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="loginform" method="post">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
	   <div id="formFooter">
      <a class="underlineHover" href="<?php echo base_url();?>admin/auth/forget_password">Forgot Password?</a>
    </div>

     <!--  <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/login/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/login/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/login/js/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/login/js/adminlte.min.js"></script>
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
</body>
</html>
