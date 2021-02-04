 <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">Admin</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/bacend/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bacend/dist/js/select2.full.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/bacend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/bacend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/bacend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/bacend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>assets/bacend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>assets/bacend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/bacend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/bacend/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/bacend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/bacend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/bacend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/bacend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url();?>assets/bacend/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/bacend/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/bacend/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url();?>assets/bacend/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/bacend/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/bacend/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/bacend/plugins/summernote/summernote-bs4.min.js"></script>



<style>
  .toast-message{font-size: 15px;}
  .note-editing-area{min-height: 200px}
</style>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
  
</script>
<?php if($this->session->flashdata('success')){ ?>
<script type="text/javascript">
  var msg='<?php echo $this->session->flashdata("success");?>';
  toastr.success(msg);
</script>
 
<?php } ?>
</script>
<?php if($this->session->flashdata('error')){ ?>
<script type="text/javascript">
  var msg='<?php echo $this->session->flashdata("error");?>';
  toastr.error(msg);
</script>
<?php } ?>
<script type="text/javascript">
  $('.usertype').change(function(){
    if($(this).val()==2){
      $('.docotor').show();
    }else{
       $('.docotor').hide();
    }
    
  });
</script>
<script type="text/javascript">
var selected = new Array();

$(document).ready(function() {
$('.export_user').click(function(){
  var favorite = [];
            $.each($("input[name='checkname']:checked"), function(){
                favorite.push($(this).val());
            });
            if(favorite.length>0){
              $.ajax({
              url:'<?php echo base_url();?>admin/setting/export_user_list',
              type:'post',
              data:{'id':favorite,'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
              success:function(data){
             window.location.href='<?php echo base_url();?>admin/setting/user_export_data/';
              }
            });
              
            }else{
              var msg='Please Select any record';
              toastr.error(msg);
            }
   
 });
$('.remove_galler_city').click(function(){
              var id=$(this).data('id');
              $(this).parent().remove();
              $.ajax({
              url:'<?php echo base_url();?>admin/city/city_galler_remove',
              type:'post',
              data:{'id':id,'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
              success:function(data){
              var msg='Delete Successfully';
              toastr.success(msg);
              }
            });
              
           
   
 });
$('.remove_galler_menument').click(function(){
              var id=$(this).data('id');
              $(this).parent().remove();
              $.ajax({
              url:'<?php echo base_url();?>admin/menuments/menument_galler_remove',
              type:'post',
              data:{'id':id,'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
              success:function(data){
              var msg='Delete Successfully';
              toastr.success(msg);
              }
            });
   
 });
$('.remove_galler_submenument').click(function(){
              var id=$(this).data('id');
              $(this).parent().remove();
              $.ajax({
              url:'<?php echo base_url();?>admin/submenuments/submenument_galler_remove',
              type:'post',
              data:{'id':id,'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
              success:function(data){
              var msg='Delete Successfully';
              toastr.success(msg);
              }
            });
   
 });
 $('.city_list').change(function(){
              var id=$(this).val();
              $.ajax({
              url:'<?php echo base_url();?>admin/submenuments/get_menument_by_city',
              type:'post',
              data:{'id':id,'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
              success:function(data){
              $('.menuments').html(data);
              }
            });
              
           
   
 });
 

});

</script>

<script>   
   $(document).ready(function () {
        $("#ckbCheckAll").click(function () {
           $(".checkboxall").prop("checked",$(this).prop("checked"));
        });
    });
 </script> 
<script type="text/javascript">
   
    $('#update_header_logo').submit(function(e){
      e.preventDefault();
     var formdata=new FormData(this);
     $.ajax({
          url:'<?php echo base_url();?>admin/setting/update_logo_header',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            if(data=='success'){
              toastr.success('Setting Header Update Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }
          }
     });
    });
</script>
<script type="text/javascript">
   
    $('#update_footer_logo').submit(function(e){
      e.preventDefault();
     var formdata=new FormData(this);
     $.ajax({
          url:'<?php echo base_url();?>admin/setting/update_logo_footer',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            if(data=='success'){
              toastr.success('Setting Footer Update Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }
          }
     });
    });
</script>
<script type="text/javascript">
   
    $('#update_setting').submit(function(e){
      e.preventDefault();
     var formdata=new FormData(this);
     $.ajax({
          url:'<?php echo base_url();?>admin/setting/update_setting',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            alert(data);
            if(data=='success'){
              toastr.success('Setting Update Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }
          }
     });
    });
</script>
 <script type="text/javascript">
   
    $('#insert_category').submit(function(e){
      e.preventDefault();
     var formdata=new FormData(this);
     $.ajax({
          url:'<?php echo base_url();?>admin/category/category_insert',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            if(data=='error'){
              toastr.error('Required Category Name');
            }else if(data=='success'){
              toastr.success('Category Add Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }
          }
     });
    });
</script>
<script type="text/javascript">
   
    $('#update_category').submit(function(e){
      e.preventDefault();
     var formdata=new FormData(this);
     $.ajax({
          url:'<?php echo base_url();?>admin/category/update_category',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            if(data=='error'){
              toastr.error('Required Category Name');
            }else if(data=='success'){
              toastr.success('Category Update Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }
          }
     });
    });
</script>
<script type="text/javascript">
   
    $('#insert_event').submit(function(e){
      e.preventDefault();
     var cke_editable=$('.Editor-editor').html();  
     var formdata=new FormData(this);
     formdata.append('description', cke_editable);
     $.ajax({
          url:'<?php echo base_url();?>admin/event/insert_event',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            if(data=='error'){
              toastr.error('All star fields are required...');
            }else if(data=='success'){
              toastr.success('Job Add Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }
          }
     });
    });
</script>
<script type="text/javascript">


    setTimeout(function(){
      
      $('.Editor-editor').html($('.des').html());
    },100);

    $('#update_event').submit(function(e){
      e.preventDefault();
      var cke_editable=$('.Editor-editor').html();
      
       
     var formdata=new FormData(this);
     formdata.append('description', cke_editable);
     $.ajax({
          url:'<?php echo base_url();?>admin/event/update_event',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            if(data=='error'){
              toastr.error('All star fields are required...');
            }else if(data=='success'){
              toastr.success('Image Update Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }
          }
     });
    });
    $('.category').change(function(){
      var category_id=$(this).val();
      $.ajax({
        url:'<?php echo base_url();?>admin/image/get_subcategory',
        type:'get',
        data:{'category_id':category_id},
        success:function(data){
          $('.subcategory').html(data);
        }
      });
    });
</script>
<script type="text/javascript">


    
    $('#insert_page').submit(function(e){
      e.preventDefault();
     /* var cke_editable=$('.Editor-editor').html();  */
     var formdata=new FormData(this);
     /*formdata.append('description', cke_editable);*/
     $.ajax({
          url:'<?php echo base_url();?>admin/setting/insert_page',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            if(data=='error'){
              toastr.error('All star fields are required...');
            }else if(data=='success'){
              toastr.success('Insert Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }else if(data=='slug available'){
              toastr.error('This Slug is already exist..');
              
            }
          }
     });
    });
     $('#update_page').submit(function(e){
      e.preventDefault();
     /* var cke_editable=$('.Editor-editor').html(); */ 
     var formdata=new FormData(this);
    /* formdata.append('description', cke_editable);*/
     $.ajax({
          url:'<?php echo base_url();?>admin/setting/update_page',
          type:'post',
          data:formdata,
          contentType: false,
          cache: false,
          processData:false,
          success:function(data){
            if(data=='error'){
              toastr.error('All star fields are required...');
            }else if(data=='success'){
              toastr.success('Update Successfully');
              setTimeout(function(){
                location.reload();
              },2000);
            }else if(data=='slug available'){
              toastr.error('This Slug is already exist..');
              
            }
          }
     });
    });
    
</script>
<script type="text/javascript">
  $('.remove_images').click(function(){
    if(confirm("Are you sure delete this image ?")){

    
    var id=$(this).data('id');
    $(this).parent().remove();
    $.ajax({
              url:'<?php echo base_url();?>admin/products/delete_product_images',
              type:'post',
              data:{'id':id,'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
              success:function(data){
               toastr.success('Delete Successfully');
              }
            });
  }
  }); $('.remove_event_images').click(function(){
    if(confirm("Are you sure delete this image ?")){

    
    var id=$(this).data('id');
    $(this).parent().remove();
    $.ajax({
              url:'<?php echo base_url();?>admin/event/delete_event_images',
              type:'post',
              data:{'id':id,'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
              success:function(data){
               toastr.success('Delete Successfully');
              }
            });
  }
  });
  
  $('.topcat').change(function(){
    
    
    var id=$(this).data('id');
    var val=$(this).val();
    $.ajax({
              url:'<?php echo base_url();?>admin/category/save_cat_top',
              type:'post',
              data:{'id':id,'val':val,'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
              success:function(data){
               toastr.success('Status change Successfully');
              }
            });
  
  });

 $('.near_by_address').keyup(function(){
    //alert('asdf');
    var address=$(this).val();

    $.ajax({
      url:'<?php echo base_url();?>admin/setting/get_address_by_address',
      type:'get',
      data:{'address':address},
      success:function(data){ 
        $('.view_address').html(data);
      }
    });
   });
    $('body').on('click','.append_address',function(){
    var address=$(this).text();
    var parent_category=$('.parent_category').val();
    $('.near_by_address').val(address);
    $('.view_address').html('');
    
   });
</script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script>
//pt start
  $(".onlychar").keypress(function(e) {
     if(e.which < 97 /* a */ || e.which > 122 /* z */) {
        e.preventDefault();
    }
});
$('.onlynum').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
});

</script> 
<script>
$( document ).ready(function() {
    $('.row_company').hide(); 
	if($('#driver-type').val() == 1) {
			$('.row_company').hide(); 
            $('.row_individual').show(); 
        } else if($('#driver-type').val() == 2){
           $('.row_individual').hide(); 
			 $('.row_company').show(); 
        } 
    $('#driver-type').change(function(){
        if($('#driver-type').val() == 1) {
			$('.row_company').hide(); 
            $('.row_individual').show(); 
        } else if($('#driver-type').val() == 2){
           $('.row_individual').hide(); 
			 $('.row_company').show(); 
        } 
    });
	
	//For Aggrement Filed Inside Driver
	$('#iban-no').hide();
	if($('#agreement').val() == 'yes'){ $('#iban-no').show();} 
	$('#agreement').change(function(){
	if($('#agreement').val() == 'yes') {
		$('#iban-no').show();}else{$('#iban-no').hide();} });
});


$(document).ready(function(){
    $("#driver-type").change(function(){
        var matchvalue = $(this).val(); 
		
        $.ajax({ 
			type: 'get',
			url:'<?php echo base_url();?>admin/driver/get_driver_details',
            data: {'matchvalue': matchvalue },
			success:function(data){
			$('#driver_name').html(data);
				}
        });
    });
}); 

</script>

<script>

// ----- Get Driver Or Users on User type Change in Setting Controller-----
$(document).ready(function(){
    $("#change-user-type").change(function(){
        var usertype = $(this).val(); 
		if(usertype == 'user'){
		$('#user-type-lable').html('Select Users');  
		}else if(usertype=='driver'){
		  $('#user-type-lable').html('Select Drivers');
		}else{ $('#user-type-lable').html('Select Users');}
		
        $.ajax({ 
			type: 'get',
			url:'<?php echo base_url();?>admin/setting/get_users',
            data: {'usertype': usertype },
			success:function(data){
			$('#user-types').html(data);
				}
        });
    });
}); 

</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

   
  })
</script>

<script>

    function changeStatus(action_type, controller, action) {
    var selected = [];
    var status;
    var $msg;
    $('#selected-drivers').val('');
    if (action_type == 'publish') {
        status = 'publish';
        $msg='Status Activeted Successfully';
        
    } else if (action_type == 'unpublish') {
        status = 'unpublish';
        $msg='Status Deactiveted Successfully';
        
    } else if (action_type == 'muldelete') {
        status = 'muldelete';
       $msg='Records Deleted Successfully';
    }
    else if (action_type == 'export') {
       $('.check:checked').each(function () {
            var combineId = $(this).attr('rel');
            selected.push(combineId);
            $('#selected-drivers').val(selected);
        });
        
        return false;
    }
    
    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    var URL = "<?php echo base_url();?>admin/"+ controller + "/" + action;
   
    var checkArr = $('.check').filter(':checked').length;
    if (checkArr != 0) {
        $('.check:checked').each(function () {
            var combineId = $(this).attr('rel');
            selected.push(combineId);
        });
        contentType = 'application/x-www-form-urlencoded; charset=UTF-8';
        $.ajax({
            url: URL,
            type: "post",
            dataType: 'html',
            contentType: contentType,
            data:  { [csrfName]: csrfHash, 'selected': selected, 'status': status},
            success: function (result) {
                $('.checkbox_error').fadeIn();
                var strHtml = '<div class="btn-success btn btn-sm"><button type="button" class="close" data-dismiss="alert"><i class="icon-close2" ></i><span class="sr-only">Close</span></button><span class="text-semibold">'+$msg+'</span></div>';
                $('.checkbox_error').html(strHtml);
                $('.listing-data').html(result);
                $('#example2').DataTable({
                    order: [],
                    columnDefs: [{orderable: false, targets: [0]}]
                });
            }
        });
    } else {
        $('.checkbox_error').fadeIn();
        var strHtml = '<div class="alert-danger btn btn-sm"><button type="button" class="close" data-dismiss="alert"><i class="icon-close2" ></i><span class="sr-only">Close</span></button><span class="text-semibold">Please select at least one checkbox</span></div>';
        $('.checkbox_error').html(strHtml);

    }
    setTimeout(function () {
        $('.checkbox_error').fadeOut();
    }, 2000);
}

</script>

<script language="javascript">
    $(function(){
        
	$("#selectall").click(function () {
		  $('.case').attr('checked', this.checked);
	});
	
	$(".case").click(function(){
		if($(this).length == $(this).prop("checked").length) {
			$("#selectall").attr("checked", "checked");
		} else {
			$("#selectall").removeAttr("checked");
		}

	});
});

</script>

<script >
function change_status(change_status_id) {
    var res = change_status_id.slice(7);
    $('#ok-div-'+res).show();
    $('#change-div-'+res).hide();
}

function change_status_drop(status_id) {
    
    var status=status_id.value;
    var id=status_id.id;
    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    $.ajax({ 
			type: 'post',
			url:'<?php echo base_url();?>admin/request/change_request_status',
            data: {[csrfName]: csrfHash,'id': id, 'status': status},
			success:function(data){
		        $('.status_change_msg').fadeIn();
                var strHtml = '<div class="btn-success btn btn-sm"><span>Status Updated Successfully !</span></div>';
                $('.status_change_msg').html(strHtml);
				}
        });
        setTimeout(function () {
        $('.status_change_msg').fadeOut();
    }, 2000);
}

$('.chang-status').hover(
    function() {
        var $this = $(this); // caching $(this)
        $this.data('defaultText', $this.text());
        $this.text("ClickToChange");
    },
    function() {
        var $this = $(this); // caching $(this)
        $this.text($this.data('defaultText'));
        
    }
);


</script>

<script>
  $(document).ready(function(){
    $("#pcategory_id").change(function(){
        var matchvalue = $(this).val(); 
        $.ajax({ 
			type: 'get',
			url:'<?php echo base_url();?>admin/product/get_subcategory',
            data: {'matchvalue': matchvalue },
			success:function(data){
			$('#sub_category_id').html(data);
				}
        });
    });
}); 
</script>

</body>
</html>
