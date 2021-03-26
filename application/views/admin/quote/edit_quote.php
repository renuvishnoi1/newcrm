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
                                    <form  id="quote_form" >

                                      <div class="row">                                            
                                        <div class="col-md-6 border-right" >
                                            <fieldset class="form-group">
                                                <label for="basicInput">Subject</label>
                                                <input type="text" class="form-control"  name="subject" id="subject" value="<?php echo $quote->subject; ?>">
                                                 <input type="hidden" name="id" value="<?php echo $quote->id; ?>">
                                                <span class="text-danger"><?php echo form_error('subject'); ?></span>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="basicInput">Related To</label>
                                                <select name="rel_type" id="rel_type" class="form-control">
                                                    <option value=""></option>
                                                    <option value="lead" <?php if($quote->rel_type == 'lead'): ?> selected="selected"<?php endif; ?>>Lead</option>
                                                    <option value="customer" <?php if($quote->rel_type == 'customer'): ?> selected="selected"<?php endif; ?>>Customer</option>
                                                </select>
                                                <span class="text-danger"><?php echo form_error('rel_type'); ?></span>

                                            </fieldset>
                                            <fieldset class="form-group" id="lead">
                                                <label for="basicInput" >Lead</label>
                                                <select name="rel_id"  class="form-control rel_id" onchange="leadget(this)">
                                                  <option value="0"></option>
                                                  <?php foreach ($leads as $key => $value) {
                                                   ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?></option><?php 
                                               } ?>

                                           </select>
                                           <span class="text-danger"><?php echo form_error('description'); ?></span>

                                       </fieldset>
                                       <fieldset class="form-group" id="customer">
                                        <label for="basicInput" >Customer</label>
                                        <select name="customer"  class="form-control rel_id" onchange="customerget(this)">
                                            <option value="0"></option>
                                            <?php foreach ($clients as $key => $value) {
                                                ?><option value="<?php  echo $value['userid']; ?>" <?php if($value['userid'] == $quote->rel_id): ?> selected="selected"<?php endif; ?>><?php echo $value['company']; ?></option><?php 
                                           } ?>
                                       </select>
                                       <span class="text-danger"><?php echo form_error('description'); ?></span>

                                   </fieldset>
                                   <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group" ><label for="date" > <small class="req text-danger">* </small>Date</label><div class="input-group date"><input type="date" id="date" value="<?php echo $quote->date ?>"  name="date" class="form-control datepicker"  autocomplete="off"><div >

                                        </div></div></div></div>
                                        <div class="col-md-6">
                                            <div class="form-group" ><label for="open_till" >Open Till</label><div class="input-group date"><input type="date"  name="open_till" id="open_till" class="form-control datepicker" autocomplete="off" value="<?php echo $quote->open_till ?>"><div class="input-group-addon">
                                                <i class="fa fa-calendar calendar-icon"></i>
                                            </div></div></div>                          
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group" ><label for="currency" > <small class="req text-danger">* </small> Currency</label>
                                            <select class="form-control" name="currency" id="currency">
                                                <option value=""></option>
                                                <?php foreach ($currencies as $key => $value) {
                                                 ?><option value="<?php  echo $value['id']; ?>" <?php if($value['id'] == $quote->currency): ?> selected="selected"<?php endif; ?>><?php echo $value['name']; ?></option>
                                                 <?php 
                                             } ?>
                                         </select>
                                     </div></div>
                                     <div class="col-md-6">
                                        <div class="form-group" >
                                            <label for="open_till" >Discount Type</label>
                                            <select class="form-control" id="discount_type" name="discount_type">
                                                <option value=""></option>
                                                <option value="1"  <?php if($quote->discount_type == 1): ?> selected="selected"<?php endif; ?>>Before Tax</option>
                                                <option value="2" <?php if($quote->discount_type == 2): ?> selected="selected"<?php endif; ?>>After Tax</option>
                                            </select>
                                        </div> </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <label for="helpInputTop"> Tags</label>
                                        <select class="form-control select2" name="tag[]" id="tag" multiple>
                                            <option value=""></option>
                                            <?php foreach ($tags as $key => $value) {
                                               ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['name']; ?></option><?php 
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
                                            <option value="6" <?php if($quote->status == 6): ?> selected="selected"<?php endif; ?>> Draft</option>
                                            <option value="4" <?php if($quote->status == 4): ?> selected="selected"<?php endif; ?>>Sent</option>
                                            <option value="1" <?php if($quote->status == 1): ?> selected="selected"<?php endif; ?>>Open</option>
                                            <option value="5" <?php if($quote->status == 5): ?> selected="selected"<?php endif; ?>>Revised</option>
                                            <option value="2" <?php if($quote->status == 2): ?> selected="selected"<?php endif; ?>>Declined</option>
                                            <option value="3" <?php if($quote->status == 3): ?> selected="selected"<?php endif; ?>>Accepted</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" >
                                        <label for="open_till" >Assignee</label>
                                        <select class="form-control" name="assigned" id="assigned">
                                            <option value=""></option>
                                            <?php foreach ($assignee as $key => $value) {
                                               ?><option value="<?php  echo $value['staffid']; ?>" <?php if($value['staffid'] == $quote->assigned): ?> selected="selected"<?php endif; ?>><?php echo $value['firstname']." " .$value['firstname']; ?></option><?php 
                                           } ?>
                                       </select>
                                   </div> 
                               </div>
                           </div>
                           <fieldset class="form-group">
                            <label for="disabledInput">To</label>
                            <input type="text" name="proposal_to" id="to" class="form-control" value="<?php echo $quote->proposal_to; ?>">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="disabledInput">Address</label>
                            <textarea class="form-control" id="address" rows="5" name="address" value="<?php echo $quote->address; ?>"></textarea> 
                        </fieldset>
                        <div class="row">
                         <div class="col-md-6">
                            <div class="form-group" >
                                <label for="open_till" >City</label>
                                <input type="text" name="city" id="city" class="form-control" value="<?php echo $quote->city; ?>">
                            </div> </div>

                            <div class="col-md-6">
                                <div class="form-group" >
                                    <label for="open_till" >State</label>
                                    <input type="text" name="state" id="state" class="form-control" value="<?php echo $quote->state; ?>">
                                </div> </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">
                                <div class="form-group" >
                                    <label for="open_till" >Country</label>
                                    <select class="form-control" id="country" name="country">
                                        <option value="0"></option>
                                        <?php foreach ($country as $key => $value) {
                                           ?>
                                           <option value="<?php  echo $value['country_id']; ?>" <?php if($quote->country ==  $value['country_id']): ?> selected="selected"<?php endif; ?>><?php echo $value['short_name']; ?></option>
                                           <?php 
                                       } ?>

                                   </select>
                               </div> 
                           </div>

                           <div class="col-md-6">
                            <div class="form-group" >
                                <label for="open_till" >Zip Code</label>
                                <input type="text" name="zip" id="zip"  class="form-control" value="<?php echo $quote->zip; ?>">
                            </div> </div>
                        </div>
                        <div class="row">
                         <div class="col-md-6">
                            <div class="form-group" >
                                <label for="open_till" >Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo $quote->email; ?>">
                                <span class="text-danger"></span>
                            </div> 
                        </div>

                        <div class="col-md-6">
                            <div class="form-group" >
                                <label for="open_till" >Phone</label>
                                <input type="text" name="phone" id="phonenumber" class="form-control" value="<?php echo $quote->phone; ?>">
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
                            <select class="form-control" onchange="yesnoCheck(this);" name="itemid">

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
                    <span>Show quantity as:</span> <input type="radio" value="1" id="1" class="show_quantity_as" name="show_quantity_as"  checked>
                    <label for="1">Qty</label>


                    <input type="radio" value="2" id="2" name="show_quantity_as" class="show_quantity_as" >
                    <label for="2">Hours</label>


                    <input type="radio" id="3" value="3" name="show_quantity_as"  class="show_quantity_as">
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
<!-- <table class="form-table" id="customFields">
    <tr valign="top">
        <th scope="row"><label for="customFieldName">Custom Field</label></th>
        <td>
            <input type="text" class="code" id="customFieldName" name="customFieldName[]" value="" placeholder="Input Name" /> &nbsp;
            <input type="text" class="code" id="customFieldValue" name="customFieldValue[]" value="" placeholder="Input Value" /></td><td> &nbsp;
            <a href="javascript:void(0);" class="addCF">Add</a>
        </td>
    </tr>
</table> -->
</div>
<!-- Table head options end -->


</div><button class="btn btn-info" type="" id="save">Save</button> </form>
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
    $("#customFields").append('<tr class="after-add-more item"><td > <fieldset class="form-group"><textarea class="form-control " id="description" rows="3" placeholder="Description">'+description+'</textarea><input type="hidden" id="item_id" value="'+itemid+'"/></fieldset></td><td><fieldset class="form-group"><textarea class="form-control" id="long_description" rows="3" placeholder="Long Description">'+long_description+'</textarea></fieldset></td><td><fieldset class="form-group"><input type="number" name="unit" onchange="update_amounts();" data-id='+itemid+' id="unit'+itemid+'" value="1" class="form-control unit"></fieldset></td><td><fieldset class="form-group"><input type="number" value='+rate+'  name="rate" id="rate" onchange="update_amounts();" class="form-control rate rate'+itemid+'" data-id='+itemid+'></fieldset></td><td><fieldset class="form-group"><select name="tax_rate " class="form-control tax" id="tax"><option>No Tax</option><?php foreach ($tax as $key => $value) { ?><option value="<?php  echo $value['id']; ?>"><?php echo $value['taxrate']; ?><span ><?php echo $value['name']; ?></span><input type="hidden"class="tax_name" value="<?php echo $value['name']; ?>"/></option><?php } ?></select></fieldset></td><td ><span class="sub_total sb'+itemid+'" id="total">0.00<span></td><td><a href="javascript:void(0);" class="remCF">Remove</a></td></tr>');
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
// var $tblrows = $("#customFields tbody tr");
// $tblrows.each(function (index) {
//     var $tblrow = $(this);
//  $tblrow.find('#unit').on('change', function () {


// var qty = $tblrow.find("[name=unit]").val(); alert(qty);
// var price = $tblrow.find("[name=price]").val();
// var subTotal = parseInt(qty,10) * parseFloat(price);
// if (!isNaN(subTotal)) {

//     $tblrow.find('.subtot').val(subTotal.toFixed(2));
//     var grandTotal = 0;

//     $(".subtot").each(function () {
//         var stval = parseFloat($(this).val());
//         grandTotal += isNaN(stval) ? 0 : stval;
//     });

//     $('.grdtot').val(grandTotal.toFixed(2));
// }
// });
// });
function update_amounts()
{
    var sum = 0;
    $('.sub_total').each(function() {
      sum += parseFloat($(this).text());
  });
    //just update the total to sum  
    //console.log(sum);
    $('.totalam').text(sum);
    var discount_val=$('.discount').val();
    var discount_am=Number(sum)*discount_val/100;
    $('.discount_amount').text(discount_am);
    $('.totalamount').html(Number(sum)-Number(discount_am));
//
var adjustment_val = $('.adjustment').val();
$('.adjustment_amount').text(adjustment_val);
$('.totalamount').html(Number(sum)+Number(adjustment_val));
} 

function ShowModal(elem){
    var dataId = $("#add_more").data("id");
    alert(dataId);
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
    url:"<?php echo base_url('admin/QuoteController/getCustomerDataById'); ?>",
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
    url:"<?php echo base_url('admin/QuoteController/getLeadDataById'); ?>",
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
// save data into database
$(document).on('click','#save',function(e) {

    e.preventDefault();
    var rate = $(".rate");
    rateArr= [];
    for(var i = 0; i < rate.length; i++){
        rate1 = $(rate[i]).val();
        rateArr.push(rate1);

    }
    var tax = $(".tax");
    var myarray=[];
    for(var i = 0; i < tax.length; i++){

     tax1 = $(tax[i]).val();
     myarray.push(tax1);
 }


 tagArr = $('select#tag').val()

//alert(tagArr);
var subject= $('#subject').val();
var rel_id = $('.rel_id').val();
var rel_type = $('#rel_type').val();
var assigned = $('#assigned').val();
var date = $('#date').val();
var open_till = $('#open_till').val();
var currency = $('#currency').val();
var discount_type = $('#discount_type').val();
var comments = $('#customSwitch1').val();
var proposal_to = $('#to').val();
var address = $('#address').val();
var city = $('#city').val();
var state = $('#state').val();
var country = $('#country').val();
var zip = $('#zip').val();
var email = $('#email').val();
var phonenumber = $('#phonenumber').val();
var subtotal = $('.totalam').text();
var adjustment = $('.adjustment_amount').text();
var total = $('.totalamount').text();
var itemid = $('#item_id').val();
var taxname = $('.tax_name').val();
//alert(taxname);
var description = $('#description').val();
// alert(description);
var long_description = $('#long_description').val();
var unit = $('.unit').val();



var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

var dataJson = { [csrfName]: csrfHash,subject:subject,rate1: rateArr,tax1:myarray,rel_id:rel_id,rel_type:rel_type,assigned:assigned,date:date,open_till:open_till,currency:currency,discount_type:discount_type,allow_comments:comments,proposal_to:proposal_to,address:address,city:city,state:state,country:country,zip:zip,email:email,phonenumber:phonenumber,subtotal:subtotal,adjustment:adjustment,total:total,itemid:itemid,taxname:taxname, tag :tagArr,description:description,long_description:long_description,unit:unit};
$.ajax({

 type:'POST',
 url: "<?php echo base_url('admin/QuoteController/insertQuote'); ?>",
 data:dataJson,
 success: function(res){
  alert(res);
               //window.location.href= "<?php echo base_url('admin/quote'); ?>";
           }
       });
});

</script>
