$(document).ready(function(){

	document.getElementById('enroll').addEventListener('submit',enroll);

	function outputError(elemId, hintMsg) {
	    document.getElementById(elemId).innerHTML = hintMsg;
	}

	function enroll(e){

		var name = document.getElementById('name').value;
		var phone = document.getElementById('phone').value;
		var edu = document.getElementById('edu').value;
		var courses = document.getElementById('courses').value;
		var sms = document.getElementById('sms').value;

		var nameErr = phoneErr = coursesErr = true;

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

	    if (courses == "") {
	    	outputError("coursesErr","Course ရွေးရန်လိုအပ်ပါသည်");
	    }else{

	    	outputError("coursesErr", "");
	        coursesErr = false;
	    }

		if ((nameErr || phoneErr || coursesErr) == false) {
			
			$.ajax({
				type:"POST",
				url:"process/enroll-process/",
				data:{name:name,phone:phone,edu:edu,courses:courses,sms:sms}
			}).done(function(response_data){
				$('#enroll-success').html('<p class="text-info">' + response_data + '</p>');
				document.getElementById('enroll').reset();
			});
		}

		e.preventDefault();
	}

});