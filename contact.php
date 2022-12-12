<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php 
		$title = "Myanmar Web Share - Contact info & Form";
		$description = "";
		include('pages/header.php'); 
	?>
	<title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
	<script src="js/contact-process.js"></script>
</head>
<body>
	<!-- facebook kid -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=383970225660381&autoLogAppEvents=1"></script>

	<nav class="navbar navbar-expand-md navbar-dark sticky-top">
	    <?php include('pages/nav.php'); ?>
	</nav>
	<!-- end navbar -->

	<div class="contact-bg">
		<img src="img/contact-bg.png" alt="Contact Page Background Image">
		<div class="contact-p">
			<h5 class="animated bounceInLeft delay-2s contact-me">Contact us now</h5>
		</div>
	</div>


	<div class="container contact-info">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 contact-in">
				<h1>Contact us</h1>
				
					<p><i class="fas fa-mobile-alt"></i>09-956294438, 09-964166233</p>
					<p><i class="fas fa-envelope-open-text"></i>info@myanmarwebshare.com</p>
					<p><i class="fas fa-map-marker-alt"></i>အိမ်နံပါတ်(၁၀/၁၀၀)၊ တပ်ဦး၊ ကားကြီးဝင်းအနီး၊ ကလေးမြို့။</p>
					<p><i class="fas fa-map-marked-alt"></i><a href="address/address-map.png" target="_blank">လိပ်စာကို ပုံဖြင့်ကြည့်ရန်</a></p>
			
				<br/>
				
				<h3>Contact Form</h3>
				<p><span class="text-danger">*</span> All fields are required...</p>
				<form id="contactform">
					<div id="response" class="text-center"></div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name" id="name" autocomplete="off">
						<div class="error" id="nameErr"></div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Email" id="email" autocomplete="off">
						<div class="error" id="emailErr"></div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject" id="subject" autocomplete="off">
						<div class="error" id="subjectErr"></div>
					</div>
					<div class="form-group">
						<textarea name="" class="form-control" id="sms" cols="30" rows="10" autocomplete="off" placeholder="Your Message"></textarea>
						<div class="error" id="smsErr"></div>
					</div>
					<button type="submit" class="btn btn-success">Send</button>
				</form>
				
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 contact-in-1">
				<h1>Facebook Page</h1>
				<div class="fb-page" data-href="https://www.facebook.com/Myanmar-Web-Share-337597487076744" data-tabs="timeline" data-width="480" data-height="700" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Myanmar-Web-Share-337597487076744" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Myanmar-Web-Share-337597487076744">Myanmar Web Share</a></blockquote></div>
			</div>
		</div>
	</div>
	<br/>
	<br/>
	<div class="container-fluid contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14669.66158297611!2d94.0269537!3d23.1915275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9808b680802da30!2sMyanmar%20Web%20Share!5e0!3m2!1sen!2smm!4v1567644691577!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>

	<!-- start footer -->
	<?php include('pages/footer.php'); ?>
</body>
</html>