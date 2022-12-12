$(document).ready(function(){
	// for web service

	document.getElementById('webservice').addEventListener('submit',webservice);

	function outputError(elemId, hintMsg) {
	    document.getElementById(elemId).innerHTML = hintMsg;
	}

	function webservice(e){
		e.preventDefault();
		var name = document.getElementById('name').value;
		var phone = document.getElementById('phone').value;
		var email = document.getElementById('email').value;
		var company_name = document.getElementById('company_name').value;
		var web_packages = document.getElementById('web_packages').value;
		var web_sms = document.getElementById('web_sms').value;

		var nameErr = phoneErr = emailErr = company_nameErr = web_packagesErr = true;

		// for name
		if (name == "") {
			outputError("nameErr","နာမည်ဖြည့်ရန်လိုအပ်ပါသည်");
		}else{
			var regex = /^[a-zA-Z\s]+$/; 

	       	if(regex.test(name) === false) {

	            outputError("nameErr", "နာမည်မှန်ဖြစ်ရန်လိုပါသည်");
	       
	        } else {

	            outputError("nameErr", "");
	            nameErr = false;
	        }
		}

		// for phone
		if(phone == "") {
	        outputError("phoneErr", "ဖုန်းနံပါတ်လိုအပ်ပါသည်");
	    } else {
	        var regex = /^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,3})|(\(?\d{2,3}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/;
	        if(regex.test(phone) === false || phone.length >13 || phone.length<11) {
	            outputError("phoneErr", "ဖုန်းနံပါတ်မှားယွင်းနေပါသည်");
	        } else{
	            outputError("phoneErr", "");
	            phoneErr = false;
	        }
	    }

	    // for email
		if(email == "") {
	        outputError("emailErr", "မီးလ်ဖြည့်ရန်လိုအပ်ပါသည်");
	    } else {
	        // Regular expression for basic email validation
	        var regex = /^\S+@\S+\.\S+$/;
	        if(regex.test(email) === false) {
	            outputError("emailErr", "မီးလ် မှားယွင်းနေပါသည်");
	        } else{
	            outputError("emailErr", "");
	            emailErr = false;
	        }
	    }


	    if (company_name =="") {
	    	outputError("company_nameErr","Company နာမည်ဖြည့်ရန်လိုအပ်ပါသည်");
	    }else{
	    	outputError("company_nameErr"," ");
	    	company_nameErr=false;
	    }

	    // company_name
	    if (web_packages =="") {
	    	outputError("web_packagesErr","Package ရွေးရန်လိုအပ်ပါသည်");
	    }else{
	    	outputError("web_packagesErr","");
	    	web_packagesErr=false;
	    }

	    if ((nameErr || phoneErr || emailErr || company_nameErr || web_packagesErr) == false) {
	    	$.ajax({
				type:"POST",
				url:"process/web-process/",
				data:{name:name,phone:phone,email:email,company_name:company_name,web_packages:web_packages,web_sms:web_sms}
			}).done(function(web_return){
				$('#web_return').html('<p class="text-success">' + web_return + '</p>');
				document.getElementById('webservice').reset();
			});
	    }

		
	}


	// for seo service

	document.getElementById('seo_form').addEventListener('submit',seoservice);

	function seoservice(e){

		e.preventDefault();

		var name = document.getElementById('sname').value;
		var phone = document.getElementById('sphone').value;
		var email = document.getElementById('semail').value;
		var web_address = document.getElementById('web_address').value;
		var seo_packages = document.getElementById('seo_packages').value;
		var seo_sms = document.getElementById('seo_sms').value;

		var snameErr = sphoneErr = semailErr = web_addressErr = seo_packagesErr =true;

		// for name
		if (name == "") {
			outputError("snameErr","နာမည်ဖြည့်ရန်လိုအပ်ပါသည်");
		}else{
			var regex = /^[a-zA-Z\s]+$/; 

	       	if(regex.test(name) === false) {

	            outputError("snameErr", "နာမည်မှန်ဖြစ်ရန်လိုပါသည်");
	       
	        } else {

	            outputError("snameErr", "");
	            snameErr = false;
	        }
		}

		// for phone
		if(phone == "") {
	        outputError("sphoneErr", "ဖုန်းနံပါတ်လိုအပ်ပါသည်");
	    } else {
	        var regex = /^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,3})|(\(?\d{2,3}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/;
	        if(regex.test(phone) === false || phone.length >13 || phone.length<11) {
	            outputError("sphoneErr", "ဖုန်းနံပါတ်မှားယွင်းနေပါသည်");
	        } else{
	            outputError("sphoneErr", "");
	            sphoneErr = false;
	        }
	    }

		// for email
		if(email == "") {
	        outputError("semailErr", "မီးလ်ဖြည့်ရန်လိုအပ်ပါသည်");
	    } else {
	        // Regular expression for basic email validation
	        var regex = /^\S+@\S+\.\S+$/;
	        if(regex.test(email) === false) {
	            outputError("semailErr", "မီးလ် မှားယွင်းနေပါသည်");
	        } else{
	            outputError("semailErr", "");
	            semailErr = false;
	        }
	    }

	    if (web_address == "") {
	    	outputError("web_addressErr", "Website url ဖြည့်ရန်လိုအပ်ပါသည်");
	    }else{
	    	var regex = /[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi;
	    	if (regex.test(web_address) === false) {
	    		outputError("web_addressErr", "Website url မှားယွင်းနေပါသည်");
	    	}else{
	    		outputError("web_addressErr", "");
	            web_addressErr = false;
	    	}
	    }

	    if (seo_packages == "") {
	    	outputError("seo_packagesErr","Package ရွေးရန်လိုအပ်ပါသည်");
	    }else{
	    	outputError("seo_packagesErr","");
	    	seo_packagesErr=false;
	    }

	    if ((snameErr || sphoneErr || semailErr || web_addressErr || seo_packagesErr) == false) {
	    	$.ajax({
				type:"POST",
				url:"process/seo-process/",
				data:{name:name,phone:phone,email:email,web_address:web_address,seo_packages:seo_packages,seo_sms:seo_sms}
			}).done(function(seo_return){
				$('#seo_return').html('<p class="text-success">' + seo_return +'</p>');
				document.getElementById('seo_form').reset();
			});
	    }
		
	}

	// for facebook
	document.getElementById('fb_form').addEventListener('submit',fbservice);

	function fbservice(e){
		e.preventDefault();

		var name = document.getElementById('fname').value;
		var phone = document.getElementById('fphone').value;
		var email = document.getElementById('femail').value;
		var fb_url = document.getElementById('fb_url').value;
		var fb_packages = document.getElementById('fb_packages').value;
		var fb_sms = document.getElementById('fb_sms').value;

		var fnameErr = fphoneErr = femailErr = fb_urlErr = fb_packagesErr = true;

				// for name
		if (name == "") {
			outputError("fnameErr","နာမည်ဖြည့်ရန်လိုအပ်ပါသည်");
		}else{
			var regex = /^[a-zA-Z\s]+$/; 

	       	if(regex.test(name) === false) {

	            outputError("fnameErr", "နာမည်မှန်ဖြစ်ရန်လိုပါသည်");
	       
	        } else {

	            outputError("fnameErr", "");
	            fnameErr = false;
	        }
		}

		// for phone
		if(phone == "") {
	        outputError("fphoneErr", "ဖုန်းနံပါတ်လိုအပ်ပါသည်");
	    } else {
	        var regex = /^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,3})|(\(?\d{2,3}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/;
	        if(regex.test(phone) === false || phone.length >13 || phone.length<11) {
	            outputError("fphoneErr", "ဖုန်းနံပါတ်မှားယွင်းနေပါသည်");
	        } else{
	            outputError("fphoneErr", "");
	            fphoneErr = false;
	        }
	    }

		// for email
		if(email == "") {
	        outputError("femailErr", "မီးလ်ဖြည့်ရန်လိုအပ်ပါသည်");
	    } else {
	        // Regular expression for basic email validation
	        var regex = /^\S+@\S+\.\S+$/;
	        if(regex.test(email) === false) {
	            outputError("femailErr", "မီးလ် မှားယွင်းနေပါသည်");
	        } else{
	            outputError("femailErr", "");
	            femailErr = false;
	        }
	    }

	    if (fb_url == "") {
	    	outputError("fb_urlErr", "facebook url ဖြည့်ရန်လိုအပ်ပါသည်");
	    }else{
	    	var regex = /[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi;
	    	if (regex.test(fb_url) === false) {
	    		outputError("fb_urlErr", "facebook url မှားယွင်းနေပါသည်");
	    	}else{
	    		outputError("fb_urlErr", "");
	            fb_urlErr = false;
	    	}
	    }

	    if (fb_packages == "") {
	    	outputError("fb_packagesErr","Package ရွေးရန်လိုအပ်ပါသည်");
	    }else{
	    	outputError("fb_packagesErr","");
	    	fb_packagesErr = false;
	    }

	    if ((fnameErr || fphoneErr || femailErr || fb_urlErr || fb_packagesErr)== false) {
	    	$.ajax({
				type:"POST",
				url:"process/fb-process/",
				data:{name:name,phone:phone,email:email,fb_url:fb_url,fb_packages:fb_packages,fb_sms:fb_sms}

			}).done(function(fb_return){
				$('#fb_return').html('<p class="text-success">'+fb_return+'</p>');
				document.getElementById('fb_form').reset();
			});

	    }

	}







});