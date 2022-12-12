
<footer>
	<p>Copyright &copy; <span id="copyright-year"></span> | All Rights Reserved By <span>Myanmar Web Share</span></p>
</footer>

<script>
	var date = new Date();
	var getyear = date.getFullYear();
	document.getElementById('copyright-year').innerHTML = getyear;


	 $('.to-top').click(function() {
	    	$('html, body').animate({scrollTop: 0}, 800);
	  		return false;
	    });
</script>