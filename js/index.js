$(document).ready(function(){
	// for scroll navbar effectsss
	var a = $(".navbar").offset().top;

	$(document).scroll(function(){
	    if($(this).scrollTop() > a)
	    {   
	       $('.navbar').css({"height":"55px"});
	    } else {
	       $('.navbar').css({"height":"65px"});
	    }
	});


});