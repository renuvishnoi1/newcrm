 <!-- BEGIN: Content-->
 <style>
    body {
        font-family: arial;
    }
    .task-board {
        background: #2c7cbc;
        display: inline-block;
        padding: 12px;
        border-radius: 3px;
        width: 550px;
        white-space: nowrap;
        overflow-x: scroll;
        min-height: 300px;
    }

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
                             <!--  <h4 class="card-title">Add new lead</h4> -->
                         </div>
                         <div class="card-content">
                            <div class="card-body">
                              <div class="task-board">
                                <?php
                                foreach ($status as $statusRow) {
                //$taskResult = $projectManagement->getProjectTaskByStatus($statusRow["id"], $projectName);
                                    ?>
                                    <div class="status-card">
                                        <div class="card-header">
                                            <span class="card-header-text"><?php echo $statusRow->name; ?></span>
                                        </div>
                                        <ul class="sortable ui-sortable"
                                        id="sort<?php echo $statusRow->id; ?>"
                                        data-status-id="<?php echo $statusRow->id; ?>">
                                        <?php
                                        if (! empty($taskResult)) {
                                            foreach ($taskResult as $taskRow) {
                                                ?>
                                                
                                                <li class="text-row ui-sortable-handle"
                                                data-task-id="<?php echo $taskRow["id"]; ?>"><?php echo $taskRow["title"]; ?></li>
                                                <?php
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
<script>
    $(document).ready(function(){
       $( "#page_list" ).sortable({
          placeholder : "ui-state-highlight",
          update  : function(event, ui)
          {
             var page_id_array = new Array();
             $('#page_list li').each(function(){
                page_id_array.push($(this).attr("id"));
            });
             $.ajax({
                url:"<?php echo base_url(); ?>",
                method:"POST",
                data:{page_id_array:page_id_array},
                success:function(data)
                {
                   alert(data);
               }
           });
         }
     });

   });
</script>