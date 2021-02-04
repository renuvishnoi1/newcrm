<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!--<script src="<?php echo base_url();?>front/js/new_script.js"></script>
<script src="<?php echo base_url();?>front/js/owl.carousel.min.js"></script>-->
<script  src="<?php echo base_url();?>front/js/wow.min.js"></script>
<!--<script  src="<?php echo base_url();?>front/js/jquery.validate.js"></script>-->
<script  src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script  src="<?php echo base_url();?>front/js/jquery.validate.js"></script>
 
<script>
   var preloader = document.getElementById("loading1");
  function myFunction(){
    preloader.style.display = "none"
  }
</script>

<script>
  $(document).ready(function(){
    $("#city").change(function(){
       var city_id = $(this).val(); 
        $.ajax({ 
			type: 'get',
			url:'<?php echo base_url();?>get_area',
            data: {'city_id': city_id },
			success:function(data){
			$('#area').html(data);
				}
        });
    });
}); 
</script>
<script>
$("#user-form").validate({
        rules: {
           name: "required",
		   phone:{
             required:true,
             minlength:10,
             maxlength:10,
             number: true
            },
		  email:{ required: true,email: true},
		  otp: "required",
		  address: "required",
		  city: "required",
		  area: "required",
		  date: "required",
		  address: "required",
        },
         messages: {
         name: "Enter Your Name.",
		 phone: {
            required: "Please Provide A Contact Number.",
            minlength: "Your Mobile Must Be At Least 10 Characters Long."
                },
		  email: {
            required: "Please Email Id.",
            email: "Please Provide Valid Email Id."
                },
		 otp: "Please Provide Otp.",
		 city: "Please Select The City.",
		 area: "Please Select The Area.",
		 date: "Please Select The Date.",
		 address: "Please Enter Your Address.",
                  },
      errorElement : 'div',
      errorElementStyle : 'red',
      errorLabelContainer: '.errorTxt',
	  errorPlacement: function (error, element) { 
      element.css('background', '#ffdddd'); 
      error.insertAfter(element); 
     } ,
});

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

function inputshow(){
	$("#name").show();
	$("#email").show();
	$("#phone").show();
	$("#otp").show();
	$("#city").show();
	$("#area").show();
	$("#address").show();
	$("#date").show();
}
//otp Varification Start
 
$("#phone").keyup(function(){
	$(".error").html("").hide();
	var number = $("#phone").val();
	if (number.length == 10 && number != null) {
		var input = {
			"<?php echo $this->security->get_csrf_token_name(); ?>": "<?php echo $this->security->get_csrf_hash(); ?>",
			"mobile_number" : number,
			"action" : "send_otp"
		};
		$.ajax({
			url : '<?php echo base_url();?>processMobileVerification',
			type : 'POST',
			data : input,
			success : function(response) {
				$(".success").html(response);
				$(".error").html("").hide();
				$("#otp").val('');
				inputshow();
				
			}
		});
	} else {
		$(".error").html('Please Enter A Valid Number!')
		$(".error").show();
		inputshow();
	}
})



$("#otp").keyup(function(){
	var otp = $("#otp").val();
	var input = {
		"<?php echo $this->security->get_csrf_token_name(); ?>": "<?php echo $this->security->get_csrf_hash(); ?>",
		"otp" : otp,
		"action" : "verify_otp"
	};
	if (otp.length == 4 && otp != null) {
		$.ajax({
			url : '<?php echo base_url();?>processMobileVerification',
			type : 'POST',
			dataType : "json",
			data : input,
			success : function(response) {
				$("." + response.type).html(response.message)
				if(response.type=='success'){
				$("." + response.type).show();
				$(".error").hide();
				}
				inputshow();
			},
			error : function() {
			inputshow();
			}
		});
	} else {
		$(".error").html('You Have Entered Wrong OTP.')
		$(".error").show();
		inputshow();
	}
});
//otp Varification End
</script>
<script>
$( "#user-form" ).submit(function( event ) {
	if($('.error').is(":visible")){
	 event.preventDefault();	
	}
  
});
</script>


  </body>
</html>