 <!-- BEGIN: Content-->
 <link rel="stylesheet"
 href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <style>
    body {
        font-family: arial;
    }
  /*  .task-board {
        background: #2c7cbc;
        display: inline-block;
        padding: 12px;
        border-radius: 3px;
        width: 550px;
        white-space: nowrap;
        overflow-x: scroll;
        min-height: 300px;
        }*/

        .status-card {
            width: 250px;
            margin-right: 8px;
            background: #e2e4e6;
            border-radius: 3px;
            display: inline-block;
            vertical-align: top;
            font-size: 0.9em;
        }

        .status-card:last-child {
            margin-right: 0px;
        }

        .card-header {
            width: 100%;
            padding: 10px 10px 0px 10px;
            box-sizing: border-box;
            border-radius: 3px;
            display: block;
            font-weight: bold;
        }

        .card-header-text {
            display: block;
        }

        ul.sortable {
            padding-bottom: 10px;
        }

        ul.sortable li:last-child {
            margin-bottom: 0px;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0px;
        }

        .text-row {
            padding: 15px 10px;
            margin: 10px;
            background: #fff;
            box-sizing: border-box;
            border-radius: 3px;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
            font-size: 0.8em;
            white-space: normal;
            line-height: 20px;
        }

        .ui-sortable-placeholder {
            visibility: inherit !important;
            background: transparent;
            border: #666 2px dashed;
        }
    </style>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">

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
                                   <a href="<?php echo base_url('admin/add_lead'); ?>" class="btn mr-1 mb-1 btn-info "> New Lead</a>
                                   <a href="<?php echo base_url('admin/import_leads'); ?>" class="btn mr-1 mb-1 btn-info ">Import Leads</a>
                                   <a href="<?php echo base_url('admin/leads'); ?>" class="btn mr-1 mb-1 btn-info ">Switch To List</a>
                               </div>
                               <div class="card-content">
                                <div class="card-body">
                                  <div class="task-board droppable row_position" >
                                    <?php
                                    foreach ($status as $statusRow) {

                                        ?>
                                        <div class="status-card row_position_tr" id="<?php echo $statusRow->id; ?>">
                                            <div class="card-header" id="category">
                                                <span class="card-header-text"><?php echo $statusRow->name; ?></span>
                                            </div>
                                            <ul class="sortable ui-sortable"
                                            id="sort<?php echo $statusRow->id; ?>"
                                            data-status-id="<?php echo $statusRow->id; ?>">
                                            <?php
                                            if (! empty($leads) ) {

                                                foreach ($leads as $key=> $leadRow) {
                                                    if($statusRow->id == $leadRow->status){
                                                        ?> <li class="text-row ui-sortable-handle"
                                                        data-task-id="<?php echo $leadRow->id; ?>"><div class="card collapse-icon accordion-icon-rotate">

                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="accordion" id="cardAccordion<?php echo  $key; ?>">
                                                                        <div class="card">
                                                                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne<?php echo  $key; ?>" aria-expanded="false" aria-controls="collapseOne" role="button">
                                                                                <span class="collapsed collapse-title"><?php echo $leadRow->name; ?> </span>
                                                                            </div>
                                                                            <div id="collapseOne<?php echo  $key; ?>" class="collapse pt-1" aria-labelledby="headingOne" data-parent="#cardAccordion<?php echo  $key; ?>">
                                                                                <div class="card-body">
                                                                                    <hr>
                                                                                    <p>Position</p>
                                                                                    <p></p>
                                                                                    <p>Email Address</p>
                                                                                    <p><?php echo $leadRow->email; ?></p>
                                                                                    <p>Website</p>
                                                                                    <p><?php echo $leadRow->website; ?></p>
                                                                                    <p>Phone</p>
                                                                                    <p><?php echo $leadRow->phonenumber; ?></p>
                                                                                    <p>Company</p>
                                                                                    <p><?php echo $leadRow->company; ?></p>
                                                                                    <p>Address</p>
                                                                                    <p><?php echo $leadRow->address; ?></p>
                                                                                    <p>City</p>
                                                                                    <p><?php echo $leadRow->city; ?></p>
                                                                                    <p>State</p>
                                                                                    <p><?php echo $leadRow->state; ?></p>
                                                                                    <p>Country</p>
                                                                                    <p><?php echo $leadRow->country; ?></p>
                                                                                    <p>Zip Code</p>
                                                                                    <p><?php echo $leadRow->zip; ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div></li>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>


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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
  $(document).ready(function(){
   var url = "<?php echo base_url('admin/LeadsController/updateLeadStatus'); ?>";
   $('ul[id^="sort"]').sortable({
       connectWith: ".sortable",
       receive: function (e, ui) {
           var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
           csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
           var status_id = $(ui.item).parent(".sortable").data("status-id");

           var lead_id = $(ui.item).data("task-id");

           var dataJson = { [csrfName]: csrfHash ,status_id:status_id,lead_id:lead_id};
           $.ajax({
               url: url,
               type:"POST",
               data: dataJson,
               success: function(response){
                    //alert(response);
                }
            });
       }

   }).disableSelection();

   $( ".row_position" ).sortable({
    delay: 150,
    stop: function() {
        var selectedData = new Array();
        $('.row_position_tr').each(function() {
            selectedData.push($(this).attr("id"));
        });
        updateOrder(selectedData);
    }
});


   function updateOrder(data) {

    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    var dataJson = { [csrfName]: csrfHash ,position:data};
    //alert(dataJson);
    $.ajax({
        url:"<?php echo base_url('admin/LeadsController/updateOrder'); ?>",
        type:'POST',
        data:dataJson,
        success:function(resp){
                //alert(resp);
            }
        })
}
} );
  $('#category').click(function(){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
});

</script>