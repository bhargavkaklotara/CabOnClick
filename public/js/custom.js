$.ajaxSetup({
	headers:{
		'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
	}
});

$(document).ready(function(){
	$("#register_driver").click(function(event){
		event.preventDefault();
		
		$.ajax({
			url:"driver_register/otp",
			type:"post",
			data:$('form').serialize(),
			
			success:function(data){
			var phone = $("#mob").val();		
							if(data){
							var pop = "";
				pop+="<form id='otp_verify-driver'>";
				pop+="<div class='form-group'>";
				pop+="<input type='hidden' name='phone' value='"+phone+"'>";
				pop+="<input type='hidden' name='subject' value='RegisterDriver'>";
				pop+="<input type='text' name='otp' id='otp' class='form-control'>";
				pop+="</div>";
				pop+="<div class='form-group'>";
				pop+="<input type='button' id='submit_driver_otp' class='form-control btn btn-primary' value='submit'>";
				pop+="</div>";
				pop+="</form>";
				$("#pop").html(pop);
				}


			}
		});
	});




$(document).on('click','#submit_driver_otp',function(){
			
	$.ajax({
		type:"POST",
		url:"driver_register/otp_verify",
		data:$("#otp_verify-driver").serialize(),
		success:function(url){
				window.location.replace(url);
				
		}
	})
});

});