 <!-- BEGIN: Content-->
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                           <!--  <h5 class="content-header-title float-left pr-1 mb-0">Input</h5>
                            <div class="breadcrumb-wrapper col-12">
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
                                   <!--  <h4 class="card-title">Add New Item</h4> -->
                               </div>
                               <div class="card-content">
                                <div class="card-body">
                                    <form action="<?php echo base_url('admin/invoice_items/insert_item'); ?>" method="POST">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                        <div class="row">                                            
                                            <div class="col-md-6 border-right" >
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Subject</label>
                                                    <input type="text" class="form-control" id="basicInput" name="subject">
                                                    <span class="text-danger"><?php echo form_error('description'); ?></span>
                                                    
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Related To</label>
                                                    <select name="rel_type" id="rel_type" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="lead">Lead</option>
                                                        <option value="customer">Customer</option>
                                                    </select>
                                                    <span class="text-danger"><?php echo form_error('description'); ?></span>
                                                    
                                                </fieldset>
                                                <fieldset class="form-group" id="lead">
                                                    <label for="basicInput" >Lead</label>
                                                    <select name="rel_type" id="rel_type" class="form-control">
                                                      <option value="0"></option>
                                                      <?php foreach ($leads as $key => $value) {
                                                       ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?>></option><?php 
                                                   } ?>

                                               </select>
                                               <span class="text-danger"><?php echo form_error('description'); ?></span>

                                           </fieldset>
                                           <fieldset class="form-group" id="customer">
                                            <label for="basicInput" id="customer">Customer</label>
                                            <select name="rel_type" id="rel_type" class="form-control">
                                                <option value="0"></option>
                                                <?php foreach ($clients as $key => $value) {
                                                   ?><option value="<?php  echo $value['userid']; ?>"><?php echo $value['company']; ?>></option><?php 
                                               } ?>
                                           </select>
                                           <span class="text-danger"><?php echo form_error('description'); ?></span>

                                       </fieldset>
                                       <div class="row">
                                           <div class="col-md-6">
                                            <div class="form-group" ><label for="date" > <small class="req text-danger">* </small>Date</label><div class="input-group date"><input type="date"  name="date" class="form-control datepicker"  autocomplete="off"><div >

                                            </div></div></div>                          </div>
                                            <div class="col-md-6">
                                                <div class="form-group" ><label for="open_till" >Open Till</label><div class="input-group date"><input type="date"  name="open_till" class="form-control datepicker" autocomplete="off"><div class="input-group-addon">
                                                    <i class="fa fa-calendar calendar-icon"></i>
                                                </div></div></div>                          </div>
                                            </div>
                                            <div class="row">
                                               <div class="col-md-6">
                                                <div class="form-group" ><label for="date" > <small class="req text-danger">* </small> Currency</label>

                                                    <select class="form-control">
                                                        <option value=""></option>
                                                        <option value="1">USD</option>
                                                        <option value="2">EUR</option>
                                                    </select>
                                                </div></div>
                                                <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="open_till" >Discount Type</label>
                                                        <select class="form-control">

                                                            <option value=""></option>
                                                            <option value="1">Before Tax</option>
                                                            <option value="2">After Tax</option>

                                                        </select>
                                                    </div> </div>
                                                </div>
                                                <fieldset class="form-group">
                                                    <label for="helpInputTop"> Tags</label>
                                                    <select class="form-control">
                                                        <option value=""></option>
                                                        <?php foreach ($tags as $key => $value) {
                                                           ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?>></option><?php 
                                                       } ?>

                                                   </select>
                                               </fieldset>


                                           </div> 
                                           <div class="col-md-6 " >
                                            <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group" >
                                                    <label for="open_till" >Status</label>
                                                    <select class="form-control">

                                                        <option value="">Draft</option>
                                                        <option value="1">Sent</option>
                                                        <option value="2">Open</option>
                                                        <option>Revised</option>
                                                        <option>Declined</option>
                                                        <option>Accepted</option>

                                                    </select>
                                                </div> </div>

                                                <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="open_till" >Assignee</label>
                                                        <select class="form-control">

                                                            <option value=""></option>
                                                            <?php foreach ($tags as $key => $value) {
                                                               ?><option value="<?php  echo $value['staffid']; ?>"><?php echo $value['firstname']."" .$value['firstname']; ?>></option><?php 
                                                           } ?>

                                                       </select>
                                                   </div> </div></div>
                                                   <fieldset class="form-group">
                                                    <label for="disabledInput">To</label>
                                                    <input type="text" name="to" class="form-control">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="disabledInput">Address</label>
                                                    <textarea class="form-control" id="horizontalTextarea" rows="5" name="address"></textarea> 
                                                </fieldset>
                                                <div class="row">
                                                 <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="open_till" >City</label>
                                                        <input type="text" name="city" class="form-control">
                                                    </div> </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label for="open_till" >State</label>
                                                            <input type="text" name="state" class="form-control">
                                                        </div> </div>
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label for="open_till" >Country</label>
                                                            <select class="form-control">

                                                                <option value=""></option>
                                                                <?php foreach ($country as $key => $value) {
                                                                   ?><option value="<?php  echo $value['country_id']; ?>"><?php echo $value['short_name']; ?>></option><?php 
                                                               } ?>

                                                           </select>
                                                       </div> 
                                                   </div>

                                                   <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="open_till" >Zip Code</label>
                                                        <input type="text" name="state" class="form-control">
                                                    </div> </div>
                                                </div>
                                                <div class="row">
                                                 <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="open_till" >Email</label>
                                                        <input type="email" name="email" class="form-control">
                                                    </div> 
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="open_till" >Phone</label>
                                                        <input type="text" name="phone" class="form-control">
                                                    </div> </div>
                                                </div>
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

            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                               <!--  <h4 class="card-title">Add New Item</h4> -->
                           </div>
                           <div class="card-content">
                            <div class="card-body">
                                <div class="row">

                                 <div class="col-md-6">

                                    <div class="form-group" >
                                        <label for="open_till" >Items</label>
                                        <select class="form-control" onchange="yesnoCheck(this);">

                                            <option ></option>
                                            <?php foreach ($items as $key => $value) {
                                               ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['description']; ?>> <small class="req text-danger"><?php echo $value['long_description']; ?></small></option><?php 
                                           } ?>
                                       </select>
                                   </div> 

                               </div>
                               <div class="col-md-6">
                                  <p>Show quantity as</p>

                              </div>
                          </div>
                          <!-- Table head options start -->
                          <div class="row" id="table-head">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">

                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">

                                        </div>
                                        <!-- table head dark -->
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Description</th>
                                                        <th>Qty</th>
                                                        <th>Rate</th>
                                                        <th>Tax</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <div class=" control-group after-add-more">
                                                    <tr class="after-add-more">
                                                        <td> <fieldset class="form-group">
                                                            <textarea class="form-control" id="item_description" rows="3" placeholder="Description"></textarea>
                                                        </fieldset></td>
                                                        <td><fieldset class="form-group">
                                                            <textarea class="form-control" id="item_long_description" rows="3" placeholder="Long Description"></textarea>
                                                        </fieldset></td>
                                                        <td><fieldset class="form-group">
                                                            <input type="number" name="unit" id="item_unit" class="form-control">
                                                        </fieldset></td>
                                                        <td><fieldset class="form-group">
                                                            <input type="number" name="rate" id="item_rate" class="form-control">
                                                        </fieldset></td>
                                                        <td><fieldset class="form-group">
                                                            <select name="tax_rate" class="form-control" id="item_tax">
                                                                <option></option>
                                                                <?php foreach ($tax as $key => $value) {
                                                                   ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?>> </option><?php 
                                                               } ?>
                                                           </select>
                                                       </fieldset></td>
                                                       <td><button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button></td>
                                                   </tr></div>
                                                    <div class="copy hide" >
                                                    <tr class="control-group ">
                                                        <td> <fieldset class="form-group">
                                                            <textarea class="form-control" id="item_description" rows="3" placeholder="Description"></textarea>
                                                        </fieldset></td>
                                                        <td><fieldset class="form-group">
                                                            <textarea class="form-control" id="item_long_description" rows="3" placeholder="Long Description"></textarea>
                                                        </fieldset></td>
                                                        <td><fieldset class="form-group">
                                                            <input type="number" name="unit" id="item_unit" class="form-control">
                                                        </fieldset></td>
                                                        <td><fieldset class="form-group">
                                                            <input type="number" name="rate" id="item_rate" class="form-control">
                                                        </fieldset></td>
                                                        <td><fieldset class="form-group">
                                                            <select name="tax_rate" class="form-control" id="item_tax">
                                                                <option></option>
                                                                <?php foreach ($tax as $key => $value) {
                                                                   ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?>> </option><?php 
                                                               } ?>
                                                           </select>
                                                       </fieldset></td>
                                                       <td><button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button></td>
                                                   </tr>
                                                    </div>
   <!--  <div class="input-group control-group after-add-more">
          <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
          <div class="input-group-btn"> 
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
          </div>
        </div> -->


        


        <!-- Copy Fields -->
     <!--    <div class="copy hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div> -->
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- Table head options end -->
                       <!-- Table head options start -->
                       <div class="row" >
                        <div class="col-md-4"></div>
                        <div class="col-md-8" >
                          <table class="table text-right" >
                            <thead >
                                <tr>
                                    <th>Sub Total :</th>
                                    <th>$0.00</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td ><div class="col-md-7">
                                        <span class="bold">Discount</span>
                                    </div></td>
                                    <td>-$0.00</td>
                                </tr>
                                <tr>
                                    <td >Adjustment</td>
                                    <td>$0.00</td>
                                </tr>
                                <tr>
                                    <td >Total :</td>
                                    <td>$0.00</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <!-- Table head options end -->


                </div><button class="btn btn-info" type="">Save</button>
            </div>
        </div>
    </div>
</div>
</section>

</div>
</div>
</div>
<!-- END: Content-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script>
<script type="text/javascript">

    function yesnoCheck(that) {
        if (that.value != "") {

          var id = that.value;
   //alert(id);
   var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
   csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
   var dataJson = { [csrfName]: csrfHash, id:id};
   $.ajax({
    url:"<?php echo base_url('admin/ProposalController/getItemDataById'); ?>",
    type:"POST",
    data:dataJson,
    success:function(data)
    {
        data = jQuery.parseJSON(data);
        $('#item_description').html(data.description);
        $('#item_description').html(data.long_description);
        $('#item_unit').html(data.unit);
        $('#item_rate').html(data.rate);
        console.log(data);
    }
});

} else {
    document.getElementById("ifYes").style.display = "none";
}
}
</script>
<script type="text/javascript">
    $(document).ready(function(){
       $("#customer").hide();
       $("#lead").hide();
       $("#rel_type").on("change",function(){

        var selected_option = $(this).val();
        if(selected_option == '0'){
            $("#customer").hide();
            $("#lead").hide();
        }
        else if (selected_option == 'lead') {
            $('#lead').show();
            $("#customer").hide();
        }
        else if (selected_option == 'customer') {
           $('#customer').show();
           $("#lead").hide();
       }else{}
   });

   });

</script>

<script type="text/javascript">
    
</script>
