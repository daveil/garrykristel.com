function request_success(data){
	console.log(data);
	alert(data.message);
	$(".inp-mailer").removeAttr("disabled");
    $(".inp-mailer:not(:last)").val(""); 
}
$( document ).ready(function() {
    $('#submit-email').on('click',function(){
    	$(".inp-mailer").attr("disabled","disabled");
        var ipadd = $('#ipadd').val();
    	var fname = $('#fname').val();
    	var lname = $('#lname').val();
    	var email = $('#email').val();
    	var subject = $('#subject').val();
    	var message = $('#message').val();
        message = message. " from ip: ".ipadd;
    	$.ajax({
    		type: "GET",
    		dataType:"jsonp", 
    		url: "https://script.google.com/macros/s/AKfycbwGlxInDI2-Ue2T8Jpn9BN_MyMKFP56mhnCgC_B7NBf0DZqbL0/exec?prefix=request_success&action=sendrequest&fname="+fname+"&lname="+lname+"&email="+email+"&subject="+subject+"&message="+message, 
		});
    });
});