$(document).ready(function(){
	document.getElementById('contactform').addEventListener('submit',sendmail);

	function outputError(elemId, hintMsg) {
	    document.getElementById(elemId).innerHTML = hintMsg;
	}

	function sendmail(e){
		e.preventDefault();
		var name=document.getElementById('name').value;
		var email=document.getElementById('email').value;
		var subject=document.getElementById('subject').value;
		var sms=document.getElementById('sms').value;
		

		var nameErr = emailErr = subjectErr = smsErr = true;

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

	    // for subject
	    if (subject == "") {
			outputError("subjectErr","Subject ဖြည့်ရန်လိုအပ်ပါသည်");
		}else{
			outputError("subjectErr","");
			subjectErr=false;
		}

		// for sms
		if(sms == "") {
			outputError("smsErr","Message လေးချန်ထားပေးရန်လိုအပ်ပါသည်");
		}else{
			outputError("smsErr","");
			smsErr=false;
		}

		if ((nameErr || emailErr || subjectErr || smsErr) == false) {

			$.ajax({
				type:"POST",
				url:"process/contact-process/",
				data:{name:name,email:email,subject:subject,sms:sms}
			}).done(function(return_data){
				$('#response').html('<small class="text-info">' + return_data + '</small>');
				document.getElementById('contactform').reset();
			});
		}

	}

});