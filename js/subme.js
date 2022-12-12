$(document).ready(function(){

	// for email subscribe

	document.getElementById('subme').addEventListener('submit',subscribeme);

	function subscribeme(e){
		e.preventDefault();
		var sub_mail = document.getElementById('sub_mail').value;

		$.ajax({
			type:"POST",
			url:"process/subscribe.php/",
			data:{sub_mail:sub_mail}
		}).done(function(submail){
			$('#sub_success').html('<p class="text-success">'+submail+'</p>');
		});
		
	}
});