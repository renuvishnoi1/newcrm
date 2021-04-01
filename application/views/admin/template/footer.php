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
     <script type="text/javascript" src="<?php echo base_url().'assets1/js/jquery.min.js'; ?>"></script>       
     <script type="text/javascript" src="<?php echo base_url().'assets1/js/moment.min.js'; ?>"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script  src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script> -->


    

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
   
<!-- <script type="text/javascript" src="<?php echo base_url().'assets1/js/bootstrap.min.js'; ?>"></script>   -->    
    <script type="text/javascript" src="<?php echo base_url().'assets1/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'assets1/plugins/fullcalendar/fullcalendar.js'; ?>"></script> 
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
<script type="text/javascript">
        var get_data        = '<?php echo $get_data; ?>';
        //console.log(get_data)
        var backend_url     = '<?php echo base_url(); ?>';

        $(document).ready(function() {
            $('.date-picker').datepicker();
            $('#calendarIO').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: moment().format('YYYY-MM-DD'),
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    $('#create_modal input[name=start]').val(moment(start).format('YYYY-MM-DD'));
                    $('#create_modal input[name=end]').val(moment(end).format('YYYY-MM-DD'));
                    $('#create_modal').modal('show');
                    save();
                    $('#calendarIO').fullCalendar('unselect');
                },
                eventDrop: function(event, delta, revertFunc) { // si changement de position
                    editDropResize(event);
                },
                eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                    editDropResize(event);
                },
                eventClick: function(event, element)
                {
                    deteil(event);
                    editData(event);
                    deleteData(event);
                },
                events: JSON.parse(get_data)
            });
        });

        $(document).on('click', '.add_calendar', function(){
            $('#create_modal input[name=calendar_id]').val(0);
            $('#create_modal').modal('show');  
        })

        $(document).on('submit', '#form_create', function(){
//alert('ds');
            var element = $(this);
            var eventData;
            $.ajax({
                url     : backend_url+'admin/Calendar/save',
                type    : element.attr('method'),
                data    : element.serialize(),
                dataType: 'JSON',
                beforeSend: function()
                {
                    element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                },
                success: function(data)
                {
                    if(data.status)
                    {   
                        eventData = {
                            id          : data.id,
                            title       : $('#create_modal input[name=title]').val(),
                            description : $('#create_modal textarea[name=description]').val(),
                            start       : moment($('#create_modal input[name=start]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            end         : moment($('#create_modal input[name=end]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            color       : $('#create_modal select[name=color]').val()
                        };
                        $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                        $('#create_modal').modal('hide');
                        element[0].reset();
                        $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                    }
                    else
                    {
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html(data.notif);
                    }
                    element.find('button[type=submit]').html('Submit');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    element.find('button[type=submit]').html('Submit');
                    element.find('.alert').css('display', 'block');
                    element.find('.alert').html('Wrong server, please save again');
                }         
            });
            return false;
        })

        function editDropResize(event)
        {
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if(event.end)
            {
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            }
            else
            {
                end = start;
            }
         
            $.ajax({
                url     : backend_url+'admin/calendar/save',
                type    : 'POST',
                data    : 'calendar_id='+event.eventid+'&title='+event.title+'&start_date='+start+'&end_date='+end,
                dataType: 'JSON',
                beforeSend: function()
                {
                },
                success: function(data)
                {
                    if(data.status)
                    {   
                        $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html('Data success update');
                    }
                    else
                    {
                        $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Data cant update');
                    }
             
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Wrong server, please save again');
                }         
            });
        }

        function save()
        {
            $('#form_create').submit(function(){
                var element = $(this);
                //alert(element.serialize());
                var eventData;
                $.ajax({
                    url     : backend_url+'admin/calendar/save',
                    type    : element.attr('method'),
                    data    : element.serialize(),
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                        element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                    },
                    success: function(data)
                    {
                        //alert(data);
                        if(data.status)
                        {  
                        location.reload(); 
                            eventData = {
                                id          : data.id,
                                title       : $('#create_modal input[name=title]').val(),
                                description : $('#create_modal textarea[name=description]').val(),
                                start       : moment($('#create_modal input[name=start]').val()).format('dd-mm-yyyy HH:mm:ss'),
                                end         : moment($('#create_modal input[name=end]').val()).format('dd-mm-yyyy HH:mm:ss'),
                                color       : $('#create_modal select[name=color]').val()
                            };
                            $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                            $('#create_modal').modal('hide');
                            element[0].reset();
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        }
                        else
                        {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                        }
                        element.find('button[type=submit]').html('Submit');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        element.find('button[type=submit]').html('Submit');
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html('Wrong server, please save again');
                    }         
                });
                return false;
            })
        }

        function deteil(event)
        {
            $('#create_modal input[name=calendar_id]').val(event.id);
            $('#create_modal input[name=start]').val(moment(event.start).format('YYYY-MM-DD'));
            $('#create_modal input[name=end]').val(moment(event.end).format('YYYY-MM-DD'));
            $('#create_modal input[name=title]').val(event.title);
            $('#create_modal input[name=description]').val(event.description);
            $('#create_modal select[name=color]').val(event.color);
            $('#create_modal .delete_calendar').show();
            $('#create_modal').modal('show');
        }

        function editData(event)
        {
            $('#form_create').submit(function(){
                var element = $(this);
                //alert(element.serialize());
                var eventData;
                $.ajax({
                    url     : backend_url+'admin/calendar/save',
                    type    : element.attr('method'),
                    data    : element.serialize(),
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                        element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                    },
                    success: function(data)
                    { //alert(data);

                        if(data.status)
                        {  
                             location.reload();
                            event.title         = $('#create_modal input[name=title]').val();
                            event.description   = $('#create_modal textarea[name=description]').val();
                            event.start         = moment($('#create_modal input[name=start]').val()).format('dd-mm-yyyy HH:mm:ss');
                            event.end           = moment($('#create_modal input[name=end]').val()).format('dd-mm-yyyy HH:mm:ss');
                            event.color         = $('#create_modal select[name=color]').val();
                            $('#calendarIO').fullCalendar('updateEvent', event);

                            $('#create_modal').modal('hide');

                            element[0].reset();

                            $('#create_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);

                        }
                        else
                        {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                        }
                        element.find('button[type=submit]').html('Submit');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        element.find('button[type=submit]').html('Submit');
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html('Wrong server, please save again');
                    }         
                });
                return false;
            })
        }

        function deleteData(event)
        {
            //alert(event.id);
            $('#create_modal .delete_calendar').click(function(){
                 var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
                csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
               
                 var id = event.id;
              
                //alert(id);
                 var dataJson = { [csrfName]: csrfHash, id:id};
                $.ajax({
                    url     : backend_url+'admin/calendar/delete',
                    type    : 'POST',
                    data    : dataJson,
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                    },
                    success: function(data)
                    {
                        if(data.status)
                        {   
                            $('#calendarIO').fullCalendar('removeEvents',event._id);
                            $('#create_modal').modal('hide');
                            $('#form_create')[0].reset();
                            $('#create_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        }
                        else
                        {
                            $('#form_create').find('.alert').css('display', 'block');
                            $('#form_create').find('.alert').html(data.notif);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('#form_create').find('.alert').css('display', 'block');
                        $('#form_create').find('.alert').html('Wrong server, please save again');
                    }         
                });
            })
        }

    </script>
</body>
<!-- END: Body-->

</html>