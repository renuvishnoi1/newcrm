 <!-- BEGIN: Content-->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/app-assets/css/core/menu/menu-types/vertical-menu.css">
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
               <!--  <h4 class="card-title">Add New Item</h4> -->
             </div>
             <div class="card-content">
              <div class="card-body">
                <form  id="invoice_form" >
                  <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                  <div class="row">                                            
                    <div class="col-md-6 border-right" >
                      <fieldset class="form-group">
                        <label for="basicInput">Customer</label>
                        <select name="clientid" class="form-control ">
                         <option value="0"></option>
                         <?php foreach ($clients as $key => $value) {
                           ?><option value="<?php  echo $value['userid']; ?>"><?php echo $value['company']; ?></option><?php 
                         } ?>
                       </select>
                       <input type="hidden"  name="invoice_id" value="<?php echo $invoice->id; ?>">
                     </fieldset>
                     <hr>
                     <div class="col-md-12">
                      <a href="#"  data-toggle="modal" data-target="#billing_and_shipping_details"><i class="bx bxs-edit"></i></a>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p class="bold">Bill To</p>
                        <address>
                         <span class="billing_street"><?php echo $invoice->billing_street; ?></span><input type="hidden" name="billing_street" class="billing_street"><br>
                         <span class="billing_city"><?php echo $invoice->billing_city; ?></span><input type="hidden" name="billing_city" class="billing_city">,
                         <span class="billing_state"><?php echo $invoice->billing_state; ?></span><input type="hidden" name="billing_state" class="billing_state">
                         <br>
                         <span class="billing_country">
                          <?php foreach ($country as $key => $value) {
                            if ( $value['country_id'] == $invoice->billing_country)
                            {
                             ?><?php echo $value['short_name']; ?>
                             <input type="hidden" name="billing_country" class="billing_country" value="<?php echo $value['country_id']; ?>">
                             <?php
                           }

                         } ?>
                       </span>,
                       <span class="billing_zip"><?php echo $invoice->billing_zip; ?></span><input type="hidden" name="billing_zip" class="billing_zip">
                     </address>
                   </div>
                   <div class="col-md-6">
                     <p class="bold">Ship to</p>
                     <address>
                       <span class="shipping_street"><?php echo $invoice->shipping_street; ?></span><input type="hidden" name="shipping_street" value="<?php echo $invoice->shipping_street; ?>"><br>
                       <span class="shipping_city"><?php echo $invoice->shipping_city; ?></span><input type="hidden" name="shipping_city" value="<?php echo $invoice->shipping_city; ?>">,
                       <span class="shipping_state"><?php echo $invoice->shipping_state; ?></span><input type="hidden" name="shipping_state" value="<?php echo $invoice->shipping_state; ?>">
                       <br>
                       <span class="shipping_country"><?php foreach ($country as $key => $value) {
                            if ( $value['country_id'] == $invoice->shipping_country)
                            {
                             ?><?php echo $value['short_name']; ?>
                             <input type="hidden" name="shipping_country"  value="<?php echo $value['country_id']; ?>" >
                             <?php
                           }

                         } ?></span>,
                       <span class="shipping_zip"><?php echo $invoice->shipping_zip; ?></span><input type="hidden" name="shipping_zip" value="<?php echo $invoice->shipping_zip; ?>">
                     </address>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-md-12">
                     <div class="form-group" >
                      <label for="invoice" > <small class="req text-danger"> * </small> Invoice Number</label>
                      <div class="input-group date">
                        <input type="text" name="invoice_number" class="form-control datepicker"  autocomplete="off">
                        <div >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                 <div class="col-md-6">
                  <div class="form-group" >
                    <label for="date" > <small class="req text-danger">* </small> Invoice Date</label>
                    <div class="input-group date"><input type="date" id="date"  name="invoice_date" class="form-control datepicker"  autocomplete="off" value="<?php echo $invoice->date; ?>"><div >
                    </div></div></div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" ><label for="open_till" >Due Date</label><div class="input-group date"><input type="date"  name="due_date" id="open_till" class="form-control datepicker" autocomplete="off"><div class="input-group-addon" value="<?php echo $invoice->duedate; ?>">
                    </div>
                  </div>
                </div>                          
              </div>
            </div>                                                      
          </div> 
          <div class="col-md-6 " >
            <div class="row">
              <div class="col-md-12">
                <fieldset class="form-group">
                  <label for="helpInputTop"> Tags</label>
                  <select class="form-control select2" name="tag[]" id="tag" multiple>
                    <option value=""></option>
                    <?php foreach ($tags as $key => $value) {
                     ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?></option><?php 
                   } ?>
                 </select>
               </fieldset>
             </div>
           </div>
           <div class="row">
            <div class="col-md-12">
              <fieldset class="form-group">
                <label for="helpInputTop"> Allowed payment modes for this invoice</label>
                <select class="form-control select2" name="payment_modes[]"  multiple>
                  <?php $pay = unserialize($invoice->allowed_payment_modes); ?>
                  <option value=""></option>
                  <?php foreach ($payment_modes as $key => $value) {
                   ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?></option><?php 
                 } ?>
               </select>
             </fieldset>
           </div>
         </div>
         <div class="row">
           <div class="col-md-6">
            <div class="form-group" ><label for="currency" > <small class="req text-danger">* </small> Currency</label>
              <select class="form-control" name="currency" >
                <option value="0"></option>
                <?php foreach ($currencies as $key => $value) {
                 ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                 <?php 
               } ?>
             </select>
           </div></div>
           <div class="col-md-6">
            <div class="form-group" >
              <label for="open_till" >Sale Agent</label>
              <select class="form-control" id="sale_agent" name="sale_agent">
                <option value=""></option>
                <?php foreach ($sale_agent as $key => $value) {
                 ?><option value="<?php  echo $value['staffid']; ?>"><?php echo $value['firstname']." ".$value['lastname']; ?></option>
                 <?php 
               } ?>

             </select>
           </div> </div>
         </div>
         <div class="row">
           <div class="col-md-6">
            <div class="form-group" ><label for="" ><small class="req text-danger">* </small> Recurring Invoice?</label>
              <select class="form-control" name="recurring" id="recurring">
                <option value="0" <?php if ($Invoice->recurring == 0) { echo ' selected="selected"'; } ?>>No</option>
                <option value="1" <?php if ($Invoice->recurring == 1) { echo ' selected="selected"'; } ?>>Every 1 month</option>
                <option value="2" <?php if ($Invoice->recurring == 2) { echo ' selected="selected"'; } ?>>Every 2 month</option>
                <option value="3" <?php if ($Invoice->recurring == 3) { echo ' selected="selected"'; } ?>>Every 3 month</option>
                <option value="4" <?php if ($Invoice->recurring == 4) { echo ' selected="selected"'; } ?>>Every 4 month</option>
                <option value="5" <?php if ($Invoice->recurring == 5) { echo ' selected="selected"'; } ?>>Every 5 month</option>
                <option value="6" <?php if ($Invoice->recurring == 6) { echo ' selected="selected"'; } ?>>Every 6 month</option>
                <option value="7" <?php if ($Invoice->recurring == 7) { echo ' selected="selected"'; } ?>>Every 7 month</option>
                <option value="8" <?php if ($Invoice->recurring == 8) { echo ' selected="selected"'; } ?>>Every 8 month</option>
                <option value="9" <?php if ($Invoice->recurring == 9) { echo ' selected="selected"'; } ?>>Every 9 month</option>
                <option value="10" <?php if ($Invoice->recurring == 10) { echo ' selected="selected"'; } ?>>Every 10 month</option>
                <option value="11" <?php if ($Invoice->recurring == 11) { echo ' selected="selected"'; } ?>>Every 11 month</option>
                <option value="12" <?php if ($Invoice->recurring == 12) { echo ' selected="selected"'; } ?>>Every 12 month</option>
                <option value="custom" <?php if ($Invoice->recurring == 'custom') { echo ' selected="selected"'; } ?>>Custom</option>
              </select>
            </div></div>
            <div class="col-md-6">
              <div class="form-group" >
                <label for="discount_type" >Discount Type</label>
                <select class="form-control"  name="discount_type">
                  <option value=""></option>
                  <option value="1">Before Tax</option>
                  <option value="2">After Tax</option>
                </select>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group" >
                <input type="text" name="custom_recurring" id="custom_recurring" value="" class="form-control">
              </div> 
            </div>
            <div class="col-md-6">
              <div class="form-group" >
                <input type="text" name="recurring_type" id="recurring_type" class="form-control">
              </div> 
            </div>
          </div>
          <fieldset id="infinity">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <div class="checkbox">
                    <input type="checkbox" class="checkbox__input" id="checkboxinput" name="checkbox">
                    <label for="checkboxinput"></label>
                  </div>
                </div>
              </div>
              <input type="text" class="form-control" name="cycles" id="cycles" aria-label="Text input with checkbox" disabled>
            </div>
          </fieldset>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group" >
                <label for="open_till" > Admin Note</label>
                <textarea class="form-control" name="adminnote"></textarea>
              </div>
            </div>
          </div>
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
              <select class="form-control" onchange="yesnoCheck(this);" name="itemid">

                <option value="0">select item</option>
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
          <span>Show quantity as:</span> <input type="radio" value="1" id="1" class="show_quantity_as" name="show_quantity_as"  checked>
          <label for="1">Qty</label>
          <input type="radio" value="2" id="2" name="show_quantity_as"  >
          <label for="2">Hours</label>
          <input type="radio" id="3" value="3" name="show_quantity_as"  >
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
            <div class="table-responsive" >
              <table class=" table form-table mb-0" id="customFields">
                <thead class="thead-dark">
                  <tr>
                    <th>Item</th>
                    <th>Description</th>
                    <th align="center">Qty</th>
                    <th align="center">Rate</th>
                    <th>Tax</th>
                    <th>Amount</th>
                    <th><i class="bx bxs-cog"></i></th>
                  </tr>
                </thead>
                <tbody class="tbody">


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
              <th><span class="totalam">0.00</span><input type="hidden" name="sub_total" value=""></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td ><div class="row">
                <div class="col-md-7">
                  <span class="bold">Discount</span>
                </div> 
                <div class="col-md-5"><input type="number" value="0" name="discount" id="disc" class="form-control discount">
                </div>
              </div>
            </td>
            <td> <span class="discount_amount">-$0.00</span></td>
          </tr>
          <tr>
            <td ><div class="row">
              <div class="col-md-7">
                <span class="bold">Adjustment</span>
              </div>
              <div class="col-md-5">
                <input type="number" value="0" name="adjustment" class="form-control adjustment">
              </div>
            </div>
          </td>
          <td> <span class="adjustment_amount">$0.00</span></td>
        </tr>
        <tr>
          <td >Total :</td>
          <td class="total"><span class="totalamount">0.00</span><input type="hidden" name="Total" class="discount_total"></td>
        </tr>

      </tbody>
    </table>

  </div>
  <!-- Table head options end -->


</div>
</div>
</div>
</div>
</div>
</section>
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
            <div class="col-md-12">
              <div class="form-group" >
                <label for="open_till" >Client Note</label>
                <textarea class="form-control" name="clientnote"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group" >
                <label for="open_till" >Terms & Conditions</label>
                <textarea class="form-control" name="terms"></textarea>
              </div>
            </div>
          </div>


          <!-- Table head options end -->
          <!-- Table head options start -->
          <button class="btn btn-info" type="" id="save">Save</button> </form>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
</div>
</div>
<!-- END: Content-->
<!-- Create Item Modal -->
<div class="modal fade" id="billing_and_shipping_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">


  <div class="modal-dialog" role="document">
    <div class="modal-content">


      <div class="modal-body">


        <form data-toggle="validator" action="" method="POST">


          <div class="form-group">
            <label class="control-label" for="title">Street:</label>
            <input type="text" name="street" id="billing_street_add" class="form-control" value="<?php echo $invoice->billing_street; ?>" required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="title">City:</label>
            <input type="text" name="city" class="form-control" id="billing_city_add" value="<?php echo $invoice->billing_city; ?>" required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="title">State:</label>
            <input type="text" name="city" class="form-control" id="billing_state_add" value="<?php echo $invoice->billing_state; ?>"  required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="title">Zip Code:</label>
            <input type="text" name="city" class="form-control" id="billing_zip_add" value="<?php echo $invoice->billing_zip; ?>"  required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="title">Country:</label>

            <select id="billing_country_add" class="form-control">
              <option value="0">Nothing selected</option>
              <?php foreach ($country as $key => $value) {
                if ( $value['country_id'] == $invoice->billing_country)
                {
    // Select this city
                  $selectedText = "selected='selected'";
                }
                else
                {
    // Don't select this city
                  $selectedText = "";
                }
                ?>
                <option value="<?php  echo $value['country_id']; ?>" <?php echo  $selectedText; ?>><?php echo $value['short_name']; ?></option>
                <?php 
              } ?>
            </select>
            <div class="help-block with-errors"></div>
          </div>
          <hr>
          <div class="col-md-12">
            <input type="checkbox" name="" class="shipping_address" id="shipping_address">
            <label>Shipping Address</label>
          </div>
          <div id="show_shiiping">
           <div class="col-md-12">
            <input type="checkbox" name="" class="show_shipping_on_invoice" id="show_shipping_on_invoice">
            <label>Show shipping details in invoice</label>
          </div>
          <div class="form-group">
            <label class="control-label" for="title">Street:</label>
            <input type="text" name="street" class="form-control" id="shipping_street_add"  required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="title">City:</label>
            <input type="text" name="city" class="form-control" id="shipping_city_add"  required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="title">State:</label>
            <input type="text" name="city" class="form-control" id="shipping_state_add"  required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="title">Zip Code:</label>
            <input type="text" name="city" class="form-control" id="shipping_zip_add"  required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="title">Country:</label>
            <select id="shipping_country_add" class="form-control">
              <option value="0">Nothing selected</option>
              <?php foreach ($country as $key => $value) {
                if ( $value['country_id'] == $invoice->shipping_country)
                {
    // Select this city
                  $selectedText = "selected='selected'";
                }
                else
                {
    // Don't select this city
                  $selectedText = "";
                }
                ?>
                <option value="<?php  echo $value['country_id']; ?>" <?php echo $selectedText; ?>><?php echo $value['short_name']; ?></option>
                <?php 
              } ?>
            </select>

            <div class="help-block with-errors"></div>
          </div>

          <hr>
        </div>
        <div class="form-group">
          <button type="submit" data-dismiss="modal" class="btn shipping-billing-submit btn-success " id="apply">Apply</button>
        </div>
      </form>
    </div>


  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
  $('[name="checkbox"]').change(function()
  {
    if ($(this).is(':checked',false)) {
           // Do something...
           $("#cycles").prop('disabled', false);
           //alert('You can rock now...');
         };
       });
  
  $('#infinity').hide();
  $('#recurring_type').hide();
  $('#custom_recurring').hide();
  $('#recurring').on('change', function() { 
    if(this.value == 'custom'){
      $('#custom_recurring').show();
      $('#recurring_type').show();
      $('#infinity').show();
    }else if(this.value == 0){
      $('#custom_recurring').hide();
      $('#recurring_type').hide();
      $('#infinity').hide();
    }else if(this.value !=''){
     $('#infinity').show();
     $('#custom_recurring').hide();
     $('#recurring_type').hide();
   }else{
    $('#infinity').hide();
  }
});
// show hide shiiping address modal form
$('#show_shiiping').hide();
$('#shipping_address').on('change', function() {    
  if ($(this).is(":checked")) {
   $('#show_shiiping').show();
 } else {
  $("#show_shiiping").hide();
}

});

// after submit address modal show data in div
$(".shipping-billing-submit").click(function(e){
  var shipping_zip_add = $('#shipping_zip_add').val();
  var shipping_city_add = $('#shipping_city_add').val();
  var shipping_state_add = $('#shipping_state_add').val();
  var shipping_country_add = $('#shipping_country_add').val();
  var shipping_street_add = $('#shipping_street_add').val();
  var billing_zip_add = $('#billing_zip_add').val();
  var billing_city_add = $('#billing_city_add').val();
  var billing_state_add = $('#billing_state_add').val();
  var billing_country_add = $('#billing_country_add').val();
  var billing_street_add = $('#billing_street_add').val();
    //alert(billing_street_add);
    $('.shipping_zip').html(shipping_zip_add);
    $('.shipping_city').html(shipping_city_add);
    $('.shipping_state').html(shipping_state_add);
    if(shipping_country_add !=''){
        //alert(source_show);
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        var dataJson = { [csrfName]: csrfHash,s_c_id:shipping_country_add };

        $.ajax({
          type:'POST',
          url: "<?php echo base_url('admin/InvoiceController/get_country_by_id'); ?>",
          data:dataJson,
          success:function(resp){
           // /alert(resp.iso2);
           var obj = JSON.parse(resp);
           $('.shipping_country').html(obj.iso2);
           $("input[name='shipping_country']").val(obj.country_id);
             //$('.shipping_country').text(obj.country_id);
           }
         });
      }

      $('.shipping_street').html(shipping_street_add);
      $('.billing_zip').html(billing_zip_add);
      $('.billing_city').html(billing_city_add);
      $('.billing_state').html(billing_state_add);

      if(billing_country_add !=''){
        //alert(billing_country_add);
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        var dataJson = { [csrfName]: csrfHash,s_c_id:billing_country_add };

        $.ajax({
          type:'POST',
          url: "<?php echo base_url('admin/InvoiceController/get_country_by_id'); ?>",
          data:dataJson,
          success:function(resp){
           //alert(resp);
           var obj = JSON.parse(resp);
           $('.billing_country').html(obj.iso2);
           $("input[name='billing_country']").val(obj.country_id);

         }
       });
      }
      $('.billing_street').html(billing_street_add);


    });

$("#disc").focusout(function(){
  var discount =  $('#discount_type').val();
  //alert(discount);
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
    url:"<?php echo base_url('admin/QuoteController/getItemDataById'); ?>",
    type:"POST",
    data:dataJson,
    success:function(data)
    {
      data = jQuery.parseJSON(data);
      if ($('#unit'+data.itemid).length>0)
      {
       var qty=$('#unit'+data.itemid).val();
       $('#unit'+data.itemid).val(Number(qty)+1);
       var rate=$('.rate'+data.itemid).val();
       $('.sb'+data.itemid).text(Number(rate)*Number(Number(qty)+1));
       update_amounts();
     }
     else
     {
       addmore_row(data.description,data.long_description,data.unit,data.rate,data.taxid,data.itemid);
     }

        //console.log(data);
      }
    });

 }
}
// 
function addmore_row(description,long_description,unit,rate,taxid,itemid){
  $("#customFields").append('<tr class="after-add-more item"><td > <fieldset class="form-group"><textarea class="form-control " id="description" rows="3" placeholder="Description">'+description+'</textarea><input type="hidden" id="item_id" value="'+itemid+'"/></fieldset></td><td><fieldset class="form-group"><textarea class="form-control" id="long_description" rows="3" placeholder="Long Description">'+long_description+'</textarea></fieldset></td><td><fieldset class="form-group"><input type="number" name="unit" onchange="update_amounts();" data-id='+itemid+' id="unit'+itemid+'" value="1" class="form-control unit"></fieldset></td><td><fieldset class="form-group"><input type="number" value='+rate+'  name="rate" id="rate" onchange="update_amounts();" class="form-control rate rate'+itemid+'" data-id='+itemid+'></fieldset></td><td><fieldset class="form-group"><select name="tax_rate " class="form-control tax" id="tax"><option value="0">No Tax</option><?php foreach ($tax as $key => $value) { ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['taxrate']; ?><span ><?php echo $value['name']; ?></span><input type="hidden"class="tax_name" value="<?php echo $value['name']; ?>"/></option><?php } ?></select></fieldset></td><td ><span class="sub_total sb'+itemid+'" id="total">0.00<span></td><td><a href="javascript:void(0);" class="remCF">Remove</a></td></tr>');
}
$(document).ready(function(){

  $("#customFields").on('click','.remCF',function(){
    $(this).parent().parent().remove();
    update_amounts();
  });


});

$('#unit').change(function() {
  update_amounts();
}); 
$('body').on('change','.rate',function() {
  var id=$(this).data('id');
  var rate=$(this).val();
  var unitval=$('#unit'+id).val();
  $('.sb'+id).text(Number(rate)*Number(unitval));
  update_amounts();
}); $('body').on('change','.unit',function() {
  var id=$(this).data('id');
  var unit=$(this).val();
  var rate=$('.rate'+id).val();
  $('.sb'+id).text(Number(rate)*Number(unit));
  update_amounts();
});

function update_amounts()
{
  var sum = 0;
  $('.sub_total').each(function() {
    sum += parseFloat($(this).text());
  });
    //just update the total to sum  
    //console.log(sum);
    $('.totalam').text(sum);
    //alert(sum);
    var discount_val=$('.discount').val();
    var discount_am=Number(sum)*discount_val/100;
    $('.discount_amount').text(discount_am);
    $('.totalamount').html(Number(sum)-Number(discount_am));
//
var adjustment_val = $('.adjustment').val();
//alert(adjustment_val);
$('.adjustment_amount').text(adjustment_val);
//alert(adjustment_val);
$('.totalamount').html(Number(sum)+Number(adjustment_val));
} 

function ShowModal(elem){
  var dataId = $("#add_more").data("id");
    //alert(dataId);
  }
</script>


<script type="text/javascript">

// save data into database
$(document).on('click','#save',function(e) {
//alert($('#invoice_form').serialize());
var shipping_zip= $('.shipping_zip').text();
alert($('#invoice_form').serialize());
e.preventDefault();

$.ajax({

 type:'POST',
 url: "<?php echo base_url('admin/InvoiceController/insertInvoice'); ?>",
 data:$('#invoice_form').serialize(),
 success: function(res){
   console.log(res);
   alert(res);

          //window.location.href= "<?php echo base_url('admin/invoices'); ?>";
        }
      });
});

</script>
