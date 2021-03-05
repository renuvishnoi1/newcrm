 <!-- BEGIN: Content-->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/core/menu/menu-types/vertical-menu.css">
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
                                    <form action="<?php echo base_url('admin/save_proposal'); ?>" method="POST">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                        <div class="row">                                            
                                            <div class="col-md-6 border-right" >
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Subject</label>
                                                    <input type="text" class="form-control" id="basicInput" name="subject">
                                                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                                                    
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Related To</label>
                                                    <select name="rel_type" id="rel_type" class="form-control">
                                                        <option value="0"></option>
                                                        <option value="lead">Lead</option>
                                                        <option value="customer">Customer</option>
                                                    </select>
                                                    <span class="text-danger"><?php echo form_error('rel_type'); ?></span>
                                                    
                                                </fieldset>
                                                <fieldset class="form-group" id="lead">
                                                    <label for="basicInput" >Lead</label>
                                                    <select name="rel_type" id="lead" class="form-control" onchange="leadget(this)">
                                                      <option value="0"></option>
                                                      <?php foreach ($leads as $key => $value) {
                                                       ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?>></option><?php 
                                                   } ?>

                                               </select>
                                               <span class="text-danger"><?php echo form_error('description'); ?></span>

                                           </fieldset>
                                           <fieldset class="form-group" id="customer">
                                            <label for="basicInput" >Customer</label>
                                            <select name="rel_type" id="customer" class="form-control" onchange="customerget(this)">
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
                                                <div class="form-group" ><label for="currency" > <small class="req text-danger">* </small> Currency</label>
                                                    <select class="form-control" name="currency">
                                                        <option value=""></option>
                                                        <option value="1">USD</option>
                                                        <option value="2">EUR</option>
                                                    </select>
                                                </div></div>
                                                <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="open_till" >Discount Type</label>
                                                        <select class="form-control" id="discount_type" name="discount_type">
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
                                               <div class="custom-control custom-switch custom-control-inline mb-1">
                                                <input type="checkbox" class="custom-control-input" name="allow_comments" id="customSwitch1" value="1">
                                                <label class="custom-control-label mr-1" for="customSwitch1">
                                                </label>
                                                <span>Allow Comments</span>
                                            </div>
                                        </div> 
                                        <div class="col-md-6 " >
                                            <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group" >
                                                    <label for="status" >Status</label>
                                                    <select class="form-control" name="status">
                                                        <option value="6">Draft</option>
                                                        <option value="4">Sent</option>
                                                        <option value="1">Open</option>
                                                        <option value="5">Revised</option>
                                                        <option value="2">Declined</option>
                                                        <option value="3">Accepted</option>
                                                    </select>
                                                </div> </div>

                                                <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="open_till" >Assignee</label>
                                                        <select class="form-control" name="assigned">
                                                            <option value=""></option>
                                                            <?php foreach ($tags as $key => $value) {
                                                               ?><option value="<?php  echo $value['staffid']; ?>"><?php echo $value['firstname']."" .$value['firstname']; ?>></option><?php 
                                                           } ?>
                                                       </select>
                                                   </div> </div></div>
                                                   <fieldset class="form-group">
                                                    <label for="disabledInput">To</label>
                                                    <input type="text" name="proposal_to" id="to" class="form-control">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="disabledInput">Address</label>
                                                    <textarea class="form-control" id="address" rows="5" name="address"></textarea> 
                                                </fieldset>
                                                <div class="row">
                                                 <div class="col-md-6">
                                                    <div class="form-group" >
                                                        <label for="open_till" >City</label>
                                                        <input type="text" name="city" id="city" class="form-control">
                                                    </div> </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label for="open_till" >State</label>
                                                            <input type="text" name="state" id="state" class="form-control">
                                                        </div> </div>
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label for="open_till" >Country</label>
                                                            <select class="form-control" id="country">
                                                                <option value=""></option>
                                                                <?php foreach ($country as $key => $value) {
                                                                   ?><option value="<?php  echo $value['country_id']; ?>"><?php echo $value['short_name']; ?>>

                                                                       </option><?php 
                                                                   } ?>

                                                               </select>
                                                           </div> 
                                                       </div>

                                                       <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label for="open_till" >Zip Code</label>
                                                            <input type="text" name="zip" id="zip"  class="form-control">
                                                        </div> </div>
                                                    </div>
                                                    <div class="row">
                                                     <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label for="open_till" >Email</label>
                                                            <input type="email" name="email" id="email" class="form-control">
                                                        </div> 
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group" >
                                                            <label for="open_till" >Phone</label>
                                                            <input type="text" name="phone" id="phonenumber" class="form-control">
                                                        </div> </div>
                                                    </div>
                                                </div>


                                            </div>

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
                                                       ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['description']; ?> 
                                                       <small ><?php echo $value['long_description']; ?></small>
                                                   </option>
                                                   <?php 
                                               } ?>
                                           </select>
                                       </div> 

                                   </div>
                                   <div class="col-md-6 ">
                                       <div class="mtop10">
                                        <span>Show quantity as:</span> <input type="radio" value="1" id="1" name="show_quantity_as" data-text="Qty" checked>
                                        <label for="1">Qty</label>


                                        <input type="radio" value="2" id="2" name="show_quantity_as" data-text="Hours" >
                                        <label for="2">Hours</label>


                                        <input type="radio" id="3" value="3" name="show_quantity_as" data-text="Qty/Hours" >
                                        <label for="3">Qty/Hours</label>

                                    </div>
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
                                                            <th align="center">Qty</th>
                                                            <th align="center">Rate</th>
                                                            <th>Tax</th>
                                                            <th>Amount</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbody">

                                                        <tr class="after-add-more">
                                                            <td> <fieldset class="form-group">
                                                                <textarea class="form-control" id="description" rows="3" placeholder="Description"></textarea>
                                                            </fieldset></td>
                                                            <td><fieldset class="form-group">
                                                                <textarea class="form-control" id="long_description" rows="3" placeholder="Long Description"></textarea>
                                                            </fieldset></td>
                                                            <td><fieldset class="form-group">
                                                                <input type="number" name="unit" id="unit" class="form-control">
                                                            </fieldset></td>
                                                            <td><fieldset class="form-group">
                                                                <input type="number" name="rate" id="rate" class="form-control">
                                                            </fieldset></td>
                                                            <td><fieldset class="form-group">
                                                                <select name="tax_rate" class="form-control" id="tax">
                                                                    <option>No Tax</option>
                                                                    <?php foreach ($tax as $key => $value) {
                                                                       ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['taxrate']; ?><small><?php echo $value['name']; ?></small></option><?php 
                                                                   } ?>
                                                               </select>
                                                           </fieldset>
                                                       </td>

                                                       <td><button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button></td>
                                                   </tr>

                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="dt">
                        <div class="copy hide" style="display: none;">
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
                                    <select name="tax_rate" class="form-control" id="tax">
                                        <option> </option>
                                        <?php foreach ($tax as $key => $value) {
                                           ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?>> </option><?php 
                                       } ?>
                                   </select>
                               </fieldset></td>
                               <td><button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button></td>
                           </tr>
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
                                <td ><div class="row">
                                    <div class="col-md-7">
                                        <span class="bold">Discount</span>
                                    </div> 
                                    <div class="col-md-5"><input type="text" name="" id="disc" class="form-control">
                                    </div>
                                </div>
                            </td>
                            <td>-$0.00</td>
                        </tr>
                        <tr>
                            <td ><div class="row">
                                <div class="col-md-7">
                                    <span class="bold">Adjustment</span>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                        </td>
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


    </div><button class="btn btn-info" type="">Save</button> </form>
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
          var html = $(".dt").html();


          alert(html);
        //  $(".tbody").append(html);
    });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });




  });

//     function discountFunction(){
//        var discount =  $('#discount_type').val()
//        if(discount ==""){
//         alert('You need to select discount type');
//     }

// }
$("#disc").focusout(function(){
    var discount =  $('#discount_type').val();
    if(discount ==""){
        alert('You need to select discount type');
        $('html, body').animate({
            scrollTop: $(".datepicker").offset().top
        }, 100);
    }
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
        $('#description').val(data.description);
        $('#description').val(data.long_description);
        $('#unit').val(data.unit);
        $('#rate').val(data.rate);
        $('#tax').val(data.taxid);
        console.log(data);
    }
});

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
    //$("[name='my-checkbox']").bootstrapSwitch();
    // on select customer show other field data
    function customerget(that) {
        if (that.value != "") {
          var id = that.value;
   //alert(id);
   var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
   csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
   var dataJson = { [csrfName]: csrfHash, id:id};
   $.ajax({
    url:"<?php echo base_url('admin/ProposalController/getCustomerDataById'); ?>",
    type:"POST",
    data:dataJson,
    success:function(data)
    {
    //alert(data);
    data = jQuery.parseJSON(data);

    $('#zip').val(data.zip);
    $('#country').val(data.country);
    $('#city').val(data.city);
    $('#phonenumber').val(data.phonenumber);
    $('#state').val(data.state);
    $('#address').val(data.address);
    $('#to').val(data.company);
    $('#email').val(data.website);
        //console.log(data);
    }
});

} 
}
// on select customer show other field data
function leadget(that) {
    if (that.value != "") {
      var id = that.value;
   //alert(id);
   var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
   csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
   var dataJson = { [csrfName]: csrfHash, id:id};
   $.ajax({
    url:"<?php echo base_url('admin/ProposalController/getLeadDataById'); ?>",
    type:"POST",
    data:dataJson,
    success:function(data)
    {//alert(data);
        data = jQuery.parseJSON(data);

        $('#zip').val(data.zip);
        $('#country').val(data.country);
        $('#city').val(data.city);
        $('#phonenumber').val(data.phonenumber);
        $('#state').val(data.state);
        $('#address').val(data.address);
        $('#to').val(data.name);
        $('#email').val(data.website);

        //console.log(data);
    }
});

} 
}
</script>
