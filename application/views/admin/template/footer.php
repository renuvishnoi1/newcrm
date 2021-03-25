  <!-- demo chat-->
    
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/vendors.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

 
    <!-- BEGIN: Page Vendor JS-->
   

     <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
     <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page Vendor JS-->
       <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/components.js"></script>
    <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->
    <!-- BEGIN: Page JS-->
    <!-- <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script> -->
    <!-- END: Page JS-->
    <script src="<?php echo base_url();?>assets/backend/app-assets/vendors/js/forms/select/select2.full.min.js"></script>

     <script src="<?php echo base_url();?>assets/backend/app-assets/js/scripts/forms/select/form-select2.js"></script>
   

     <!--  multiselect-->
     <!-- <script type="text/javascript">
         $(document).ready(function() {
    $('.select2').select2();
});
     </script> -->
     
     <!-- add lead -->
     <script type="text/javascript">
         $(function () {
    $('#lastcontact').hide();

    //show it when the checkbox is clicked
    $('input[name="contacted_today"]').on('click', function () {
        if ($(this).prop('checked')) {
            $('#lastcontact').fadeIn();
        } else {
            $('#lastcontact').hide();
        }
    });
});
     </script>
         <!-- ajax start -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    var dataJson = { [csrfName]: csrfHash };
            var datatable = $('#lead_data').DataTable({
                "processing":true,
                "serverside":true,
                "order":[],
                "ajax":{
                    url:"<?php echo base_url().'admin/fetch_lead'; ?>",
                    type:"POST",
                    data: dataJson,
                },"columnDef":[
                {
                    "targets":[0,3,4],
                    "ordertable":false,
                },
                ],
            })
        });
    </script>
    <!-- ajax cdn end -->


    
  <!-- calender -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script> -->
      
  <!--  <script type="text/javascript">
       document.getElementById('yourBox').onchange = function() {
    document.getElementById('yourText').disabled = !this.checked;
};
   </script>  -->    
  

<script type="text/javascript">
    /* Create new template in contract module */
$(".crud-submit").click(function(e){


    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var name = $("#name").val();

    var content = $("#content").val();
 var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

    var dataJson = { [csrfName]: csrfHash, name:name,content:content,"type":"contract"};
    $.ajax({
        type:'POST',
        url: form_action,
        data:dataJson,
        success:function(data){
            $('#alert-msg').html('<div class="alert alert-success text-center">Data saved successfully!</div>');
            //$("#create-item").modal('hide');
        }
    });


});

</script>
<!-- contract comment save -->
<!-- <script type="text/javascript">
    $(".comment-submit").click(function(e){


    e.preventDefault();
    var form_action = "<?php echo base_url().'admin/store_contarct_comment_data'; ?>";

    var content = $("#content").val();
    //alert(content);
    var contract_id= $('#contract_id').val();
    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

    var dataJson = { [csrfName]: csrfHash,content:content,contract_id:contract_id};
    $.ajax({
        type:'POST',
        url: form_action,
        data:dataJson,
        success:function(data){
             //$('#div_id').html(response);
           location.reload();
           
        }
    });


});
</script> -->

</body>
<!-- END: Body-->

</html>